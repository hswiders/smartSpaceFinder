<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use Hash;
use DB;
class User extends Controller
{
     function dashboard()
    {
        $data['user'] = Auth::user();
        $data['phonecode'] =  DB::table('countries')->get();
        return view("frontend/user/dashboard" , $data);
    }
    function verification_pending()
    {
        $data['user'] = Auth::user();
        $data['phonecode'] =  DB::table('countries')->get();
        return view("frontend/user/email-verification" , $data);
    }

    // logout method to clear the sesson of logged in user
    function logout()
    {
        \Auth::logout();
        return redirect("login")->with('success', 'Logout successfully');;
    }
    function doUpdateProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'bio' => 'required',
            
            'address' => 'required',
            

        ]); // create the validations
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
            return response()->json($validator->errors(),422);  
            // validation failed return back to form

        } else {
            //validations are passed, save new user in database
            $User = Auth::user();
            $input = $request->only('first_name','last_name','bio','phone','address');
            $User->first_name = $request->first_name;
            $User->last_name = $request->last_name;
            $User->bio = $request->bio;
            $User->address = $request->address;
            
            $User->save();
            

            return response()->json(["status"=>true,"msg"=>"Your profile has been updated successfully!","redirect_location"=>route("login")]);  
           
        }
    }

    function doChangePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
           'password' => 'required|min:8', // required and number field validation
           'old_password' => 'required',
           'confirm_password' => 'required|same:password',
 
        ]); // create the validations
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
            return response()->json($validator->errors(),422);  
            // validation failed return back to form

        } else {
            //validations are passed, save new user in database
            $User = Auth::user();
            if (Hash::check($request->old_password, $User->password )) 
            {
                
                $User->password = bcrypt($request->password);
                $User->save();
                return response()->json(["status"=>true,"msg"=>"Your Password has been updated successfully!","redirect_location"=>route("login")]);  
            }
            else
            {
                return response()->json(['old_password' => array('Old Password is incorrect')],422);  
            }
            
           
        }
    }

    function doUpdateImage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',

        ]); // create the validations
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
            return response()->json($validator->errors(),422);  
            // validation failed return back to form

        } else {
            //validations are passed, save new user in database
            if($request->file('image')){
                $filename = $request->image->getClientOriginalName();
                $request->image->move(public_path().'/assets/users', $filename);  
                $User = Auth::user();
                
                $User->image = 'assets/users/'.$filename;
                $User->save();
            }
            else
            {
                return response()->json(["image"=>array("image field is required to be image")] ,422);
            }
            

            return response()->json(["status"=>true,"msg"=>"Your profile Image has been updated successfully!","redirect_location"=>route("login")]);  
           
        }
    }
}
