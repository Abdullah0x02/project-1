<?php
//php .\artisan make:middleware NAME
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
include "C:\xampp\htdocs\PROJECT\connect.php";
class MiddleWare1
{
		//CheckPH?Phone=X&Password=Y
    public function handle(Request $request, Closure $next, $role): Response  			
    {

        if($request->user()->role !==$role)
        return redirect('dashboard');
		
        return $next($request);
    }
}
