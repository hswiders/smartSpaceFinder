<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Animities;
use Session;
class AnimitiesController extends Controller
{
    public function index(Request $request)
    {
        $animities = Animities::orderBy('id', 'DESC')->get();
        return view('admin.animities-list', compact('animities'));
    }

    public function addAnimities(Request $request)
    {
       $this->validate($request,[
             'name'=>'required|min:5',
        ]);
       $run = Animities::insert(['name'=> $request->name]);
        Session::flash('success', 'Animity added successfully!!...');
        echo json_encode(['status'=>1]);
    }

    public function updateAnimities(Request $request)
    {
       $this->validate($request,[
             'name'=>'required|min:5',
        ]);
       $run = Animities::where('id', $request->id)->update(['name'=> $request->name]);
        Session::flash('success', 'Animity updated successfully!!...');
        echo json_encode(['status'=>1]);
    }

    public function delAnimities(Request $request)
    {
       $run = Animities::where('id', $request->id)->delete();
        Session::flash('success', 'Animity deleted successfully!!...');
        echo json_encode(['status'=>1]);
    }
}
