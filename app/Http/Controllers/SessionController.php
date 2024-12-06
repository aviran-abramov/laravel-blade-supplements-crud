<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request): RedirectResponse
    {
        if (!Auth::attempt($request->validated())) {
            return back()->withErrors(['email' => "One of the fields is incorrect. Please try again."]);
        }

        $request->session()->regenerate();
        return to_route('supplements.index');
    }

    public function destroy()
    {
        Auth::logout();

        return to_route('supplements.index');
    }
}
