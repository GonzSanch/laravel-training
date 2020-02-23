<?php

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

Route::get('', function () {
    return view('welcome');
});

Route::get('welcome', function () {
    return 'Hello World';
});

Route::get('testroutes', function () {  //*routes
    return view('testroutes');
});

Route::get('r', function () {   //*request
    //return $name; //* ?name=gsanchez
    return view('testrequest', [
        'name' => request('name')
    ]);
});

Route::get('post/{post}', function ($post) {   //*wildcard
    $posts = [
        'my-first-post' => 'Hello, this is my first blog post!',   //http://localhost/post/my-first-post
        'my-second-post' => 'Now I am getting the hang od this blogging thing.' // http://localhost/post/my-second-post
    ];

    if (! array_key_exists($post, $posts)) {
        abort(404, 'Sorry, that post was not found.');
    }
    return view('post', [
        //'post' => $posts[$post] ?? 'Nothing here yet.'  //* unviable solution
        'post' => $posts[$post]
    ]);
});

Route::get('posts/{post}', 'PostsController@show');     //*Route2controller

Route::get('db/{post}', 'PostControllerDB@show');     //*Controller2DB

//*Create assignement model migration and controller to trait data inputs

Route::get('contact', function() {  //* Introducing layout extends in views and switch others views
    return view('contact');
});

Route::get('welcome2', function() { //* Add a simple template to laravel-> https://templated.co/simplework
    return view('welcome2');
});

Route::get('about', function() {    //*Add new section about templated
    return view('about', [
        'articles' => App\Article::latest()->get() //*Put dynamic rendered data
    ]);
});

Route::get('/articles/{articles}', 'ArticlesController@show');  //*Dynamic render part2
Route::get('articles', 'ArticlesController@index');             //*Dynamic render part3
