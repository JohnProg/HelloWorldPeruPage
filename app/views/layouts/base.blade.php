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
		<link rel="shortcut icon" href="img/favicon.ico">
        
        <!-- Fonts --> 
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <!-- End Fonts -->
        
        <!-- CSS Files -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
        @yield('styles')
        <!-- End CSS Files -->

	</head>
    
	<body>

        <!-- End Overlay Section -->

        <!-- Navigation Section -->
        <nav class="navbar" role="navigation">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bars"></span>
                </button>
                <a class="navbar-brand" href="#">HelloWorldPerú</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#services">SERVICIOS</a>
                    </li>
                    <li>
                        <a href="#portfolio">PORTAFOLIO</a>
                    </li>
                    <li class="home">
                        <a href="#blog">
                            <img src="img/logo.png" alt="Home" width="128" height="60">
                        </a>
                    </li>
                    <li>
                        <a href="#about">CONOCENOS</a>
                    </li>
                    <li>
                        <a href="#contact">CONTACTANOS</a>
                    </li>
                    <li>
                        <a href="../blog/list">Blog</a>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- End Navigation Section -->
        @if(Session::has('message'))
        <div class="alert alert-{{ Session::get('message.option')}} float-msg">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4>{{ Session::get('message.option')}}</h4>
            {{ Session::get('message.message')}}
        </div>
        @endif

        @yield('contenido')

        <!-- Footer Section -->
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
                                <div class="g-ytsubscribe" data-channel="HelloWorldPeru" data-layout="default" data-count="default" data-onytevent="onYtEvent"></div>
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
        <!-- End Footer Section -->
        
        <!-- Scripts Section -->
        @yield('script')
        <!-- End Scripts Section -->
 </body>
    <div id="fb-root"></div>
    <script src="https://apis.google.com/js/platform.js"></script>
    <script type="text/javascript" src="js/social.js"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'es', 
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE, 
                autoDisplay: false}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
 </html>