<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\ContactUs;
use Validator;
use App\Models\User;
use Auth;
class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function terms()
    {
        return view('frontend.terms');
    }
    public function privacy()
    {
        return view('frontend.privacy');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        $data['contact_type'] =  DB::table('contact_type')->get();
        return view('frontend.contact' , $data);
    }
    function do_contact_us(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'contact_type_id' => 'required',
            'subject' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]); // create the validations
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
            return response()->json($validator->errors(),422);  
            // validation failed return back to form

        } else {
            //validations are passed, save new user in database
           
            $ContactUs = new ContactUs;
            $ContactUs->contact_type_id = $request->contact_type_id;
            $ContactUs->subject = $request->subject;
            $ContactUs->name = $request->name;
            $ContactUs->email = $request->email;
            $ContactUs->phone = $request->phone;
            $ContactUs->message = $request->message;
            $ContactUs->save();
            
            return response()->json(["status"=>true,"msg"=>"Your Contact request has been sent successfuuly we will get back to you soon","redirect_location"=>route("contact")]);
             
           
        }
    }
  public function verify_email($id,$token)
   {
    $true = false;
    if($id && $token){

        $data = User::select('*')->where(array('id'=>$id))->first();
        $redirect = route('login');
        if (Auth::id()) {
            $redirect = route('user.dashboard');
        }
      if($data){
        $data = $data->toArray();
         //print_r($data); die;
        if($data['email_verified'] == 0){
          if($data['token'] == $token){
            
            $user = User::find($id);
            $user['email_verified'] = 1;
            $user['email_verified_at'] = date('Y-m-d');
            $run = $user->save();
            if($run){
              
              return redirect($redirect)->with('msg', '<div class="alert alert-success">Your email has been verified successfully.</div>');
              
            
            }else
            {
              
              return redirect($redirect)->with('msg', '<div class="alert alert-danger">Server not responding, please try again later.</div>');
              
            }
          } else {
            
            return redirect($redirect)->with('msg', '<div class="alert alert-danger">User not authorized or link is expired.</div>');
          }
        } else {
          
          return redirect($redirect)->with('msg', '<div class="alert alert-success">Your account is already verified, You can access your account.</div>');
          
        }
      } else {
        
        return redirect($redirect)->with('msg', '<div class="alert alert-danger">User not authorized or link is expired.</div>');
        
      }
    } else {
      
       return redirect($redirect)->with('msg', '<div class="alert alert-danger">User not authorized or invalid token code.</div>');
      
    }
    
  }
}
