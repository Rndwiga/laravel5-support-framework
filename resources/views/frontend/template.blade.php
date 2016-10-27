<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

		<link rel="shortcut icon" href="{!! asset('frontend/images/favicon_1.ico') !!}">

		<title>@yield('title')</title>
				<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

				<link href="{!! asset('frontend/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />

        <link href="{!! asset('frontend/css/owl.carousel.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('frontend/css/owl.theme.default.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('frontend/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('frontend/css/style.css') !!}" rel="stylesheet" type="text/css" />

        <link href="{!! asset('frontend/css/responsive.css') !!}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{!! asset('frontend/js/modernizr.min.js') !!}"></script>
	</head>
    <body data-spy="scroll" data-target="#navbar-menu">
        @yield('navigation')
        @yield('content')

		<!-- jQuery  -->
        <script src="{!! asset('frontend/js/jquery-2.1.4.min.js') !!}"></script>
        <script src="{!! asset('frontend/js/bootstrap.min.js') !!}"></script>
        <script src="{!! asset('frontend/js/jquery.easing.1.3.min.js') !!}"></script>
        <script src="{!! asset('frontend/js/owl.carousel.min.js') !!}"></script>
        <script src="{!! asset('frontend/js/jquery.sticky.js') !!}"></script>
        <script src="{!! asset('frontend/js/jquery.app.js') !!}"></script>

				<script type="text/javascript">
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                autoplay: true,
                autoplayTimeout: 4000,
                responsive:{
                    0:{
                        items:1
                    }
                }
            })
        </script>
    </body>
</html>
