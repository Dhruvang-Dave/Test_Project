<?php

use App\Models\User;
use App\Models\Post;
use App\Models\catagories;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Http\Controllers\NewController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostCommentsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/allPost', [PostController::class , 'index']); 

Route::get('/', [PostController::class , 'main_page']);

Route::get('/about', 'App\Http\Controllers\NewController@about');

Route::get('/okay/{okay:Slug}', function(Post $okay){

    return view('okay', [
        'okay' => $okay->load('catagories')
    ]);   
});

Route::get('/catagories/{catagories:slug}', function(catagories $catagories){
    // dd( $catagories->posts);
    return view('/posts' , [
        'okay' => $catagories->posts,
        'catagories' => catagories::all()
    ]);
});

Route::get('/welcome', function(){
    return view('welcome');
});

Route::get('/register', [RegisterController::class , 'create'])->middleware('guest');

Route::post('/register', [RegisterController::class , 'store'])->middleware('guest');

Route::post('/logout' , [SessionsController::class , 'destroy'])->middleware('auth');

Route::get('/login' , [SessionsController::class , 'create'])->middleware('guest');

Route::post('/sessions' , [SessionsController::class , 'store']);

Route::post('/okay/{okay:Slug}/comments' , [PostCommentsController::class , 'store']);