<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Addons;
use Session;
class AddonsController extends Controller
{
    public function index(Request $request)
    {
        $addons = Addons::orderBy('id', 'DESC')->get();
        return view('admin.addons-list', compact('addons'));
    }

    public function updateAddons(Request $request)
    {
        $this->validate($request,[
             'name'=>'required|min:5',
        ]);
        if(!empty($request->name)){
            $up['name']= $request->name;
        }
        // if(!empty($request->number_of_property)){
        //     $up['number_of_property']= $request->number_of_property;
        // }
        // if(!empty($request->email_notification)){
        //     $up['email_notification']= $request->email_notification;
        // }else{
        //     $up['email_notification']=0;
        // }
        // if(!empty($request->number_of_email_notification)){
        //     $up['number_of_email_notification']= $request->number_of_email_notification;
        // }else{
        //     $up['number_of_email_notification']=0;
        // }
        // if(!empty($request->sms_notfication)){
        //     $up['sms_notfication']= $request->sms_notfication;
        // }else{
        //     $up['sms_notfication']=0;
        // }
        // if(!empty($request->number_of_sms_notfication)){
        //     $up['number_of_sms_notfication']= $request->number_of_sms_notfication;
        // }else{
        //     $up['number_of_sms_notfication']=0;
        // }

        $run = Addons::where('id', $request->id)->update($up);
        Session::flash('success', 'Addons Updated successfully!!...');
        echo json_encode(['status'=>1]);
    }
}
