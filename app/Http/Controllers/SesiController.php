<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('logiin');
    }
    function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ], [
            'name.required' => 'Username wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'name' => $request->name,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role == 'admin'){
                return redirect('admin');
            } elseif(Auth::user()->role == 'user'){
                return redirect('user');
            }
        }else{
            return redirect('')->withErrors("Username dan password yang dimasukkan tidak sesuai")->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
