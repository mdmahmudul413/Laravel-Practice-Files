<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        echo "Global message is printed in every page";
        if($request->age && $request->age<18){
            return redirect('noaccess');
        }
        if($request->age && $request->age>17){
            return redirect('user');
        }
        return $next($request);
    }
}
