<?php

namespace App\Http\Middleware;

use Closure;
<<<<<<< HEAD
=======
use GuzzleHttp\Psr7\Response;
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
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
<<<<<<< HEAD
            session()->flash('error', 'Log in terlebih dahulu');
=======
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
            return redirect('/login');
        }
    
        $userRole = $request->user()->role;
    
        if (!in_array($userRole, $roles)) {
<<<<<<< HEAD
            
=======
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
            abort(403, 'Unauthorized');
        }
    
        return $next($request);
    }
}
