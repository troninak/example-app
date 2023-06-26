<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            "first_name" => ["required", "string"],
            "surname" => ["required", "string"],
            "phone" => ["required", "digits:11"],
            "password" => ["required"]
        ]);

        $user = User::create([
            "first_name" => $data["first_name"],
            "surname" => $data["surname"],
            "phone" => $data["phone"],
            "password" => bcrypt($data["password"])
        ]);

        if ($user) {
            auth("web")->login($user);
        }

        return redirect(route("home"));
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            "phone" => ["required", "digits:11"],
            "password" => ["required"]
        ]);

        if (auth("web")->attempt($data)) {
            return redirect(route("home"));
        }

        return redirect(route("login"))->withErrors(["phone" => "Пользователь не найден, либо данные не верны!"]);
    }
}
