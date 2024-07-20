<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\registerRequest;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.signin');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(registerRequest $request): RedirectResponse
    {   
        $credentials = $request->validated();
        $credentials['password'] = Hash::make($request->validated('password'));
        
        $user = User::create($credentials);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('home'));
    }
}
