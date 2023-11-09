<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pelaporan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        // Mengambil pengguna yang saat ini login
        $user = Auth::user();

        // Memeriksa peran pengguna
        if ($user->role === 'admin') {
            // Jika pengguna adalah admin, maka ambil semua data
            $pelaporans = Pelaporan::latest()->paginate(5);
        } else {
            // Jika pengguna bukan admin, ambil data terkait dengan datadesa pengguna
            $datadesa = $user->datadesa;
            $pelaporans = Pelaporan::where('datadesa_id', $datadesa->id)
                ->latest()
                ->paginate(5);
        }

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
        $user = Auth::user();
        $datadesa_id = $user->datadesa->id;
        return view('pelaporans.create',compact('datadesa_id'));
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
            'dokumentasi' => 'required',
            'tanggal' => 'required',
            'datadesa_id' => 'required',
        ]);

        // Mengambil pengguna yang sedang login
        $user = Auth::user();

        //create post
        Pelaporan::create([
            'laporan_semester'     => $request->laporan_semester,
            'proposal'     => $request->proposal,
            'kwitansi'   => $request->kwitansi,
            'dokumentasi'   => $request->dokumentasi,
            'tanggal' => $request->tanggal,
            'datadesa_id' => $user->datadesa->id,
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
            'dokumentasi' => 'required',
            'tanggal' => 'required'
        ]);

        //get post by ID
        $pelaporan = Pelaporan::findOrFail($id);

        // Update the model with the new data
        $pelaporan->update([
            'laporan_semester'     => $request->laporan_semester,
            'proposal'     => $request->proposal,
            'kwitansi'   => $request->kwitansi,
            'dokumentasi'   => $request->dokumentasi,
            'tanggal'   => $request->tanggal,
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