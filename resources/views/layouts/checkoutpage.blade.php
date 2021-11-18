@extends('layouts.front')

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
                            </h3>
                            <p class="form-row form-row-first">
                                <label class="text">Nama Pemesan</label>
                                {{-- <select title="country" data-placeholder="United Kingdom" class="chosen-select"
                                tabindex="1">
                                    <option value="{{ Auth::user()->id }}" selected readonly>{{ Auth::user()->name }}</option>
                                </select> --}}
                                <input id="nama_lengkap" type="text" class="input-text" readonly name="cariuser" value="{{ Auth::user()->name }}">
                            </p>

                            
                            <p class="form-row form-row-last">
                                <label class="text">Nomor Telepon</label>
                                <input id="nomor_telp" type="number" class="input-text" name="nomor_telp" placeholder="081xxx">
                                <small> nomor untuk dihubungi</small>
                            </p>

                            <p class="form-row form-row-first">
                                <label class="text">Zip code</label>
                                <input title="zip" type="text" class="input-text">
                            </p>
                            <p class="form-row forn-row-col forn-row-col-1">
                                <label class="text">Country</label>
                                <select title="country" data-placeholder="United Kingdom" class="chosen-select"
                                        tabindex="1">
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Aland Islands">Aland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                </select>
                            </p>
                            <p class="form-row forn-row-col forn-row-col-2">
                                <label class="text">State</label>
                                <select title="state" data-placeholder="London" class="chosen-select" tabindex="1">
                                    <option value="United States">London</option>
                                    <option value="United Kingdom">tokyo</option>
                                    <option value="Afghanistan">Seoul</option>
                                    <option value="Aland Islands">Mexico city</option>
                                    <option value="Albania">Mumbai</option>
                                    <option value="Algeria">Delhi</option>
                                    <option value="American Samoa">New York</option>
                                    <option value="Andorra">Jakarta</option>
                                    <option value="Angola">Sao Paulo</option>
                                    <option value="Anguilla">Osaka</option>
                                    <option value="Antarctica">Karachi</option>
                                    <option value="Antigua and Barbuda">Matx-cơ-va</option>
                                    <option value="Argentina">Toronto</option>
                                    <option value="Armenia">Boston</option>
                                </select>
                            </p>
                            <p class="form-row forn-row-col forn-row-col-3">
                                <label class="text">City</label>
                                <select title="city" data-placeholder="London" class="chosen-select" tabindex="1">
                                    <option value="United States">London</option>
                                    <option value="United Kingdom">tokyo</option>
                                    <option value="Afghanistan">Seoul</option>
                                    <option value="Aland Islands">Mexico city</option>
                                    <option value="Albania">Mumbai</option>
                                    <option value="Algeria">Delhi</option>
                                    <option value="American Samoa">New York</option>
                                    <option value="Andorra">Jakarta</option>
                                    <option value="Angola">Sao Paulo</option>
                                    <option value="Anguilla">Osaka</option>
                                    <option value="Antarctica">Karachi</option>
                                    <option value="Antigua and Barbuda">Matx-cơ-va</option>
                                    <option value="Argentina">Toronto</option>
                                    <option value="Armenia">Boston</option>
                                </select>
                            </p>
                            <p class="form-row form-row-first">
                                <label class="text">Zip code</label>
                                <input title="zip" type="text" class="input-text">
                            </p>
                            <p class="form-row form-row-last">
                                <label class="text">Address</label>
                                <input title="address" type="text" class="input-text">
                            </p>
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
                                                    @foreach ($galpro->slice(0, 1) as $gal)
                                                        @if ($id == $gal->id_produk)
                                                        <span href="{!! url('/ecom-product-detail'); !!}">
                                                            <img class="mr-3 img-fluid rounded"  style="width: 100px"  src="{{ asset($gal->foto) }}" alt="Gamber Produk">
                                                        </span>
                                                        @else
                                                        <img src="{{asset('teamo/images/item-order1.jpg')}}" alt="img"
                                                        class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image">
                                                        @endif
                                                    @endforeach
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
                    <a href="#" class="button button-payment">Pembayaran</a>
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection
