<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
	public function show($post)
	{
		$posts = [
			'my-first-post' => 'Hello, this is my first blog post!',   //http://localhost/post/my-first-post
			'my-second-post' => 'Now I am getting the hang od this blogging thing.' // http://localhost/post/my-second-post
		];

		if (! array_key_exists($post, $posts)) {
			abort(404, 'Sorry, that post was not found.');
		}

		return view('post', [
			'post' => $posts[$post]
		]);
	}
}
