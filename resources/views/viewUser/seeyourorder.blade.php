@extends('layouts.front')

@section('container')
<div class="main-content main-content-product no-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="trail-item trail-end active">
                            Daftar Pemesanan Anda
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-area  shop-grid-content full-width col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="site-main">
                    <div class="shop-top-control">
                        Anda memiliki {{$totalpemesanan}} total pemesanan
                       
                        <div class="grid-view-mode">
                            <div class="inner">
                                <a href="#" class="modes-mode mode-list active">
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3 class="custom_blog_title">
                        Daftar Pemesanan Anda
                    </h3>
                    <ul class="row list-products auto-clear equal-container product-list">
                        @foreach ( $pemesanan as $pem)
                        <li class="product-item style-list col-lg-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-ts-12">
                            <div class="product-inner equal-element">
                                <div class="product-top">
                                    @foreach ($newpemesanan as $newpem)
                                        @if ($pem->id_pemesanan == $newpem->id_pemesanan)
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
                                <div class="products-bottom-content">
                                    
                                    <div class="product-info-left">
                                        <br>
                                        <h5 class="product-name product_title">
                                            <a href="#">{{$pem->id_pemesanan}}</a>
                                        </h5>
                                        
                                        <ul class="product-attributes">
                                            <li>
                                                Nama Pemesan:
                                            </li>
                                            <li>
                                                <a href="#">{{$pem->nama_lengkap_pembeli}}</a>
                                            </li>
                                        </ul>
                                        <ul class="attributes-display">
                                            <li class="swatch-color">
                                                Nomor Telepon:
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">{{$pem->no_hp_pembeli}}</a>
                                            </li>
                                        </ul>
                                        <ul class="attributes-display">
                                            <li class="swatch-color">
                                                Untuk tanggal:
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">{{ date('d M Y', strtotime($pem->untuk_tanggal)) ?? '-' }}</a>
                                            </li>
                                        </ul>
                                        <ul class="attributes-display">
                                            <li class="swatch-color">
                                                Untuk jam:
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">{{$pem->untuk_jam ?? '-'}}</a>
                                            </li>
                                        </ul>
                                        
                                        <ul class="attributes-display">
                                            <li class="swatch-color">
                                                Alamat pengantaran:
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">{{$pem->alamat_lengkap_pembeli ?? '-'}}</a>
                                            </li>
                                        </ul>
                                        <ul class="attributes-display">
                                            <li class="swatch-color">
                                                Keterangan:
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">{{$pem->keterangan ?? '-'}}</a>
                                            </li>
                                        </ul>
                                        
                                    </div>
                                    <div class="product-info-right">
                                        <br>
                                        <div class="price">
                                            @currency($pem->total_transaksi)
                                        </div>
                                        <div class="product-list-message">
                                            <i class="icon fa fa-truck" aria-hidden="true"></i>
                                                @if ($pem ->pengambilan == '1')
                                                    <a href=""></i>Diambil sendiri</a>
                                                @elseif ($pem ->pengambilan == '2')
                                                    <a href=""></i>Dikirim Go-Car</a>
                                                @endif
                                        </div>
                                        
                                            <div class="single_variation_wrap">
                                                <a class="single_add_to_cart_button button" href="{{url('/seeyourorderdetail/'.$pem->id_pemesanan)}}">Lihat Detail Pemesanan</a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>

                    <div class="pagination clearfix style2">
                        <div class="nav-link">
                            <a href="#" class="page-numbers"><i class="icon fa fa-angle-left"
                                                                aria-hidden="true"></i></a>
                            <a href="#" class="page-numbers">1</a>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers current">3</a>
                            <a href="#" class="page-numbers"><i class="icon fa fa-angle-right"
                                                                aria-hidden="true"></i></a>
                        </div>
                    </div>

                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection