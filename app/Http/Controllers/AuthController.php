<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('main.register');
    }
    public function login()
    {
        return view('main.login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
    public function save(RegisterStoreRequest $request)
    {
        try {
            $data = $request->validated();
            $data['password'] = Hash::make($data['password']);
            User::create($data);
            return redirect()->route('login')->with('success', 'Register add successfully !');;
        }
         catch (\Exception $exception)
        {
             return redirect()->back()->withInput()->with('error', 'Register yaratishda xatolik yuz berdi!');
        }
    }
}
