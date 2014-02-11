<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Document</title>
	    <!-- CSS Files -->
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		@yield('styles')
	</head>
	<body>
		@if(Session::get('msg'))
	        <p>{{ Session::get('msg') }}</p>
	    @endif
	    <nav class="navbar navbar-default navbar-inverse" role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Brand</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="#">Link</a></li>
		        <li><a href="#">Link</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		            <li class="divider"></li>
		            <li><a href="#">One more separated link</a></li>
		          </ul>
		        </li>
		      </ul>
		      <form class="navbar-form navbar-left" role="search">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default">Submit</button>
		      </form>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">Link</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
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
	</body>
</html>