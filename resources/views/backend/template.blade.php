<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

		<link rel="shortcut icon" href="{!! asset('backend/images/favicon_1.ico') !!}">

		<title>@yield('title')</title>

		<link href="{!! asset('backend/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('backend/css/core.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('backend/css/components.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('backend/css/icons.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('backend/css/pages.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('backend/css/responsive.css') !!}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
				@yield('head')
        <script src="{!! asset('backend/js/modernizr.min.js') !!}"></script>

	</head>
    <body>

        @yield('main')

		<!-- jQuery  -->
        <script src="{!! asset('backend/js/jquery.min.js') !!}"></script>
        <script src="{!! asset('backend/js/bootstrap.min.js') !!}"></script>
        <script src="{!! asset('backend/js/detect.js') !!}"></script>
        <script src="{!! asset('backend/js/fastclick.js') !!}"></script>
        <script src="{!! asset('backend/js/jquery.slimscroll.js') !!}"></script>
        <script src="{!! asset('backend/js/jquery.blockUI.js') !!}"></script>
        <script src="{!! asset('backend/js/waves.js') !!}"></script>
        <script src="{!! asset('backend/js/wow.min.js') !!}"></script>
        <script src="{!! asset('backend/js/jquery.nicescroll.js') !!}"></script>
        <script src="{!! asset('backend/js/jquery.scrollTo.min.js') !!}"></script>


        <script src="{!! asset('assets/js/jquery.core.js') !!}"></script>
        <script src="{!! asset('assets/js/jquery.app.js') !!}"></script>

        <script>
          var resizefunc = [];
        </script>
				<script>
		        $.ajaxSetup({
		            headers: {
		                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		            }
		        });
		        $(function() {
		            $('#logout').click(function(e) {
		                e.preventDefault();
		                $('#logout-form').submit();
		            })
		        });
		    </script>
    </body>
</html>
