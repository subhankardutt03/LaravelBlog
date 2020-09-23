<?php

namespace App\Http\Middleware;

use Closure;

class Admin_auth
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
        if(!$request->session()->has('BLOG_USER_ID')){
            return redirect('/admin/login');
        }
        return $next($request);
    }
}
