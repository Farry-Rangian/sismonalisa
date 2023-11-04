<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anggaran;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

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
        return view('anggarans.index', compact('anggarans'));
    }
    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('anggarans.create');
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
            'jenis_usaha' => 'required|min:5',
            'modal' => 'required|numeric',
            'uang_masuk' => 'required|numeric',
            'uang_keluar' => 'required|numeric',
            'keuntungan' => 'required|numeric',
        ]);

        //create post
        Anggaran::create([
            'jenis_usaha'     => $request->jenis_usaha,
            'modal'     => $request->modal,
            'uang_masuk'   => $request->uang_masuk,
            'uang_keluar'   => $request->uang_keluar,
            'keuntungan'   => $request->keuntungan
        ]);

        //redirect to index
        return redirect()->route('anggarans.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $anggaran = Anggaran::findOrFail($id);

        //render view with anggaran
        return view('anggarans.show', compact('anggaran'));
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
        $anggaran = Anggaran::findOrFail($id);

        //render view with post
        return view('anggarans.edit', compact('anggaran'));
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
            'jenis_usaha' => 'required|min:5',
            'modal' => 'required|numeric',
            'uang_masuk' => 'required|numeric',
            'uang_keluar' => 'required|numeric',
            'keuntungan' => 'required|numeric',
        ]);

        //get post by ID
        $anggaran = Anggaran::findOrFail($id);

        // Update the model with the new data
        $anggaran->update([
            'jenis_usaha' => $request->jenis_usaha,
            'modal' => $request->modal,
            'uang_masuk' => $request->uang_masuk,
            'uang_keluar' => $request->uang_keluar,
            'keuntungan' => $request->keuntungan
        ]);

        //redirect to index
        return redirect()->route('anggarans.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    /**
     * destroy
     *
     * @param  mixed $anggaran
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get anggaran by ID
        $anggaran = Anggaran::findOrFail($id);

        //delete post
        $anggaran->delete();

        //redirect to index
        return redirect()->route('anggarans.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
