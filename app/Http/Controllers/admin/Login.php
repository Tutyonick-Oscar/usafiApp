<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class Login extends Controller
{
    public function login ()
    {
        return view('admin.login');
    }
    public function accessDash ( Request $request )
    {
        $request->validate([
            'name'=> ['required','string'],
            'password' => ['required','min:6','max:8']
        ]);
        $user = User::where('name',$request->name)->first();
        if ($user && $user->is_admin) {
            if (password_verify($request->password,$user->password)) {
                Auth::login($user);
                $request->session()->regenerate();
                session(['is_admin_loged'=>true]);
                return redirect()->intended(route('adminpanel'));
            }
            return back()->withErrors([
                'password' => 'mot de passe incorrect !'
            ]);
        }
        return back()->withErrors([
            'name' => 'seul les admin peuvent effectuer cette requette !'
        ]);
    }
}
