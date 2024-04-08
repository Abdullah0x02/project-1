<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyType;
use App\Models\Amenities;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PropertyTypeCon extends Controller
{
    public function alltype(){
        $t=PropertyType::latest()->get();
        return view('type.all_types',compact('t'));
    }

    public function addtype(){
        return view('type.add_types');
    }

    public function storetype(Request $request ){
        $request->validate([
            'type_name'=>'required|unique:property_types|max:200',//unique ty_name value according to prop_ty
            // table in DB and with 200 maxumum characters input 
            'type_icon'=>'required'
        ]);
        PropertyType::insert([
            'type_name'=>$request->type_name,'type_icon'=>$request->type_icon
        ]);
        return redirect()->route('all.types');
    }

    public function edittype($id ){
        $t=PropertyType::findOrFail($id);
        return view('type.edit_types',compact('t'));
    }

    public function updatetype(Request $request ){
      
        $id1=$request->id;
        PropertyType::findOrFail($id1)->update([
            'type_name'=>$request->type_name,'type_icon'=>$request->type_icon
        ]);
        return redirect()->route('all.types');
    }

    public function deltype($id ){
        PropertyType::findOrFail($id)->delete();
        return redirect()->back();
    }






    //for amenitie
    
    public function allamenitie(){
        $t=Amenities::latest()->get();
        return view('amenitie.all_amenities',compact('t'));
    }

    public function addamenitie(){
        return view('amenitie.add_amenitie');
    }

    public function storeamenitie(Request $request ){
        $request->validate([
            'amenities_name'=>'required|unique:amenities|max:200'
            
        ]);
        Amenities::insert([
            'amenities_name'=>$request->amenities_name
        ]);
        return redirect()->route('all.amenities');
    }

    public function editamenitie($id ){
        $t=Amenities::findOrFail($id);
        return view('amenitie.edit_amenitie',compact('t'));
    }

    public function updateamenitie(Request $request ){
      
        $id1=$request->id;
        Amenities::findOrFail($id1)->update([
            'amenities_name'=>$request->amenities_name
        ]);
        return redirect()->route('all.amenities');
    }

    public function delamenitie($id ){
        Amenities::findOrFail($id)->delete();
        return redirect()->back();
    }
 
}
