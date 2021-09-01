@extends('layouts.front')

@section('container')
<div class="main-content main-content-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="trail-item trail-end active">
                            Tentang Kami
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="content-area content-about col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="site-main">
                    <h3 class="custom_blog_title">TENTANG KAMI</h3>
                    <div class="page-main-content">
                        <div class="header-banner banner-image">
                            <div class="banner-wrap">
                                <div class="banner-header">
                                    <div class="col-lg-5 col-md-offset-7">
                                        <div class="content-inner">
                                            <h2 class="title">
                                                New Collection <br/> for you
                                            </h2>
                                            <div class="sub-title">
                                                Shop the latest products right <br/>
                                                We have beard supplies from top brands.
                                            </div>
                                            <a href="#" class="teamo-button button">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4">
                                <div class="teamo-iconbox  layout1">
                                    <div class="iconbox-inner">
                                        <div class="icon-item">
                                            <span class="placeholder-text">01</span>
                                            <span class="icon flaticon-rocket-ship"></span>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">
                                                EU Free Delivery
                                            </h4>
                                            <div class="text">
                                                Free Delivery on all order from EU with price more than $90.00
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-4 col-lg-offset-1">
                                <div class="teamo-iconbox  layout1">
                                    <div class="iconbox-inner">
                                        <div class="icon-item">
                                            <span class="placeholder-text">02</span>
                                            <span class="icon flaticon-return"></span>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">
                                                Money Guarantee
                                            </h4>
                                            <div class="text">
                                                30 Days money back guarantee no question asked!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-4 col-lg-offset-1">
                                <div class="teamo-iconbox  layout1">
                                    <div class="iconbox-inner">
                                        <div class="icon-item">
                                            <span class="placeholder-text">03</span>
                                            <span class="icon flaticon-padlock"></span>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">
                                                Online Support 24/7
                                            </h4>
                                            <div class="text">
                                                We’re here to support to you 24/7. Let’s shopping now!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="main-info-post">
                            <H5>
                                TENTANG AISYA CATERING SURABAYA
                            </H5>
                            <p class="lead">
                                <mark> Aisya Catering Surabaya adalah sebuah perusahaan jasa catering yang sudah lama 
                                    bergelut dalam bidang jasa catering. </mark>
                                    <ul class="list-unstyled">
                                        <li>Kami melayani jasa catering, yakni :</li>
                                        <ul>
                                            <li>jasa catering acara pesta, pesta pernikahan, pesta ulang tahun, 
                                            hajatan, acara kantor atau dinas,  
                                            </li>
                                            <li>untuk catering perusahaan, catering sekolah,</li>
                                            <li>baik untuk acara besar maupun kecil.</li>
                                        </ul>
                                    </ul>    
                            </p>
                            <h5>
                                LAYANAN CATERING 
                            </h5>
                            <p class="lead">
                                Kami melayani jasa catering untuk wilayah Surabaya dan sekitarnya, 
                                atau bisa menerima panggilan untuk luar kota. Hubungi kami untuk konsultasi lebih lanjut.
                            </p>
                        </div>
                        <div class="team-member">
                            <div class="row">
                                <div class="col-sm-12 border-custom">
                                    <span></span>
                                </div>
                            </div>
                            <h2 class="custom_blog_title center">
                                teamo’s Important Persons
                            </h2>
                            <div class="team-member-slider nav-center owl-slick"
                                 data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":true, "dots":false, "infinite":true, "speed":800, "rows":1}'
                                 data-responsive='[{"breakpoint":"0","settings":{"slidesToShow":1}},{"breakpoint":"480","settings":{"slidesToShow":1}},{"breakpoint":"767","settings":{"slidesToShow":2}},{"breakpoint":"991","settings":{"slidesToShow":3}},{"breakpoint":"1199","settings":{"slidesToShow":3}},{"breakpoint":"2000","settings":{"slidesToShow":3}}]'>
                                <div class="teamo-team-member">
                                    <div class="team-member-item">
                                        <div class="member_avatar">
                                            <img src="{{ asset('teamo/images/member3.png')}}" alt="img">
                                        </div>
                                        <h5 class="member_name">Mr Claudio</h5>
                                        <div class="member_position">
                                            CEO & Founder teamo Outfit
                                        </div>
                                    </div>
                                </div>
                                <div class="teamo-team-member">
                                    <div class="team-member-item">
                                        <div class="member_avatar">
                                            <img src="{{ asset('teamo/images/member2.png')}}" alt="img">
                                        </div>
                                        <h5 class="member_name">Mr Claudio</h5>
                                        <div class="member_position">
                                            CEO & Founder teamo Outfit
                                        </div>
                                    </div>
                                </div>
                                <div class="teamo-team-member">
                                    <div class="team-member-item">
                                        <div class="member_avatar">
                                            <img src="{{ asset('teamo/images/member1.png')}}" alt="img">
                                        </div>
                                        <h5 class="member_name">Mr Claudio</h5>
                                        <div class="member_position">
                                            CEO & Founder teamo Outfit
                                        </div>
                                    </div>
                                </div>
                                <div class="teamo-team-member">
                                    <div class="team-member-item">
                                        <div class="member_avatar">
                                            <img src="{{ asset('teamo/images/member1.png')}}" alt="img">
                                        </div>
                                        <h5 class="member_name">Mr Claudio</h5>
                                        <div class="member_position">
                                            CEO & Founder teamo Outfit
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection