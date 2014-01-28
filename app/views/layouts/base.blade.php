<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        
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
                                <div class="fb-like" data-href="https://www.facebook.com/helloworldperu?fref=ts" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"></div>        
                            </li>
                            <li>
                                <a href="https://twitter.com/helloworldperu" class="twitter-follow-button" data-show-count="true">Follow @helloworldperu</a>
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
                
            </div>
        
        </footer>
        <!-- End Footer Section -->
        
        <!-- Scripts Section -->
        @yield('script')
        <!-- End Scripts Section -->
 </body>

<!--facebook--> 
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    //Google Analitycs

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-39048039-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>

<!-- Google+ -->
<script type="text/javascript">
  window.___gcfg = {lang: 'es-419'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

<!-- Youtube-->
<script src="https://apis.google.com/js/platform.js"></script>
<script>
  function onYtEvent(payload) {
    if (payload.eventType == 'subscribe') {
      // Add code to handle subscribe event.
    } else if (payload.eventType == 'unsubscribe') {
      // Add code to handle unsubscribe event.
    }
    if (window.console) { // for debugging only
      window.console.log('YT event: ', payload);
    }
  }
</script>

<!-- Twitter -->

<script>
    !function(d,s,id){
        var js,
            fjs=d.getElementsByTagName(s)[0],
            p=/^http:/.test(d.location)?'http':'https';
        if(!d.getElementById(id)){
            js=d.createElement(s);
            js.id=id;
            js.src=p+'://platform.twitter.com/widgets.js';
            fjs.parentNode.insertBefore(js,fjs);
        }
    }(document, 'script', 'twitter-wjs');
</script>


 </html>
