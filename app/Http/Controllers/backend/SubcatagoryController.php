<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Subcatagory;

class SubcatagoryController extends Controller
{
    public function subcatagoryCreate(){
        $catagories = Catagory::get();
        return view ('backend.subcatagory.create',compact('catagories'));
    }
    public function subcatagoryStore(Request $request){
        $subcatagories = new Subcatagory();
        $subcatagories->catagory_id = $request->catagory_id;
        $subcatagories->name = $request->name;
        if($request->file('image')){
            $name = time().'.'.$request->image->extension();
            $request->image->move(public_path('/subcatagory/'),$name);
        }
        $subcatagories->price = $request->price;
        $subcatagories->comment = $request->comment;
        $subcatagories->slug = str_replace(['-', '_'], '', $request->name);
        $subcatagories->image = $name;

        $subcatagories->save();
        return redirect()->back()->with('success','success');
    }

    public function subcatagoryManage(){
        $subcatagories = Subcatagory::with('catagory')->orderby('created_at','desc')->paginate(5);
        return view('backend.subcatagory.manage',compact('subcatagories'));
    }

    public function subcatagoryDelete($id){
        $subcatagoryDelete = Subcatagory::find($id);
        $subcatagoryDelete->delete();
        return redirect('/subcatagory/manage')->with('success','success');
    }

    public function subcatagoryEdit($id){
        $subcatagoryEdit = Subcatagory::find($id);
        $catagoryEdit = Catagory::with('subcatagory')->get();
        return view('backend.subcatagory.edit',compact('subcatagoryEdit','catagoryEdit'));
    }

    public function subcatagoryUpdate(Request $request,$id){
        $subcatagories = Subcatagory::find($id);
        if(isset($request->image)){
            if($subcatagories->image && file_exists('/subcatagory/'.$subcatagories->image)){
                unlink('/subcatagory/'.$subcatagories->image);
            }
            $updateImage = time().'.'.$request->image->extension();
            $request->image->move(public_path('/subcatagory/'),$updateImage);
            $subcatagories->image = $updateImage;
        }
        $subcatagories->catagory_id = $request->catagory_id;
        $subcatagories->name = $request->name;
        $subcatagories->price = $request->price;
        $subcatagories->comment = $request->comment;
        $subcatagories->slug = str_replace(['-', '_'], '', $request->name);
        $subcatagories->save();
        return redirect('/subcatagory/manage')->with('success','success');
    }
}
