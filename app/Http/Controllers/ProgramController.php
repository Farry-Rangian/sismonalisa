<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\RedirectResponse;
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
    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('programs.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'unit_usaha' => 'required|min:5',
            'penyewaan' => 'required',
            'berjalan' => 'required',
            'penjualan' => 'required'
        ]);

        //create post
        Program::create([
            'unit_usaha'     => $request->unit_usaha,
            'penyewaan'     => $request->penyewaan,
            'berjalan'   => $request->berjalan,
            'penjualan'   => $request->penjualan,
        ]);

        //redirect to index
        return redirect()->route('programs.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get post by ID
        $program = Program::findOrFail($id);

        //render view with program
        return view('programs.show', compact('program'));
    }
    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $program = Program::findOrFail($id);

        //render view with post
        return view('programs.edit', compact('program'));
    }
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'unit_usaha' => 'required|min:5',
            'penyewaan' => 'required',
            'berjalan' => 'required',
            'penjualan' => 'required'
        ]);

        //get post by ID
        $program = Program::findOrFail($id);

        // Update the model with the new data
        $program->update([
            'unit_usaha'     => $request->unit_usaha,
            'penyewaan'     => $request->penyewaan,
            'berjalan'   => $request->berjalan,
            'penjualan'   => $request->penjualan,
        ]);

        //redirect to index
        return redirect()->route('programs.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    /**
     * destroy
     *
     * @param  mixed $program
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get program by ID
        $program = Program::findOrFail($id);

        //delete post
        $program->delete();

        //redirect to index
        return redirect()->route('programs.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
