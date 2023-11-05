<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Keuntungan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KeuntunganController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get keuntungans
        $keuntungans = Keuntungan::latest()->paginate(5);

        //render view with posts
        return view('keuntungans.index', compact('keuntungans'));
    }
    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('keuntungans.create');
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
            'penguatan_modal' => 'required|min:5',
            'penasihat' => 'required|min:5',
            'pengawas' => 'required|min:5',
            'pelaksana' => 'required|min:5',
            'anggota' => 'required|min:5',
        ]);

        //create post
        Keuntungan::create([
            'penguatan_modal'     => $request->penguatan_modal,
            'penasihat'     => $request->penasihat,
            'pengawas'   => $request->pengawas,
            'pelaksana'   => $request->pelaksana,
            'anggota'   => $request->anggota
        ]);

        //redirect to index
        return redirect()->route('keuntungans.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $keuntungan = Keuntungan::findOrFail($id);

        //render view with keuntungan
        return view('keuntungans.show', compact('keuntungan'));
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
        $keuntungan = Keuntungan::findOrFail($id);

        //render view with post
        return view('keuntungans.edit', compact('keuntungan'));
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
            'penguatan_modal' => 'required|min:5',
            'penasihat' => 'required|min:5',
            'pengawas' => 'required|min:5',
            'pelaksana' => 'required|min:5',
            'anggota' => 'required|min:5',
        ]);

        //get post by ID
        $keuntungan = Keuntungan::findOrFail($id);

        // Update the model with the new data
        $keuntungan->update([
            'penguatan_modal' => $request->penguatan_modal,
            'penasihat' => $request->penasihat,
            'pengawas' => $request->pengawas,
            'pelaksana' => $request->pelaksana,
            'anggota' => $request->anggota
        ]);

        //redirect to index
        return redirect()->route('keuntungans.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    /**
     * destroy
     *
     * @param  mixed $keuntungan
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get keuntungan by ID
        $keuntungan = Keuntungan::findOrFail($id);

        //delete post
        $keuntungan->delete();

        //redirect to index
        return redirect()->route('keuntungans.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
