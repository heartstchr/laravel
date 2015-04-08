@extends('app')

@section('content')
		<div class="memory">
	    	<p class="caption">Memory Being Kept With Us</p>
	    </div>
	    <div id="slideshow">
			<div><img src="{{ asset('/images/furniture_set.jpg') }}" alt="" /></div>
			<div><img src="{{ asset('/images/garden-furniture-dimentions.jpg') }}"  alt="" /></div>
			<div><img src="{{ asset('/images/wood-furniture.jpg') }}"  alt="" /></div>
			<div><img src="{{ asset('/images/comfortable-woodhood.jpg') }}"  alt="" /></div>
	    </div>
	    <div class="instinct">
	    	<p class="caption">Furniture Which Redefine Refreshment</p>
	    </div>
@stop
