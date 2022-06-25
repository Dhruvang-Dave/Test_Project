<?php

use App\Models\User;
use App\Models\Post;
use App\Models\catagories;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Http\Controllers\NewController;
use App\Http\Controllers\PostController;


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

    // $okay = collect(File::files(resource_path("/post")))
    //     -> map(function ($file){
    //        return  $document = YamlFrontMatter::parseFile($file);
    //     })
    //     -> map (function ($document) {
    //        return new Okay(
    //            $document->title,
    //            $document->language,
    //            $document->date,
    //            $document->body(),
    //            $document->slug
    //        );
    //    });
    // $okay = array_map(function($file){
    //     $document = YamlFrontMatter::parseFile($file);
    //     return new Okay(
    //         $document->title,
    //         $document->language,
    //         $document->date,
    //         $document->body(),
    //         $document->slug
    //     );
    // } , $files);

    // foreach ($files as $file):
    //     $document = YamlFrontMatter::parseFile($file);
    //     $okay[] = new Okay(
    //         $document->title,
    //         $document->language,
    //         $document->date,
    //         $document->body(),
    //         $document->slug
    //     );
    
    // endforeach;


// Route::get('/about', function(){
//     return view('about');
// });

// Route::post('/okay', function(){
//     return view('okay');
// });

Route::get('/', [PostController::class , 'main_page']);

Route::get('/about', 'App\Http\Controllers\NewController@about');

// Route::get('/', function(){
//     return view('okay');
//     // $path = __DIR__ . "../resources/views/Home";

//     // if(! file_exists($path)){
//     //     echo "File not found";
//     // }
// });

Route::get('/okay/{okay:Slug}', function(Post $okay){


    // $okay = Post::findOrFail($id); // Okay is somewhat like a model
// dd(get_class_methods($okay), $okay->with('catagories')->get() );

    return view('okay', [
        'okay' => $okay->load('catagories')
    ]);   
});



// Route::get('/posts', function(){
//     // $posts = Okay::all();
    
//     return view('posts', [
//         'okay' => Post::all()
//     ]);
// });

Route::get('/catagories/{catagories:slug}', function(catagories $catagories){
    // dd( $catagories->posts);
    return view('/posts' , [
        'okay' => $catagories->posts,
        'catagories' => catagories::all()
    ]);
});


// Route::get('/authors/{author:username}', function(User $author){
//     // dd( $catagories->posts);
//     // dd( $author);

//     return view('/posts' , [
//         'okay' => $author->posts,
//         'catagories' => catagories::all()

//     ]);
// });


// -> where('okay' , '[A-z]+');

// Route::get('/okay', SingleActionController::class);

Route::get('/sample/{name}/{surname}', function($ok1 , $ok2){
    return view('about',[
        'name' => $ok1,
        'surname' => $ok2
    ]);
});