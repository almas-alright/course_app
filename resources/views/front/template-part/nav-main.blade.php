@foreach($all as $a)
    {{ $a->title }}
@endforeach

<!-- Header -->
<header>
<div class="header-top">
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-6">
            <!-- Widget -->
            <div class="widget top-address">
                <ul class="list-inline">
                    <li><span class="lnr lnr-map-marker"></span>45 Park Avenue, New York</li>
                    <li><span class="lnr lnr-phone"></span>(+01) 123 456 7896</li>
                </ul>
            </div>
            <!-- /Widget -->
        </div>
        <div class="col-xs-12 col-sm-2 col-md-3">
            <!-- Widget -->
            <div class="widget top-social-icon">
                <ul class="list-inline">
                    <li><a href="{!! $options['url_facebook'] !!}"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="{!! $options['url_twitter'] !!}"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="{!! $options['url_gplus'] !!}"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="{!! $options['url_linkedin'] !!}"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <!-- /Widget -->
        </div>

        <div class="col-xs-12 col-sm-2 col-md-3">
            <!-- Widget -->
            @if (Route::has('login'))
            <div class="btn-group">
            @if (Auth::check())
                <a href="javascript:" class="btn btn-success btn-cart"><i class="fa fa-option"></i> {{ Auth::option()->name }} </a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-danger text-uppercase btn-sign">Sign out</a>
                @else
                <a href="javascript" class="btn btn-success btn-cart"><i class="fa fa-option"> </i> </a>
                <a href="{{ url('/login') }}" class="btn btn-info text-uppercase btn-sign">Sign in</a>
                @endif
            </div>
            @endif

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
            <!-- /Widget -->
        </div>
    </div>
</div>
</div>

<!-- Main Menu -->
<div class="main-header-nav">
<nav class="navbart">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <i class="fa fa-bars menu-bars"></i>
            </button>
            <a class="navbar-brand" href="#"><img src="{{ asset('app-front/images/logo.png') }}" alt="Plombiers"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="navbar-nav main-menu navbar-right">
                <li><a href="{{ route('home.index') }}">Home</a></li>
                <li><a href="{{ route('training.index-home') }}">Training</a></li>
                <li><a href="{{ route('home.post', ['slug' => 'solutions']) }}">Solutions</a></li>
                <li><a href="{{ route('home.post', ['slug' => 'resources']) }}">Resources</a></li>
                <li><a href="{{ route('home.post', ['slug' => 'about-us']) }}">About Us</a></li>
                <li><a href="{{ route('home.contact') }}">Contact us </a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
</div>
<!-- /Main Menu -->
</header>



<!-- $option = App\Option::firstOrNew(array('option_name' => 'url_facebook'));
$option->option_value = "http://facebook.com/abc";
$option->save(); -->