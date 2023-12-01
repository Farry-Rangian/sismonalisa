<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pengawasan;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        $programs = Program::all();
        
        return view('programs.index', compact('programs'));
    }

    function user()
    {
        //get pengawasans
        $pengawasans = Pengawasan::latest()->paginate(5);

        //render view with posts
        return view('pengawasans.index', compact('pengawasans'));
    }
}
