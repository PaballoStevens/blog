<?php

namespace App\Http\Middleware;

use Closure;

class Blogger
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
        if (\Auth::user()->user_type == 'blogger') {
            return $next($request);
          }else{
            return redirect()->back();
          }
        
    }
}