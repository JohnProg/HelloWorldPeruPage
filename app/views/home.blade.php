@extends('layouts.base')

@section('contenido')
	<!-- Sidebar Section --> 
    <aside>

        <nav id="toque_main_content" style="width: 50px;">
          <span class="button-option"><i class="fa fa-align-justify"></i></span>
          <ul>
            <li><a class='menu' href="#" id="home"><i class="fa fa-home"></i> <span class="text-menu">HOME</span></a></li>
             <li><a class='menu' href="#services"><i class="fa fa-money"></i> <span class="text-menu">SERVICES</span></a></li>
             <li><a class='menu' href="#portfolio"><i class="fa fa-briefcase"></i> <span class="text-menu">PORTFOLIO</span></a></li>
            <li><a class='menu' href="#about"><i class="fa fa-user"></i> <span class="text-menu">ABOUT</span></a></li>            
            <li><a class='menu' href="#contact"><i class="fa fa-envelope"></i> <span class="text-menu">CONTACT</span></a></li>              
          </ul>
        </nav>

    </aside>
    <!-- End Sidebar Section -->
    
    <!-- Home Section -->
    <section id="home">
    
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12">
                    <div class="visible-xs">
                        <!--<img src="img/logo(1).png" class="logo" alt="Home" width="192" height="192">-->
                        Logo
                    </div>
                </div>
                <div class="col-sm-12">
                    <p class="text-extra-large">Somos un equipo freelance de desarrollo ágil, enfocados en la creación<br class="uk-hidden-small">  de aplicaciones web & movile que le ayudaran en su negocio.
                    </p>
                </div>
            </div>
        </div> 
    
    </section>
    <!-- Home Section -->
    
    <!-- Services Section -->
    <section id="services">
        <div class="container">
            
            <div class="row text-center"> 
                <div class="col-sm-12"> 
                    <h1 class="heading-large section-color-1">SERVICES</h1>
                </div>
                <div class="col-sm-12"> 
                    <p class="text-large section-color-1">
                        We create beautiful responsive Websites using the latest Web Technologies,<br>
                        for what ever need you may have.
                    </p>
                </div>
            </div>
            
            <div class="row text-center">
            
                <div class="col-sm-6 col-lg-3 service-item">
                    <div>
                        <i class="fa fa-html5"></i>
                    </div>
                    <div>
                        <h3 class="section-color-1">HTML5</h3>
                        <p class="section-color-1">
                            Sed in luctus lectus, ac commodo velit. Nulla imperdiet ullamcorper augue ac ultricies.
                        </p>
                    </div>
                </div>
            
                <div class="col-sm-6 col-lg-3 service-item">
                    <div>
                        <i class="fa fa-code"></i>
                    </div>
                    <div>
                        <h3 class="section-color-1">CODE</h3>
                        <p class="section-color-1">
                            Sed in luctus lectus, ac commodo velit. Nulla imperdiet ullamcorper augue ac ultricies.
                        </p>
                    </div>
                </div>
            
                <div class="col-sm-6 col-lg-3 service-item">
                    <div>
                        <i class="fa fa-android"></i>
                    </div>
                    <div>
                        <h3 class="section-color-1">ANDROID</h3>
                        <p class="section-color-1">
                            Sed in luctus lectus, ac commodo velit. Nulla imperdiet ullamcorper augue ac ultricies.
                        </p>
                    </div>
                </div>
            
                <div class="col-sm-6 col-lg-3 service-item">
                    <div>
                        <i class="fa fa-apple"></i>
                    </div>
                    <div>
                        <h3 class="section-color-1">iOS</h3>
                        <p class="section-color-1">
                            Sed in luctus lectus, ac commodo velit. Nulla imperdiet ullamcorper augue ac ultricies.
                        </p>
                    </div>
                </div>
                
            </div>
            
        </div>
        
    </section>
    <!-- End Services Section -->
    
    <!-- Portfolio Section -->
    <section id="portfolio">
         
        <div class="container">
            
            <div class="row text-center"> 
                <div class="col-sm-12"> 
                    <h1 class="heading-large section-color-2">PORTFOLIO</h1>
                </div>
                <div class="col-sm-12"> 
                    <p class="text-large section-color-2">
                        We create beautiful responsive Websites using the latest Web Technologies,<br>
                        for what ever need you may have.
                    </p>
                </div>
            </div>
            
             <!-- Filter Buttons -->
            <ul id="filter-buttons">
                <li class="filter active" data-filter="all">ALL</li>
                <li class="filter" data-filter="web">WEB</li>
                <li class="filter" data-filter="app">APP</li>
                <li class="filter" data-filter="design">DESIGN</li>  
                <li class="filter" data-filter="code">CODE</li>  
            </ul>
            <!-- End Filter Buttons -->

                            <!-- Portfolio Grid -->
            <ul id="gallery">
                
                <li class="mix code design grid-unit mix_all">
                    <a href="portfolio/project-1/index.html" class="thumbnail">
                        <img src="img/ipad3_1885-1_1x.jpg" alt="">
                        <div class="mask">
                            <div class="meta">
                                <div class="words">
                                    <span class="title">Yule Log</span>
                                    <span class="role">Design / Code</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                
                <li class="mix web code grid-unit mix_all">
                    <a href="portfolio/project-1/index.html" class="thumbnail">
                        <img src="img/sqqssq_1x.jpg" alt="">
                        <div class="mask">
                            <div class="meta">
                                <div class="words">
                                    <span class="title">Earth</span>
                                    <span class="role">Web / Code</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li> 
                
                <li class="mix app code grid-unit mix_all">
                    <a href="portfolio/project-1/index.html" class="thumbnail">
                        <img src="img/111111aaaa_1x.jpg" alt="">
                        <div class="mask">
                            <div class="meta">
                                <div class="words">
                                    <span class="title">Hobbit Holes</span>
                                    <span class="role">App / Code</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li> 
                
                <li class="mix web app code grid-unit mix_all">
                    <a href="portfolio/project-1/index.html" class="thumbnail">
                        <img src="img/22222_1x.jpg" alt="">
                        <div class="mask">
                            <div class="meta">
                                <div class="words">
                                    <span class="title">Out of the Shire</span>
                                    <span class="role">Web / App / Code</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li> 
                
                <li class="mix web design grid-unit mix_all">
                    <a href="portfolio/project-1/index.html" class="thumbnail">
                        <img src="img/2s2s2s_1x.jpg" alt="">
                        <div class="mask">
                            <div class="meta">
                                <div class="words">
                                    <span class="title">Map</span>
                                    <span class="role">Web / Design</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li> 
                
                <li class="mix app design grid-unit mix_all">
                    <a href="portfolio/project-1/index.html" class="thumbnail">
                        <img src="img/kaboom_1x.jpg" alt="">
                        <div class="mask">
                            <div class="meta">
                                <div class="words">
                                    <span class="title">Kaboom!</span>
                                    <span class="role">App / Design</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li> 
                
                <li class="mix web design grid-unit mix_all">
                    <a href="portfolio/project-1/index.html" class="thumbnail">
                        <img src="img/1b_1x.jpg" alt="">
                        <div class="mask">
                            <div class="meta">
                                <div class="words">
                                    <span class="title">Driver</span>
                                    <span class="role">Web / Design</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li> 
                
                <li class="mix app code design grid-unit mix_all">
                    <a href="portfolio/project-1/index.html" class="thumbnail">
                        <img src="img/22222_1x.jpg" alt="">
                        <div class="mask">
                            <div class="meta">
                                <div class="words">
                                    <span class="title">Union Square</span>
                                    <span class="role">App / Code / Design</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li> 
                
                <li class="mix app web grid-unit mix_all">
                    <a href="portfolio/project-1/index.html" class="thumbnail">
                        <img src="img/2s2s2s_1x.jpg" alt="">
                        <div class="mask">
                            <div class="meta">
                                <div class="words">
                                    <span class="title">Treasure Map</span>
                                    <span class="role">Web / App</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li> 
                
            </ul>
            <!-- End Portfolio Grid -->                
        </div>
        
    </section>
    <!-- End Portfolio Section -->
    
    <!-- About Section -->
    <section id="about">
         
        <div class="container">
            
            <div class="row text-center"> 
                <div class="col-sm-12"> 
                    <h1 class="heading-large section-color-1">ABOUT US</h1>
                </div>
                <div class="col-sm-12"> 
                    <p class="text-large section-color-1">
                        We create beautiful responsive Websites using the latest Web Technologies,<br>
                        for what ever need you may have.
                    </p>
                </div>
            </div>
            
            <div class="row text-center">
            
                <div class="col-sm-6 col-lg-3">
                    <div class="team-member">
                        <div class="header">
                            <span class="name">John Paul</span>
                            <span class="position">Developer</span>
                        </div>
                        <div class="content">
                            <div class="info">
                                <p>I am a graduate from the University of Florida where I received a Bachelors in Computer Science.</p>
                                <p>Sed in luctus lectus, ac commodo velit. Nulla imperdiet ullamcorper augue ac ultricies.</p>
                            </div>
                            <img src="img/team-1.jpg" alt="">
                        </div>
                        <div class="footer">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i></a></li> 
                            </ul>
                        </div>
                    </div>
                </div> 
            
                <div class="col-sm-6 col-lg-3">
                    <div class="team-member">
                        <div class="header">
                            <span class="name">Jonathan Percy</span>
                            <span class="position">Developer</span>
                        </div>
                        <div class="content">
                            <div class="info">
                                <p>I am a graduate from the University of Florida where I received a Bachelors in Graphics and Web Design.</p>
                            </div>
                            <img src="img/team-2.jpg" alt="">
                        </div>
                        <div class="footer">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i></a></li>  
                            </ul>
                        </div>
                    </div>
                </div> 
            
                <div class="col-sm-6 col-lg-3">
                    <div class="team-member">
                        <div class="header">
                            <span class="name">Diana Karolina</span>
                            <span class="position">Designer</span>
                        </div>
                        <div class="content">
                            <div class="info">
                                <p>I am a graduate from the University of Florida where I received a Bachelors in Multimedia.</p>
                                <p>Sed in luctus lectus, ac commodo velit. Nulla imperdiet ullamcorper augue ac ultricies.</p>
                            </div>
                            <img src="img/team-3.jpg" alt="">
                        </div>
                        <div class="footer">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i></a></li>  
                            </ul>
                        </div>
                    </div>
                </div> 
            
                <div class="col-sm-6 col-lg-3">
                    <div class="team-member">
                        <div class="header">
                            <span class="name">Gustavo</span>
                            <span class="position">Developer</span>
                        </div>
                        <div class="content">
                            <div class="info">
                                <p>I am a graduate from the University of Florida where I received a Bachelors in Computer Science and Multimedia.</p>
                            </div>
                            <img src="img/team-4.jpg" alt="">
                        </div>
                        <div class="footer">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i></a></li> 
                            </ul>
                        </div>
                    </div>
                </div> 
                
            </div>
            
        </div>
        
    </section>
    <!-- End About Section -->

    <!-- Contact Section -->
    <section id="contact">

        <div class="overlay-contact"></div>
        <div class="container">
            <div class="row text-center"> 
                <div class="col-sm-12"> 
                    <h1 class="heading-large section-color-1">CONTACT US</h1>
                </div>
                <div class="col-sm-12"> 
                    <p class="text-large section-color-1">
                        We create beautiful responsive Websites using the latest Web Technologies,<br>
                        for what ever need you may have.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="cform" id="contact-form">
                        <div id="sendmessage">
                             Your message has been sent. Thank you!
                        </div>
                        <form action="" method="post" class="contactForm">
                            <div class="row">
                                <div class="span6">
                                    <div class="field your-name">
                                        <input type="text" name="your-name" placeholder="Your Name" class="cform-text" size="40" data-rule="maxlen:4" data-msg="Please enter at least 4 chars">
                                        <div class="validation">
                                        </div>
                                    </div>
                                    <div class="field your-email">
                                        <input type="text" name="your-email" placeholder="Your Email" class="cform-text" size="40" data-rule="email" data-msg="Please enter a valid email">
                                        <div class="validation">
                                        </div>
                                    </div>
                                    <div class="field subject">
                                        <input type="text" name="subject" placeholder="Subject" class="cform-text" size="40" data-rule="maxlen:4" data-msg="Please enter at least 8 chars of subject">
                                        <div class="validation">
                                        </div>
                                    </div>
                                </div>
                                <div class="span6">
                                    <div class="field message">
                                        <textarea name="message" class="cform-textarea" cols="40" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                                        <div class="validation">
                                        </div>
                                    </div>
                                    <input type="submit" value="Send message" class="btn btn-theme pull-left">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ./span12 -->
            </div>
        </div>
    
    </section>
    <!-- End Contact Section -->
@stop

@section('script')
	<!-- Scripts Section -->
    <script src="js/jquery.1.10.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/index.js"></script>
    <!-- End Scripts Section -->
@stop