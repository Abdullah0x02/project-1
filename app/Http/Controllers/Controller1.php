<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class Controller1 extends Controller
{

	public function show()	{
	//	$post=DB::table('test')->where('header',$header)->first();
		
	}
	
/*
	public function signup()	{
		try {
	$username =htmlspecialchars(strip_tags($_POST["username"]));
	$phone =htmlspecialchars(strip_tags($_POST["phone_num"]));
	$pass =htmlspecialchars(strip_tags($_POST["password"]));
	
	if ($username==null ||$phone==null ||$pass==null){
		return json_encode(["status"=>"Null values are not allowed"]);}

		$post=DB::insert('insert into X ( X, X, X) 
		values (?,?,?)',[$username,$phone ,$pass]); 
		//return json_encode(["status"=>"success"]);

		$lastId = DB::getPdo()->lastInsertId();
		if($lastId!=0)
		return json_encode(["status"=>"SUCCESS"]);
		else
		return json_encode(["status"=>"FAIL"]);

	}
	catch(\Exception $exception){
		return json_encode(["status"=>"ERROR"]);
		}
	}

	public function login()	{
		try {
			$phone =htmlspecialchars(strip_tags($_POST["phone_num"]));
			$pass =htmlspecialchars(strip_tags($_POST["password"]));
			
			if ($phone==null ||$pass==null){
				echo json_encode(["status"=>"Null values are not allowed"]);
				return;}
		
				$post=DB::insert('insert into X ( X, X) 
				values (?,?)',[$phone ,$pass]); 
				
				return json_encode(["status"=>"SUCCESS"]);
		
			}
			catch(\Exception $exception){
				return json_encode(["status"=>"ERROR"]);
				}
	}

	public function add()						//3
	{
		try {//VerifyCsrfToken has been disabled

	$s_n=$_POST["s_name"];
	$c_n=$_POST["c_name"];
	$k=$_POST["kind"];
	$manf=$_POST["manufacturer"];
	$q=$_POST["quantity"];
	$date=$_POST["exp_date"];
	$pr=$_POST["price"];

	if ($s_n==null ||$c_n==null ||$k==null||$manf==null||$q==null||$date==null||$pr==null){
	echo 'Null values are not allowed ';
	echo "<h1>";echo '>w<';echo "</h1>";
	 return;}
 
	if ($q<=0||$pr<=0){
	echo 'Enter valid Quantity or Price value >w<';
	 return;}

		$post=DB::insert('insert into drugs ( scientific_name, commercial_name, kind,
		manufacturer,quantity,exp_date,price) 
		values (?,?,?,?,?,?,?)',[$s_n,$c_n ,$k,$manf,$q,$date,$pr]); 
		return 'SUCCESS UwU';
		}


		catch(\Exception $exception){
			echo json_encode(array("status"=>"ERROR"));
			return;
		}
}


public function search(){					//4-5
$k=$_POST["kind"];//$k stands for kind
$c_n=$_POST["commercial_name"];//$c_n stands for commercial_name

if ($k ==null && $c_n ==null)
{echo 'Null values are not allowed >w<'; return;}

$p=DB::select('select * from drugs where kind=?',[$k]); //$p is $k's result
$p1=DB::select('select kind from drugs where commercial_name=?',[$c_n]); //$p1 is $c_n's result

if ($p !=null){
echo "Drugs with this Kind are: ";
echo "<pre>";print_r($p);echo "</pre>";
		return ;}

if ($p1 !=null){
echo "this Drug's KIND is: ";
echo "<pre>";print_r($p1);echo "</pre>";
		return ;}

if ($p ==null && $k !=null)
{echo "No drugs with this kind are Found *PUM* *PUM* >w<";return;}
if ($p1 ==null && $c_n !=null)
{echo "No drugs with this commercial_name are Found *PUM* *PUM* >w<";return;}

}*/

}