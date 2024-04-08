<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test4 extends Controller
{
	//UPDATE PRODUCT name:
    public function update(Request $req1){
$file='C:\xampp\htdocs\names.json';
$Jfile=file_get_contents($file);
$jArr=json_decode($Jfile,true);
$id=$req1->input('id');
if ($id<0||$id>count($jArr))
return response()->json(['message'=>'not valid id']);
$update=$req1->input('newname');
$jArr[$id-1]['name']=$update;
file_put_contents($file,json_encode(array_values($jArr)));
return response()->json(['message'=>'product $id had his name renewed']);
}

//SHOW PRODUCTS:
public function show(){
$file='C:\xampp\htdocs\names.json';
$Jfile=file_get_contents($file);
$jArr=json_decode($Jfile,true);
return response()->json(['message'=>'SHOW:','data'=>$jArr]);
}

//DELETE bY ID:
public function deletebyid($id){
$file='C:\xampp\htdocs\names.json';
$Jfile=file_get_contents($file);
$jArr=json_decode($Jfile,true);
if ($id<=0||$id>count($jArr))
return response()->json(['message'=>'id not valid']);
unset($jArr[$id-1]);
file_put_contents($file,json_encode(array_values($jArr)));
return response()->json(['message'=>'DELETED']);
}

//CREATE PRODUCT:
public function create(Request $req){
$file='C:\xampp\htdocs\names.json';
$Jfile=file_get_contents($file);
$jArr=json_decode($Jfile,true);
$name=$req->input('name');
$description=$req->input('description');
$price=$req->input('price');
if(!$name||!$description||!$price)
return response()->json(['message'=>'some values hasnt been assigned']);
$product=[
'name'=>$name,'description'=>$description,'price'=>$price,
];
$jArr[]=$product;
file_put_contents($file,json_encode($jArr));
return response()->json(['message'=>'it has been added','data'=>$product]);
}
}
