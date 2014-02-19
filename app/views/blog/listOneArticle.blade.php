@extends('layouts.articles')

@section('content')

	<section class='main-content'>
		<header>
			<h1>{{ $post->title }}</h1>
		</header>

        <div>
            <img src="{{ $post->image_thumbs }}" alt="" style="margin: 0 auto;display:block;">
        </div>
        <p></p>
		{{ $post->content }}

		<aside>
			<div id="disqus_thread"></div>
		    <script type="text/javascript">
		        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
		        var disqus_shortname = 'helloworldperu2014'; // required: replace example with your forum shortname

		        /* * * DON'T EDIT BELOW THIS LINE * * */
		        (function() {
		            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
		            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
		            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
		        })();
		    </script>
		    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
		</aside>
	</section>
	<aside class='related-content'>
		<h2>Post Relacionados</h2>
		<ul class='articles-list'>
			@foreach($list as $lista)
			<li class='post_thumb'>
				<figure>
					<a href="../blog/{{ $lista->slug }}"><img src="{{ $lista->image_thumbs }}" target="_blank" alt=""></a>
					<span class='date'>
						{{ $lista->updated_at}}
					</span>
					<figcaption>
						<h1><a href="../blog/{{ $lista->slug }}" target="_blank">{{ $lista->title }}</a></h1>
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