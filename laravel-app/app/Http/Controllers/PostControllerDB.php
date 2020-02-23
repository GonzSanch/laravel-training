<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class PostControllerDB extends Controller
{
	public function show($slug)
	{
        /*$post = DB::table('posts')->where('slug', $slug)->first(); !without model

        if (! $post) {
            \abort(404);
        }

		return view('postdb', [
			'post' => $post
        ]);*/
        return view('postdb', [
            'post' => $post = Post::where('slug', $slug)->firstorfail() //with model implemented
        ]);
	}
}
