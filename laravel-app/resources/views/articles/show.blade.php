@extends ('layout2')

@section ('content2')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>{{ $article->title }}</h2>
			<p><img src="/banner.jpg" alt="" class="image image-full" /> </p>
			<p>{{ $article->body }}</p>
		</div>
	</div>
</div>
@endsection
