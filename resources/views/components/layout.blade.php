
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta information -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"><!-- Mobile Specific Metas -->

    <!-- Title -->
    <title>{{ env('APP_NAME') }}</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('images/Favicon.ico') }}">

    <!-- CSS Stylesheet -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"><!-- bootstrap css -->
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet"><!-- carousel Slider -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet"><!-- font awesome -->
    <link href="{{ asset('css/docs.css') }}" rel="stylesheet"><!--  template structure css -->

    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai:100,200,300,400,500,700,800,900%7CPT+Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="wapper">
        <div class="quck-nav">
        	<div class="container">
            	<div class="contact-no"><a href="#"><i class="fa fa-map-marker"></i>Brooklyn, NY 10036, United States</a></div>
        		{{-- <div class="contact-no"><a href="#"><i class="fa fa-phone"></i>+299 97 39 82</a></div>
                <div class="contact-no"><a href="#"><i class="fa fa-globe"></i>academy.com</a></div> --}}
                @auth
                <div class="quck-right">
                    <div class="right-link"><span style="color: white">{{ auth()->user()->username }}</span></div>
                    <form action="{{ route('auth.logout') }}" method="POST" class="right-link">
                        @csrf
                        <button>Logout</button>
                    </form>
                </div>
                @endauth

                @guest
                <div class="quck-right">
                    <div class="right-link"><a href="{{ route('login') }}"><i class="fa  fa-user"></i>Login</a></div>
                    <div class="right-link"><a href="{{ route('register') }}"><i class="fa  fa-user"></i>Register</a></div>
                </div>
                @endguest

            </div>
        </div>
        <header id="header">
        	<div class="container">
                <nav id="nav-main">
                    <div class="navbar navbar-inverse">
                        <div class="navbar-header">
                            <a href="index.html" class="navbar-brand"><img src="{{ asset('images/logo.png')}}" alt=""></a>
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        {{-- <div class="cart-box">
                        	<a href="cart.html"><i class="fa fa-shopping-basket"></i></a>
                        </div> --}}
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="sub-menu">
                                	<a href="/posts">Home </a>
                                </li>
                                <li>
                                    <a href="/posts">Blog</a>
                                </li>
                                <li>
                                    <a href="/contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        {{ $slot }}

        <footer id="footer">
        	<div class="container">
            	<div class="row">
                	<div class="col-sm-8">
            			<div class="copy-right">
                        	<p>Copyright © <span class="year">2016</span> Academy.</p>
                            <ul class="footer-link">
                            	<li><a href="#">Terms and Conditions</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 ">
                    	<div class="social-media">
                        	<ul>
                            	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script type="text/javascript" src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.form-validator.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/placeholder.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/coustem.js') }}"></script>
</body>
</html>

