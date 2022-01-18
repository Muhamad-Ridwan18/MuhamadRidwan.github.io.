<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    
    public function store(request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:150',
            'username' => 'required|max:150|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:50'
        ]);

        // $validateData['password'] = bcrypt($validateData['password']);
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        // $request->session()->flash('success', ('Registrasi success!! Please Login'));
        return redirect('/login')->with('success', ('Registrasi success!! Please Login'));
    } 
}
