<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegisterController extends Controller
{
    /**
         * index
         *
         * @return View
         */
        public function index(): View
        {
            //get registers
            $registers = User::all();
    
            //render view with posts
            return view('registers.index', compact('registers'));
        }
        /**
         * create
         *
         * @return View
         */
        public function create(): View
        {
            return view('registers.create');
        }
    
        /**
         * store
         *
         * @param  mixed $request
         * @return RedirectResponse
         */
        public function store(Request $request)
        {
            // dd($request->all());
            $request->validate([
                'name' => 'required|unique:users,name',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6',
                'role' => 'required',
            ]);

            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['password'] = Hash::make($request->password); 
            $data['role'] = $request->role;

            User::create($data);

            // $data = [
            //     'email'     => $request->email,
            //     'password'     => $request->password,
            //     'role'     => $request->role,
            // ];

            // dd('setelah validasi');
            // User::create([
            //     'name' => $request->name,
            //     'email' => $request->email,
            //     'role' => $request->role,
            //     'password' => bcrypt($request->password)
            // ]);
            // dd('setelah create');
    
            return redirect()->route('registers.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
            $register = User::findOrFail($id);
    
            //render view with register
            return view('registers.show', compact('register'));
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
            $register = User::findOrFail($id);
    
            //render view with post
            return view('registers.edit', compact('register'));
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
            $request->validate([
                'name' => 'required|unique:users',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed|min:6',
                'role' => 'required',
            ], [
                'name.required' => 'Nama wajib diisi',
                'name.unique' => 'Nama sudah digunakan',
                'email.required' => 'Email wajib diisi',
                'email.email' => 'Email tidak valid',
                'email.unique' => 'Email sudah digunakan',
                'password.required' => 'Password wajib diisi',
                'password.confirmed' => 'Password tidak sama',
                'password.min' => 'Password minimal 6 karakter',
                'role.required' => 'role wajib diisi',
            ]);
    
            //get post by ID
            $register = User::findOrFail($id);
    
            // Update the model with the new data
            $register->update([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
                'password' => bcrypt($request->password)
            ]);
    
            //redirect to index
            return redirect()->route('registers.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }
        /**
         * destroy
         *
         * @param  mixed $register
         * @return void
         */
        public function destroy($id): RedirectResponse
        {
            //get register by ID
            $register = User::findOrFail($id);
    
            //delete post
            $register->delete();
    
            //redirect to index
            return redirect()->route('registers.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }
}
