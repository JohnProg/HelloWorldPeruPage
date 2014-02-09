@extends('blog.blogbase')

@section('contenido')	
	<section class='container'>
		<article>
			@foreach($articles as $article)
			<figure>
				<img src="{{  $article->url_image }}" alt="">
			</figure>
			<header> 
				<h2>{{ $article->titulo }}</h2>
			</header>
			<p> {{ $article->texto }} </p>
			{{ HTML::link( 'blog/'.$article->id , 'Ver mas.') }}
			@endforeach
		</article>
	</section>
@stop
