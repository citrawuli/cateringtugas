@extends('layouts.front')
@section('link')
    <link rel="stylesheet" href="{{ asset('davur/vendor/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('davur/vendor/clockpicker/css/bootstrap-clockpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('davur/vendor/pickadate/themes/default.css') }}">
    <link rel="stylesheet" href="{{ asset('davur/vendor/pickadate/themes/default.date.css') }}">
@endsection

@section('container')
<div class="main-content main-content-checkout">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="trail-item trail-end active">
                            Checkout
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <h3 class="custom_blog_title">
            Checkout
        </h3>
        <div class="checkout-wrapp">
            <div class="shipping-address-form-wrapp">
                <div class="shipping-address-form  checkout-form">
                    <div class="row-col-1 row-col">
                        <div class="shipping-address">
                            <h3 class="title-form">
                                Data Pemesan
                                <small>(untuk dihubungi)</small>
                            </h3>
                            <p>
                                <small>(*) harus diisi</small>
                            </p>
                            <p class="form-row form-row-first">
                                <label class="text">Nama Pemesan (*)</label>
                                <input id="nama_lengkap" type="text" class="input-text" name="cariuser" required value="{{ Auth::user()->name }}">
                            </p>

                            <p class="form-row form-row-last">
                                <label class="text">Nomor Telepon (*)</label>
                                <input id="nomor_telp" type="number" class="input-text @error('nomor_telp') is-invalid @enderror" required name="nomor_telp" placeholder="081xxx" value="{{ Auth::user()->ponsel_user }}">
                            </p>

                            <p class="form-row form-row-first">
                                <label class="text">Untuk tanggal (*)</label>
                                <input type="text"class="input-text datepicker-default @error('untuk_tanggal') is-invalid @enderror" required id="datepicker" name="untuk_tanggal" placeholder="pilih tanggal">
                            </p>

                            <p class="form-row form-row-last">
                                <label class="text">Untuk jam</label>
                                <span style="width: 100%;" class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                    <input type="text" class="input-text @error('untuk_jam') is-invalid @enderror" value="" name="untuk_jam" placeholder="pilih jam (opsional)"> 
                                </span>
                            </p>

                            <p class="form-row form-row-col forn-row-col-1">
                                <label class="text">Alamat Pengantaran (*)</label>
                                <textarea rows="3" class="input-text @error('alamat_lengkap') is-invalid @enderror" name="alamat_lengkap" required value="{{ Auth::user()->alamat_user }}" placeholder="{{ Auth::user()->alamat_user }}"></textarea>
                            </p>

                            <p class="form-row forn-row-first">
                                <label class="text">Pengambilan</label>
                                <label class="radio-inline mr-3"><input type="radio" value="1" name="optionkirim"> Diambil</label>
                                <label class="radio-inline mr-3"><input type="radio" value="2" name="optionkirim"> Dikirim Go-Car</label>
                            </p>

                            <div class="form-row forn-row-first">
                                <label for="product" class="text">{{ ('Keterangan') }}</label>
                                <textarea rows="3" class="input-text @error('keterangan') is-invalid @enderror" name="keterangan"  placeholder="Catatan tambahan untuk penjual (opsional)"></textarea>
                                
                            </div>

                            

                        </div>
                    </div>
                    <div class="row-col-2 row-col">
                        <div class="your-order">
                            <h3 class="title-form">
                                Keranjang
                            </h3>
                                @php 
                                    $total = 0 
                                @endphp
                                @foreach((array) session('cart') as $id => $details)
                                    @php $total += $details['price'] * $details['quantity'] @endphp
                                @endforeach
                            <ul class="list-product-order">
                                @if(session('cart'))
                                    @foreach(session('cart') as $id => $details)
                                    <li class="product-item-order">
                                        <div class="product-thumb">
                                            <a href="#">

                                                @foreach ($produk as $prod)
                                                    @if ($id == $prod->id)
                                                        @if($prod->images()->exists())
                                                            @foreach ($prod->images->slice(0,1) as  $gal)
                                                                <img id="img_zoom" data-zoom-image="{{ asset($gal->foto) }}"
                                                                src="{{ asset($gal->foto) }}" alt="img">
                                                            {{-- <a href="#" class="btn-zoom open_qv"><i class="fa fa-search" aria-hidden="true"></i></a> --}}
                                                            @endforeach
                                                        @else
                                                            <img src="{{asset('teamo/images/cart-item-2.jpg')}}" alt="img"
                                                                class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image">
                                                        @endif
                                                    @endif
                                                    @endforeach
                                                    {{-- @foreach ($galpro->slice(0, 1) as $gal)
                                                        @if ($id == $gal->id_produk)
                                                        <span href="{!! url('/ecom-product-detail'); !!}">
                                                            <img class="mr-3 img-fluid rounded"  style="width: 100px"  src="{{ asset($gal->foto) }}" alt="Gamber Produk">
                                                        </span>
                                                        @else
                                                        <img src="{{asset('teamo/images/item-order1.jpg')}}" alt="img"
                                                        class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image">
                                                        @endif
                                                    @endforeach --}}
                                            </a>
                                        </div>
                                        <div class="product-order-inner">
                                            <h5 class="product-name">
                                                <a href="{{url('/viewproduct/'.$id)}}"">{{ $details['name'] }}</a>
                                            </h5>
                                            @foreach ($produk as $pr)
                                            {{-- {{dd($pr->id, $id)}} --}}
                                                @if ($id == $pr->id)
                                                    <span class="attributes-select attributes-color">{{$pr->nama_kategori}}</span>
                                                    {{-- <span class="attributes-select attributes-size">XXL</span> --}}
                                                @endif
                                            @endforeach
                                            <div class="price">
                                                @currency($details['price'])
                                                <span class="count"> (x{{ $details['quantity']}})</span>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                @endif
                            </ul>
                            <div class="order-total">
									<span class="title">
										Total Price:
									</span>
                                <span class="total-price">
                                    @currency($total)
									</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-control">
                    <a href="{{url('/keranjangBelanja')}}" class="button btn-back-to-shipping">Kembali ke Keranjang</a>
                    <a href="#" class="button button-payment">Ya, Buat Pemesanan</a>
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection


@section('script')
    <script src="{{ asset('davur/vendor/moment/moment.min.js') }}" defer="" type="text/javascript"></script>
    <script src="{{ asset('davur/vendor/bootstrap-daterangepicker/daterangepicker.js') }}" defer="" type="text/javascript"></script>
    <script src="{{ asset('davur/vendor/clockpicker/js/bootstrap-clockpicker.min.js') }}" defer="" type="text/javascript"></script>
    <script src="{{ asset('davur/vendor/pickadate/picker.js') }}" defer="" type="text/javascript"></script>
    <script src="{{ asset('davur/vendor/pickadate/picker.time.js') }}" defer="" type="text/javascript"></script>
    <script src="{{ asset('davur/vendor/pickadate/picker.date.js') }}" defer="" type="text/javascript"></script>
    <script src="{{ asset('davur/js/plugins-init/bs-daterange-picker-init.js') }}" defer="" type="text/javascript"></script>
    <script src="{{ asset('davur/js/plugins-init/clock-picker-init.js') }}" defer="" type="text/javascript"></script>
    <script src="{{ asset('davur/js/plugins-init/pickadate-init.js') }}" defer="" type="text/javascript"></script>
@endsection
