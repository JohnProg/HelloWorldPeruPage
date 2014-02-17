@extends('blog.baseAllArticles')

@section('content')
	
	<section class='main-content'>	
		<header>
			<h1>{{ $post->title }}</h1>
		</header>
		{{ $post->content }}	
	</section>
	<aside class='related-content'>
		<h2>Post Relacionados</h2>
		<ul class='articles-list'>
			@foreach($list as $lista)
			<li class='post_thumb'>
				<figure>
					<a href="../blog/{{ $post->slug }}"><img src="{{ $post->url_image_thumb }}" alt=""></a>
					<span class='date'>
						{{ $lista->updated_at}}
					</span>
					<figcaption>
						<h1><a href=""../blog/{{ $post->slug }}"">{{ $lista->title }}</a></h1>
						<p>
							{{ $lista->shortContent }}	
							{{ HTML::link('blog/'.$lista->slug, 'Ver mas'); }}	
						</p>
						
					</figcaption>
				</figure>
			</li>
			@endforeach	
		</ul>
	</aside>
@stop