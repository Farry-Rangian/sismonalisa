<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        // echo "Selamat Datang di Halaman Admin";
        // echo "<h1>" . Auth::user()->name."</h1>";
        // echo "<a href='logout'>Logout >></a>";
        return view('index');
    }

    function user()
    {
        // echo "Selamat Datang Operator Desa";
        // echo "<h1>" . Auth::user()->name."</h1>";
        // echo "<a href='logout'>Logout >></a>";
        return view('index');
    }
}
