<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function userList(Request $request)
    {
        $users = User::orderBy('id', 'DESC')->get();
        return view('admin.user-list', compact('users'));
    }
    public function blockUnblock(Request $request)
    {
        $user = User::where('id', Crypt::decryptString($request->id))->take(1)->first();
        if($user->status==0){
            $up['status']=1;
            $status="blocked";
        }else{
            $status="active";
            $up['status']=0;
       }
        $run = User::where('id', Crypt::decryptString($request->id))->update($up);
        return redirect()->back()->withInput()->with('success','User successfully '.$status);

    }
}
