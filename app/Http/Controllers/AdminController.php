<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\catagories;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function index(){
        return view('admin.posts.index', [
            'okay' => Post::paginate(),
        ]);
    }

    public function edit(Post $okay){
        return view('admin.posts.edit', [
            'okay' => $okay,
        ]); 
    }

    public function update(Post $okay){
        $attributes = request()->validate([
            'title' => 'required',
            'slug' =>  ['required' , Rule::unique('posts' , 'Slug')->ignore($okay->id)],
            'thumbnail' => 'image',
            // 'slug' =>  'required | unique:posts,Slug',
            'language' => 'required',
            'body' => 'required',
            'catagories_id' => ['required', Rule::exists('catagories', 'id')],
        ]);

        if( request()->thumbnail ){
            $thumbnailPath = request()->file('thumbnail')->store('thumbnail');
        }
        else{
            $thumbnailPath = 'illustration-1.png';
        }

        $attributes['thumbnail'] = $thumbnailPath;   
        $okay->update($attributes);

        return back()->with('success' , 'Post Updated!');
    }

    public function destroy(Post $okay){
        $okay->delete();
        return back()->with('success' , 'Post Deleted!');

    }
}
