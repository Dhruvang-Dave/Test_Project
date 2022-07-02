<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class AdminController extends Controller
{
    public function index(){
        return view('admin.posts.index', [
            'okay' => Post::paginate(),
        ]);
    }
}
