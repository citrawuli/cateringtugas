@extends('layouts.front')

@section('container')
<style>
    p {
    line-height: 24px;
    }

</style>
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
                                    <video  autoplay muted loop controls >
                                        <source src="{{asset('/teamo/images/aisya_product/vid2.mp4')}}" type="video/mp4">
                                    </video>
                            
                                    <div class="col-lg-5 col-md-offset-7" >
                                        <div class="content-inner">
                                            <h2 class="title">
                                                Aisya Catering  <br/> Surabaya
                                            </h2>
                                            <div class="sub-title" style="text-align: justify;">
                                                <p>Dipercaya untuk melayani katering harian perusahaan dan sekolah, katering  acara pesta pernikahan, pesta ulang tahun, rapat, seminar, arisan, dan acara keluarga; baik kecil maupun besar.<br/>
                                                </p>
                                                <p>Kami melayani jasa catering untuk wilayah Surabaya dan sekitarnya, 
                                                    atau bisa menerima panggilan untuk luar kota. Hubungi kami untuk konsultasi lebih lanjut.
                                               </p>
                                            </div>
                                            {{-- <a href="#" class="teamo-button button">Shop now</a> --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-1" style="text-align: justify;">
                                        <h4>Sejarah</h4>
                                        <p> Berdiri pada 2012, Aisya Catering memulai usaha dengan berjualan kue basah yang diminati oleh kantor-kantor pemerintahan.
                                        </p>
                                        <p>Seiring dengan berjalannya waktu, pada tahun 2014, Aisya Catering memulai untuk mengembangkan usaha menyediakan makanan nasi kotak dan
                                            prasmanan kecil-kecilan yang ternyata mendapatkan apresiasi baik dari masyarakat dengan perluasan tempat usaha dan penyempurnaan SDM. 
                                        </p>
                                        <p> Pada tahun 2015, Aisya Catering resmi mendapatkan Surat Izin Usaha Perdagangan (SIUP) bernomor terang 503 / 12082.A / 436.6.11 / 2015 dari Dinas Perdagangan dan Perindustrian Pemerintah Kota Surabaya. <br>
                                        </p>
                                        <p>Berkat dukungan pelanggan, kini Aisya Catering dapat memenuhi kebutuhan order hingga 4000 pak dan kapasitas kue 7000 perhari.
                                        </p>
                                   </div>
                                   <div class="col-lg-5 col-md-offset-7"  style="text-align: justify;" >
                                        <div class="content-inner">
                                            <h4>Visi</h4>
                                            <p> “Menjadi perusahaan jasa boga terkemuka dan memiliki reputasi baik dalam menjaga kualitas rasa dan kualitas layanan yang prima.”</p>
                                            <h4>Misi</h4>
                                            <p> “Mengutamakan kepuasan pelanggan.”</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="team-member">
                                <div class="row">
                                    <div class="col-sm-12 border-custom">
                                        <span></span>
                                    </div>
                                </div>
                                <h2 class="custom_blog_title center">
                                    Layanan Kami
                                </h2>
                                <div class="team-member-slider nav-center owl-slick"
                                     data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":true, "dots":false, "infinite":true, "speed":800, "rows":1}'
                                     data-responsive='[{"breakpoint":"0","settings":{"slidesToShow":1}},{"breakpoint":"480","settings":{"slidesToShow":1}},{"breakpoint":"767","settings":{"slidesToShow":2}},{"breakpoint":"991","settings":{"slidesToShow":3}},{"breakpoint":"1199","settings":{"slidesToShow":3}},{"breakpoint":"2000","settings":{"slidesToShow":3}}]'>
                                    <div class="teamo-team-member">
                                        <div class="team-member-item">
                                            <div class="member_avatar">
                                                <video muted loop controls style="object-fit: cover;border-radius: 50%;width: 310px;
                                                height: 310px;">
                                                    <source src="{{asset('/teamo/images/aisya_product/vid1.mp4')}}" type="video/mp4">
                                                </video>
                                            </div>
                                            <h5 class="member_name">Katering Pernikahan</h5>
                                            <div class="member_position">
                                                Makanan yang lezat dan dekorasi yang mewah akan memberikan kesan yang tak terlupakan
                                            </div>
                                        </div>
                                    </div>
                                    <div class="teamo-team-member">
                                        <div class="team-member-item">
                                            <div class="member_avatar">
                                                {{-- <img src="{{ asset('teamo/images/member2.png')}}" alt="img"> --}}
                                                <video muted loop controls style="object-fit: cover;border-radius: 50%;width: 310px;
                                                height: 310px;">
                                                    <source src="{{asset('/teamo/images/aisya_product/vid3.mp4')}}" type="video/mp4">
                                                </video>
                                            </div>
                                            <h5 class="member_name">Hantaran</h5>
                                            <div class="member_position">
                                                Hantaran spesial untuk momen spesial. 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="teamo-team-member">
                                        <div class="team-member-item">
                                            <div class="member_avatar">
                                                <video muted loop controls style="object-fit: cover;border-radius: 50%;width: 310px;
                                                height: 310px;">
                                                    <source src="{{asset('/teamo/images/aisya_product/vid4.mp4')}}" type="video/mp4">
                                                </video>
                                            </div>
                                            <h5 class="member_name">Nasi Kotak</h5>
                                            <div class="member_position">
                                                Rapat seharian bingung konsumsi? Menu nasi kotak Aisya bisa jadi andalan kamu
                                            </div>
                                        </div>
                                    </div>
                                    <div class="teamo-team-member">
                                        <div class="team-member-item">
                                            <div class="member_avatar">
                                                <img src="{{ asset('teamo/images/aisya_product/snack_box.jpeg')}}" height="300" width="300" alt="img">
                                            </div>
                                            <h5 class="member_name">Kue</h5>
                                            <div class="member_position">
                                                Nikmat, dilengkapi pilihan rasa asin dan manis dari katalog produk kami
                                            </div>
                                        </div>
                                    </div>
                                    <div class="teamo-team-member">
                                        <div class="team-member-item">
                                            <div class="member_avatar">
                                                <video muted loop controls style="object-fit: cover;border-radius: 50%;width: 310px;
                                                height: 310px;">
                                                    <source src="{{asset('/teamo/images/aisya_product/vid6.mp4')}}" type="video/mp4">
                                                </video>
                                            </div>
                                            <h5 class="member_name">Prasmanan</h5>
                                            <div class="member_position">
                                                Menu enak bergizi dan pelayanan memuaskan dari Aisya Catering, joss
                                            </div>
                                        </div>
                                    </div>
                                    <div class="teamo-team-member">
                                        <div class="team-member-item">
                                            <div class="member_avatar">
                                                <video muted loop controls style="object-fit: cover;border-radius: 50%;width: 310px;
                                                height: 310px;">
                                                    <source src="{{asset('/teamo/images/aisya_product/vid5.mp4')}}" type="video/mp4">
                                                </video>
                                            </div>
                                            <h5 class="member_name">Tumpengan</h5>
                                            <div class="member_position">
                                                Menghangatkan suasana syukuran dengan tumpeng cantik dari Aisya Catering
                                            </div>
                                        </div>
                                    </div>
                                    <div class="teamo-team-member">
                                        <div class="team-member-item">
                                            <div class="member_avatar">
                                                <img src="{{ asset('teamo/images/aisya_product/harian_kantor.jpg')}}" style="object-fit: cover;border-radius: 50%;width: 310px;
                                                height: 310px;" alt="img">
                                            </div>
                                            <h5 class="member_name">Katering Harian Perusahaan</h5>
                                            <div class="member_position">
                                                Aisya menawarkan berbagai pilihan paket katering dan kerja sama untuk menyediakan kantin di area kerja, sekolah, kantor, dan industri.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="teamo-team-member">
                                        <div class="team-member-item">
                                            <div class="member_avatar">
                                                <img src="{{ asset('teamo/images/aisya_product/pemerintah.jpg')}}" style="object-fit: cover;border-radius: 50%;width: 310px;
                                                height: 310px;" alt="img">
                                            </div>
                                            <h5 class="member_name">Katering Instansi</h5>
                                            <div class="member_position">
                                                Percayakan katering harian maupun event seperti seminar, workshop, gathering, dan sejenisnya pada Aisya. Aisya berpengalaman, tepat waktu, dan profesional.
                                            </div>
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
                                            <span class="icon flaticon-padlock"></span>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">
                                               Kualitas Terjamin 
                                            </h4>
                                            <div class="text">bersertifikat Laik Higiene Sanitasi Jasa Boga, ISO 22000:2005, dan HACCP
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-4">
                                <div class="teamo-iconbox  layout1">
                                    <div class="iconbox-inner">
                                        <div class="icon-item">
                                            <span class="placeholder-text">01</span>
                                            <span class="icon flaticon-checked"></span>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">
                                                Higienis, Sehat, dan Bergizi
                                            </h4>
                                            <div class="text">
                                                {{-- Free Delivery on all order from EU with price more than $90.00 --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-4">
                                <div class="teamo-iconbox  layout1">
                                    <div class="iconbox-inner">
                                        <div class="icon-item">
                                            <span class="placeholder-text">01</span>
                                            <span class="icon flaticon-rocket-ship"></span>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">
                                                Pengantaran Tepat Waktu
                                            </h4>
                                            <div class="text">
                                                {{-- Free Delivery on all order from EU with price more than $90.00 --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-4">
                                <div class="teamo-iconbox  layout1">
                                    <div class="iconbox-inner">
                                        <div class="icon-item">
                                            <span class="placeholder-text">01</span>
                                            <span class="icon flaticon-rocket-ship"></span>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">
                                               Termasuk Ongkos Kirim
                                            </h4>
                                            <div class="text">
                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-4">
                                <div class="teamo-iconbox  layout1">
                                    <div class="iconbox-inner">
                                        <div class="icon-item">
                                            <span class="placeholder-text">01</span>
                                            <span class="icon flaticon-shopping-cart"></span>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">
                                                Paket Katering Murah(Harga Bersahabat)
                                            </h4>
                                            <div class="text">
                                                {{-- 30 Days money back guarantee no question asked! --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-4">
                                <div class="teamo-iconbox  layout1">
                                    <div class="iconbox-inner">
                                        <div class="icon-item">
                                            <span class="placeholder-text">01</span>
                                            <span class="icon flaticon-checked"></span>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">
                                                CITA RASA MAKANAN & VARIASI MENU YANG BERAGAM
                                            </h4>
                                            <div class="text">
                                                {{-- Free Delivery on all order from EU with price more than $90.00 --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-4">
                                <div class="teamo-iconbox  layout1">
                                    <div class="iconbox-inner">
                                        <div class="icon-item">
                                            <span class="placeholder-text">03</span>
                                            <span class="icon flaticon-support"></span>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">
                                                Online Support pada jam kerja
                                            </h4>
                                            <div class="text">
                                                {{-- We’re here to support to you 24/7. Let’s shopping now! --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="main-info-post">
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection