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
            // Get the register to be updated
            $register = User::findOrFail($id);
        
            // Validate the request data
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email,' . $id,
                'password' => 'nullable|min:6',
                'role' => 'required',
            ]);
        
            // Update the register data
            $register->name = $request->name;
            $register->email = $request->email;
        
            if ($request->has('password')) {
                $register->password = Hash::make($request->password);
            }
        
            $register->role = $request->role;
        
            // Save the updated register
            $register->save();
        
            // Redirect back to the index page with a success message
            return redirect()->route('registers.index')->with(['success' => 'Data Berhasil Diperbarui!']);
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
