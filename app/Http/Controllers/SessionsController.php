<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function destroy(){
        // ddd('Log the user out');
        auth()->logout();

        return redirect('/')->with('success' , 'GoodBye!');
    }

     public function create(){
        return view('session.create');
    }

    public function store(){
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

            if( auth()->attempt($attributes)){
                session()->regenerate();
                return redirect('/')->with('success' , 'Welcome Back!');
            }
            
            throw ValidationException::withMessages([
            'email' => 'Could not verify your credentials'
        ]); 
        // return back()
        //         ->withInput()
        //         ->withErrors(['email' => 'Could not verify your credentials']);

    }
}
