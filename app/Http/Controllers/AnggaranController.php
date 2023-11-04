<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anggaran;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AnggaranController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get anggarans
        $anggarans = Anggaran::latest()->paginate(5);

        //render view with posts
        return view('pages.anggaran', compact('anggarans'));
    }
}
