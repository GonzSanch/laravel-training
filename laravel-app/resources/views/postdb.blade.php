@extends ('layout')

@section ('content')
	<h1>My blog posts</h1>
	<p>{{ $post->body }}</p>
@endsection
