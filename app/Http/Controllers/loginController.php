<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function store(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required'],
            'Password' => ['required'],
        ]);
        
         if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->route('dashboard');
        }
         else {
            return back();
        }

    }
}
