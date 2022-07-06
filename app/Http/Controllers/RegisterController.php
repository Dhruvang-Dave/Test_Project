<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store(){

        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255',
            'profilePic' => 'image',
        ]);

        if( request()->profilePic ){
            $profilePicPath = request()->file('profilePic')->store('profilePic');
            $attributes['profilePic'] = $profilePicPath;  
        }


        // $attribute['password'] = bcrypt($attribute['password']);

        //dd($attributes);

        $user = User::create($attributes);

        
        auth()->login($user);

        return redirect('/')->with('success', 'Your accout has been created');

    }
}
