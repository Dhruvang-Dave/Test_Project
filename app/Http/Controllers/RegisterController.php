<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store(){

        // return request()->all();
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255'
        ]);

        // $attribute['password'] = bcrypt($attribute['password']);

        // dd($attribute);
        $user = User::create($attributes);

        
        auth()->login($user);

        return redirect('/')->with('success', 'Your accout has been created');

    }
}
