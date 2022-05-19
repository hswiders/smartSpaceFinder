<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactType;
use App\Models\ContactUs;
use Session;
class ContactController extends Controller
{
    public function contatTypeList(Request $request)
    {
       $contactType = ContactType::orderBy('id', 'DESC')->get();
       return view('admin.contact-type-list', compact('contactType'));
    }

    public function addContactType(Request $request)
    {
       $this->validate($request,[
             'contact_type'=>'required|min:5',
        ]);
       $run = ContactType::insert(['contact_type'=> $request->contact_type]);
        Session::flash('success', 'Contact type add successfully!!...');
        echo json_encode(['status'=>1]);
    }
    

    public function delContatType(Request $request)
    {
       $run = ContactType::where('id', $request->id)->delete();
        Session::flash('success', 'Contact type deleted successfully!!...');
        echo json_encode(['status'=>1]);
    }

    public function updateContactType(Request $request)
    {
       $this->validate($request,[
             'contact_type'=>'required|min:5',
        ]);
       $run = ContactType::where('id', $request->id)->update(['contact_type'=> $request->contact_type]);
        Session::flash('success', 'Contact type updated successfully!!...');
        echo json_encode(['status'=>1]);
    }







    public function contatUsList(Request $request)
    {
       $contactUs = ContactUs::orderBy('id', 'DESC')->get();
       return view('admin.contact-us-list', compact('contactUs'));
    }
}
