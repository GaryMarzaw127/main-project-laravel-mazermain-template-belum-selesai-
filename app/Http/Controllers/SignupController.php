<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function index() {
        return view('auth.signup', [
            "title" => "Sign up"
        ]);
    }

    public function store(Request $request) {

        // validate merupakan aturan yang diberikan developer
        // kepada user untuk mengikuti aturan tersebut dalam pengisian form
        // required wajib di isi formnya, unique artinya tidak boleh sama dengan isi dari user lain, unique dari tabel users
       $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|unique:users',
            'password' => 'required|min:5|max:255'
       ]);

       // kalau validate method POST tersebut berhasil/lolos maka akan menjalankan yang ada dibawahnya

       //untuk bcrypt password
       $validatedData['password'] = bcrypt($validatedData['password']);

       // diambil dari model user
       User::create($validatedData);

       //$request->session()->flash('success', 'Registrasi Berhasil');

       return redirect('/')->with('success', 'Registrasi Berhasil, Silahkan Login ');
    }
}
