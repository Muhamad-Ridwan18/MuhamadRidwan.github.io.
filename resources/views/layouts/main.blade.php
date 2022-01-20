<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ isset($title) ? $title : 'Blog' }}</title>        
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="Harry Boo">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <!-- Favicons -->
        <link rel="shortcut icon" href="{{ asset('frontend/assets/img/favicon.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend/assets/img/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend/assets/img/apple-touch-icon-114x114.png') }}">
        
        <!-- Load Core CSS 
        =====================================-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/core/bootstrap-3.3.7.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/core/animate.min.css') }}">
        
        <!-- Load Main CSS 
        =====================================-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/main/main.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/main/setting.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/main/hover.css') }}">
        
        <!-- Load Magnific Popup CSS 
        =====================================-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific/magic.min.css') }}">        
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific/magnific-popup.css') }}">  
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific/magnific-popup-zoom-gallery.css') }}">
        
        <!-- Load OWL Carousel CSS 
        =====================================-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl-carousel/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl-carousel/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl-carousel/owl.transitions.css') }}">
        
        {{-- Load Color CSS - Please uncomment to apply the color.
        =====================================       --}}
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/color/blue.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/color/brown.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/color/cyan.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/color/dark.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/color/green.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/color/orange.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/color/purple.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/color/pink.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/color/red.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/color/yellow.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/color/pasific.css') }}">
        
        {{-- Load Fontbase Icons - Please Uncomment to use linea icons
        =====================================        --}}
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/icon/linea-arrows-10.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/icon/linea-basic-10.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/icon/linea-basic-elaboration-10.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/icon/linea-ecommerce-10.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/icon/linea-music-10.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/icon/linea-software-10.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/icon/linea-weather-10.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/icon/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/icon/et-line-font.css') }}">
        
        <!-- Load JS
        HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
        WARNING: Respond.js doesn't work if you view the page via file://
        =====================================-->

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body  id="topPage" data-spy="scroll" data-target=".navbar" data-offset="100">
        
        <!-- Page Loader
        ===================================== -->
		<div id="pageloader" class="bg-grad-animation-1">
			<div class="loader-item">
                <img src="{{asset('frontend/assets/img/other/oval.svg') }}" alt="page loader">
            </div>
		</div>
        
        <a href="#page-top" class="go-to-top">
            <i class="fa fa-long-arrow-up"></i>
        </a>
        
        
        <!-- Navigation Area
        ===================================== -->
        <nav class="navbar navbar-pasific navbar-mp navbar-standart megamenu navbar-fixed-top" style="border-bottom:1px solid #fff;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand-centered page-scroll" href="#page-top">
                        <img src="{{asset('frontend/assets/img/logo/logo-default1.png') }}" alt="Blog">
                        Blog
                    </a>
                </div>
        
                <div class="navbar-collapse collapse navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item {{ Request::is('blog*') ? 'active' : '' }}"><a href="/blog">Blog </a>
                        </li>

                        {{-- <li class="nav-item {{ Request::is('categories') ? 'active' : '' }}"><a href="/categories">Category</a>
                        </li> --}}

                        @auth
                        <li class="nav-item"><a href="/dashboard">Create Post</a>
                        </li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                {{-- <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button> --}}
                                <button type="submit" class="text-center button-o button-md button-rounded button-primary hover-sweep-to-top">
                                    Log out<i class="fa fa-unlock"></i>
                                </button>
                            </form>
                        </li>
                            {{-- <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Welcome {{ auth()->user()->name }}
                                </a>
                                <ul class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
                                    <li>
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                                            <button type="submit" class="button button-lg button-circle button-grad-mojito hover-icon-push">
                                                Login Now<i class="fa fa-lock"></i>
                                            </button>
                                        </form>
                                    </li>

                                </ul>
                            </li> --}}
                            @else
                                <li class="nav-item">
                                    <button class="text-center button-o button-md button-rounded button-primary hover-sweep-to-top">
                                        <a href="/login" class="nav-link text-center">Login <i class="fa fa-lock"></i></a>
                                    </button>
                                </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Subheader Area
        ===================================== -->
        <header class="bg-grad-stellar mt70">

            <div class="container">
                <div class="row mt20 mb30">
                    @auth()
                    <div class="col-md-6 text-left">
                        <h3 class="color-light text-uppercase animated" data-animation="fadeInUp" data-animation-delay="100">Welcome<small class="color-light alpha7">{{ auth()->user()->name }}</small></h3>
                    </div>
                    @endauth
                    <div class="col-md-6 text-right pt35">
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Blog</a></li>
                            <li>{{ $title }}</li>
                        </ul>
                    </div>
                </div>
            </div>

        </header>
        
        
        <!-- Blog Area
        ===================================== -->
        <div id="blog" class="mt50 pb70">
            <div class="container">
                
                <nav class="navbar navbar-default mb50">
                    <ul class="nav navbar-nav"> 
                    <li class="active"><a href="#">{{ $title }}</a></li>
                    </ul>
                    {{-- form search --}}
                    <form name="blog-search" action="blog" class="blog-form-search pull-right">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        @if (request('author'))
                            <input type="hidden" name="author" value="{{ request('author') }}">
                        @endif
                        <input type="text" name="search" class="" placeholder="Search..." value="{{ request('search') }}">
                        <button type="submit" class=""><i class="fa fa-search"></i></button>
                    </form>
                </nav>

                <div class="row">
                    @yield('content')
                </div>
                
                <div class="row mt25 animated" data-animation="fadeInUp" data-animation-delay="800">
                    {{-- {{ $posts->links() }} --}}
                </div>
                
            </div>
        </div>
        
        
        <!-- Newsletter Area
        =====================================-->
        <div id="newsletter" class="bg-dark2 pt50 pb50">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-2">
                        <h4 class="color-light">
                            Newsletter
                        </h4>
                    </div>
                    
                    <div class="col-md-10">
                        <form name="newsletter">
                            <div class="input-newsletter-container">
                                <input type="text" name="email" class="input-newsletter" placeholder="enter your email address">
                            </div>
                            <a href="#" class="button button-sm button-pasific hover-ripple-out">Subscribe<i class="fa fa-envelope"></i></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!-- Footer Area
        =====================================-->
        <footer id="footer" class="footer-one center-block bg-light pt50 pb30 ">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-2 col-xs-12 mb25">
                        <div class="navbar-brand-footer center-block">Pasific</div>
                        <div class="copyright center-block">&copy; 2016. All rights reserved.</div>
                    </div>
                </div>
                
            </div>
        </footer>
        

        <!-- JQuery Core
        =====================================-->
        <script src="{{ asset('frontend/assets/js/core/jquery.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/core/bootstrap-3.3.7.min.js') }}"></script>
        
        <!-- Magnific Popup
        =====================================-->
        <script src="{{ asset('frontend/assets/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/magnific-popup/magnific-popup-zoom-gallery.js') }}"></script>
        
        <!-- JQuery Main
        =====================================-->
        <script src="{{ asset('frontend/assets/js/main/jquery.appear.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/main/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/main/parallax.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/main/jquery.countTo.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/main/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/main/jquery.sticky.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/main/ion.rangeSlider.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/main/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/main/main.js') }}"></script>
        
    </body>
</html>