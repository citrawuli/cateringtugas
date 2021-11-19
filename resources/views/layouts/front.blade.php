<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aisya Catering</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('teamo/images/aisyacatering_kontak_logo.png') }}"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('teamo/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('teamo/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('teamo/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('teamo/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('teamo/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('teamo/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('teamo/css/chosen.min.css') }}">
    <link rel="stylesheet" href="{{ asset('teamo/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('teamo/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('teamo/css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('teamo/js/fancybox/source/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('teamo/css/jquery.scrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('teamo/css/mobile-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('teamo/fonts/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('teamo/css/style.css') }}">
    @yield('link')
</head>

<body class="home">

<header class="header style7">
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-left">
                <div class="header-message">
                    <b>Selamat datang di online store kami!</b>
                    Catering wilayah Surabaya dan sekitarnya. <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg> <a href=" {{ url('/kontak') }} " target="_blank" class="teamo-menu-item-title" onMouseOver="this.style.color='black'"
                    onMouseOut="this.style.color='white'"  title="About">Hubungi kami</a> untuk konsultasi lebih lanjut.
                </div>
            </div>
            <div class="top-bar-right">
                <!-- <div class="header-language">
                    <div class="teamo-language teamo-dropdown">
                        <a href="#" class="active language-toggle" data-teamo="teamo-dropdown">
									<span>
										English (USD)
									</span>
                        </a>
                        <ul class="teamo-submenu">
                            <li class="switcher-option">
                                <a href="#">
											<span>
												French (EUR)
											</span>
                                </a>
                            </li>
                            <li class="switcher-option">
                                <a href="#">
											<span>
												Japanese (JPY)
											</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> -->

                @if (Auth::check())
                    <ul class="header-user-links">
                        <li>
                            <a href="{{route('login')}}"><span class="flaticon-user"></span> Akun</a>
                        </li>
                    </ul>
                @else
                    <ul class="header-user-links">
                        <li>
                            <a href="{{route('login')}}">Login</a>
                        </li>
                    </ul>
                    <ul class="header-user-links">
                        <li>
                            <a href="{{route('register')}}">Daftar</a>
                        </li>
                    </ul>
                @endif
                
            </div>
        </div>
    </div>

    <div class="container">
        <div class="main-header">
            <div class="row">
                <div class="col-lg-3 col-sm-4 col-md-3 col-xs-7 col-ts-12 header-element">
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <img src="{{ asset('teamo/images/aisya-catering-logo2.png') }}" alt="img">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-8 col-md-6 col-xs-5 col-ts-12">
                    <div class="block-search-block">
                        <form class="form-search form-search-width-category">
                            <div class="form-content">
                                <div class="category">
                                    <select title="cate" data-placeholder="All Categories" class="chosen-select" tabindex="1">
                                        <option value="United States">Accessories</option>
                                        <option value="United Kingdom">Cacti</option>
                                        <option value="Afghanistan">Succulents</option>
                                        <option value="Aland Islands">Sofas</option>
                                        <option value="Albania">New Arrivals</option>
                                        <option value="Algeria">Storage</option>
                                    </select>
                                </div>
                                <div class="inner">
                                    <input type="text" class="input" name="s" value="" placeholder="Search here">
                                </div>
                                <button class="btn-search" type="submit">
                                    <span class="icon-search"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-12 col-md-3 col-xs-12 col-ts-12">
                    <div class="header-control">
                        <div class="block-minicart teamo-mini-cart block-header teamo-dropdown">
                            <a href="javascript:void(0);" class="shopcart-icon" data-teamo="teamo-dropdown">
                                Cart
                                <span class="count">
                                    {{ count((array) session('cart')) }}
                                </span>
                            </a>
                            
                            <div class="shopcart-description teamo-submenu">
                                <div class="content-wrap">
                                    <h3 class="title">Keranjang</h3>
                                    <ul class="minicart-items">
                                        @php 
                                            $total = 0 
                                        @endphp
                                        @foreach((array) session('cart') as $id => $details)
                                            @php $total += $details['price'] * $details['quantity'] @endphp
                                        @endforeach

                                        @if(session('cart'))
                                            @foreach(session('cart') as $id => $details)
                                                <li class="product-cart mini_cart_item" data-id="{{ $id }}">
                                                    <a href="#" class="product-media">
                                                        <img src="{{ asset('teamo/images/item-minicart-1.jpg') }}" alt="img">
                                                    </a>

                                                    <div class="product-details">
                                                        <h5 class="product-name">
                                                            <a href="{{url('/viewproduct/'.$id)}}">{{ $details['name'] }}</a>
                                                        </h5>
                                                        <div class="variations">
                                                                    <span class="attribute_color">
                                                                        {{-- <a href="#">{{ $details['categoryname'] }}</a> --}}
                                                                    </span>
                                                            {{-- , --}}
                                                            <span class="attribute_size">
                                                                        {{-- <a href="#">300ml</a> --}}
                                                                    </span>
                                                        </div>
                                                        <span class="product-price">
                                                                    <span class="price">
                                                                        <span>@currency($details['price'])</span>
                                                                    </span>
                                                                </span>
                                                        <span class="product-quantity">
                                                                    (x{{ $details['quantity']}})
                                                                </span>
                                                        <div class="product-remove">
                                                            <a href="" class="remove-from-cart"><i class="fa fa-trash-o " aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                    <div class="subtotal">
                                        <span class="total-title">Subtotal: </span>
                                        <span class="total-price">
													<span class="Price-amount">
														@currency($total)
													</span>
												</span>
                                    </div>
                                    <div class="actions">
                                        <a class="button button-viewcart" href="{{url('/keranjangBelanja')}}">
                                            <span>View Bag</span>
                                        </a>
                                        <a href="{{url('/checkout')}}" class="button button-checkout">
                                            <span>Checkout</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-account block-header teamo-dropdown">
                           
                            {{-- <a href="{{route('home')}}" data-teamo="teamo-dropdown">
                                <span class="flaticon-user"></span>
                            </a> --}}
                            <div class="header-account teamo-submenu">
                                <!-- <div class="header-user-form-tabs">
                                    <ul class="tab-link">
                                        <li class="active">
                                            <a data-toggle="tab" aria-expanded="true" href="#header-tab-login">Login</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" aria-expanded="true" href="#header-tab-rigister">Register</a>
                                        </li>
                                    </ul>
                                    <div class="tab-container">
                                        <div id="header-tab-login" class="tab-panel active">
                                            <form method="post" class="login form-login">
                                                <p class="form-row form-row-wide">
                                                    <input type="email" placeholder="Email" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <input type="password" class="input-text" placeholder="Password">
                                                </p>
                                                <p class="form-row">
                                                    <label class="form-checkbox">
                                                        <input type="checkbox" class="input-checkbox">
                                                        <span>
																	Remember me
																</span>
                                                    </label>
                                                    <input type="submit" class="button" value="Login">
                                                </p>
                                                <p class="lost_password">
                                                    <a href="#">Lost your password?</a>
                                                </p>
                                            </form>
                                        </div>
                                        <div id="header-tab-rigister" class="tab-panel">
                                            <form method="post" class="register form-register">
                                                <p class="form-row form-row-wide">
                                                    <input type="email" placeholder="Email" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <input type="password" class="input-text" placeholder="Password">
                                                </p>
                                                <p class="form-row">
                                                    <input type="submit" class="button" value="Register">
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <a class="menu-bar mobile-navigation menu-toggle" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-nav-container rows-space-20">
        <div class="container">
            <div class="header-nav-wapper main-menu-wapper">
                <div class="vertical-wapper block-nav-categori">
                    <div class="block-title">
							<span class="icon-bar">
								<span></span>
								<span></span>
								<span></span>
							</span>
                        <span class="text">LIHAT LAINNYA</span>
                    </div>
                    <div class="block-content verticalmenu-content">
                        <ul class="teamo-nav-vertical vertical-menu teamo-clone-mobile-menu">
                            <li class="menu-item">
                                <a href="{{ url('tentangkami') }}" class="teamo-menu-item-title" title="Tentang Kami">Tentang Kami</a>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a title="Info" href="#" class="teamo-menu-item-title">Info</a>
                                <span class="toggle-submenu"></span>
                                <ul role="menu" class=" submenu">
                                    <li class="menu-item">
                                        <a title="New Arrivals" href="#" class="teamo-item-title">New Arrivals</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Ketentuan" href="#" class="teamo-item-title">Ketentuan</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header-nav">
                    <div class="container-wapper">
                        <ul class="teamo-clone-mobile-menu teamo-nav main-menu " id="menu-main-menu">
                            <li class="menu-item">
                                <a href="{{url('/')}}" class="teamo-menu-item-title" title="Home">Beranda</a>
                                <span class="toggle-submenu"></span>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('/catalogproduct')}}" class="teamo-menu-item-title" title="Shop">Belanja</a>
                                {{-- <span class="toggle-submenu"></span>
                                <ul class="submenu">
                                    <li class="menu-item">
                                        <a href="{{url('gridprodTable')}}">Grid Fullwidth</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="gridproducts_leftsidebar.html">Grid Left sidebar</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="gridproducts_bannerslider.html">Grid Bannerslider</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="listproducts.html">List</a>
                                    </li>
                                </ul> --}}
                            </li>
                            <li class="menu-item  menu-item-has-children item-megamenu">
                                <a href="#" class="teamo-menu-item-title" title="Paket">Paket</a>
                                <span class="toggle-submenu"></span>
                                <div class="submenu mega-menu menu-page">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                            <div class="teamo-custommenu default">
                                                <h2 class="widgettitle">Paket</h2>
                                                <ul class="menu">
                                                    <li class="menu-item">
                                                        <a href="{{url('/Paket/COVID19')}}">Paket COVID-19</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="{{url('/Paket/Wedding')}}">Paket Wedding</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="{{url('/Paket/Pemerintahan')}}">Paket Pemerintahan</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="{{url('/Paket/Pabrik')}}">Paket Catering Pabrik</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                            <div class="teamo-custommenu default">
                                                <h2 class="widgettitle">Paket</h2>
                                                <ul class="menu">
                                                    
                                                    <li class="menu-item">
                                                        <a href="{{url('/Paket/TumpengHantaran')}}">Paket Tumpeng Hantaran</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="{{url('/Paket/SnackBox')}}">Paket Snack Box</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="{{url('/Paket/RiceBox')}}">Paket Rice Box</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                            <div class="teamo-custommenu default">
                                                <h2 class="widgettitle">Paket</h2>
                                                <ul class="menu">
                                                    <li class="menu-item">
                                                        <a href="{{url('/Paket/Aqiqah')}}">Paket Aqiqah</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="{{url('/Paket/Ramadhan')}}">Paket Ramadhan</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="{{url('/Paket/Lebaran')}}">Paket Lebaran</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                            <div class="teamo-custommenu default">
                                                <h2 class="widgettitle">Brosur</h2>
                                                <ul class="menu">
                                                    <li class="menu-item">
                                                        <a href="{{url('/Brosur')}}">Download Brosur Disini</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-page-item">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item">
                                <a href="{{ url('/gridblog')}}" class="teamo-menu-item-title"
                                   title="Blogs">Blog</a>
                                
                            </li>
                            <li class="menu-item">
                                <a href=" {{ url('/kontak') }} " class="teamo-menu-item-title " title="About">Kontak</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="header-device-mobile">
    <div class="wapper">
        <div class="item mobile-logo">
            <div class="logo">
                <a href="#">
                    <img src="{{ asset('teamo/images/logo.png')}}" alt="img">
                </a>
            </div>
        </div>
        <div class="item item mobile-search-box has-sub">
            <a href="#">
						<span class="icon">
							<i class="fa fa-search" aria-hidden="true"></i>
						</span>
            </a>
            <div class="block-sub">
                <a href="#" class="close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
                <div class="header-searchform-box">
                    <form class="header-searchform">
                        <div class="searchform-wrap">
                            <input type="text" class="search-input" placeholder="Enter keywords to search...">
                            <input type="submit" class="submit button" value="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="item mobile-settings-box has-sub">
            <a href="#">
						<span class="icon">
							<i class="flaticon-user" aria-hidden="true"></i>
						</span>
            </a>
            <div class="block-sub">
                <a href="#" class="close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
                <div class="block-sub-item">
                    <center>
                        <a href="{{route('login')}}">LOGIN</a>
                        <span>    |    </span>
                        <a href="{{route('register')}}">REGISTER</a>
                    </center>
                </div>
            </div>
        </div>
        <div class="item menu-bar">
            <a class=" mobile-navigation  menu-toggle" href="#">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
    </div>
</div>

@yield('container')


<footer class="footer style7">
    <div class="container">
        <div class="container-wapper">
            <div class="row">
                <div class="box-footer col-xs-12 col-sm-4 col-md-4 col-lg-4 hidden-sm hidden-md hidden-lg">
                    <div class="teamo-newsletter style1">
                        <div class="newsletter-head">
                            <h3 class="title">Newsletter</h3>
                        </div>
                        <div class="newsletter-form-wrap">
                            <div class="list">
                                Sign up for our free video course and <br/> urban garden inspiration
                            </div>
                            <input type="email" class="input-text email email-newsletter"
                                   placeholder="Your email letter">
                            <button class="button btn-submit submit-newsletter">SUBSCRIBE</button>
                        </div>
                    </div>
                </div>
                <div class="box-footer col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="teamo-custommenu default">
                        <h2 class="widgettitle">Quick Menu</h2>
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="#">New arrivals</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Life style</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Cacti</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Palms</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Ferns</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box-footer col-xs-12 col-sm-4 col-md-4 col-lg-4 hidden-xs">
                    <div class="teamo-newsletter style1">
                        <div class="newsletter-head">
                            <h3 class="title">AISYA CATERING SURABAYA</h3>
                        </div>
                        <div class="newsletter-form-wrap">
                            <div class="list">
                            <b>Alamat Kantor :</b>Jl. Kebonsari III No.28, Kebonsari, Kec. Jambangan, Kota Surabaya, Jawa Timur 60233<br/> 
                            <b>Kontak Kantor :</b> (031) 828 1065
                            
                            </div>
                            <!-- <input type="email" class="input-text email email-newsletter"
                                   placeholder="Your email letter">
                            <button class="button btn-submit submit-newsletter">SUBSCRIBE</button> -->
                        </div>
                    </div>
                </div>
                <div class="box-footer col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="teamo-custommenu default">
                        <h2 class="widgettitle">Information</h2>
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="#">FAQs</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Track Order</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Delivery</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Contact Us</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Return</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-end">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="teamo-socials">
                            <ul class="socials">
                                <li>
                                    <a href="http://wa.me/6282123522472" class="social-item" target="_blank">
                                        <i class="icon fa fa-whatsapp"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://web.facebook.com/cateringaisyasby/" class="social-item" target="_blank">
                                        <i class="icon fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/cateringaisyasby/" class="social-item" target="_blank">
                                        <i class="icon fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="coppyright">
                            © 2021 CATERING SURABAYA, AISYA CATERING.
                            <!-- <a href="#">Teamo</a> -->
                            All rights reserved
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="footer-device-mobile">
    <div class="wapper">
        <div class="footer-device-mobile-item device-home">
            <a href="{{url('/')}}">
					<span class="icon">
						<i class="fa fa-home" aria-hidden="true"></i>
					</span>
                Home
            </a>
        </div>
        {{-- <div class="footer-device-mobile-item device-home device-wishlist">
            <a href="{{url('/')}}">
					<span class="icon">
						<i class="fa fa-heart" aria-hidden="true"></i>
					</span>
                Wishlist
            </a>
        </div> --}}
        <div class="footer-device-mobile-item device-home device-cart">
            <a href="{{url('/keranjangBelanja')}}">
					<span class="icon">
						<i class="fa fa-shopping-basket" aria-hidden="true"></i>
						<span class="count-icon">
							{{ count((array) session('cart')) }}
						</span>
					</span>
                <span class="text">Keranjang</span>
            </a>
        </div>
        <div class="footer-device-mobile-item device-home device-user">
            <a href="{{route('login')}}">
					<span class="icon">
						<i class="fa fa-user" aria-hidden="true"></i>
					</span>
                Account
            </a>
        </div>
    </div>
</div>

<!-- <a class="backtotop"><br>
    <i class="fa fa-fw fa-whatsapp" style="color:#2DC100; font-size:50px" href="https://web.whatsapp.com/send?phone=+6282244606084&amp;text=Hi, I would like to get more information.." title="Contact Us On WhatsApp"></i>
</a> -->

<a href="#" class="backtotop">
    <i class="fa fa-angle-double-up"></i>
</a> 

<script src="{{ asset('teamo/js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('teamo/js/jquery.plugin-countdown.min.js') }}"></script>
<script src="{{ asset('teamo/js/jquery-countdown.min.js') }}"></script>
<script src="{{ asset('teamo/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('teamo/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('teamo/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('teamo/js/isotope.min.js') }}"></script>
<script src="{{ asset('teamo/js/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('teamo/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('teamo/js/mobile-menu.js') }}"></script>
<script src="{{ asset('teamo/js/chosen.min.js') }}"></script>
<script src="{{ asset('teamo/js/slick.js') }}"></script>
<script src="{{ asset('teamo/js/jquery.elevateZoom.min.js') }}"></script>
<script src="{{ asset('teamo/js/jquery.actual.min.js') }}"></script>
<script src="{{ asset('teamo/js/fancybox/source/jquery.fancybox.js') }}"></script>
<script src="{{ asset('teamo/js/lightbox.min.js') }}"></script>
<script src="{{ asset('teamo/js/owl.thumbs.min.js') }}"></script>
<script src="{{ asset('teamo/js/jquery.scrollbar.min.js') }}"></script>
{{-- <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script> --}}
<script src="{{ asset('teamo/js/frontend-plugin.js') }}"></script>

<script>
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        // if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("li").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        // }
    });
  
</script>
@yield('script')
</body>
</html>