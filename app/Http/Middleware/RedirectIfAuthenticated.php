<?php

namespace EditorialWeb\Http\Middleware;

//use Closure;
//use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\RedirectResponse;
class RedirectIfAuthenticated {
	protected $auth;
	public function __construct(Guard $auth){$this->auth = $auth;}
	public function handle($request, Closure $next){
		if ($this->auth->check()){
			return new RedirectResponse(url('/validado'));
		}
		return $next($request);
	}
}
//class RedirectIfAuthenticated{
//    public function handle($request, Closure $next, $guard = null)
//    {
//        if (Auth::guard($guard)->check()) {
//            return redirect('/');
//        }
//
//        return $next($request);
//    }
//}
