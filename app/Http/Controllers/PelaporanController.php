<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pelaporan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PelaporanController extends Controller
{
/**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get pelaporans
        $pelaporans = Pelaporan::latest()->paginate(5);

        //render view with posts
        return view('pelaporans.index', compact('pelaporans'));
    }
    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('pelaporans.create');
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
            'laporan_semester' => 'required',
            'proposal' => 'required',
            'kwitansi' => 'required',
            'dokumentasi' => 'required'
        ]);

        //create post
        Pelaporan::create([
            'laporan_semester'     => $request->laporan_semester,
            'proposal'     => $request->proposal,
            'kwitansi'   => $request->kwitansi,
            'dokumentasi'   => $request->dokumentasi,
        ]);

        //redirect to index
        return redirect()->route('pelaporans.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $pelaporan = Pelaporan::findOrFail($id);

        //render view with pelaporan
        return view('pelaporans.show', compact('pelaporan'));
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
        $pelaporan = Pelaporan::findOrFail($id);

        //render view with post
        return view('pelaporans.edit', compact('pelaporan'));
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
            'laporan_semester' => 'required',
            'proposal' => 'required',
            'kwitansi' => 'required',
            'dokumentasi' => 'required'
        ]);

        //get post by ID
        $pelaporan = Pelaporan::findOrFail($id);

        // Update the model with the new data
        $pelaporan->update([
            'laporan_semester'     => $request->laporan_semester,
            'proposal'     => $request->proposal,
            'kwitansi'   => $request->kwitansi,
            'dokumentasi'   => $request->dokumentasi,
        ]);

        //redirect to index
        return redirect()->route('pelaporans.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    /**
     * destroy
     *
     * @param  mixed $pelaporan
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get pelaporan by ID
        $pelaporan = Pelaporan::findOrFail($id);

        //delete post
        $pelaporan->delete();

        //redirect to index
        return redirect()->route('pelaporans.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}