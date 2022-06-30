<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\catagories;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index() {

        // $okay = Post::all();
        
        // dd($okay);
        return view('/posts', [
            'okay' => Post::latest()->get(),
            'catagories' => catagories::all()
        ]);
    }

    public function main_page() {

        return view('/posts', [
            // $okay = Post::all(),
            'okay' => Post::latest()->filter(request(['search' , 'author'  ]))->paginate(3)->withQueryString(),
            'catagories' => catagories::all()
        ]);
    }

    public function create(){

        // if( auth()->guest()){
        //     // abort(403);
        //     abort(Response::HTTP_FORBIDDEN);
        // }

        // if( auth()->user()?->username !== 'Dhruvang'){

        //     abort(Response::HTTP_FORBIDDEN);
        // }

        return view('/create');
    }

    public function store(){
         
        $attributes = request()->validate([
            'title' => 'required',
            'slug' =>  ['required' , Rule::unique('posts' , 'Slug')],
            // 'slug' =>  'required | unique:posts,Slug',
            'language' => 'required',
            'body' => 'required',
            'catagories_id' => ['required', Rule::exists('catagories', 'id')],
        ]);

        // dd($attributes);
        $attributes['user_id'] = auth()->id();

        Post::create($attributes);

        return redirect('/');

    }


        // $posts = Post::latest();
        // if(request('search')){
        //     $posts->where('title' ,'like' , '%' . request('search') . '%')
        //             ->orWhere('language' ,'like' , '%' . request('search') . '%');
        // }

        // return $posts->get();
    }
