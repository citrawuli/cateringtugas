@extends('layouts.front')

@section('container')
<div class="main-content main-content-contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="trail-item trail-end active">
                            Kontak Kami
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="content-area content-contact col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="site-main">
                    <h3 class="custom_blog_title">Kontak Kami</h3>
                    <br><br><br><br><br><br>
                    <br><br><br><br><br><br>
                    <br><br><br>
                    <div class="page-main-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-contact">
                                        <div class="col-lg-8 no-padding">
                                            <div class="form-message">
                                                <mark>
                                                    Punya pertanyaan dalam melakukan pemesanan?<br>
                                                    Anda dapat menghubungi kami melalui:
                                                </mark><br>
                                                
                                                <a href="http://wa.me/6282123522472" target="_blank"class="btn light btn-success"><span class="btn-icon-right"><i
                                                    class="fa fa-whatsapp" style="margin-right: 10px;"></i></span>Whatsapp Business</a> 
                                                
                                                <a href="http://wa.me/628818495928" target="_blank"class="btn light btn-success"><span class="btn-icon-right"><i
                                                    class="fa fa-whatsapp" style="margin-right: 10px;"></i></span>Whatsapp 1</a> 
                                                
                                                <a href="http://wa.me/6281235770707" target="_blank"class="btn light btn-success"><span class="btn-icon-right"><i
                                                    class="fa fa-whatsapp" style="margin-right: 10px;"></i></span>Whatsapp 2</a> 
                                                <br><p>Customer Service kami siap melayani Anda.</p> 
                                                <div class="mapouter">
                                                    <br>
                                                    <div class="gmap_canvas">
                                                        <iframe width="600" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Jl.%20Kebonsari%20III%20No.28,%20Kebonsari,%20Kec.%20Jambangan,%20Kota%20Surabaya,%20Jawa%20Timur%2060233&t=k&z=13&ie=UTF8&iwloc=&output=embed" 
                                                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                                        <a href="https://getasearch.com/fmovies"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style>
                                                        <a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 no-padding">
                                            <div class="form-contact-information">
                                                <form action="#" class="teamo-contact-info">
                                                    <h2 class="title">
                                                        Informasi Kontak
                                                    </h2>
                                                    <div class="info">
                                                        <div class="item address">
                                                                <span class="icon">
                                                                    
                                                                </span>
                                                            <span class="text">
                                                                Jl. Kebonsari III No.28, Kebonsari, Kec. Jambangan, Kota Surabaya, Jawa Timur 60233
                                                                </span>
                                                        </div>
                                                        <div class="item phone">
                                                                <span class="icon">
                                                                    
                                                                </span>
                                                            <span class="text">
                                                                (031) 828 1065
                                                                </span>
                                                        </div>
                                                        {{-- <div class="item email">
                                                                <span class="icon">
                                                                    
                                                                </span>
                                                            <span class="text">
                                                                    info@teamooutfit.co.uk
                                                                </span>
                                                        </div> --}}
                                                    </div>
                                                    <div class="socials">
                                                        <a  href="https://web.facebook.com/cateringaisyasby/" class="social-item" target="_blank">
                                                                <span class="icon fa fa-facebook"></span>
                                                        </a>
                                                        {{-- <a href="#" class="social-item" target="_blank">
                                                                <span class="icon fa fa-twitter-square">
                                                                    
                                                                </span>
                                                        </a> --}}
                                                        <a href="https://www.instagram.com/cateringaisyasby/" class="social-item" target="_blank">
                                                                <span class="icon fa fa-instagram"></span>
                                                        </a>
                                                    </div>
                                                </form>
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
    
</div>


@endsection