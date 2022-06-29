<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostCommentsController extends Controller
{
    public function store(Post $okay, Request $request){

        request()->validate([
            'body' => 'required'
        ]);

        
        // @dd(auth());
        $okay->comments()->create([
            // @dd(request()),
            'user_id' => request()->user()->id,
            'body' => request('body')
        ]);

        return back();
    }
}
