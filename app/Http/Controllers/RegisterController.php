<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register');
    }

    public function register(Request $request)
    {
        $validate =  $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required|min:5',
        ]);

        $validate['password'] = bcrypt($request->password);

        User::create($validate);

        return redirect('/login')->with('success', 'Berhasil, silahkan login!');
    }
}
