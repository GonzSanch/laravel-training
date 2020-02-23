@extends ('layout2')

@section ('content2')
<div id="wrapper">
	<div id="page" class="container">
		@foreach ($articles as $article)
		<div id="content">
			<div class="title">
				<h2><a href="articles/{{ $article->id }}">{{ $article->title }}</a></h2>
			<p><img src="/banner.jpg" alt="" class="image image-full" /> </p>
			<p>{!! $article->excerpt !!}</p>
		</div>
		@endforeach
	</div>
</div>
@endsection
