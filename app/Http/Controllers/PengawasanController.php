<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pengawasan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PengawasanController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get pengawasans
        $pengawasans = Pengawasan::latest()->paginate(5);

        //render view with posts
        return view('pengawasans.index', compact('pengawasans'));
    }
    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('pengawasans.create');
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
            'objek' => 'required|min:5',
            'hasil' => 'required|min:5',
            'tindak' => 'required|min:5',
        ]);

        //create post
        Pengawasan::create([
            'objek'     => $request->objek,
            'hasil'     => $request->hasil,
            'tindak'   => $request->tindak,
        ]);

        //redirect to index
        return redirect()->route('pengawasan-insidentil.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $pengawasan = Pengawasan::findOrFail($id);

        //render view with pengawasan
        return view('pengawasans.show', compact('pengawasan'));
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
        $pengawasan = Pengawasan::findOrFail($id);

        //render view with post
        return view('pengawasans.edit', compact('pengawasan'));
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
            'objek' => 'required|min:5',
            'hasil' => 'required|min:5',
            'tindak' => 'required|min:5',
        ]);

        //get post by ID
        $pengawasan = Pengawasan::findOrFail($id);

        // Update the model with the new data
        $pengawasan->update([
            'objek' => $request->objek,
            'hasil' => $request->hasil,
            'tindak' => $request->tindak,
        ]);

        //redirect to index
        return redirect()->route('pengawasan-insidentil.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    /**
     * destroy
     *
     * @param  mixed $pengawasan
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get pengawasan by ID
        $pengawasan = Pengawasan::findOrFail($id);

        //delete post
        $pengawasan->delete();

        //redirect to index
        return redirect()->route('pengawasan-insidentil.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
