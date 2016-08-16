<?php

namespace EditorialWeb\Http\Middleware;

//use Closure;
//use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Authenticate {
    protected $auth;
    public function __construct(Guard $auth){$this->auth = $auth;}
    public function handle($request, Closure $next){return $next($request);}
}


//class Authenticate
//{
//    /**
//     * Handle an incoming request.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \Closure  $next
//     * @param  string|null  $guard
//     * @return mixed
//     */
//    public function handle($request, Closure $next, $guard = null)
//    {
//        if (Auth::guard($guard)->guest()) {
//            if ($request->ajax() || $request->wantsJson()) {
//                return response('Unauthorized.', 401);
//            } else {
//                return redirect()->guest('login');
//            }
//        }
//
//        return $next($request);
//    }
//}
