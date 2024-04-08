<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;use Illuminate\Support\Facades\DB;

class rolecont extends Controller
{
    public function allperm( ){
        $t=Permission::all();//get everything in table permission
        return view('perm.all_perm',compact('t'));
    }

    public function addperm(){
        return view('perm.add_perm');
    }

    public function storeperm(Request $request ){
        Permission::create(['name' => $request->name,'group_name' => $request->group_name]);
        
        return redirect()->route('all.perm');
    }


    public function editperm($id ){
        $t=Permission::findOrFail($id);
        return view('perm.edit_perm',compact('t'));
    }

    public function updateperm(Request $request ){
      
        $id1=$request->id;
        Permission::findOrFail($id1)->update([
            'name'=>$request->name,'group_name'=>$request->group_name
        ]);
        return redirect()->route('all.perm');
    }

    public function delperm($id ){
        Permission::findOrFail($id)->delete();
        return redirect()->back();
    }


    public function allrole( ){
        $t=Role::all();//get everything in table permission
        return view('role.all_role',compact('t'));
    }

    public function addrole(){
        return view('role.add_role');
    }

    public function storerole(Request $request ){
        $request->validate([
            'name'=>'required|unique:roles|max:200'
        ]);
         Role::create(['name' => $request->name]);
        
        return redirect()->route('all.role');
    }

    public function editrole($id ){
        $t=Role::findOrFail($id);
        return view('role.edit_role',compact('t'));
    }

    public function updaterole(Request $request ){
      
        $id1=$request->id;
        Role::findOrFail($id1)->update([
            'name'=>$request->name
        ]);
        return redirect()->route('all.role');
    }


    public function addrinp(){
        $r=Role::all();$p=Permission::all();
        $p_group=User::getPermgroup();
        return view('role.add_rinp',compact('r','p','p_group'));
    }

    public function rpstore(Request $request ){
        $data=array();
        $perm=$request->perm;
        foreach($perm as $key=>$item)
        {$data['role_id']=$request->role_id;
            $data['permission_id']=$item;
            DB::table('role_has_permissions')->insert($data);
        }//admin_profile.blade.php edited on form tag
    }
}
