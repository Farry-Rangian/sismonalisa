<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kesimpulan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class KesimpulanController extends Controller
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
                $kesimpulans = Kesimpulan::latest()->paginate(5);
            } else {
                // Jika pengguna bukan admin, ambil data terkait dengan datadesa pengguna
                $datadesa = $user->datadesa;
                $kesimpulans = Kesimpulan::where('datadesa_id', $datadesa->id)
                    ->latest()
                    ->paginate(5);
            }
    
            //render view with posts
            return view('kesimpulans.index', compact('kesimpulans'));
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
            return view('kesimpulans.create',compact('datadesa_id'));
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
                'program' => 'required',
                'anggaran' => 'required',
                'datadesa_id' => 'required',
            ]);
    
            $user = Auth::user();
            //create post
            Kesimpulan::create([
                'program'     => $request->program,
                'anggaran'     => $request->anggaran,
                'datadesa_id' => $user->datadesa->id,
            ]);
    
            //redirect to index
            return redirect()->route('kesimpulan.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
            $kesimpulan = Kesimpulan::findOrFail($id);
    
            //render view with kesimpulan
            return view('kesimpulans.show', compact('kesimpulan'));
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
            $kesimpulan = Kesimpulan::findOrFail($id);
    
            //render view with post
            return view('kesimpulans.edit', compact('kesimpulan'));
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
                'program' => 'required',
                'anggaran' => 'required',
            ]);
    
            //get post by ID
            $kesimpulan = kesimpulan::findOrFail($id);
    
            // Update the model with the new data
            $kesimpulan->update([
                'program'     => $request->program,
                'anggaran'     => $request->anggaran,
            ]);
    
            //redirect to index
            return redirect()->route('kesimpulan.index')->with(['success' => 'Data Berhasil Diubah!']);
        }
        /**
         * destroy
         *
         * @param  mixed $kesimpulan
         * @return void
         */
        public function destroy($id): RedirectResponse
        {
            //get kesimpulan by ID
            $kesimpulan = Kesimpulan::findOrFail($id);
    
            //delete post
            $kesimpulan->delete();
    
            //redirect to index
            return redirect()->route('kesimpulan.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }
    }
