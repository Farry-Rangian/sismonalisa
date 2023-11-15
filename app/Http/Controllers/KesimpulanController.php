<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kesimpulan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
            //get kesimpulans
            $kesimpulans = Kesimpulan::latest()->paginate(5);
    
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
            return view('kesimpulans.create');
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
            ]);
    
            //create post
            Kesimpulan::create([
                'program'     => $request->program,
                'anggaran'     => $request->anggaran,
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
