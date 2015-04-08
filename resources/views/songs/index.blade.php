@extends('master')

@section('content')
	<h1>justin biber official fan club</h1>

	@foreach ($songs as $index => $song)
	<li><a href="/songs/{{ $index +1}}">{{ $song}}</a></li>
	@endforeach
@stop