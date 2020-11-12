<?php

namespace App\Http\Middleware;

use Closure;

class userRestrict
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        
        $data = strtolower($request->name);
        
        
        if($data!== "shohrab")
        {
            die("You are $request->name . You are not alowed");
        }
        return $next($request);
    }
}
