<?php

namespace App\Http\Middleware;

use Closure;

class userAuth
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
          if(!$request->session()->has('name')){
                $request->session()->flash('error','Access denied ');
                return redirect('userLogin');
            }

        return $next($request);
    }
}
