<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pembagian;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PembagianController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get pembagians
        $pembagians = Pembagian::latest()->paginate(5);

        //render view with posts
        return view('pembagians.index', compact('pembagians'));
    }
    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('pembagians.create');
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
            'tujuan' => 'required|min:5',
            'jumlah' => 'required|numeric',
            'persen' => 'required|numeric',
            'uraian' => 'required',
        ]);

        //create post
        Pembagian::create([
            'tujuan'     => $request->tujuan,
            'jumlah'     => $request->jumlah,
            'persen'   => $request->persen,
            'uraian'   => $request->uraian,
        ]);

        //redirect to index
        return redirect()->route('pembagian-laba.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $pembagian = Pembagian::findOrFail($id);

        //render view with pembagian
        return view('pembagians.show', compact('pembagian'));
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
        $pembagian = Pembagian::findOrFail($id);

        //render view with post
        return view('pembagians.edit', compact('pembagian'));
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
            'tujuan' => 'required|min:5',
            'jumlah' => 'required|numeric',
            'persen' => 'required|numeric',
            'uraian' => 'required'
        ]);

        //get post by ID
        $pembagian = Pembagian::findOrFail($id);

        // Update the model with the new data
        $pembagian->update([
            'tujuan' => $request->tujuan,
            'jumlah' => $request->jumlah,
            'persen' => $request->persen,
            'uraian' => $request->uraian,
        ]);

        //redirect to index
        return redirect()->route('pembagian-laba.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    /**
     * destroy
     *
     * @param  mixed $pembagian
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get pembagian by ID
        $pembagian = Pembagian::findOrFail($id);

        //delete post
        $pembagian->delete();

        //redirect to index
        return redirect()->route('pembagian-laba.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
