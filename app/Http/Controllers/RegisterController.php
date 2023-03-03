<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.registration', [
            'title' => 'Registration Page'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:128',
            'email' => 'required|min:3|max:255|unique:users',
            'password' => 'required|min:3|max:255|confirmed',
            'password_confirmation' => 'required|',
            'nik' => 'required|max:20',
            'alamat' => 'required|max:225|string',
            'jk' => 'required|max:20|string',
            'religion' => 'required|max:20|string',
            'tp_lahir' => 'required|max:225|string',
            'tg_lahir' => 'required|max:225',
            'no_hp' => 'required|max:15',
            'th_lulus' => 'required|max:10',
        ]);

        dd('berhasil');
    }
}
