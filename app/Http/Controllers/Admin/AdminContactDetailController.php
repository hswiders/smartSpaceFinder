<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminContactDetail;
use Session;
class AdminContactDetailController extends Controller
{
    public function index(Request $request)
    {
       $adminContactDetail = AdminContactDetail::take(1)->first();
       return view('admin.admin-contact', compact('adminContactDetail'));
    }

    public function updateAdminContactDetail(Request $request)
    {
        $this->validate($request,[
             'info_details'=>'required|min:50',
             'address'=>'required|min:20',
             'phone'=> 'required|numeric|digits:10|starts_with: 0,6,7,8,9',
             'email'=>'required|email:rfc,dns',
        ]);
        $check = AdminContactDetail::where('id', $request->id)->take(1)->first();
        if(!$check){
            $run = AdminContactDetail::insert(['info_details'=> $request->info_details, 'address'=> $request->address, 'phone'=> $request->phone, 'email'=> $request->email]);
            Session::flash('success', 'Admin Contact insert successfully!!...');

        }else{
           AdminContactDetail::where('id', $request->id)->update(['info_details'=> $request->info_details, 'address'=> $request->address, 'phone'=> $request->phone, 'email'=> $request->email]);
            Session::flash('success', 'Admin Contact updated successfully!!...');

        }
        echo json_encode(['status'=>1]);
    }
}
