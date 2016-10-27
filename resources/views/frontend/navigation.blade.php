@section('navigation')
<!-- Navbar -->
<div class="navbar navbar-custom sticky navbar-fixed-top" role="navigation" id="sticky-nav">
    <div class="container">

        <!-- Navbar-header -->
        <div class="navbar-header">

            <!-- Responsive menu button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- LOGO -->
            <a class="navbar-brand logo" href="index.html">
                UB<span class="text-custom">o</span>ld
            </a>

        </div>
        <!-- end navbar-header -->

        <!-- menu -->
        <div class="navbar-collapse collapse" id="navbar-menu">

            <!-- Navbar right -->
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="#home" class="nav-link">Home</a>
                </li>
                <li>
                    <a href="#features" class="nav-link">Features</a>
                </li>
                <li>
                    <a href="#pricing" class="nav-link">Plans</a>
                </li>
                <li>
                    <a href="#clients" class="nav-link">Clients</a>
                </li>
                @if(Request::is('auth/register'))
                    <li class="active">
                        {!! link_to('auth/register', trans('front/site.register')) !!}
                    </li>
                @elseif(Request::is('password/email'))
                    <li class="active">
                        {!! link_to('password/email', trans('front/site.forget-password')) !!}
                    </li>
                @else
                    @if(session('statut') == 'visitor')
                        <li {!! classActivePath('login') !!}>
                            {!! link_to('login', trans('front/site.login')) !!}
                        </li>
                    @else
                        @if(session('statut') == 'admin')
                            <li>
                                {!! link_to_route('admin', trans('front/site.administration')) !!}
                            </li>
                        @elseif(session('statut') == 'redac')
                            <li>
                                {!! link_to('blog', trans('front/site.redaction')) !!}
                            </li>
                        @endif
                        <li>
                            {!! link_to('/logout', trans('front/site.logout'), ['id' => "logout"]) !!}
                            {!! Form::open(['url' => '/logout', 'id' => 'logout-form']) !!}{!! Form::close() !!}
                        </li>
                    @endif
                @endif
                <li>
                    <a href="" class="btn btn-white-bordered navbar-btn">Try for Free</a>
                </li>
            </ul>

        </div>
        <!--/Menu -->
    </div>
    <!-- end container -->
</div>
<!-- End navbar-custom -->

@endsection
