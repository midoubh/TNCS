<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Tunisie Code Source</title>
        <meta name="description" content="H-Code - A premium portfolio template from ThemeZaa">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('welcasset/images/favicon.png')}}">
        <link rel="apple-touch-icon" href="{{ asset('welcasset/images/apple-touch-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('welcasset/images/apple-touch-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('welcasset/images/apple-touch-icon-114x114.png')}}">
        <!-- animation --> 
        <link rel="stylesheet" href="{{ asset('welcasset/css/animate.css')}}" />
        <!-- bootstrap --> 
        <link rel="stylesheet" href="{{ asset('welcasset/css/bootstrap.css')}}" />
        <!-- et line icon --> 
        <link rel="stylesheet" href="{{ asset('welcasset/css/et-line-icons.css')}}" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="{{ asset('welcasset/css/font-awesome.min.css')}}" />
        <!-- revolution slider -->
        <link rel="stylesheet" href="{{ asset('welcasset/css/extralayers.css')}}" />
        <link rel="stylesheet" href="{{ asset('welcasset/css/settings.css')}}" />
        <!-- magnific popup -->
        <link rel="stylesheet" href="{{ asset('welcasset/css/magnific-popup.css')}}" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="{{ asset('welcasset/css/owl.carousel.css')}}" />
        <link rel="stylesheet" href="{{ asset('welcasset/css/owl.transitions.css')}}" />
        <link rel="stylesheet" href="{{ asset('welcasset/css/full-slider.css')}}" />
        <!-- text animation -->
        <link rel="stylesheet" href="{{ asset('welcasset/css/text-effect.css')}}" />
        <!-- hamburger menu  -->
        <link rel="stylesheet" href="{{ asset('welcasset/css/menu-hamburger.css')}}" />
        <!-- common -->
        <link rel="stylesheet" href="{{ asset('welcasset/css/style.css')}}" />
        <!-- responsive -->
        <link rel="stylesheet" href="{{ asset('welcasset/css/responsive.css')}}" />
        <!--[if IE]>
            <link rel="stylesheet" href="css/style-ie.css" />
        <![endif]-->
        <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
   
    <style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style></head>

    <body>
        <!-- navigation panel -->
        <nav class="navbar navbar-default navbar-fixed-top nav-transparent overlay-nav sticky-nav nav-white nav-border-bottom no-transition" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6"><a class="logo-light" href="#"><img alt="" src="welcasset/images/logo.png" class="logo" /></a><a class="logo-dark" href="#"><img alt="" src="welcasset/images/1618562828279_logo.png" class="logo" /></a></div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <div class="col-md-9 text-right">
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="{{ url('/')}}" class="inner-link ">{{__('Home') }}</a> </li>
                                
                                @if (Route::has('login'))
                      
                    @auth
                    <li><a href="{{ url('/dashboard') }}"  class="inner-link active">{{ __('Dashboard') }}</a></li>
                    @else
                    <li>  <a href="{{ route('login') }}"  class="inner-link active">{{ __('Log in') }}</a></li>

                        
                    @endauth
               
            @endif
                            </ul>
                        </div>
                        <!--/.nav-collapse --> 
                    </div>
                </div>
            </div>
        </nav>
        <section class="page-title parallax3 parallax-fix page-title-large">
            <div class="opacity-light bg-black"></div>
            <img class="parallax-background-img" src="welcasset/images/logonv.jpg" alt="" />
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <div class="separator-line bg-yellow no-margin-top margin-four"></div>
                        <!-- page title -->
                        <h1 class="white-text">{{ __('Log in & Try now')}}</h1>
                        <!-- end page title -->
                        <!-- page title tagline -->
                        <span class="white-text">{{ __('We believe hard work')}}</span>
                        <!-- end title tagline -->
                    </div>
                </div>
            </div>
        </section> <!--end navigation panel --> 
        <!-- head section -->
       
        <!-- end head section -->

        <!-- content section -->
        <section class="wow fadeIn bg-gray">
            <div class="container">
                @yield('content')
            </div>
        </section>
       
       <!-- end content section -->

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
            <a href="javascript:;" class="scrollToTop"><i class="fa fa-angle-up"></i></a> 
            <!-- scroll to top End... --> 
        </footer>
        <!-- end footer -->
        <!-- javascript libraries / javascript files set #1 --> 
        <script type="text/javascript" src="{{ asset('welcasset/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('welcasset/js/modernizr.js')}}"></script>
        <script type="text/javascript" src="{{ asset('welcasset/js/bootstrap.js')}}"></script> 
        <script type="text/javascript" src="{{ asset('welcasset/js/bootstrap-hover-dropdown.js')}}"></script>
        <script type="text/javascript" src="{{ asset('welcasset/js/jquery.easing.1.3.js')}}"></script> 
        <script type="text/javascript" src="{{ asset('welcasset/js/skrollr.min.js')}}"></script>  
        <script type="text/javascript" src="{{ asset('welcasset/js/smooth-scroll.js')}}"></script>
         <!-- jquery appear -->
        <script type="text/javascript" src="{{ asset('welcasset/js/jquery.appear.js')}}"></script>
        <!-- animation -->
        <script type="text/javascript" src="{{ asset('welcasset/js/wow.min.js')}}"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="{{ asset('welcasset/js/page-scroll.js')}}"></script>
        <!-- easy piechart-->
        <script type="text/javascript" src="{{ asset('welcasset/js/jquery.easypiechart.js')}}"></script>
        <!-- parallax -->
        <script type="text/javascript" src="{{ asset('welcasset/js/jquery.parallax-1.1.3.js')}}"></script>
        <!--portfolio with shorting tab --> 
        <script type="text/javascript" src="{{ asset('welcasset/js/jquery.isotope.min.js')}}"></script> 
        <!-- owl slider  -->
        <script type="text/javascript" src="{{ asset('welcasset/js/owl.carousel.min.js')}}"></script>
        <!-- magnific popup  -->
        <script type="text/javascript" src="{{ asset('welcasset/js/jquery.magnific-popup.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('welcasset/js/popup-gallery.js')}}"></script>
        <!-- text effect  -->
        <script type="text/javascript" src="{{ asset('welcasset/js/text-effect.js')}}"></script>
        <!-- revolution slider  -->
        <script type="text/javascript" src="{{ asset('welcasset/js/jquery.tools.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('welcasset/js/jquery.revolution.js')}}"></script>
        <!-- counter  -->
        <script type="text/javascript" src="{{ asset('welcasset/js/counter.js')}}"></script>
         <!-- countTo -->
        <script type="text/javascript" src="{{ asset('welcasset/js/jquery.countTo.js')}}"></script>
        <!-- fit videos  -->
        <script type="text/javascript" src="{{ asset('welcasset/js/jquery.fitvids.js')}}"></script>
        <!-- imagesloaded  -->
        <script type="text/javascript" src="{{ asset('welcasset/js/imagesloaded.pkgd.min.js')}}"></script>
        <!-- hamburger menu-->
        <script type="text/javascript" src="{{ asset('welcasset/js/classie.js')}}"></script>
        <script type="text/javascript" src="{{ asset('welcasset/js/hamburger-menu.js')}}"></script>
        <!-- setting --> 
        <script type="text/javascript" src="{{ asset('welcasset/js/main.js')}}"></script>
    </body>
</html>
