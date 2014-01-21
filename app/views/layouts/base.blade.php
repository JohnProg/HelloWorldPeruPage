<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        
		<title>Achieve | Portfolio Template</title>
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

        <!-- End CSS Files -->
         
	</head>
    
	<body>
        
        <!-- Overlay Section -->
        <div class="overlay"></div>
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
                        <a href="#services">SERVICES</a>
                    </li>
                    <li>
                        <a href="#portfolio">PORTFOLIO</a>
                    </li>
                    <li class="home">
                        <a href="#home">
                            <!--<img src="img/logo-no-text.png" alt="Home" width="128" height="128">-->
                            <br>
                            HelloWorldPerú                  
                        </a>
                    </li>
                    <li>
                        <a href="#about">ABOUT</a>
                    </li>    
                    <li>
                        <a href="#contact">CONTACT</a>
                    </li> 
                </ul>
            </div>

        </nav>
        <!-- End Navigation Section -->

        @yield('contenido')

        <!-- Footer Section -->
        <footer>
            
            <div class="container text-center">
                
                <div class="row">
                    
                    <div class="col-sm-12">
                        <ul class="social list-inline">
                            <li>
                                <div>
                                    <a href="https://www.facebook.com/helloworldperu" class="facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <a href="#" class="twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
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
                                <div>
                                    <a href="#" class="google-plus">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </li> 
                            <li>
                                <div>
                                    <a href="https://www.youtube.com/user/HelloworldPeru" class="youtube">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </div>
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
        
    
    
 </body></html>