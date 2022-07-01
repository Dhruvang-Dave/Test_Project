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
            'okay' => Post::latest()->paginate(50)->withQueryString(),
            'catagories' => catagories::all()
        ]);
    }

    public function main_page() {

        return view('/posts', [
            // $okay = Post::all(),
            'okay' => Post::latest()->filter(request(['search' , 'author'  ]))->paginate(6)->withQueryString(),
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

        // $thumbnailPath = request()->file('thumbnail')->store('',  'thumbnail');
        // dd(request()->file('thumbnail'));
        // $attributes = Storage::disk('thumbnail')->store(request()->file('thumbnail'));
        
        // dd(get_class_methods(request()->file('thumbnail')));
        // return 'done' . $thumbnailPath;
        $attributes = request()->validate([
            'title' => 'required',
            'slug' =>  ['required' , Rule::unique('posts' , 'Slug')],
            'thumbnail' => 'image',
            // 'slug' =>  'required | unique:posts,Slug',
            'language' => 'required',
            'body' => 'required',
            'catagories_id' => ['required', Rule::exists('catagories', 'id')],
        ]);
        
        $attributes['user_id'] = auth()->id();
        // dd( request()->thumbnail );
        if( request()->thumbnail ){
            $thumbnailPath = request()->file('thumbnail')->store('thumbnail');
        }
        else{
            $thumbnailPath = 'illustration-1.png';
        }

        $attributes['thumbnail'] = $thumbnailPath;   
        Post::create($attributes);
        //  $post = new Post();
        //  $post->title = $attributes['title'];
        //  $post->save();
        // dd($attributes['catagories_id']);



        //  // dd($attributes);

        // // $post = new Post();
        // // $post->category_id = 'adf;'

        // // $post->save();    
        return redirect('/');
    }
        // $posts = Post::latest();
        // if(request('search')){
        //     $posts->where('title' ,'like' , '%' . request('search') . '%')
        //             ->orWhere('language' ,'like' , '%' . request('search') . '%');
        // }

        // return $posts->get();
    }
