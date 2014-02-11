@extends('blog.baseAllArticles')

@section('content')
	@foreach($posts as $post)
		<section>
			<header>
				<h1>{{ $post->title }} <span> {{ $post->date }}</span></h1>
			</header>
			{{ $post->content }}
			{{ HTML::link('blog/'.$post->slug, 'Ver mas'); }}
		</section>
	@endforeach
@stop