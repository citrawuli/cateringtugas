@extends('layouts.front')

@section('container')
<div>
    <div class="fullwidth-template">
        <div class="home-slider-banner">
            <div class="container">
                <div class="row10">
                    <div class="col-lg-8 silider-wrapp">
                        <div class="home-slider">
                            <div class="slider-owl owl-slick equal-container nav-center"
                                 data-slick='{"autoplay":true, "autoplaySpeed":9000, "arrows":false, "dots":true, "infinite":true, "speed":1000, "rows":1}'
                                 data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":1}}]'>
                                <div class="slider-item style7">
                                    <div class="slider-inner equal-element">
                                        <div class="slider-infor">
                                            <h5 class="title-small">
                                                Sale up to 40% off!
                                            </h5>
                                            <h3 class="title-big">
                                                Plants For Health
                                            </h3>
                                            <div class="price">
                                                New Price:
                                                <span class="number-price">
														$270.00
													</span>
                                            </div>
                                            <a href="#" class="button btn-shop-the-look bgroud-style">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-item style8">
                                    <div class="slider-inner equal-element">
                                        <div class="slider-infor">
                                            <h5 class="title-small">
                                                Take A Plant
                                            </h5>
                                            <h3 class="title-big">
                                                Get 20% off order now
                                            </h3>
                                            <div class="price">
                                                Save Price:
                                                <span class="number-price">
														$170.00
													</span>
                                            </div>
                                            <a href="#" class="button btn-shop-product">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-item style9">
                                    <div class="slider-inner equal-element">
                                        <div class="slider-infor">
                                            <h5 class="title-small">
                                                Teamo Best Collection
                                            </h5>
                                            <h3 class="title-big">
                                                inspiration Plants
                                            </h3>
                                            <div class="price">
                                                New Price:
                                                <span class="number-price">
														$250.00
													</span>
                                            </div>
                                            <a href="#" class="button btn-chekout">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 banner-wrapp">
                        <div class="banner">
                            <div class="item-banner style7">
                                <div class="inner">
                                    <div class="banner-content">
                                        <h3 class="title">Hanging <br/>Plants</h3>
                                        <div class="description">
                                            Adipiscing elit curabitur senectus sem
                                        </div>
                                        <a href="#" class="button btn-lets-do-it">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="banner">
                            <div class="item-banner style8">
                                <div class="inner">
                                    <div class="banner-content">
                                        <h3 class="title">Grow <br/> Orchid</h3>
                                        <div class="description">
                                            Cras pulvinar lorem ipsum dolor conse
                                        </div>
                                        <span class="price">$379.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="teamo-product produc-featured rows-space-65">
            <div class="container">
                <h3 class="custommenu-title-blog">
                    Deal of the day
                </h3>
                <div class="owl-products owl-slick equal-container nav-center"
                     data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":false, "dots":true, "infinite":false, "speed":800, "rows":1}'
                     data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":4}},{"breakpoint":"1200","settings":{"slidesToShow":3}},{"breakpoint":"992","settings":{"slidesToShow":2}},{"breakpoint":"480","settings":{"slidesToShow":1}}]'>
                    <div class="product-item style-5">
                        <div class="product-inner equal-element">
                            <div class="product-top">
                                <div class="flash">
                                    <span class="onnew">
                                        <span class="text">
                                            new
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#">
                                        <img src="{{asset('teamo/images/product-item-17.jpg')}}" alt="img">
                                    </a>
                                    <div class="thumb-group">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <a href="#" class="button quick-wiew-button">Quick View</a>
                                        <div class="loop-form-add-to-cart">
                                            <button class="single_add_to_cart_button button">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-count-down">
                                    <div class="teamo-countdown" data-y="2020" data-m="10" data-w="4" data-d="10"
                                         data-h="20" data-i="20" data-s="60"></div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h5 class="product-name product_title">
                                    <a href="#">Areca palm</a>
                                </h5>
                                <div class="group-info">
                                    <div class="stars-rating">
                                        <div class="star-rating">
                                            <span class="star-3"></span>
                                        </div>
                                        <div class="count-star">
                                            (3)
                                        </div>
                                    </div>
                                    <div class="price">
                                        <del>
                                            $65
                                        </del>
                                        <ins>
                                            $45
                                        </ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item style-5">
                        <div class="product-inner equal-element">
                            <div class="product-top">
                                <div class="flash">
											<span class="onnew">
												<span class="text">
													new
												</span>
											</span>
                                </div>
                            </div>
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#">
                                        <img src="{{ asset('teamo/images/product-item-21.jpg')}}" alt="img">
                                    </a>
                                    <div class="thumb-group">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <a href="#" class="button quick-wiew-button">Quick View</a>
                                        <div class="loop-form-add-to-cart">
                                            <button class="single_add_to_cart_button button">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-count-down">
                                    <div class="teamo-countdown" data-y="2020" data-m="9" data-w="2" data-d="30"
                                         data-h="20" data-i="60" data-s="60"></div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h5 class="product-name product_title">
                                    <a href="#">European Pan Palm</a>
                                </h5>
                                <div class="group-info">
                                    <div class="stars-rating">
                                        <div class="star-rating">
                                            <span class="star-3"></span>
                                        </div>
                                        <div class="count-star">
                                            (3)
                                        </div>
                                    </div>
                                    <div class="price">
                                        <del>
                                            $65
                                        </del>
                                        <ins>
                                            $45
                                        </ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item style-5">
                        <div class="product-inner equal-element">
                            <div class="product-top">
                                <div class="flash">
											<span class="onnew">
												<span class="text">
													new
												</span>
											</span>
                                </div>
                            </div>
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#">
                                        <img src="{{ asset('teamo/images/product-item-20.jpg')}}" alt="img">
                                    </a>
                                    <div class="thumb-group">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <a href="#" class="button quick-wiew-button">Quick View</a>
                                        <div class="loop-form-add-to-cart">
                                            <button class="single_add_to_cart_button button">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-count-down">
                                    <div class="teamo-countdown" data-y="2020" data-m="12" data-w="1" data-d="24"
                                         data-h="20" data-i="50" data-s="60"></div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h5 class="product-name product_title">
                                    <a href="#">Aluminum Plant Fit</a>
                                </h5>
                                <div class="group-info">
                                    <div class="stars-rating">
                                        <div class="star-rating">
                                            <span class="star-3"></span>
                                        </div>
                                        <div class="count-star">
                                            (3)
                                        </div>
                                    </div>
                                    <div class="price">
                                        <del>
                                            $65
                                        </del>
                                        <ins>
                                            $45
                                        </ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item style-5">
                        <div class="product-inner equal-element">
                            <div class="product-top">
                                <div class="flash">
											<span class="onnew">
												<span class="text">
													new
												</span>
											</span>
                                </div>
                            </div>
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#">
                                        <img src="{{ asset('teamo/images/product-item-22.jpg')}}" alt="img">
                                    </a>
                                    <div class="thumb-group">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <a href="#" class="button quick-wiew-button">Quick View</a>
                                        <div class="loop-form-add-to-cart">
                                            <button class="single_add_to_cart_button button">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-count-down">
                                    <div class="teamo-countdown" data-y="2020" data-m="7" data-w="3" data-d="20"
                                         data-h="10" data-i="10" data-s="20"></div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h5 class="product-name product_title">
                                    <a href="#">Arrowhead</a>
                                </h5>
                                <div class="group-info">
                                    <div class="stars-rating">
                                        <div class="star-rating">
                                            <span class="star-3"></span>
                                        </div>
                                        <div class="count-star">
                                            (3)
                                        </div>
                                    </div>
                                    <div class="price">
                                        <del>
                                            $65
                                        </del>
                                        <ins>
                                            $45
                                        </ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item style-5">
                        <div class="product-inner equal-element">
                            <div class="product-top">
                                <div class="flash">
											<span class="onnew">
												<span class="text">
													new
												</span>
											</span>
                                </div>
                            </div>
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#">
                                        <img src="{{ asset('teamo/images/product-item-19.jpg')}}" alt="img">
                                    </a>
                                    <div class="thumb-group">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <a href="#" class="button quick-wiew-button">Quick View</a>
                                        <div class="loop-form-add-to-cart">
                                            <button class="single_add_to_cart_button button">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-count-down">
                                    <div class="teamo-countdown" data-y="2020" data-m="9" data-w="2" data-d="30"
                                         data-h="20" data-i="60" data-s="60"></div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h5 class="product-name product_title">
                                    <a href="#">3-Bird’s Nest Fern</a>
                                </h5>
                                <div class="group-info">
                                    <div class="stars-rating">
                                        <div class="star-rating">
                                            <span class="star-3"></span>
                                        </div>
                                        <div class="count-star">
                                            (3)
                                        </div>
                                    </div>
                                    <div class="price">
                                        <del>
                                            $65
                                        </del>
                                        <ins>
                                            $45
                                        </ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item style-5">
                        <div class="product-inner equal-element">
                            <div class="product-top">
                                <div class="flash">
											<span class="onnew">
												<span class="text">
													new
												</span>
											</span>
                                </div>
                            </div>
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#">
                                        <img src="{{ asset('teamo/images/product-item-18.jpg')}}" alt="img">
                                    </a>
                                    <div class="thumb-group">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button">
                                                <a href="#">Add to Wishlist</a>
                                            </div>
                                        </div>
                                        <a href="#" class="button quick-wiew-button">Quick View</a>
                                        <div class="loop-form-add-to-cart">
                                            <button class="single_add_to_cart_button button">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-count-down">
                                    <div class="teamo-countdown" data-y="2020" data-m="9" data-w="2" data-d="30"
                                         data-h="20" data-i="60" data-s="60"></div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h5 class="product-name product_title">
                                    <a href="#">Broadleaf Lady Palm</a>
                                </h5>
                                <div class="group-info">
                                    <div class="stars-rating">
                                        <div class="star-rating">
                                            <span class="star-3"></span>
                                        </div>
                                        <div class="count-star">
                                            (3)
                                        </div>
                                    </div>
                                    <div class="price">
                                        <del>
                                            $65
                                        </del>
                                        <ins>
                                            $45
                                        </ins>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="banner-wrapp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="banner">
                            <div class="item-banner style4">
                                <div class="inner">
                                    <div class="banner-content">
                                        <h4 class="teamo-subtitle">TOP STAFF PICK</h4>
                                        <h3 class="title">Shop Cactus</h3>
                                        <div class="description">
                                            Proin interdum magna primis id consequat dictum
                                        </div>
                                        <a href="#" class="button btn-shop-now">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="banner">
                            <div class="item-banner style5">
                                <div class="inner">
                                    <div class="banner-content">
                                        <h3 class="title">Indoor Life<br/>Plants</h3>
                                        <span class="code">
												Use code:
												<span>
													TEAMO
												</span>
												Get 25% Off for all Accessories items!
											</span>
                                        <a href="#" class="button btn-shop-now">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-wrapp rows-space-65">
            <div class="container">
                <div class="banner">
                    <div class="item-banner style17">
                        <div class="inner">
                            <div class="banner-content">
                                <h3 class="title">Living thing grows</h3>
                                <div class="description">
                                    You have no car & Are you <br/>ready to grow? come & shop with us!
                                </div>
                                <div class="banner-price">
                                    Price from:
                                    <span class="number-price">$45.00</span>
                                </div>
                                <a href="#" class="button btn-shop-now">Shop now</a>
                                <a href="#" class="button btn-view-collection">View more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="teamo-tabs  default rows-space-40">
            <div class="container">
                <div class="tab-head">
                    <ul class="tab-link">
                        <li class="active">
                            <a data-toggle="tab" aria-expanded="true" href="#bestseller">Bestseller</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" aria-expanded="true" href="#new_arrivals">New Arrivals </a>
                        </li>
                        {{-- <li class="">
                            <a data-toggle="tab" aria-expanded="true" href="#top-rated">Top Rated</a>
                        </li> --}}
                    </ul>
                </div>
                <div class="tab-container">
                    <div id="bestseller" class="tab-panel active">
                        <div class="teamo-product">
                            <ul class="row list-products auto-clear equal-container product-grid">
                                @foreach ($bestpro as $bestps)
                                <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            @foreach ($newarrival as $newestpr)
                                                @if ($bestps->id == $newestpr->id)
                                                    <div class="flash">
                                                        <span class="onnew">
                                                            <span class="text">
                                                                new
                                                            </span>
                                                        </span>
                                                    </div>
                                                @else
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    @foreach ($galpro->slice(0, 1) as $gal)
                                                        @if ($bestps->id == $gal->id_produk)
                                                        <span href="{!! url('/ecom-product-detail'); !!}">
                                                            <img class="mr-3 img-fluid rounded"  style="max-width: 300px" src="{{ asset($gal->foto) }}" alt="Gamber Produk">
                                                        </span>
                                                        @else
                                                        <img src="{{ asset('teamo/images/product-item-1.jpg')}}" alt="img">
                                                        @endif
                                                    @endforeach
                                                </a>
                                                <div class="thumb-group">
                                                    {{-- <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Add to Wishlist</a>
                                                        </div>
                                                    </div> --}}
                                                    <a href="#" class="button quick-wiew-button">Quick View</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Add to cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">{{$bestps->nama_produk}}</a>
                                            </h5>
                                            <div class="group-info">
                                                {{-- <div class="stars-rating">
                                                    @if($bestps->rating_produk == 1)
                                                        <div class="star-rating">
                                                            <span class="star-1"></span>
                                                        </div>
                                                    @elseif($bestps->rating_produk == 2)
                                                        <div class="star-rating">
                                                            <span class="star-2"></span>
                                                        </div>
                                                    @elseif($bestps->rating_produk == 3)
                                                        <div class="star-rating">
                                                            <span class="star-3"></span>
                                                        </div>
                                                    @elseif($bestps->rating_produk == 4)
                                                        <div class="star-rating">
                                                            <span class="star-4"></span>
                                                        </div>
                                                    @elseif($bestps->rating_produk == 5)
                                                        <div class="star-rating">
                                                            <span class="star-5"></span>
                                                        </div>
                                                    @endif
                                                    <div class="count-star">
                                                       (3)      
                                                    </div>
                                                </div> --}}
                                                <div class="price">
                                                    {{-- <del>
                                                        $65
                                                    </del> --}}
                                                    <ins>
                                                        @currency($bestps->harga_produk)
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div id="new_arrivals" class="tab-panel">
                        <div class="teamo-product">
                            <ul class="row list-products auto-clear equal-container product-grid">
                                @foreach ($newarrival as $newarr)
                                <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    @foreach ($galpro->slice(0, 1) as $gal)
                                                        @if ($newarr->id == $gal->id_produk)
                                                        <span href="{!! url('/ecom-product-detail'); !!}">
                                                            <img class="mr-3 img-fluid rounded"  style="max-width: 300px" src="{{ asset($gal->foto) }}" alt="Gamber Produk">
                                                        </span>
                                                        @else
                                                        <img src="{{ asset('teamo/images/product-item-9.jpg')}}" alt="img">
                                                        @endif
                                                    @endforeach
                                                </a>
                                                <div class="thumb-group">
                                                    {{-- <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Add to Wishlist</a>
                                                        </div>
                                                    </div> --}}
                                                    <a href="#" class="button quick-wiew-button">Quick View</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Add to cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">{{$newarr ->nama_produk}}</a>
                                            </h5>
                                            <div class="group-info">
                                                {{-- <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div> --}}
                                                <div class="price">
                                                    {{-- <del>
                                                        $65
                                                    </del> --}}
                                                    <ins>
                                                        @currency($newarr->harga_produk)
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    {{-- <div id="top-rated" class="tab-panel">
                        <div class="teamo-product">
                            <ul class="row list-products auto-clear equal-container product-grid">
                                <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                    <div class="product-inner equal-element">
                                        <div class="product-top">
                                            <div class="flash">
													<span class="onnew">
														<span class="text">
															new
														</span>
													</span>
                                            </div>
                                        </div>
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#">
                                                    <img src="{{ asset('teamo/images/product-item-10.jpg')}}" alt="img">
                                                </a>
                                                <div class="thumb-group">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="button quick-wiew-button">Quick View</a>
                                                    <div class="loop-form-add-to-cart">
                                                        <button class="single_add_to_cart_button button">Add to cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-name product_title">
                                                <a href="#">Projector Headlights</a>
                                            </h5>
                                            <div class="group-info">
                                                <div class="stars-rating">
                                                    <div class="star-rating">
                                                        <span class="star-3"></span>
                                                    </div>
                                                    <div class="count-star">
                                                        (3)
                                                    </div>
                                                </div>
                                                <div class="price">
                                                    <del>
                                                        $65
                                                    </del>
                                                    <ins>
                                                        $45
                                                    </ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="teamo-iconbox-wrapp default">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="teamo-iconbox default">
                            <div class="iconbox-inner">
                                <div class="icon">
                                    <span class="flaticon-delivery-truck"></span>
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        Aisya Catering Spesialis Dadakan
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="teamo-blog-wraap default">
            <div class="container">
                <h3 class="custommenu-title-blog">
                    BLOG TERBARU AISYA
                </h3>
                <div class="teamo-blog default">
                    <div class="owl-slick equal-container nav-center"
                         data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":false, "dots":true, "infinite":true, "speed":800, "rows":1}'
                         data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":3}},{"breakpoint":"1200","settings":{"slidesToShow":3}},{"breakpoint":"992","settings":{"slidesToShow":2}},{"breakpoint":"768","settings":{"slidesToShow":2}},{"breakpoint":"481","settings":{"slidesToShow":1}}]'>
                        @foreach ($blog as $thisb)
                        <div class="teamo-blog-item equal-element layout1">
                            <div class="post-thumb">
                                <a href="#">
                                    {{-- <img src="{{ asset('teamo/images/slider-blog-thumb-1.jpg')}}" alt="img"> --}}
                                </a>
                                <div class="category-blog">
                                    <ul class="list-category">
                                        <li class="category-item">
                                            <a href="#">Skincare</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="post-item-share">
                                    <a href="#" class="icon">
                                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                                    </a>
                                    <div class="box-content">
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-info">
                                <div class="blog-meta">
                                    <div class="post-date">
                                        {{ date('d M Y, H:i:s', strtotime($thisb->updated_at)) }}
                                    </div>
                                    <span class="view">
											<i class="icon fa fa-eye" aria-hidden="true"></i>
											631
										</span>
                                    <span class="comment">
											<i class="icon fa fa-commenting" aria-hidden="true"></i>
											84
										</span>
                                </div>
                                <h2 class="blog-title">
                                    <a href="#">{{ $thisb->judul_blog}} </a>
                                </h2>
                                <div class="main-info-post">
                                    <p class="des">
                                        {{-- {!! substr($thisb->konten_blog,0,150) !!} --}}
                                    </p>
                                    <a class="readmore" href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="instagram-wrapp">
    <div>
        <h3 class="custommenu-title-blog">
            <i class="flaticon-instagram" aria-hidden="true"></i>
            Instagram Feed
        </h3>
        <div class="teamo-instagram">
            <div class="instagram owl-slick equal-container"
                 data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":false, "dots":false, "infinite":true, "speed":800, "rows":1}'
                 data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":5}},
                 {"breakpoint":"1200","settings":{"slidesToShow":4}},
                 {"breakpoint":"992","settings":{"slidesToShow":3}},
                 {"breakpoint":"768","settings":{"slidesToShow":2}},
                 {"breakpoint":"481","settings":{"slidesToShow":1}}]'>
                <div class="item-instagram">
                    <a href="http://www.instagram.com/p/CHhdkVdAJh3/?utm_source=ig_web_copy_link" target="_blank">
                        <img src="{{ asset('teamo/images/ig1.jpg')}}" alt="img">
                        <span class="text">
                            <i class="icon flaticon-instagram" aria-hidden="true"></i>
                        </span>
                    </a>
                    
                </div>
                <div class="item-instagram">
                    <a href="http://www.instagram.com/p/CIVfH-wgerH/?utm_medium=copy_link" target="_blank">
                        <img src="{{ asset('teamo/images/ig2.jpg')}}" alt="img">
                        <span class="text">
                            <i class="icon flaticon-instagram" aria-hidden="true"></i>
                        </span>
                    </a>
                </div>
                <div class="item-instagram">
                    <a href="http://www.instagram.com/p/CIRa9S2ASsw/?utm_medium=copy_link" target="_blank">
                        <img src="{{ asset('teamo/images/ig3.jpg')}}" alt="img">
                        <span class="text">
                            <i class="icon flaticon-instagram" aria-hidden="true"></i>
                        </span>
                    </a>
                </div>
                <div class="item-instagram">
                    <a href="http://www.instagram.com/p/CHzsMgdgqj7/?utm_medium=copy_link" target="_blank">
                        <img src="{{ asset('teamo/images/ig4.jpg')}}" alt="img">
                        <span class="text">
                            <i class="icon flaticon-instagram" aria-hidden="true"></i>
                        </span>
                    </a>
                </div>
                <div class="item-instagram">
                    <a href="http://www.instagram.com/p/CHWLOUDg981/?utm_medium=copy_link" target="_blank">
                        <img src="{{ asset('teamo/images/ig5.jpg')}}" alt="img">
                        <span class="text">
                            <i class="icon flaticon-instagram" aria-hidden="true"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection