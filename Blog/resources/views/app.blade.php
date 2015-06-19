<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/mynew.css') }}" rel="stylesheet">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">A\mer's Arch</a>
        </div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a  href="{{URL('/')}}"><img src="{{URL('/picture/myBlogPicture.jpg')}}" alt="" style="width: 50px; height: 50px></a></li>
                    {{--地址重写1--}}
                </ul>
                <ul class="nav navbar-nav">
					<li><a href="{{ url('/blog') }}">Home</a></li>
                   {{--地址重写1--}}
				</ul>
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Archive</a></li>
                    {{--地址重写2--}}
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/admin') }}">Amdin</a></li>
                    {{--地址重写3--}}
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/AboutMe') }}">About Me</a></li>
                    {{--地址重写3--}}
                </ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
                <ul class="nav navbar-nav navbar-right">
                    <form action="{{ URL('/') }}" class="navbar-form navbar-right" role="search">
                        {{--重写地址4--}}
                        <div class="form-group">
                            <input type="text" name="kw" class="form-control" placeholder="关键字" />
                        </div>
                        <button type="submit" class="btn btn-default">搜索</button>
                    </form>
                </ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
