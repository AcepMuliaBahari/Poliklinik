<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
<<<<<<< HEAD
            'username' => ['required', 'string', 'max:255'],
=======
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
<<<<<<< HEAD
            'username'=>$request->username,
=======
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);
<<<<<<< HEAD
        session()->flash('success', 'Pendaftaran berhasil! User Terbuat ');
        return redirect('/');
        // return redirect(RouteServiceProvider::HOME);
=======

        return redirect(RouteServiceProvider::HOME);
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
    }
}
