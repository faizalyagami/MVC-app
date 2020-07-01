<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view ('home');
    }

    public function store(Request $request) {
        welcome::create($request->all());
        return redirect('/welcome');
    }

    public function register() {
        return view('register');
        
    }
    public function welcome() {
        return redirect('welcome');
    }
}
