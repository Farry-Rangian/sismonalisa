<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Keuntungan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        // Mengambil pengguna yang saat ini login
        $user = Auth::user();

        // Memeriksa peran pengguna
        if ($user->role === 'admin') {
            // Jika pengguna adalah admin, maka ambil semua data
            $keuntungans = Keuntungan::latest()->paginate(5);
        } else {
            // Jika pengguna bukan admin, ambil data terkait dengan datadesa pengguna
            $datadesa = $user->datadesa;
            $keuntungans = Keuntungan::where('datadesa_id', $datadesa->id)
                ->latest()
                ->paginate(5);
        }

        //render view with posts
        return view('keuntungans.index', compact('keuntungans'));
    }

    public function getDataBySemester($semester)
    {
        // Ambil data berdasarkan semester (1 atau 2)
        $keuntungans = Keuntungan::whereRaw("MONTH(tanggal) " . ($semester == 1 ? "BETWEEN 1 AND 6" : "BETWEEN 7 AND 12"))->get();

        // Memeriksa peran pengguna
        $user = Auth::user();
        if ($user->role === 'admin') {
            // Jika pengguna adalah admin, maka ambil semua data
            $keuntungans = $keuntungans->merge(keuntungan::where('datadesa_id', null)->get());
        } else {
            // Jika pengguna bukan admin, ambil data terkait dengan datadesa pengguna
            $datadesa = $user->datadesa;
            $keuntungans = $keuntungans->filter(function ($keuntungan) use ($datadesa) {
                return $keuntungan->datadesa_id == $datadesa->id;
            });
        }

        return view('keuntungans.index', compact('keuntungans', 'semester'));
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
        return view('keuntungans.create', compact('datadesa_id'));
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
            'tanggal' => 'required',
            'datadesa_id' => 'required',
        ]);

        // Mengambil pengguna yang sedang login
        $user = Auth::user();

        //create post
        Keuntungan::create([
            'penguatan_modal'     => $request->penguatan_modal,
            'penasihat'     => $request->penasihat,
            'pengawas'   => $request->pengawas,
            'pelaksana'   => $request->pelaksana,
            'anggota'   => $request->anggota,
            'tanggal' => $request->tanggal,
            'datadesa_id' => $user->datadesa->id,
        ]);

        $bulan = date('m', strtotime($request->tanggal));

        //jika bulan termasuk semester 1
        if ($bulan >= 1 && $bulan <= 6) {
            return redirect()->to('pemanfaatan-keuntungan/semester/1')->with(['success' => 'Data Berhasil Disimpan!']);
        }
    
        //jika bulan termasuk semester 2
        else {
            return redirect()->to('pemanfaatan-keuntungan/semester/2')->with(['success' => 'Data Berhasil Disimpan!']);
        }
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
            'tanggal' => 'required'
        ]);

        //get post by ID
        $keuntungan = Keuntungan::findOrFail($id);

        // Update the model with the new data
        $keuntungan->update([
            'penguatan_modal' => $request->penguatan_modal,
            'penasihat' => $request->penasihat,
            'pengawas' => $request->pengawas,
            'pelaksana' => $request->pelaksana,
            'anggota' => $request->anggota,
            'tanggal'   => $request->tanggal,
        ]);

        $bulan = date('m', strtotime($request->tanggal));

        //jika bulan termasuk semester 1
        if ($bulan >= 1 && $bulan <= 6) {
            return redirect()->to('pemanfaatan-keuntungan/semester/1')->with(['success' => 'Data Berhasil Disimpan!']);
        }
    
        //jika bulan termasuk semester 2
        else {
            return redirect()->to('pemanfaatan-keuntungan/semester/2')->with(['success' => 'Data Berhasil Disimpan!']);
        }
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

        return redirect()->back()->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
