@extends('layouts.base')

@section('contenido')

<div id="main-content" ng-app="homeApp">

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
            <li><a class='menu' href="#contact"><i class="fa fa-desktop"></i> <span class="text-menu">BLOG</span></a></li>
        </ul>
    </nav>

</aside>
<!-- End Sidebar Section -->

    <!-- Home Section -->
    <section id="home">

        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12">
                        <h2 style="font-family: fantasy;">Hello World Peru</h2>
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
                    <h1 class="heading-large section-color-1">SERVICIOS</h1>
                </div>
                <div class="col-sm-12"> 
                    <p class="text-large section-color-1">
                        Tienes alguna idea en mente, quieres generar un valor agregado a tu negocio <br>
                        o quiza mejorarlo, te ofrecemos estas soluciones
                    </p>
                </div>
            </div>
            
            <div class="row text-center">
            
                <div class="col-sm-6 col-lg-3 service-item">
                    <div>
                        <i class="fa fa-html5"></i>
                    </div>
                    <div>
                        <h3 class="section-color-1">WEB</h3>
                        <p class="section-color-1">
                            Paginas Web de contenido, Páginas Web Transaccionales, Comunidades, Foros, Sistemas personalizables.
                        </p>
                    </div>
                </div>
            
                <div class="col-sm-6 col-lg-3 service-item">
                    <div>
                        <i class="fa fa-code"></i>
                    </div>
                    <div>
                        <h3 class="section-color-1">SOPORTE</h3>
                        <p class="section-color-1">
                            Brindamos tutorias de alguna tecnologia que desearia conocer.
                        </p>
                    </div>
                </div>
            
                <div class="col-sm-6 col-lg-3 service-item">
                    <div>
                        <i class="fa fa-android"></i>
                    </div>
                    <div>
                        <h3 class="section-color-1">MOBILE</h3>
                        <p class="section-color-1">
                            Aplicaciones de apoyo en su negocio o idea.
                        </p>
                    </div>
                </div>
            
                <div class="col-sm-6 col-lg-3 service-item">
                    <div>
                        <i class="fa fa-css3"></i>
                    </div>
                    <div>
                        <h3 class="section-color-1">DISEÑO</h3>
                        <p class="section-color-1">
                            Creacion de logos, retoques fotograficos, creacion de banner.
                        </p>
                    </div>
                </div>
                
            </div>
            
        </div>

    </section>
    <!-- End Services Section -->
    <!-- Portfolio Section -->
    <section id="portfolio" ng-controller="projectController" ng-init="init()">
         
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12"> 
                    <h1 class="heading-large section-color-2">PORTAFOLIO</h1>
                </div>
                <div class="col-sm-12"> 
                    <p class="text-large section-color-2">
                        Contamos con proyectos ya desarrollados en la que usted podra ver , <br>
                        porbar y evaluar nuestro trabajo.
                    </p>
                </div>
            </div>
            
             <!-- Filter Buttons -->
            <ul id="filter-buttons">
                <li class="filter active" data-filter="{[{ option.id }]}" ng-repeat="option in options" ng-cloak >{[{ option.name }]}</li>
<!--                <li class="filter" data-filter="web">WEB</li>-->
<!--                <li class="filter" data-filter="app">APP</li>-->
<!--                <li class="filter" data-filter="design">DESIGN</li>-->
<!--                <li class="filter" data-filter="2">CODE</li>-->
            </ul>

            <!-- End Filter Buttons -->
            <!--  code, web, app, design -->
            <!-- Portfolio Grid -->
            <ul id="gallery" >
<!--                proyectos: {[{ projects }]}-->
<!--                <div ng-repeat="item in projects">-->
                <li class="mix 0 {[{ item.type }]} design grid-unit mix_all" ng-repeat="item in projects" data-test="{[{ item.title }]}" ng-cloak >
                    <a href="{[{ item.url }]}" class="thumbnail">
                        <img src="{[{ item.photos[0].thumbnails[0].file }]}" alt="">
                        <div class="mask">
                            <div class="meta">
                                <div class="words">
                                    <span class="title">{[{ item.title }]}</span>
                                    <span class="role">{[{ item.description }]}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
<!--                </div>-->
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
                    <h1 class="heading-large section-color-1">CONOCENOS</h1>
                </div>
                <div class="col-sm-12"> 
                    <p class="text-large section-color-1">
                        Somos un equipo que nos apasiona lo que realizamos, motivado por el aprendizaje constante, las nuevas tecnologias<br>
                        y las nuevas tendencias.
                    </p>
                </div>
            </div>
            
            <div class="row text-center">
            
                <div class="col-sm-6 col-lg-3">
                    <div class="team-member">
                        <div class="header">
                            <span class="name">John Paul</span>
                            <span class="position">Web Designer/Developer</span>
                        </div>
                        <div class="content">
                            <div class="info">
                                <p>Estudiante del 7 ciclo de la carrera Ingenieria de Sistemas en la Universidad Autonoma del Peru.</p>
                                <p>Amante de python y javascript, asi como css3, html5 y php.</p>
                                <p>Me encanta codear, enseñar y estar aprendiendo constantemente de las nuevas tecnoligias!</p>                                
                            </div>
                            <img src="img/team-1.jpg" alt="">
                        </div>
                        <div class="footer">
                            <ul>
                                <li><a href="https://www.facebook.com/john.machahuaygiraldo.3"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/Johnp_js"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://github.com/JohnProg"><i class="fa fa-github"></i></a></li>
                                <li><a href="https://www.youtube.com/user/TecTimeJohnProg"><i class="fa fa-youtube"></i></a></li> 
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
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
                                <p>Estudiante del 7 ciclo de la carrera Ingenieria de Sistemas en la Universidad Autonoma del Peru.</p>
                                <p>Amante de python y Dota!! me gusta codear y estar aprendiendo nuevas cosas.</p>                                
                            </div>
                            <img src="img/team-2.jpg" alt="">
                        </div>
                        <div class="footer">
                            <ul>
                                <li><a href="https://www.facebook.com/jcg4rcia"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://github.com/jonathancg90"><i class="fa fa-github"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>  
                            </ul>
                        </div>
                    </div>
                </div> 
            
                <div class="col-sm-6 col-lg-3">
                    <div class="team-member">
                        <div class="header">
                            <span class="name">Diana Karolina</span>
                            <span class="position">Creative designer</span>
                        </div>
                        <div class="content">
                            <div class="info">
                                <p>Estudiante del 7 ciclo de la carrera Ingenieria de Sistemas en la Universidad Autonoma del Peru.</p>
                                <p>Amante de los diseños, dibujos y tecnologias como fireworks, corel Draw, photoshop, illutrator.</p>
                                <p>En tiempos libre, administro mi blog y subo algunas imagenes que hago.</p>
                                <p><a href="http://youcreativity.blogspot.com">Ir a mi blog!!</a></p>
                            </div>
                            <img src="img/team-3.jpg" alt="">
                        </div>
                        <div class="footer">
                            <ul>
                                <li><a href="https://www.facebook.com/ckt.karo?fref=ts"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="http://youcreativity.blogspot.com/"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
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
                                <p>Estudiante del 7mo ciclo de Ingenieria de Sistemas en la Universidad Autonoma del Peru.</p>
                            </div>
                            <img src="img/team-4.jpg" alt="">
                        </div>
                        <div class="footer">
                            <ul>
                                <li><a href="https://www.facebook.com/gustavo.pajuelopardo?fref=ts"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://github.com/gustavopp93"><i class="fa fa-github"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li> 
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
                    <h1 class="heading-large section-color-1">CONTACTANOS</h1>
                </div>
                <div class="col-sm-12"> 
                    <p class="text-large section-color-1">
                        ¿ Tienes alguna duda ? ¿ quieres saber mas de nosotros ? o ¿ tienes alguna propuesta ?  <br>
                        escribenos y le responderemos en el menor tiempo posible.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="cform" id="contact-form">
                        <div id="sendmessage">
                             Your message has been sent. Thank you!
                        </div>
                        {{ Form::open(array('url' => 'contact', 'method' => 'post')) }}
                            {{ Form::token() }}
                            <div class="row">
                                <div class="span6">
                                    <div class="field your-name">
                                        {{ Form::text('name', Input::old('name'), array('class'=>'cform-text', 'placeholder'=>'¿ Como te llamas ?')) }}                                        <div class="validation">
                                        {{ $errors->first('name', '<span class="text-error">:message</span>') }}
                                        </div>
                                    </div>
                                    <div class="field your-email">
                                        {{ Form::text('email', Input::old('email'), array('class'=>'cform-text', 'placeholder'=>'¿ Cual es tu correo ?')) }}                                        <div class="validation">
                                        {{ $errors->first('email', '<span class="text-error">:message</span>') }}
                                        </div>
                                    </div>
                                    <div class="field subject">
                                        {{ Form::text('subject', Input::old('subject'), array('class'=>'cform-text', 'placeholder'=>'¿ de que trata tu mensaje ?')) }}                                        <div class="validation">
                                        {{ $errors->first('subject', '<span class="text-error">:message</span>') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="span6">
                                    <div class="field message">
                                        {{ Form::textarea('message', Input::old('message'), array('class'=>'cform-textarea', 'placeholder'=>'Mensaje', 'maxlength'=>'250' )) }}                                        <div class="validation">
                                        {{ $errors->first('message', '<span class="text-error">:message</span>') }}
                                        </div>
                                    </div>
                                    {{ Form::submit('Enviar', array('class'=>'btn btn-theme pull-left')); }}
                                </div>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>
                <!-- ./span12 -->
            </div>
        </div>
    
    </section>
    <!-- End Contact Section -->

</div>
@stop

@section('script')
        <!-- Scripts Section -->
    <script src="js/jquery.1.10.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/index.js"></script>
    <script src="{{ URL::asset('js/angular.min.js') }}"></script>
    <!-- End Scripts Section -->
    {{ HTML::script('js/modules/home/app.js') }}
    {{ HTML::script('js/modules/home/controllers/projectController.js') }}
    {{ HTML::script('js/modules/home/factories/projectFactory.js') }}

    <script>
        angular.module('homeApp').value('homeUrls', {
            projectUrl: "{{ URL::route('api_projects'); }}"
        });

    </script>

@stop