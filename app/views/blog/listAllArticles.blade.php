@extends('layouts.articles')
@section('extrastyles')
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/slicebox.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom.css') }}" />
@stop
@section('content')
	<div class="slider">
		<ul id="sb-slider" class="sb-slider">
			@foreach($posts as $listaUnit)
			<li>
				<a href="{{$listaUnit->slug}}" target="_blank"><img src="{{ $listaUnit->image_large }}" style="width:740px;height: 350px;" alt=""/></a>
				<div class="sb-description">
					<h3>{{ $listaUnit->title }}</h3>
					<p>{{ $listaUnit->shortContent }}</p>
					<p>{{ HTML::link('blog/'.$listaUnit->slug, 'Ver mas'); }}</p>
				</div>
			</li>
			@endforeach	
		</ul>
		<div id="shadow" class="shadow"></div>
		<div id="nav-arrows" class="nav-arrows">
			<a href="#">Next</a>
			<a href="#">Previous</a>
		</div>
	</div>
	<ul class='articles-list'>
		@foreach($posts as $post)
		<li class='post_thumb'>
			<figure>
				<a href="../blog/{{ $post->slug }}" target="_blank"><img src="{{ $post->image_thumbs }}" alt=""></a>
				<span class='date'>
					{{ $post->updated_at}}
				</span>
				<figcaption>
					<h1><a href="../blog/{{ $post->slug }}" target="_blank">{{ $post->title }}</a></h1>
					<p>
						{{ $post->shortContent }}	
						{{ HTML::link('blog/'.$post->slug, 'Ver mas'); }}	
					</p>
					
				</figcaption>
			</figure>
		</li>
		@endforeach	
	</ul>
	{{ $posts->links(); }}
@stop
@section('extrascripts')
	<script src="{{ URL::asset('js/jquery.1.10.1.js') }} "></script>
	<script src='{{ URL::asset('js/modernizr.custom.js') }} '></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.slicebox.js') }}"></script>
	<script type="text/javascript" src='{{ URL::asset('js/slider.js') }}'></script>
@stop