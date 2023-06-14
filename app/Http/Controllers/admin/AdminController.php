<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Catagory;
use App\Models\Subcatagory;
use Session;


class AdminController extends Controller
{
    public function frontindex(){
        $catagoryes = Catagory::get();
        $subcatagorys = Subcatagory::with('catagory')->orderby('created_at','desc')->get();
        return view('frontend.master',compact('catagoryes','subcatagorys'));
    }
    public function adminLogin(){
        return view('admin.login');
    }
    public function adminDashboardhere (Request $request){

    $admins =Admin::where('email',$request->email)->first();
        if($admins){
             if(password_verify($request->password,$admins->password)){
                 Session::put('adminsId',$admins->id);
                 Session::put('adminsName',$admins->name);
                 return redirect('/admin/dashboardherea')->with('error','password missmatch');
 
             }
             else{
                 return redirect()->back()->with('error','password miss match');
             }
 
        }
        else{
         return redirect()->back()->with('error','User name user name and password miss match'); 
 
 
     }


    }

    public function adminDashboardherea(){
        return view('backend.master');
    }
}
