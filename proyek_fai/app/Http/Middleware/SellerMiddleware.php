<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SellerMiddleware
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
        if (session()->has("login")){
            if (session()->get("login")->role == "SELLER"){
                return $next($request);
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect("/login");
        }

    }
}
