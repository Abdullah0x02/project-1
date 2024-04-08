<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{




    public function admindashboard(){
        return view('admin.index');//admin_dashboard->index
    }

    public function adminlogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    public function adminlogin(){
        return view('admin.admin_login');
    }

    public function adminprofile(){
        $id=Auth::user()->id;//get id of the user who has Auth
        $data=User::find($id);
        return view('admin.admin_profile',compact('data'));//pass $datas data using compact() fun
    }

    public function adminprofileupdate(Request $request){
        $id=Auth::user()->id;//GET id of the user who has Auth
        $data=User::find($id);
        $data->username=$request->username ;//the second username is name attribute in input tag inside form tag
        $data->email=$request->email ;

        //if i want to add password fields(old,new,confirm password) then i use:
        //$request->validate(['name_in_att_in_input_tag'=>'required' ,'the_same'=>'required|confirmed']);
        //if(Hash::check($request->old_pass ,Auth::user()->password)) if typed and stored_in_DB passwords are
        //the same then :

        //User::whereId(auth()->user()->id)->update(['password'=>Hash::make($request->password)]);

        //TO STORE IMG:
        //$file=$request->file('photo');//photo is name attr in input tag on image inside form tag
        //$filename=date('YmdHi').$file->getClientOriginalName();//assign filename to the stored image as
        //current_date.photo_name.extention ,now i want to store it somewhere and assign the file name in DB
        //$file->move(public_path('upload'),$filename);$data['photo']=$filename;

        //in line 37 i GOT data and assigned data to $data var but not to DB so to upload:
        $data->save();
        return redirect()->back();//return to same page
    }
}
