<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use DB;
use Session;
use Twilio\Rest\Client;
class AuthController extends Controller
{
    function loginView()
    {
        return view("frontend/login");
    }

    function forgotView()
    {
        return view("frontend/forgot");
    }

    function registerView()
    {
        $data['phonecode'] =  DB::table('countries')->get();
        return view("frontend/register" , $data);
    }

    function doLogin(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',   // required and email format validation
            'password' => 'required', // required and number field validation

        ]); // create the validations
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
            return response()->json($validator->errors(),422);  
            // validation failed return with 422 status

        } else {
            //validations are passed try login using laravel auth attemp
            if (\Auth::attempt($request->only(["email", "password"]))) {
                return response()->json(["status"=>true,"msg"=>"You are logged in successfully","redirect_location"=>route("user.dashboard")]);
                
            } else {
                return response()->json([["Invalid credentials"]],422);
                
            }
        }
    }
    function doForgot(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',   // required and email format validation

        ]); // create the validations
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
            return response()->json($validator->errors(),422);  
            // validation failed return with 422 status

        } else {
            //validations are passed try login using laravel auth attemp
            $email = $request->email;
            $check = User::select('email')->where('email', $email)->first();
            if ($check) {

                /*Email code goes here*/
                return response()->json(["status"=>true,"msg"=>'Your password has been sent to your registered Email address',"redirect_location"=>route("user.dashboard")]);
                
            } else {
                return response()->json(["email" => array('This email is not registered with us')],422);
                
            }
        }
    }

    function doRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'otp' => 'required',
        ]); // create the validations
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
            return response()->json($validator->errors(),422);  
            // validation failed return back to form

        } else {
            //validations are passed, save new user in database
            $enteredOtp = $request->otp;
            $OTP = Session::get('OTP');
           if($OTP == $enteredOtp)
           {
                $User = new User;
                $User->first_name = $request->first_name;
                $User->last_name = $request->last_name;
                $User->phone = $request->phone;
                $User->phonecode = $request->phonecode;
                $User->phone_verified = 1;
                $User->username = '';
                $User->email = $request->email;
                $User->password = bcrypt($request->password);
                $User->save();
                Session::forget('OTP');
            }
            else
            {
                return response()->json(["otp"=> array("Inavlid OTP")] , 422);  
            }
            if (\Auth::attempt($request->only(["email", "password"]))) {
                return response()->json(["status"=>true,"msg"=>"You have successfully registered, Login to access your dashboard","redirect_location"=>route("user.dashboard")]);
                
            } else {
                return response()->json([["Invalid credentials"]],422);
                
            }
             
           
        }
    }

    function sendOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required|unique:users,phone',
            'phonecode' => 'required',
            'agree_terms' => 'required',
            // 'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',   // required and email format validation
            'password' => 'required|min:8', // required and number field validation
            'confirm_password' => 'required|same:password',

        ]); // create the validations
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
            return response()->json($validator->errors(),422);  
            // validation failed return back to form

        } else 
        {
            $form = '<form class="signin-inner" method="post" id="handleRegisterAjax" action="'.route('do-register').'" name="postform">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <h3>Enter OTP You have received on your mobile number</h3>
                                <div name="0" id="errors-list"></div>
                            </div>
                            <div class="col-12">
                                <label class="single-input-inner style-bg-border">
                                    <input type="number" placeholder="OTP" name="otp" >
                                    '.csrf_field().'
                                </label>
                            </div>
                            <div class="col-12 mb-1">
                                <button type="submit" class="btn btn-base w-100">Submit OTP</button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                    <div class="col-12 mb-1" id="resend_otp">
                                <button type="submit" onclick="resend_otp()" class="btn btn-base w-100">Resend OTP</button>
                            </div>
                    </div>';
            $otp =   $otp = rand(100000, 999999);
            $phone = '+'.$request->phonecode.$request->phone;
            $msg = 'Your Smart Space OTP verification Code is '.$otp;
            if ($request->phone == '8305995193') {
                $this->sendSMS($phone , $msg);
            }
             
            Session::put('OTP', $otp);
            return response()->json(["status"=>true,"otp"=>$otp,"msg"=>"<div class='alert alert-success'>OTP has been sent to your number successfully<div>","form"=>$form]); 
        } 
           
    }
    public function sendSMS($phone , $msg)
    {
        $token = getenv("TWILIO_AUTH_TOKEN");
            $twilio_sid = getenv("TWILIO_SID");
            $client = new Client($twilio_sid, $token);
        
            $status = true;
            
            $encoded = rawurlencode("$phone");
                
                try {
                    $run = $client->messages->create(
                        $phone,
                        array(
                            //'from' => '+14693363784',
                            'from' => getenv("TWILIO_NUMBER"),
                            'body' => $msg
                        )
                    );
                } catch (Twilio\Exceptions\RestException $e) {
                    // echo '<pre>'; print_r($phone); echo '</pre>';
                    // echo '<pre>'; print_r($e); echo '</pre>';
                    // $status = false;
                    return response()->json($e->message,422);  
                }
    }
   // show dashboard
   
}