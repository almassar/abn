<?php

namespace App\Http\Middleware;

use App\Modules\Users\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        if (Auth::check() && Auth::user()->role_id == User::ROLE_ADMIN) {
            return $next($request);
        }

        return redirect('admin/login');
    }
}
