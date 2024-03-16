<?php

namespace App\Http\Middleware;

use App\Dictionaries\RoleDictionary;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class GoToPageAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->hasRole(RoleDictionary::ADMINISTRATOR)) {
            return redirect()->route('admin.dashboard');
        }
        return $next($request);
    }
}
