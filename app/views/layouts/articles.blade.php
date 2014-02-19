<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        
        <meta name="google-translate-customization" content="8e4d90bf7ef103bb-2fd5a6c074901d93-g270ecfa4bf6c4f7d-16"></meta>

		<title>Hello World Peru</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="shortcut icon" href="{{ URL::asset('img/favicon.ico') }}">
        
        <!-- Fonts --> 
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <!-- End Fonts -->
        
        <!-- CSS Files -->
        @yield('extrastyles')
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/blog.css') }}">
        
</head>
<body>
	<header>
		<h1> <a href="../blog/list">Hello World Peru Blog! </a></h1>
        <a href="{{ URL::route('home'); }}"><img src="{{ URL::asset('img/logo.png') }}" alt=""></a>
	</header>
	<section id="details-left" class="span7 details-lefts">
		@yield('content')
	</section>
    <footer>
        
        <div class="container text-center">
            
            <div class="row">
                
                <div class="col-sm-12">
                    <ul class="social list-inline">
                        <li>
                            <div class="fb-like" data-href="https://www.facebook.com/helloworldperu?fref=ts" data-layout="box_count" 
                                data-action="like" data-show-faces="true" data-share="false"></div>        
                        </li>
                        <li>
                            <a href="https://twitter.com/helloworldperu" class="twitter-follow-button" data-show-count="true"
                                data-size="large" data-show-screen-name="false"></a>
                        </li>
                        <li>
                            <div>
                                <a href="https://github.com/HelloWorldPeru" class="vimeo">
                                    <i class="fa fa-github"></i>
                                </a>
                            </div>
                        </li> 
                        <li>
                            <div>
                                <a href="#" class="linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                        </li> 
                        <li>
                            <div class="g-plusone" data-size="tall" data-href="https://plus.google.com/115865913173071701034/posts"></div>
                        </li> 
                        <li>
                            <div class="g-k" data-channel="HelloWorldPeru" data-layout="default" data-count="default" data-onytevent="onYtEvent"></div>
                        </li> 
                    </ul>
                </div> 
                
                <div class="col-sm-12">
                    <ul class="subnav list-inline">
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                
                <div class="col-sm-12"> 
                    <p>
                        Copyright © 2014, All Rights Reserved
                    </p>
                </div>
                
                <div class="col-sm-12">
                    <a href="#">
                        <!--<img src="img/" class="logo" alt="logo">-->
                        HelloWorldPerú
                    </a>
                </div>
                 
            </div>
            <div id="google_translate_element"></div> 
        </div>
    
    </footer>
    @yield('extrascripts')
    <div id="fb-root"></div>
    <script src="https://apis.google.com/js/platform.js"></script>
    <script type="text/javascript" src="../js/social.js"></script>
</body>
</html>