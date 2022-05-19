<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Requests\ChangePaswordRequest;
use App\Models\Admin;
use Session;
use Hash;
class AuthController extends Controller
{
    
    public function login()
    {
        if(Auth::guard('admin')->check()){
            return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
        }else{
            return view('admin.login');
        }
    }

    public function authenticateAdmin(AdminLoginRequest $request)
    {
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
        }else{
            return redirect()->back()->withInput()->with('error','Permission denied');
        }
    }

    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin');
    }

    public function editProfile(Request $request)
    {
        return view('admin.profile');
    }

    public function updateProfile(UpdateProfileRequest $request)
    {      
       
        $run = Admin::where(['id'=>Auth::guard('admin')->user()->id])->update(['name'=>$request->name, 'email'=>$request->email]);
        if($run){
            $json['status']=1;
            Session::flash('success', 'Profile has been updated successfully'); 
        }else{
            $json['status']=0;
            Session::flash('error', "Something went wrong, Might be this profile doesn't exists.");
        }
        echo json_encode($json);
    }

    public function updatePassword(ChangePaswordRequest $request)
    {      
       
        if(Hash::check($request->old_password, Auth::guard('admin')->user()->password)){
            $run = Admin::where(['id'=>Auth::guard('admin')->user()->id])->update(['password'=>Hash::make($request->password)]);
            if($run){
                $json['status']=1;
                Session::flash('success', 'Profile has been updated successfully'); 
            }else{
                $json['status']=0;
                Session::flash('error', "Something went wrong, Might be this profile doesn't exists.");
            }
        }else{
            $json['status']=0;
            Session::flash('error', "Your old password doesn't match!!...");
        }
        echo json_encode($json);
    }

}
