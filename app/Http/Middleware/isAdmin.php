<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public $allowedUserRoleIds = [1, 2];

    public function handle(Request $request, Closure $next): Response
    {
        if ( !empty(Auth::user()) &&  in_array(Auth::user()->user_role_id, $this->allowedUserRoleIds) ) {
            return $next($request);
        }else{
            return redirect()->back();
        }
    }
}
