<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if(Auth::check()){
            if(Auth::user()->role == 'admin'){
                return $next($request);
            }else{
                Auth::logout();

                session()->flash('type','danger');
                session()->flash('message','Sorry You are not Admin.');
                return redirect()->route('admin.login');
            }
        }else{
            return \redirect()->route('admin.login');
        }
    }
}
