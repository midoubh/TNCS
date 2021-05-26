<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}"><head>
    <title>Tn Code Source</title>
    <!-- animation --> 
    <link rel="stylesheet" href="{{ asset('welcasset/css/animate.css') }}">
    <!-- bootstrap --> 
    <link rel="stylesheet" href="{{ asset('welcasset/css/bootstrap.css') }}">
    <!-- et line icon --> 
    <link rel="stylesheet" href="{{ asset('welcasset/css/et-line-icons.css') }}">
    <!-- font-awesome icon -->
    <link rel="stylesheet" href="{{ asset('welcasset/css/font-awesome.min.css') }}">
    <!-- revolution slider -->
    <link rel="stylesheet" href="{{ asset('welcasset/css/extralayers.css') }}">
    <link rel="stylesheet" href="{{ asset('welcasset/css/settings.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('welcasset/css/magnific-popup.css') }}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('welcasset/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('welcasset/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('welcasset/css/full-slider.css') }}">
    <!-- text animation -->
    <link rel="stylesheet" href="{{ asset('welcasset/css/text-effect.css') }}">
    <!-- hamburger menu  -->
    <link rel="stylesheet" href="{{ asset('welcasset/css/menu-hamburger.css') }}">
    <!-- common -->
    <link rel="stylesheet" href="{{ asset('welcasset/css/style.css') }}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ asset('welcasset/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('asset1/css/util.css')}}">
	<link rel="stylesheet" href="{{ asset('asset1/css/main.css')}}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <!--[if IE]>
        <link rel="stylesheet" href="css/style-ie.css" />
    <![endif]-->
    <!--[if IE]>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
<style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style></head>

<body>
    <!-- navigation-->
    <nav class="navbar navbar-default navbar-fixed-top nav-transparent overlay-nav sticky-nav nav-white nav-border-bottom no-transition" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6"><a class="logo-light" href="#"><img alt="" src="welcasset/images/1618562828279_logo.png" class="logo" /></a><a class="logo-dark" href="#"><img alt="" src="welcasset/images/1618562828279_logo.png" class="logo" /></a></div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <div class="col-md-9 text-right">
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#slider" class="inner-link active">{{__('Home') }}</a> </li>
                                <li><a href="#features" class="inner-link">{{__('About') }}</a> </li>
                                <li><a href="#animated-tab" class="inner-link">{{__('Services') }}</a> </li>

<!--
                                <li class="dropdown panel">
                                    <a  href="#collapse2" class="dropdown-toggle collapsed" data-toggle="collapse2" data-parent="#accordion" data-hover="dropdown"> {{ strtoupper(app()->getLocale()) }}  <i class="fa fa-angle-down"></i></a>
                                     sub menu 
                                <ul id="collapse2" class="dropdown-menu">

                                    <li class="mega-menu-column">
                                           
                                            <ul>
                                                <li class="dropdown-header">  {{ __('Change Language') }}</li>
                                                @foreach(config('app.languages') as $langLocale => $langName)
                            <li><a href="{{ url()->current() }}?change_language={{ $langLocale }}"> {{ strtoupper($langLocale) }} ({{ $langName }})</a></li>
                                               
                              @endforeach 
                                            </ul>
                                    
                                    </li>
                                </ul>
                                    
                                </li>-->

                                <li><a href="#blog" class="inner-link">{{__('Offers') }}</a></li>
                                <li><a href="#contact-us" class="inner-link">Contact</a></li>
                                
                                @if (Route::has('login'))
                      
                    @auth
                    <li><a href="{{ route('clients.index') }}"  class="inner-link">{{ __('Dashboard') }}</a></li>
                    <li> <form method="POST" class="inner-link" action="{{ route('logout') }}">
                                                    @csrf
                                                    <a href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                                        {{ __('Log Out') }}
                                                    </a>
                                                     </form>
                                                </li>
                    @else
                    <li>  <a href="{{ route('login') }}"  class="inner-link">{{ __('Log in') }}</a></li>

                     
                    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        @foreach (Config::get('languages') as $lang => $language)
            @if ($lang != App::getLocale())
                    <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a>
            @endif
        @endforeach
        </div>
</li>
  
                    
    
                    @endauth
               
            @endif
            <!--<li>
            <div class=" sm:flex sm:items-center sm:ml-6">

            @if(count(config('app.languages')) > 1)
                  <div class="ml-auto relative">
                        <x-jet-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                         {{ strtoupper(app()->getLocale()) }}
                                         
                                    </button>
                                </span>
                            </x-slot>
                            <x-slot name="content">
                                <div class="w-60">-->
                                    <!-- Language Management -->
                                    <!--<div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Change Language') }}
                                    </div>-->

                                    <!-- Language Settings -->
                                   <!-- @foreach(config('app.languages') as $langLocale => $langName)
                                    <a href="{{ url()->current() }}?change_language={{ $langLocale }}">
                                    {{ strtoupper($langLocale) }} ({{ $langName }})
                                    </a>
                                    @endforeach
                               
                                    </div>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                        @endif  
            
            </li>-->
                            </ul>
                        </div>
                       
                        <!--/.nav-collapse --> 
                    </div>
                </div>
            </div>
        </nav>
   
    <!-- end navigation-->
    <!-- slider -->
    <section class="parallax1 parallax-fix full-screen no-padding scroll-to-down-white" onclick="scrollToDown()" id="slider">
    <div class="opacity-light bg-black"></div>
            <img class="parallax-background-img" src="welcasset/images/logonv.jpg" alt="" />
            <div class="container full-screen position-relative">
                <div class="slider-typography">
                    <div class="slider-text-middle-main">
                        <div class="slider-text-bottom slider-text-middle5 text-left">
                            <span class="slider-number " style="">1</span>
                            <span class="slider-title-big5 white-text">{{__('We believe in hard work')}}</span>
                            <span class="slider-subtitle5 white-text">{{__('We believe in design,')}}<br> {{__('strategy and web')}}<br> {{__('technology')}}</span><br>
                            <div class="separator-line bg-yellow no-margin-lr no-margin-top"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      <!-- end slider -->
    <!-- Features -->
    <section id="features" class="features animate slow-mo even fadeIn no-padding-bottom xs-onepage-section" data-anim-type="fadeIn" data-anim-delay="200">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12 text-center">
                        <h3 class="section-title">{{ __('About Tunisie Code Source')}} </h3>
                    </div>
                    <!-- end section title -->
                </div>
                <div class="row">
                    <!-- features grid -->
                    <!-- features item -->
                    <div class="col-md-4 col-sm-4 about-onepage">
                        <div class="col-md-3 col-sm-12 border-right about-onepage-number position-relative overflow-hidden sm-no-border-right xs-text-center">
                            <span class="about-onepage-number-default fast-yellow-text font-weight-100 position-absolute xs-position-inherit">01</span>
                            <span class="about-onepage-number-hover gray-text font-weight-100 position-absolute xs-display-none">01</span>
                        </div>
                        <div class="col-md-9 col-sm-12 about-onepage-text">
                            <div class="about-onepage-text-sub sm-no-margin-left xs-text-center">
                                <span class="black-text">{{__('Modernisation')}}</span>
                                <p class="text-med width-80 no-margin-bottom sm-width-100">{{__('Soyez modernes, Simplifiez vos affaires et surtout soyez compétitifs, soyez un entrepreneur qui façonne avec la technologie le futur.')}} </p>
                            </div>
                        </div>
                    </div>
                    <!-- end features item -->
                    <!-- features item -->
                    <div class="col-md-4 col-sm-4 about-onepage xs-margin-top-ten">
                        <div class="col-md-3 col-sm-12 border-right about-onepage-number position-relative overflow-hidden sm-no-border-right xs-text-center">
                            <span class="about-onepage-number-default fast-yellow-text font-weight-100 position-absolute xs-position-inherit">02</span>
                            <span class="about-onepage-number-hover gray-text font-weight-100 position-absolute xs-display-none">02</span>
                        </div>
                        <div class="col-md-9 col-sm-12 about-onepage-text">
                            <div class="about-onepage-text-sub sm-no-margin-left xs-text-center">
                                <span class="black-text">{{__('Efficacité')}}</span>
                                <p class="text-med width-80 no-margin-bottom sm-width-100">{{__('Sans une évolution constante votre entreprise pourrait laisser filer des opportunités d’améliorer son efficacité et ses performances, ayez confiance en nous pour traverser des siècles vers l’autre bout de votre ambition. ')}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- end features item -->
                    <!-- features item -->
                    <div class="col-md-4 col-sm-4 about-onepage xs-margin-top-ten">
                        <div class="col-md-3 col-sm-12 border-right about-onepage-number position-relative overflow-hidden sm-no-border-right xs-text-center">
                            <span class="about-onepage-number-default fast-yellow-text font-weight-100 position-absolute xs-position-inherit">03</span>
                            <span class="about-onepage-number-hover gray-text font-weight-100 position-absolute xs-display-none">03</span>
                        </div>
                        <div class="col-md-9 col-sm-12 about-onepage-text">
                            <div class="about-onepage-text-sub sm-no-margin-left xs-text-center">
                                <span class="black-text">{{__('Optimisation')}}</span>
                                <p class="text-med width-80 no-margin-bottom sm-width-100">{{__('Grâce au développement de solutions web, Cloud et logicielles notre team crée des solutions technologiques sur mesure pour simplifier et optimiser vos affaires.')}} </p>
                            </div>
                        </div>
                    </div>
                    <!-- end features item -->
                    <!-- end features grid -->
                </div>
                <div class="row"><div class="col-md-12 col-sm-12"><div class="wide-separator-line margin-eight  no-margin-lr"></div></div></div>
            </div>
        </section>
     <!-- end features section -->
    
    <!-- end featured projects section -->
<!-- Key Person -->
    <section id="key-person" class="no-padding-top animate slow-mo even fadeIn" data-anim-type="fadeIn" data-anim-delay="200">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 center-col text-center">
                        <h4 class="gray-text">{{__('Notre expertise au service de votre besoin autant que vous pensez que c’est imaginaire Tunisie code source met en votre disposition Une équipe Dynamique, Rapide, Créative et Efficace')}}
                        </h4>
                    </div>
                </div>
                <div class="row margin-six">
                    <div class="col-md-4 col-xs-4 bottom-margin text-center">
                        <div class="key-person">
                            <div class="key-person-img"><img src="welcasset/images/ing.jpg" alt=""></div>
                            <div class="key-person-details"> <span class="person-name black-text">{{__('Des ingénieurs spécialistes')}} </span> <span class="person-post"></span>
                                <div class="separator-line bg-yellow"></div>
                                <div class="person-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-google-plus"></i></a></div>
                                <p>{{__('Construire des sites adaptés en utilisant les dernières technologies du Web comme HTML5, CSS3 et JavaScript.')}}<br> {{__('Axées sur l innovation et l automatisation.')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-4 bottom-margin text-center">
                        <div class="key-person">
                            <div class="key-person-img"><img src="welcasset/images/web.jpg" alt=""></div>
                            <div class="key-person-details"> <span class="person-name black-text">{{__('Des web-designers')}}</span> <span class="person-post"></span>
                                <div class="separator-line bg-yellow"></div>
                                <div class="person-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-google-plus"></i></a></div>
                                <p>{{__('Solutions sur mesure pour atteindre vos objectifs .')}}<br>{{ __('Concevoir votre site avec des tendances modernes et techniques à l esprit.')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-4 text-center">
                        <div class="key-person">
                            <div class="key-person-img"><img src="welcasset/images/jur.jpg" alt=""></div>
                            <div class="key-person-details"> <span class="person-name black-text">{{__(' Des spécialistes en administration juridique et des gestionnaires')}}</span> <span class="person-post"></span>
                                <div class="separator-line bg-yellow"></div>
                                <div class="person-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-google-plus"></i></a></div>
                                <p>{{__('Gestionnaires de projet avec expertise technique.')}}<br>{{__('Mise en place des solutions informatique de gestion pour améliorer l administration de votre entreprise et traiter rapidement les problématiques qui se présentent.')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section id="new-project" class="new-project no-padding-top">
            <div class="container">
                <div class="row center-col text-center">
                    <h5>{{__('We would love to hear about your project.')}}</h5>
                    <a href="#contact-us" class="btn highlight-button-black-border margin-four no-margin-bottom inner-link">{{__('Start Now')}}</a>
                </div>
            </div>
    </section>
    <section id="approach" class="approach bg-black">
            <div id="myCarousel3" class="carousel slide carousel-slide"  tyle="position: relative; height: 970.300px;"> 
                <!-- Wrapper for Slides -->
                <div class="container" >
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h3 class="section-title white-text no-padding-bottom">{{ __('What we do')}}</h3>
                        </div>
                    </div>
                    <div class="carousel-inner margin-seven no-margin-bottom">
                        <div class="item active"> 
                            <div class="row">
                                <div class="col-md-3 col-sm-6 text-center margin-four no-margin-top"> <i class="icon-camera medium-icon white-text"></i><h5 class="white-text margin-ten no-margin-bottom">Logiciel sur mesure</h5><span class="approach-details">Les logiciels sur le marché ne répondent pas à vos besoins et à votre offre? Nous bâtissons des outils personnalisés comme des CRM, ERP, SaaS,gestionnaires de base de données, outils de productivité et bien plus encore.</span></div>
                                <div class="col-md-3 col-sm-6 text-center margin-four no-margin-top"> <i class="icon-target medium-icon white-text"></i><h5 class="white-text margin-ten no-margin-bottom">Application Web</h5><span class="approach-details">Les possibilités du web sont pratiquement infinies. Que ce soit pour développer un site aux fonctionnalités complexes, un intranet ou un portail nous pouvons imaginer et développer une solution web ou cloud qui répondra à vos enjeux d’affaires.</span></div>
                                <div class="col-md-3 col-sm-6 text-center margin-four no-margin-top"> <i class="icon-megaphone medium-icon white-text"></i><h5 class="white-text margin-ten no-margin-bottom">Outil de gestion sur mesure</h5><span class="approach-details">Optimisez vos opérations grâce à des outils de gestion et des tableaux de bord bâtis sur mesure. Intelligents et intuitifs, ils permettront à vos équipes de focaliser sur tout le reste, mais aussi de gagner du temps.</span></div>
                                <div class="col-md-3 col-sm-6 text-center margin-four no-margin-top"> <i class="icon-envelope medium-icon white-text"></i><h5 class="white-text margin-ten no-margin-bottom">Application mobile </h5><span class="approach-details">Avec la démocratisation des appareils mobiles comme les Smartphones, les tablettes et les dispositifs portables, nous  développons des applications mobiles afin d’améliorer la facilité d’accès à vos informations ainsi qu’a votre services</span></div>
                            </div>
                        </div>
                        <div class="item"> 
                            <div class="row">
                            <div class="col-md-3 col-sm-6 text-center margin-four no-margin-top"> <i class="icon-camera medium-icon white-text"></i><h5 class="white-text margin-ten no-margin-bottom">Logiciel sur mesure</h5><span class="approach-details">Les logiciels sur le marché ne répondent pas à vos besoins et à votre offre? Nous bâtissons des outils personnalisés comme des CRM, ERP, SaaS,gestionnaires de base de données, outils de productivité et bien plus encore.</span></div>
                                <div class="col-md-3 col-sm-6 text-center margin-four no-margin-top"> <i class="icon-target medium-icon white-text"></i><h5 class="white-text margin-ten no-margin-bottom">Application Web</h5><span class="approach-details">Les possibilités du web sont pratiquement infinies. Que ce soit pour développer un site aux fonctionnalités complexes, un intranet ou un portail nous pouvons imaginer et développer une solution web ou cloud qui répondra à vos enjeux d’affaires.</span></div>
                                <div class="col-md-3 col-sm-6 text-center margin-four no-margin-top"> <i class="icon-megaphone medium-icon white-text"></i><h5 class="white-text margin-ten no-margin-bottom">Outil de gestion sur mesure</h5><span class="approach-details">Optimisez vos opérations grâce à des outils de gestion et des tableaux de bord bâtis sur mesure. Intelligents et intuitifs, ils permettront à vos équipes de focaliser sur tout le reste, mais aussi de gagner du temps.</span></div>
                                <div class="col-md-3 col-sm-6 text-center margin-four no-margin-top"> <i class="icon-envelope medium-icon white-text"></i><h5 class="white-text margin-ten no-margin-bottom">Application mobile </h5><span class="approach-details">Avec la démocratisation des appareils mobiles comme les Smartphones, les tablettes et les dispositifs portables, nous  développons des applications mobiles afin d’améliorer la facilité d’accès à vos informations ainsi qu’a votre services</span></div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Controls --> 
                <a class="left carousel-control" href="#myCarousel3" data-slide="prev"> <img src="welcasset/images/arrow-pre.png" alt=""/> </a> <a class="right carousel-control" href="#myCarousel3" data-slide="next"> <img src="welcasset/images/arrow-next.png" alt=""/> </a>
            </div>
        </section>

    <!-- service section -->
    <section id="animated-tab" class="xs-onepage-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="section-title">Services</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="col-md-12 text-center center-col no-padding"> 
                            <!-- Tab nav -->
                            <ul class="nav nav-tabs" style="position: relative; height: 150.125px;">
                                <li class="nav active"><a href="#testimonials1" data-toggle="tab"><span><i class="icon-tools"></i></span></a></li>
                                <li class="nav"><a href="#testimonials2" data-toggle="tab"><span><i class="icon-laptop"></i></span></a></li>
                                <li class="nav"><a href="#testimonials3" data-toggle="tab"><span><i class="icon-target"></i></span></a></li>
                                <li class="nav"><a href="#testimonials4" data-toggle="tab"><span><i class="icon-camera"></i></span></a></li>
                                <li class="nav"><a href="#testimonials5" data-toggle="tab"><span><i class="icon-hotairballoon"></i></span></a></li>
                                <li class="nav"><a href="#testimonials6" data-toggle="tab"><span><i class="icon-cloud"></i></span></a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content" >
                                <div id="testimonials1" class="col-md-9 col-sm-12 text-center center-col tab-pane fade in active" > 
                                    <div class="tab-pane fade in">
                                        <div class="row"> 
                                            <div class="col-md-6 col-sm-12 text-left gray-text">
                                                <h5>Maintenance et assistance</h5>
                                                <div class="separator-line bg-yellow no-margin-lr"></div>
                                               <!-- <p class="text-large margin-five margin-right-ten">We believe in the power of design, the strength of strategy, and the ability of technology to transform businesses and lives.</p>-->
                                            </div>
                                            <div class="col-md-6 col-sm-12 text-left text-med gray-text">
                                                <p class="text-uppercase">Gagnez en sérénité et en efficacité en déléguant la maintenance de votre site internet à des professionnels.<br>Si vous avez déjà un site, nous proposons des forfaits de maintenance et d’assistance.</p>
                                            </div>
                                        </div>
                                        <div class="row"> 
                                            <div class="wide-separator-line"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 text-center service-year black-text">
                                                <strong>2021</strong> {{ __('- Graphic Design :We have just started')}}  
                                            </div>
                                        </div>
                                        <div class="row"> 
                                            <div class="wide-separator-line"></div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section"><span class="counter-number">10</span> <span class="counter-title">{{__('Brochure Design')}}</span> </div>
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section"><span class="counter-number">12</span> <span class="counter-title">{{__('Packaging Design')}}</span> </div>
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section"><span class="counter-number">58</span> <span class="counter-title">{{__('Poster Design')}}</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="testimonials2" class="col-md-9 col-sm-12 text-center center-col tab-pane fade in"> 
                                    <div class="tab-pane fade in"> 
                                        <div class="row"> 
                                            <div class="col-md-6 col-sm-12 text-left gray-text">
                                                <h5>Référencement</h5>
                                                <div class="separator-line bg-yellow no-margin-lr"></div>
                                               <!-- <p class="text-large margin-five margin-right-ten">Every website we design is bespoke, fuelled with years of industry experience. Proudly designed in the World.</p>-->
                                            </div>
                                            <div class="col-md-6 col-sm-12 text-left text-med gray-text">
                                                <p class="text-uppercase">Créer de la visibilité et de la notoriété de votre site web sur tout  les moteurs de recherche, multiplier le nombre de visites de son site internet,  communiquer en ligne auprès d’une nouvelle cible d'internautes , accroître votre chiffre d’affaires web au travers du commerce en ligne ou de la publicité en ligne, vous pouvez aussi nettoyer en cas de besoin la e-réputation d'une personne physique ou morale.</p>
                                            </div>
                                        </div>
                                        <div class="row"> 
                                            <div class="wide-separator-line"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 text-center service-year black-text">
                                                <strong>2021</strong> {{ __('- Nous réalisons plusieurs audits pour votre site afin d’établir une véritable stratégie de référencement naturel ')}}                                            </div>
                                        </div>
                                        <div class="row"> 
                                            <div class="wide-separator-line"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section"><span class="counter-number">10</span> <span class="counter-title">{{__('Référencement site vitrine')}}</span> </div>
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section"><span class="counter-number">10</span> <span class="counter-title">{{__('Référencement E-commerce')}}</span> </div>
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section"><span class="counter-number">10</span> <span class="counter-title">{{__('Audit de référencement')}}</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="testimonials3" class="col-md-9 col-sm-12 text-center center-col tab-pane fade in"> 
                                    <div class="tab-pane fade in"> 
                                        <div class="row"> 
                                            <div class="col-md-6 col-sm-12 text-left gray-text">
                                                <h5>Blockchain</h5>
                                                <div class="separator-line bg-yellow no-margin-lr"></div>
                                               <!-- <p class="text-large margin-five margin-right-ten">We create meaningful experiences through innovation in storytelling, technology, entertainment and products.</p>-->
                                            </div>
                                            <div class="col-md-6 col-sm-12 text-left text-med gray-text">
                                                <p class="text-uppercase">La blockchain, tout le monde en parle, peu de monde l’a vu, et pourtant, les projets d’utilisation sont nombreux et variés, un peu dans tous les secteurs d’activités. C’est d’ailleurs pour cela que cette technologie dispose de potentiels de développement très importants et avec notre compétence votre expérience sera plus bénéfique </p>
                                            </div>
                                        </div>
                                        <div class="row"> 
                                            <div class="wide-separator-line"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 text-center service-year black-text">
                                                <strong>{{ __('Enjoying new technologies')}}</strong> {{ __('- Algorand')}}
                                            </div>
                                        </div>
                                        <div class="row"> 
                                            <div class="wide-separator-line"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section"><span class="counter-number">08</span> <span class="counter-title">{{__('Digital currency')}}</span> </div>
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section"><span class="counter-number">10</span> <span class="counter-title">{{__('Smart Contract')}}</span> </div>
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section"><span class="counter-number">50</span> <span class="counter-title">{{__('E-commerce')}}</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="testimonials4" class="col-md-9 col-sm-12 text-center center-col tab-pane fade in"> 
                                    <div class="tab-pane fade in"> 
                                        <div class="row"> 
                                            <div class="col-md-6 col-sm-12 text-left gray-text">
                                                <h5>Gestion de projet en ligne</h5>
                                                <div class="separator-line bg-yellow no-margin-lr"></div>
                                               <!-- <p class="text-large margin-five margin-right-ten">A first impression can make or break you. we can help you find the precise message to clearly.</p>-->
                                            </div>
                                            <div class="col-md-6 col-sm-12 text-left text-med gray-text">
                                                <p class="text-uppercase">La coordination et le maîtrise des dates de début et de fin,  dans le but d’atteindre un objectif conforme à des exigences spécifiques, Tunisie code source vous épargne toute une équipe et prends en charge la gestion de votre projet en ligne.</p>
                                            </div>
                                        </div>
                                        <div class="row"> 
                                            <div class="wide-separator-line"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 text-center service-year black-text">
                                                <strong>2018 to 2021</strong> - le management de projet contribue à l'amélioration de l'organisation de l'entreprise
                                            </div>
                                        </div>
                                        <div class="row"> 
                                            <div class="wide-separator-line"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section"><span class="counter-number">12</span> <span class="counter-title">La phase d'avant-projet ou de cadrage</span> </div>
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section"><span class="counter-number">14</span> <span class="counter-title">La conception</span> </div>
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section"><span class="counter-number">25</span> <span class="counter-title"> L’exécution</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="testimonials5" class="col-md-9 col-sm-12 text-center center-col tab-pane fade in"> 
                                    <div class="tab-pane fade in"> 
                                        <div class="row"> 
                                            <div class="col-md-6 col-sm-12 text-left gray-text">
                                                <h5>Modernisation de logiciel</h5>
                                                <div class="separator-line bg-yellow no-margin-lr"></div>
                                             <!--   <p class="text-large margin-five margin-right-ten">We believe in the power of design, the strength of strategy, and the ability of technology to transform businesses and lives.</p>-->
                                            </div>
                                            <div class="col-md-6 col-sm-12 text-left text-med gray-text">
                                                <p class="text-uppercase">Il n’est pas rare de trouver des logiciels créés il y a plus de 15 ans qui ont été réparés et modifiés à de multiples reprises. Évitez que vos activités critiques dépendent d’un logiciel obsolète.Augmentez votre productivité et sécuriser vos opérations en modernisant vos logiciels.</p>
                                            </div>
                                        </div>
                                        <div class="row"> 
                                            <div class="wide-separator-line"></div>
                                        </div>
                                       <div class="row">
                                            <div class="col-md-12 col-sm-12 text-center service-year black-text">
                                                <strong></strong> - Conservez la valeur de votre parc applicatif
                                            </div>
                                        </div>
                                        <div class="row"> 
                                            <div class="wide-separator-line"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section"><span class="counter-number">18</span> <span class="counter-title">Modernisez votre application grâce à nouvelles technologies</span> </div>
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section"><span class="counter-number">23</span> <span class="counter-title">Migration ou refonte de votre application</span> </div>
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section"><span class="counter-number">15</span> <span class="counter-title">Maîtrise ou réduction des coûts de maintenance</span> </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="testimonials6" class="col-md-9 col-sm-12 text-center center-col tab-pane fade in"> 
                                    <div class="tab-pane fade in"> 
                                        <div class="row"> 
                                            <div class="col-md-6 col-sm-12 text-left gray-text">
                                                <h5>Interconnexion d’applications et de systèmes</h5>
                                                <div class="separator-line bg-yellow no-margin-lr"></div>
                                                <p class="text-large margin-five margin-right-ten"></p>
                                            </div>
                                            <div class="col-md-6 col-sm-12 text-left text-med gray-text">
                                                <p class="text-uppercase">L’intelligence d’affaires repose sur le développement d’un écosystème technologique efficace. Améliorer l’accessibilité à vos données, une façon simple d’optimiser vos décisions et opérations.</p>
                                            </div>
                                        </div>
                                        <div class="row"> 
                                            <div class="wide-separator-line"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 text-center service-year black-text">
                                                <strong>2000 to 2014</strong> - Social Marketing
                                            </div>
                                        </div>-->
                                        <div class="row"> 
                                            <div class="wide-separator-line"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section"><span class="counter-number">658</span> <span class="counter-title">Facebook marketing</span> </div>
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section"><span class="counter-number">380</span> <span class="counter-title">Youtube marketing</span> </div>
                                            <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section"><span class="counter-number">980</span> <span class="counter-title">Google Adsense</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- end service section -->

    <section id="piechart" class="bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 text-center center-col">
                        <div class="col-md-3 col-sm-3">
                            <div class="chart-percent"><span class="chart white-text" data-percent="75"><span class="percent"></span> </span></div>
                            <div class="chart-text">
                                <h5 class="white-text">{{ __('Web Developer')}}</h5>
                                <p>Expert, 3 years</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="chart-percent"><span class="chart white-text" data-percent="88"><span class="percent"></span></span></div>
                            <div class="chart-text">
                                <h5 class="white-text">{{ __('Web Design')}}</h5>
                                <p>Expert, 2 years</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="chart-percent"><span class="chart white-text" data-percent="90"><span class="percent"></span> </span></div>
                            <div class="chart-text">
                                <h5 class="white-text">Blockchain</h5>
                                <p>Expert, 1 years</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="chart-percent"><span class="chart white-text" data-percent="96"><span class="percent"></span> </span></div>
                            <div class="chart-text">
                                <h5 class="white-text">Referencement</h5>
                                <p>Expert, 2 years</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
<!--
    <section id="portfolio" class="grid-wrap work-4col margin-top-section no-margin-top border-top no-padding-bottom xs-onepage-section">
            <div class="container-fluid" >
                <div class="row no-padding"> 
                    <div class="col-md-12 text-center">
                        <h3 class="section-title no-padding-bottom">Work</h3>
                    </div>
                    <div class="col-md-3 margin-three center-col text-center">
                        <h4 class="gray-text">We are technology leaders and have crafted intuitive and lasting online and mobile experiences for hundreds of associations and non-profits.</h4>
                    </div>-->
                    <!-- ./ Heading div-->
                  <!-- <div class="col-md-12 text-center" >
                        <div class="text-center">
                            <ul class="portfolio-filter nav nav-tabs">
                                <li class="nav active"><a href="#" data-filter="*">All</a></li>
                                <li class="nav"><a href="#" data-filter=".magento">Magento</a></li>
                                <li class="nav"><a href="#" data-filter=".jquery">Jquery</a></li>
                                <li class="nav"><a href="#" data-filter=".wordpress">Wordpress</a></li>
                                <li class="nav"><a href="#" data-filter=".html">HTML</a></li>
                            </ul>
                        </div>
                    </div>-->
                    <!-- ./ Filter Head div-->
                   <!-- <div class="grid-gallery overflow-hidden" >
                        <div class="tab-content">
                            <ul class="masonry-items  grid">
                                <li class="html jquery">
                                    <figure>
                                        <div class="gallery-img"><a href="onepage-single-project-page1.html" class="simple-ajax-popup-align-top"><img src="http://placehold.it/800x600" alt=""></a></div>
                                        <figcaption>
                                            <h3><a href="onepage-single-project-page1.html" class="simple-ajax-popup-align-top">Herbal Beauty Salon</a></h3>
                                            <p>Ajax popup - Style #1</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="html magento wordpress">
                                    <figure>
                                        <div class="gallery-img"><a href="onepage-single-project-page2.html" class="simple-ajax-popup-align-top"><img src="http://placehold.it/800x1200" alt=""></a></div>
                                        <figcaption>
                                            <h3><a href="onepage-single-project-page2.html" class="simple-ajax-popup-align-top">Tailoring Interior </a></h3>
                                            <p>Ajax popup - Style #2</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="jquery magento lightbox-gallery">
                                    <figure>
                                        <div class="gallery-img"><a href="http://placehold.it/1200x800" title=""><img src="http://placehold.it/800x600" alt=""></a>
                                            <a href="http://placehold.it/1200x800" title=""></a>
                                            <a href="http://placehold.it/1200x800" title=""></a>
                                        </div>
                                        <figcaption>
                                            <h3>Pixflow Studio</h3>
                                            <p>Lightbox gallery</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="wordpress jquery magento">
                                    <figure>
                                        <div class="gallery-img"><a href="onepage-single-project-page3.html" class="simple-ajax-popup-align-top"><img src="http://placehold.it/800x1200" alt=""></a></div>
                                        <figcaption>
                                            <h3><a href="onepage-single-project-page3.html" class="simple-ajax-popup-align-top">Kaya Skin Care</a></h3>
                                            <p>Ajax popup - Style #3</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="html wordpress">
                                    <figure>
                                        <div class="gallery-img"><a href="onepage-single-project-page4.html" class="simple-ajax-popup-align-top"><img src="http://placehold.it/800x600" alt=""></a></div>
                                        <figcaption>
                                            <h3><a href="onepage-single-project-page5.html" class="simple-ajax-popup-align-top">Third Eye Glasses</a></h3>
                                            <p>Ajax popup - Style #4</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li class="html wordpress magento jquery">
                                    <figure>
                                        <div class="gallery-img"><a href="onepage-single-project-page5.html" class="simple-ajax-popup-align-top"><img src="http://placehold.it/800x600" alt=""></a></div>
                                        <figcaption>
                                            <h3><a href="onepage-single-project-page1.html" class="simple-ajax-popup-align-top">Rubber Studio</a></h3>
                                            <p>Ajax popup - Style #5</p>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
    </section>-->
   <section id="work-process" class="work-process wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center work-process-sub position-relative overflow-hidden sm-margin-bottom-eight wow fadeIn">
                        <div class="work-process-text">
                            <span class="work-process-number font-weight-100 display-block">01</span>
                            <span class="text-uppercase letter-spacing-2 font-weight-600 black-text">{{ __('Strategy')}}</span>
                            <div class="separator-line-thick bg-mid-gray margin-three"></div>
                        </div>
                        <div class="work-process-details position-absolute display-block">
                            <i class="icon-chat medium-icon fast-yellow-text display-block"></i>
                            <span class="text-small text-uppercase">repérer son espace de compétition<br> La première étape de l’analyse stratégique consiste pour l’entreprise à comprendre qui elle est et où elle est</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center work-process-sub position-relative overflow-hidden sm-margin-bottom-eight wow fadeIn">
                        <div class="work-process-text">
                            <span class="work-process-number font-weight-100 display-block">02</span>
                            <span class="text-uppercase letter-spacing-2 font-weight-600 black-text">{{ __('Planning')}}</span>
                            <div class="separator-line-thick bg-mid-gray margin-three"></div>
                        </div>
                        <div class="work-process-details position-absolute display-block">
                            <i class="icon-toolbox medium-icon fast-yellow-text display-block"></i>
                            <span class="text-small text-uppercase">Comment gérer un projet informatique ?<br> Étapes, conseils et outils</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center work-process-sub position-relative overflow-hidden wow fadeIn">
                        <div class="work-process-text">
                            <span class="work-process-number font-weight-100 display-block">03</span>
                            <span class="text-uppercase letter-spacing-2 font-weight-600 black-text">{{ __('Development ')}}</span>
                            <div class="separator-line-thick bg-mid-gray margin-three"></div>
                        </div>
                        <div class="work-process-details position-absolute display-block">
                            <i class="icon-desktop medium-icon fast-yellow-text display-block"></i>
                            <span class="text-small text-uppercase">un juste équilibre entre développement et innovation<br></span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center work-process-sub position-relative overflow-hidden wow fadeIn">
                        <div class="work-process-text">
                            <span class="work-process-number font-weight-100 display-block">04</span>
                            <span class="text-uppercase letter-spacing-2 font-weight-600 black-text">{{ __('Lancement ')}}</span>
                            <div class="separator-line-thick bg-mid-gray margin-three"></div>
                        </div>
                        <div class="work-process-details position-absolute display-block">
                            <i class="icon-hotairballoon medium-icon fast-yellow-text display-block"></i>
                            <span class="text-small text-uppercase"> intégrant une conception rigoureuse en accord avec le cahier des charges <br>une programmation de qualité avec l'exécution de tests techniques</span>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section id="blog" class="xs-onepage-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="section-title">NOS offres</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="blog-post">
                            <div class="blog-post-images"><a href="#"><img src="welcasset/images/site.jpg" alt=""></a></div>
                            <div class="post-details">
                                <a href="blog-single-full-width.html" class="post-title"></a>
                                <span class="post-author"></span>
                                <p>Si vous êtes à la recherche d'une agence Web pour la Conception de votre site Web, le développement d'une application Web, ou la création de votre Boutique en ligne de votre entreprise ou de votre organisation.<br>nous sommes capables de répondre à cette demande sans problème et nous dépasserons assurément vos attentes</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="blog-post">
                            <div class="blog-post-images"><a href="#"><img src="welcasset/images/cle.jpg"  alt=""></a></div>
                            <div class="post-details">
                                <a href="blog-single-full-width.html" class="post-title"></a>
                                <span class="post-author"></span>
                                <p>Êtes-vous intéressé pour un système moderne, performant et facile à maintenir?<br>Conception Web <br>Un produit clé en main<br>Un système pour gérer vous-même l'information. Pour changer facilement chaque détail, les images ou tout simplement pour avoir le contrôle.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
    </section>
    <section id="contact-us" class="xs-onepage-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center no-padding">
                        <h3 class="section-title">{{__('Contact Us')}}</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9 text-center center-col">
                        <div class="col-md-4 col-sm-4 text-center"><i class="icon-phone medium-icon black-text"></i><h6 class="black-text margin-two no-margin-bottom">123-456-7890</h6></div>
                        <div class="col-md-4 col-sm-4 text-center"><i class="icon-map-pin medium-icon black-text"></i><h6 class="black-text margin-two no-margin-bottom">Victoria, United States</h6></div>
                        <div class="col-md-4 col-sm-4 text-center"><i class="icon-envelope medium-icon black-text"></i><h6 class="black-text margin-two no-margin-bottom"><a href="mailto:no-reply@domain.com" class="black-text">no-reply@domain.com</a></h6></div>
                    </div>
                </div>
                <div class="row">
                    <!-- form -->
                    <form id="contactusform" action="{{ route('contact.store') }}" method="post">
                    {{csrf_field()}}
                        <div class="col-md-10 col-sm-12 center-col">
                            <div class="row"><div class="col-md-12 col-sm-12"><div class="wide-separator-line margin-ten"></div></div>
                                <div class="col-md-12 col-sm-12"><div id="success"></div></div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <input name="name" type="text"  placeholder="{{__('Your Name')}}" />
                                <input name="email" type="text"  placeholder="{{__('Your email')}}"  />
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <textarea name="comment"  placeholder="{{__('Your Message')}}" ></textarea>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="col-md-6 col-sm-6 no-padding-left"><span class="required">{{__('*Please complete all fields correctly')}}</span></div>
                                <div class="col-md-3 col-sm-6 f-right no-padding-right"><input type="submit" id="contact-us-button" name="send message" type="button" value="{{__('send message')}}" class="btn btn-black no-margin-top f-right no-margin-lr"></div>
                            </div>
                        </div>
                    </form>
                    <!-- end form -->
                </div>
            </div>
    </section>


        
    <!-- footer -->
    <footer>
        <div class=" bg-white footer-top">
            <div class="container">
                <div class="row margin-four">
                    <!-- phone -->
                    <div class="col-md-4 col-sm-4 text-center"><i class="icon-phone small-icon black-text"></i><h6 class="black-text margin-two no-margin-bottom">00216-71-789-25</h6></div>
                    <!-- end phone -->
                    <!-- address -->
                    <div class="col-md-4 col-sm-4 text-center"><i class="icon-map-pin small-icon black-text"></i><h6 class="black-text margin-two no-margin-bottom">{{__('Lac 2, Tunisia')}}</h6></div>
                    <!-- end address -->
                    <!-- email -->
                    <div class="col-md-4 col-sm-4 text-center"><i class="icon-envelope small-icon black-text"></i><h6 class="margin-two no-margin-bottom"><a href="mailto:no-reply@domain.com" class="black-text">contact@tncs.com</a></h6></div>
                    <!-- end email -->
                </div>
            </div>
        </div>
        <div class="container onepage-footer-middle">
            <div class="row">
                <div class="col-md-12 col-sm-12 footer-social text-right text-center">
                    <!-- social media link -->
                    <a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                    <a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                    <a target="_blank" href="https://plus.google.com"><i class="fa fa-google-plus"></i></a>
                    <a target="_blank" href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a>
                    <a target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
                    <a target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                    <!-- end social media link -->
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark-gray footer-bottom">
            <div class="container">
                <div class="row margin-three">
                    <!-- copyright -->
                    <div class="col-md-6 col-sm-6 col-xs-12 copyright text-left letter-spacing-1 xs-text-center xs-margin-bottom-one">
                      
                    </div>
                    <!-- end copyright -->
                    <!-- logo -->
                    <div class="col-md-6 col-sm-6 col-xs-12 footer-logo text-right xs-text-center">
                        <a href="index.html"><img src="welcasset/images/1618562828279_logo.png" alt=""></a>
                    </div>
                    <!-- end logo -->
                </div>
            </div>      
        </div>
        <!-- scroll to top --> 
        <a href="javascript:;" class="scrollToTop" style="display: none;"><i class="fa fa-angle-up"></i></a> 
        <!-- scroll to top End... --> 
    </footer>
    <!-- end footer -->

    <!-- javascript libraries / javascript files set #2 --> 
    <script type="text/javascript" src="{{ asset('welcasset/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('welcasset/js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('welcasset/js/bootstrap.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('welcasset/js/jquery.easing.1.3.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('welcasset/js/skrollr.min.js') }}"></script>  
    <script type="text/javascript" src="{{ asset('welcasset/js/jquery.viewport.mini.js') }}"></script>  
    <script type="text/javascript" src="{{ asset('welcasset/js/smooth-scroll.js') }}"></script>
    <!-- jquery appear -->
    <script type="text/javascript" src="{{ asset('welcasset/js/jquery.appear.js') }}"></script>
    <!-- animation -->
    <script type="text/javascript" src="{{ asset('welcasset/js/wow.min.js') }}"></script>
    <!-- page scroll -->
    <script type="text/javascript" src="{{ asset('welcasset/js/page-scroll.js') }}"></script>
    <!-- easy piechart-->
    <script type="text/javascript" src="{{ asset('welcasset/js/jquery.easypiechart.js') }}"></script>
    <!-- parallax -->
    <script type="text/javascript" src="{{ asset('welcasset/js/jquery.parallax-1.1.3.js') }}"></script>
    <!--portfolio with shorting tab --> 
    <script type="text/javascript" src="{{ asset('welcasset/js/jquery.isotope.min.js') }}"></script> 
    <!-- owl slider  -->
    <script type="text/javascript" src="{{ asset('welcasset/js/owl.carousel.min.js') }}"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            autoplay: true;
            autoplayHoverPause: true;
            items 2,
            nav: true;
            dots:true;
            
        })
    </script>
    <!-- magnific popup  -->
    <script type="text/javascript" src="{{ asset('welcasset/js/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('welcasset/js/popup-gallery.js') }}"></script>
    <!-- text effect  -->
    <script type="text/javascript" src="{{ asset('welcasset/js/text-effect.js') }}"></script>
    <!-- revolution slider  -->
    <script type="text/javascript" src="{{ asset('welcasset/js/jquery.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('welcasset/js/jquery.revolution.js') }}"></script>
    <!-- counter  -->
    <script type="text/javascript" src="{{ asset('welcasset/js/counter.js') }}"></script>
    <!-- countTo -->
    <script type="text/javascript" src="{{ asset('welcasset/js/jquery.countTo.js') }}"></script>
    <!-- fit videos  -->
    <script type="text/javascript" src="{{ asset('welcasset/js/jquery.fitvids.js') }}"></script>
    <!-- imagesloaded  -->
    <script type="text/javascript" src="{{ asset('welcasset/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- hamburger menu-->
    <script type="text/javascript" src="{{ asset('welcasset/js/classie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('welcasset/js/hamburger-menu.js') }}"></script>
    <!-- one page navigation --> 
    <script type="text/javascript" src="{{ asset('welcasset/js/one-page-main.js') }}"></script>
    <!-- setting --> 
    <script type="text/javascript" src="{{ asset('welcasset/js/main.js') }}"></script>
</body>
</html>