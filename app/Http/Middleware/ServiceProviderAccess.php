<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceProviderAccess
{
    public function handle(Request $request, Closure $next)
    {
        
        if (Auth::check() && Auth::user()->role === 'service_provider') {
            return $next($request); 
          
        }

 
        return redirect()->route('backend.dashboard')->with('error', 'Access denied.');
    }
}
