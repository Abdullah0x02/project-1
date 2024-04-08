<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test4;
use App\Http\Controllers\Controller1;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/signup',[Controller1::class,'signup']);            //1
Route::post('/login',[Controller1::class,'login']);            //2
Route::post('/add_drug',[Controller1::class,'add']);            //3
Route::post('/search',[Controller1::class,'search']);           //4-5





