<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use DB;
use Session;
class PropertyController extends Controller
{
    public function propertyList(Request $request)
    {
        $property = Property::orderBy('id', 'DESC')->get();
        return view('admin.property-list', compact('property'));
    }

    public function addProperty(Request $request)
    {
        return view('admin.add-property');
    }

    public function makeFeatured(Request $request)
    {
        $property = Property::where('id', $request->id)->take(1)->first();
        if($property->is_featured==0){
            $up['is_featured']=1;
        }else{
            $up['is_featured']=0;
       }
        $run = Property::where('id', $request->id)->update($up);
        Session::flash('success','Update property featured successfully');
        echo json_encode(['status'=>1]);

    }
}
