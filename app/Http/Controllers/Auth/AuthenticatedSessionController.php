<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

<<<<<<< HEAD
        $url = '';
        if($request->user()->role === 'admin'){
            $url = '/';
        } elseif($request->user()->role === 'member'){
            $url = '/';
        } 
        elseif($request->user()->role === 'user'){
            $url = '/';
        }
        session()->flash('success', 'Log In Sucess ');
        return redirect()->intended($url);
=======
         $url = '';
        if($request->user()->role === 'admin'){
            $url = '/home';
        } elseif($request->user()->role === 'member'){
            $url = '/home';
        } 
        elseif($request->user()->role === 'user'){
            $url = '/dashboard';}
        return redirect()->intended($url);
        

       
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
<<<<<<< HEAD
        session()->flash('success', 'Log Out Sucess ');

        return redirect('/');
=======

        return redirect('/login');
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
    }
}
