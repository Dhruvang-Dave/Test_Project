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

Route::post('newsletter', function(){
    request() ->  validate([
        'email' => 'required | email'
    ]);

    $mailchimp = new \MailchimpMarketing\ApiClient();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us10'
    ]);

    try{
        $response = $mailchimp->lists->addListMember("list_id", [
        "email_address" => request('emails'),
        "status" => "unsubscribed",
        ]);      
    }
    catch(Exception $e){
          throw \Illuminate\Validation\ValidationException::withMessages([
                'email' => 'This email could not be added'
          ]);
    }

    return redirect('/')
            ->with('success' , 'You are all set for our newsletter');

});

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

Route::get('/admin/posts/create' , [PostController::class , 'create'])->middleware('admin');

Route::post('/admin/posts' , [PostController::class , 'store'])->middleware('admin');