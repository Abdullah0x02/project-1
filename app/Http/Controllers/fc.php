<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class fc extends Controller
{
    //end_point_1:
	public function capitalNames(){
		$Carray=[];
		$Jfile=file_get_contents(public_path('users.json'));
		$jArray=json_decode($Jfile,true);
		foreach ($jArray as $users){
		foreach ($users as $user){
			$userName=$user["Name"];
			$userName=strtoupper($userName);
			array_push($Carray,$userName);
		}}
		return response() ->json (["message"=>$Carray]);
	}
	//end_point_2:
	public function t2(){
		$a=request()->query('mailorphone');
		$Jfile2=file_get_contents(public_path('users.json'));
		$jArray2=json_decode($Jfile2,true);
		foreach ($jArray2 as $users){
		foreach ($users as $user){
		if ($user['Mail']==$a || $user['Phone']==$a)
		return response()->json (['message'=>'SUCCESS']);
		
	}
	}
		return response()->json (['message'=>"not found"]);
		
	}
}
