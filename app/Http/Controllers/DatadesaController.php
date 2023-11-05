<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Datadesa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DatadesaController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get datadesas
        $datadesas = Datadesa::latest()->paginate(5);

        //render view with posts
        return view('datadesas.index', compact('datadesas'));
    }
    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('datadesas.create');
    }
}
