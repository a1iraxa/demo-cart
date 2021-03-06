<!DOCTYPE html>
<html>
<head>
	<title>Cart Demo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="{{ url('/assets/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
	<link href="{{ url('/assets/css/font-awesome.min.css') }}" rel="stylesheet" media="screen">
	<link href="{{ url('/assets/css/demo.css') }}" rel="stylesheet" media="screen">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

  </head>
  <body>

  	<div class="flux clearfix">
  		<div class="flux--1"></div>
  		<div class="flux--2"></div>
  		<div class="flux--3"></div>
  		<div class="flux--4"></div>
  		<div class="flux--5"></div>
  	</div>

  	<div class="container">
  		<nav class="navbar xnavbar-fixed-top navbar-inverse" role="navigation">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
  					<span class="sr-only">Toggle navigation</span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</button>
  				<a class="navbar-brand" href="{{ url('/') }}">Cart</a>
  			</div>

  			<div class="collapse navbar-collapse navbar-ex1-collapse">
  				<ul class="nav navbar-nav">
  					<li{{ Request::is('/') ? ' class="active"' : null }}><a href="{{ url('/') }}">Products</a></li>
  					<li{{ Request::is('cart') ? ' class="active"' : null }}><a href="{{ url('cart') }}">Cart <span class="badge cartCount">{{ app('cart')->items()->count() }}</span></a></li>
  					<li{{ Request::is('wishlist') ? ' class="active"' : null }}><a href="{{ url('wishlist') }}">Wishlist <span class="badge wishlistCount">{{ app('wishlist')->items()->count() }}</span></a></li>
  				</ul>

  				<ul class="nav navbar-nav navbar-right">
  					<li><a href="https://cartalyst.com/manual/cart">Manual</a></li>
  					@if (Sentinel::check())
  					<li><a href="{{ url('logout') }}">Logout</a></li>
  					@else
  					<li{{ Request::is('login') ? ' class="active"' : null }}><a href="{{ url('login') }}">Login</a></li>
  					@endif
  				</ul>
  			</div>
  		</nav>

        @include('partials.notifications')

  		@yield('page')
  	</div>

  	<script src="{{ url('/assets/js/jquery.min.js') }}"></script>
  	<script src="{{ url('/assets/js/bootstrap.min.js') }}"></script>

  	<script type="text/javascript">
  		$('.tip').tooltip();
  	</script>

  	@yield('scripts')

  	<script type="text/javascript">

  		var _gaq = _gaq || [];
  		_gaq.push(['_setAccount', 'UA-26550564-1']);
  		_gaq.push(['_setDomainName', 'cartalyst.com']);
  		_gaq.push(['_trackPageview']);

  		(function() {
  			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  		})();
  	</script>

  </body>
  </html>
