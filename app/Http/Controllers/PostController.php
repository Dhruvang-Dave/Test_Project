<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\catagories;

class PostController extends Controller
{
    public function index() {

        $okay = Post::all();
        
        // dd($okay);
        return view('/posts', [
            'okay' => Post::latest()->get(),
            'catagories' => catagories::all()
        ]);
    }

    public function main_page() {

        return view('/posts', [
            // $okay = Post::all(),
            'okay' => Post::latest()->filter(request(['search' , 'author'  ]))->get(),
            'catagories' => catagories::all()
        ]);
    }



        // $posts = Post::latest();
        // if(request('search')){
        //     $posts->where('title' ,'like' , '%' . request('search') . '%')
        //             ->orWhere('language' ,'like' , '%' . request('search') . '%');
        // }

        // return $posts->get();
    }
