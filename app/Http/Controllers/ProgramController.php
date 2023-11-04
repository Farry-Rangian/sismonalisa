<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProgramController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get programs
        $programs = Program::latest()->paginate(5);

        //render view with posts
        return view('programs.index', compact('programs'));
    }
}
