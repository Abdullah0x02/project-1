<?php

namespace App\Http\Controllers;

use App\Models\PropertyType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TestCon extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login1');
       // return "بسم الله";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('signup1');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required','unique:'.User::class,'max:30'],
            'username'=>['required','unique:'.User::class,'max:30'],
            'email'=>['required','unique:'.User::class,'max:30'],
            'password'=>['required','max:30'],'password1'=>['required','max:30'],
        ]);
        if ($request->password==$request->password1){
        User::create([
            'name'=>$request->name,
            'username'=>$request->username,'email'=>$request->email,'password'=>$request->password
        ]);
        return redirect('/test');
        }
        else
            return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
