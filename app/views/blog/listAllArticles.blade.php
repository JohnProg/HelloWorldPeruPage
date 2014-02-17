@extends('blog.baseAllArticles')
@section('extrastyles')
	<link rel="stylesheet" type="text/css" href="../css/slicebox.css" />
	<link rel="stylesheet" type="text/css" href="../css/custom.css" />
@stop
@section('content')
	<div class="slider">
		<ul id="sb-slider" class="sb-slider">
			@foreach($list as $listaUnit)
			<li>
				<a href="{{$listaUnit->slug}}" target="_blank"><img src="{{ $listaUnit->url_image_large }}" alt=""/></a>
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
				<a href="../blog/{{ $post->slug }}" target="_blank"><img src="{{ $post->url_image_thumb }}" alt=""></a>
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
@stop
@section('extrascripts')
	<script src="../js/jquery.1.10.1.js"></script>
	<script src='../js/modernizr.custom.js'></script>
	<script type="text/javascript" src="../js/jquery.slicebox.js"></script>
	<script type="text/javascript" src='../js/slider.js'></script>
@stop