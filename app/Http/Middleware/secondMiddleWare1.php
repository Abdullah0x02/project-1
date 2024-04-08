<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class secondMiddleWare1
{
  
    public function handle(Request $request, Closure $next): Response  			//2
    {
		$valid=false;
		$error=false;
		//$pr=$request->route('id');	the same like request->input('x') but x here is from header not from body
		try {
			$js=request()->query('Phone');
			$js1=request()->query('Password');
			$fileP='C:\xampp\htdocs\users.json';
			$file=file_get_contents($fileP);
			$arrfile=json_decode($file,true);
			if (!$js||!$js1)
				$error=true;
			for ($i=0;$i<count($arrfile);$i++)
			{	
			  if ($arrfile[$i]['Phone']==$js && $arrfile[$i]['Password']==$js1){ 
					$valid=true;
				    break;}	
		    }
		}
		catch (\Exception $exception){$error=true;}
		if ($error)
			return response()->json(['message'=>'ERROR in phone num or password!']);
		
		if (!$valid)
			return response()->json(['message'=>'phone num or password is not correct']);
		
        return $next($request);
    }
}
