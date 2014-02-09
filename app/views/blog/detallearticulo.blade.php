@extends('blog.blogbase')

@section('contenido')	

	<section class='container'>
		{{ HTML::link('blog', 'Volver'); }}
		<article>
			<figure>
				<img src="{{  $article->url_image }}" alt="">
			</figure>
			<header> 
				<h2>{{ $article->titulo }}</h2>
			</header>
			<p> {{ $article->texto }} </p>
		</article>
	</section>
@stop
