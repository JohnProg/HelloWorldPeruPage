@extends('blog.baseAllArticles')

@section('content')
	
	<section	
		<header>
			<h1>{{ $post->title }} <span> {{ $post->date }}</span></h1>
		</header>
		{{ $post->content }}		
		{{ HTML::link('blog/list', 'Volver'); }}	
	</section>
@stop