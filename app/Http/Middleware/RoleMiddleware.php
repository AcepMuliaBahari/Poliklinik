<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles )
    {
        
        if (!$request->user()) {
            session()->flash('error', 'Log in terlebih dahulu');
            return redirect('/login');
        }
    
        $userRole = $request->user()->role;
    
        if (!in_array($userRole, $roles)) {
            
            abort(403, 'Unauthorized');
        }
    
        return $next($request);
    }
}
