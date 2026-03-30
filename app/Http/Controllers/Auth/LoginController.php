<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        if (! auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('status', __('auth.failed'));
        }

        return redirect()->route('dashboard');
    }
}
