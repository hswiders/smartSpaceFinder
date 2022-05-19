<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plans;
use App\Models\Addons;
use Session;

class PlansController extends Controller
{
    public function index(Request $request)
    {
        $plans = Plans::orderBy('id', 'DESC')->get();
        $addons = Addons::select('name', 'id as addon_id')->orderBy('id', 'DESC')->get();

        return view('admin.plans-list', compact('plans', 'addons'));
    }


    public function updatePlans(Request $request)
    {
        $up['name']=$request->name;
        $up['price']=(!empty($request->price))? $request->price :0; 
        $up['description']=$request->description;
        $up['number_of_property']=(!empty($request->number_of_property))? $request->number_of_property :0;
        $up['addonId']= (!empty($request->addon_id))? implode(',', $request->addon_id):'';
        Plans::where('id', $request->id)->update($up);
        Session::flash('success', 'Plan Updated successfully!!...');
        echo json_encode(['status'=>1]);
    }
}
