<html class=" js " lang="en"><head>
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
<h1> Contact Message</h1>
<p> Name:{{ $contact['name']}}</p>
<p> Email:{{ $contact['email']}}</p>
<p> text:{{ $contact['comment']}}</p>
</body>
</html>