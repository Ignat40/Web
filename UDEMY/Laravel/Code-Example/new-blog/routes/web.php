<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/{id}', [PostsController::class, 'index']);

Route::get('/test', [PostsController::class, 'test']);

Route::get('/maruli/{kg}/{price}', [PostsController::class, 'ne_znam']);

// Inserting data

Route::get('/insert', function(){
    
    $post = new Post();

    $post->title = "Nekwo zaglavie";
    $post->body = "Nekuw random text che nz kwo da tsukan tuka";

    $post->save();
});

Route::get('/find', function(){
   
    $posts = Post::all();

    foreach($posts as $post){
        return $post->title;
    }

});

Route::get('/findOne', function() {
    $post = Post::find(1);
    return $post->title; // shte blusne greshka shtoto ne sum pisal nistho v nego 
});

// Conditional Searching

Route::get('/findWhere', function(){

    $posts = Post::where('id', 1)->orderBy('id', 'asc')->take(1)->get();
    return $posts;
});

// More Ways To Get Data (testing purposes only)

Route::get('/findMore', function(){

    $posts = Post::findOrFail(1);
    return $posts;

    $postsConditional = Post::where('users_count','<', 50)->firstOrFail();
    return $postsConditional;

});

Route::resource('/posts', PostsController::class);

// Route::get('/contact', function() {
//     return "Hi from the contact page";
// });

// Route::get('/about', function() {
//     return "Hi from the contact page";
// });

// Route::get('/post/{id}/{likes}', function($id, $likes){
//     return "This is post number: " . $id . "  and it has " . $likes . "likes!";
// });

// Route::get('/example/super/long/url/test', array('as'=>'admin.home', function(){
//     $url = route('admin.home');

//     return "This url is: " . $url;
// }));