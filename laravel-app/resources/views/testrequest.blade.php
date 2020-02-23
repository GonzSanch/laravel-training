@extends ('layout')

@section ('content')
	<!-- <h1><<?= htmlspecialchars($name, ENT_QUOTES);?></h1> -->
	<!-- to solve script injection
	/r?name=<script>alert("hello");</script>
	<h1>{!! $name !!}</h1> will reproduce same behaviour -->
	<h1>{{ $name }}</h1>
@endsection
