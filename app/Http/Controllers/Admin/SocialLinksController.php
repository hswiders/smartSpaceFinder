<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialLinks;
use Session;
class SocialLinksController extends Controller
{
    public function index(Request $request)
    {
       $adminSocialLinks= SocialLinks::take(1)->first();
       return view('admin.admin-social', compact('adminSocialLinks'));
    }


    public function updateSocialLinks(Request $request)
    {
        $this->validate($request,[
             'facebook'=>'required',
             'youtube'=>'required',
             'instagram'=>'required'
        ]);
        $check = SocialLinks::where('id', $request->id)->take(1)->first();
        if(!$check){
            $run = SocialLinks::insert(['facebook'=> $request->facebook, 'youtube'=> $request->youtube, 'instagram'=> $request->instagram]);
            Session::flash('success', 'Admin social detail insert successfully!!...');

        }else{
           SocialLinks::where('id', $request->id)->update(['facebook'=> $request->facebook, 'youtube'=> $request->youtube, 'instagram'=> $request->instagram]);
            Session::flash('success', 'Admin social detail updated successfully!!...');

        }
        echo json_encode(['status'=>1]);
    }
}
