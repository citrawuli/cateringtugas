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
                            <a href="{{url('/user')}}">Laman Akun</a>
                        </li>
                        <li class="trail-item trail-end active">
                            Daftar Pembayaran Anda
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-area  shop-grid-content full-width col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="site-main">
                    <div class="shop-top-control">
                        {{-- Anda memiliki {{$totalpemesanan}} total pemesanan --}}
                       
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
                        Daftar Pembayaran Anda
                    </h3>
                    <ul class="row list-products auto-clear equal-container product-list">
                        @foreach ( $bayar as $pay)
                        <li class="product-item style-list col-lg-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-ts-12">
                            <div class="product-inner equal-element">
                                <div class="products-bottom-content">
                                    
                                    <div class="product-info-left">
                                        <br>
                                        <h5 class="product-name product_title">
                                            <a href="#">{{$pay->id_pembayaran}}</a>
                                        </h5>
                                        
                                        
                                        <ul class="attributes-display">
                                            <li class="swatch-color">
                                                ID Pemesanan:
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">{{$pay->id_pemesanan ?? '-'}}</a>
                                            </li>
                                        </ul>

                                        <ul class="attributes-display">
                                            <li class="swatch-color">
                                                Jumlah Bayar:
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">@currency($pay->jumlah_bayar)</a>
                                            </li>
                                        </ul>

                                        <ul class="attributes-display">
                                            <li class="swatch-color">
                                                Tanggal Bayar:
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">{{ date('d M Y', strtotime($pay->tanggal_pembayaran)) ?? '-' }}</a>
                                            </li>
                                        </ul>

                                        <ul class="attributes-display">
                                            <li class="swatch-color">
                                                Bank Transfer:
                                            </li>
                                            <li class="swatch-color">

                                                @if ($pay->bank_transfer == '1')
                                                    <a>Tunai</a>
                                                @elseif ($pay->bank_transfer == '2')
                                                    <a>BRI</a>
                                                @elseif ($pay->bank_transfer == '3')
                                                    <a>BCA</a>
                                                @endif
                                            </li>
                                        </ul>

                                        <ul class="attributes-display">
                                            <li class="swatch-color">
                                                Nomor Rekening:
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">{{$pay->nomor_rekening ?? '-'}}</a>
                                            </li>
                                        </ul>

                                        <ul class="attributes-display">
                                            <li class="swatch-color">
                                                Atas Nama:
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">{{$pay->atas_nama ?? '-'}}</a>
                                            </li>
                                        </ul>

                                        <ul class="attributes-display">
                                            <li class="swatch-color">
                                                Tanggal input ke sistem:
                                            </li>
                                            <li class="swatch-color">
                                                <a href="#">{{ date('d M Y, H:i:s', strtotime($pay->created_at)) ?? '-' }}</a>
                                            </li>
                                        </ul>
                                        <ul>
                                            <div class="single_variation_wrap">
                                                @if ($pay->status_bayar == '0')
                                                    <a class="single_add_to_cart_button button" href="#">Menunggu Verifikasi</a>
                                                @else
                                                    <a class="single_add_to_cart_button button" href="#">Diverifikasi</a>
                                                @endif
                                            </div>
                                        </ul>
                                        
                                    </div>
                                    <div class="product-info-right">
                                        <br>
                                        <div class="price">
                                            @if ($pay->bukti_bayar != null)
                                            <div class="zoom">
                                                <img src="{{ asset($pay->bukti_bayar) }}" width="150px" >
                                               <small><a href='{{ asset($pay->bukti_bayar) }}' target='_blank'>Lihat Gambar Full</a></small> 
                                            </div>
                                            @else
                                                <small>Tidak Ada Gambar</small>
                                            @endif
                                        </div>
                                        
                                        
                                            
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>

                    <div class="pagination clearfix style2">
                        
                        <div class="nav-link">
                            {!! $bayar->links() !!}
                            {{-- <a href="#" class="page-numbers"><i class="icon fa fa-angle-left" aria-hidden="true"></i></a>
                            <a href="#" class="page-numbers">1</a>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers current">3</a>
                            <a href="#" class="page-numbers"><i class="icon fa fa-angle-right" aria-hidden="true"></i></a> --}}
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