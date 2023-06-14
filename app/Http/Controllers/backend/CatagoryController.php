<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Subcatagory;

class CatagoryController extends Controller
{
    public function catagoryCreate(){
        return view('backend.catagory.create');
    }
    public function catagoryStore(Request $request){
        $this->validate($request,[
            'name'=>'string|required',
            'slug'=>'string',
            'data_target'=>'string|required',
        ]);
        $catagories = new Catagory();
        $catagories->name = $request->name;
        $catagories->slug = str_replace(['-', '_'], '', $request->name);
        $catagories->data_target = $request->data_target;
        $catagories->save();
        return redirect('/catagory/manage')->with('success','success');
    }

    public function catagoryManage(){
        $catagoryes = Catagory::paginate(5);
        return view('backend.catagory.manage',compact('catagoryes'));
    }
    public function catagoryDelete($id){
        $colordelete = Catagory::where("id",$id)->delete();
        $colordelete = Subcatagory::where("catagory_id",$id)->delete();
        return redirect('/catagory/manage');
    }
    public function catagoryEdit($id){
        $catagoryes = Catagory::find($id);
        return view('backend.catagory.edit',compact('catagoryes'));
    }
    public function catagoryUpdate(Request $request,$id){
        $catagories = Catagory::find($id);
        $catagories->name = $request->name;
        $catagories->slug = str_replace(['-', '_'], '', $request->name);
        $catagories->data_target = $request->data_target;
        $catagories->save();
        return redirect('/catagory/manage')->with('success','success');
    }
}
