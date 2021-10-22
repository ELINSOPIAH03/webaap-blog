<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "title" => "Register",
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|min:3|max:255',//mau pake format ini bisa
            'username'=> ['required', 'min:6', 'max:255', 'unique:users'],//format ini ge bisa
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ]);
        
        //cara satu 
        // $validateData['password'] = bcrypt($validateData['password']);
        
        //cara dua sama caranya supaya passwordnya di hash
        $validateData['password'] = Hash::make($validateData['password']);
        
        //supaya data di atas masuk ke user
        User::create($validateData);

        //ada notif setelah registrasi 
        $request->session()->flash('success', 'Registration successfull ! Please LogIn');

        //supaya setelah login bisa muncul halaman login
        return redirect('/login');
    }
}
