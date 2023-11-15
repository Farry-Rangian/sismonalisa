<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        // Mengambil pengguna yang saat ini login
        $user = Auth::user();

        // Memeriksa peran pengguna
        if ($user->role === 'admin') {
            // Jika pengguna adalah admin, maka ambil semua data
            $programs = Program::latest();
        } else {
            // Jika pengguna bukan admin, ambil data terkait dengan datadesa pengguna
            $datadesa = $user->datadesa;
            $programs = Program::where('datadesa_id', $datadesa->id)
                ->latest();
        }
        return view('programs.index', compact('programs'));
    }
    public function getDataBySemester($semester)
    {
        // Ambil data berdasarkan semester (1 atau 2)
        $programs = Program::whereRaw("MONTH(tanggal) " . ($semester == 1 ? "BETWEEN 1 AND 6" : "BETWEEN 7 AND 12"))->get();

        // Memeriksa peran pengguna
        $user = Auth::user();
        if ($user->role === 'admin') {
            // Jika pengguna adalah admin, maka ambil semua data
            $programs = $programs->merge(Program::where('datadesa_id', null)->get());
        } else {
            // Jika pengguna bukan admin, ambil data terkait dengan datadesa pengguna
            $datadesa = $user->datadesa;
            $programs = $programs->filter(function ($program) use ($datadesa) {
                return $program->datadesa_id == $datadesa->id;
            });
        }

        return view('programs.index', compact('programs', 'semester'));
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
        return view('programs.create', compact('datadesa_id'));
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
            'usaha' => 'required|min:5',
            'penyewaan' => 'required',
            'berjalan' => 'required',
            'penjualan' => 'required',
            'tanggal' => 'required',
            'datadesa_id' => 'required',
        ]);

        // Mengambil pengguna yang sedang login
        $user = Auth::user();

        // Membuat program dengan datadesa_id yang sesuai
        Program::create([
            'usaha' => $request->usaha,
            'penyewaan' => $request->penyewaan,
            'berjalan' => $request->berjalan,
            'penjualan' => $request->penjualan,
            'tanggal' => $request->tanggal,
            'datadesa_id' => $user->datadesa->id,
        ]);

        $bulan = date('m', strtotime($request->tanggal));

        //jika bulan termasuk semester 1
        if ($bulan >= 1 && $bulan <= 6) {
            return redirect()->to('realisasi-program/semester/1')->with(['success' => 'Data Berhasil Disimpan!']);
        }
    
        //jika bulan termasuk semester 2
        else {
            return redirect()->to('realisasi-program/semester/2')->with(['success' => 'Data Berhasil Disimpan!']);
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
            'usaha' => 'required|min:5',
            'penyewaan' => 'required',
            'berjalan' => 'required',
            'penjualan' => 'required',
            'tanggal' => 'required'
        ]);

        //get post by ID
        $program = Program::findOrFail($id);

        // Update the model with the new data
        $program->update([
            'usaha'     => $request->usaha,
            'penyewaan'     => $request->penyewaan,
            'berjalan'   => $request->berjalan,
            'penjualan'   => $request->penjualan,
            'tanggal'   => $request->tanggal,
        ]);

        $bulan = date('m', strtotime($request->tanggal));

        //jika bulan termasuk semester 1
        if ($bulan >= 1 && $bulan <= 6) {
            return redirect()->to('realisasi-program/semester/1')->with(['success' => 'Data Berhasil Disimpan!']);
        }
    
        //jika bulan termasuk semester 2
        else {
            return redirect()->to('realisasi-program/semester/2')->with(['success' => 'Data Berhasil Disimpan!']);
        }
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

        return redirect()->back()->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
