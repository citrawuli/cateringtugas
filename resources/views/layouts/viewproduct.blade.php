@extends('layouts.front')

@section('container')
<div class="main-content main-content-details single no-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        @foreach ( $produk as $prod)
                        <li class="trail-item">
                            <a href="#">{{$prod->nama_kategori}}</a>
                        </li>
                        <li class="trail-item trail-end active">
                            {{$prod->nama_produk}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-area content-details full-width col-lg-9 col-md-8 col-sm-12 col-xs-12">
                @foreach ( $produk as $prod)
                <div class="site-main">
                    <div class="details-product">
                        <div class="details-thumd">
                            <div class="image-preview-container image-thick-box image_preview_container">
                                
                                @foreach ($galpro->slice(0, 1) as $gal)
                                    @if ($prod->id == $gal->id_produk)
                                        <img id="img_zoom" data-zoom-image="{{ asset($gal->foto) }}"
                                        src="{{ asset($gal->foto) }}" alt="img">
                                    @else
                                        <img src="{{ asset('teamo/images/details-item-1.jpg')}}" alt="img">
                                    @endif
                                    <a href="#" class="btn-zoom open_qv"><i class="fa fa-search" aria-hidden="true"></i></a>
                                @endforeach
                            </div>
                            <div class="product-preview image-small product_preview">
                                <div id="thumbnails" class="thumbnails_carousel owl-carousel" data-nav="true"
                                     data-autoplay="false" data-dots="false" data-loop="false" data-margin="10"
                                     data-responsive='{"0":{"items":3},"480":{"items":3},"600":{"items":3},"1000":{"items":3}}'>
                                    
                                    @foreach ($galpro->slice(1,4) as $gal)
                                        @if ($prod->id == $gal->id_produk)
                                            <a href="#" data-image="{{ asset($gal->foto) }}"
                                            data-zoom-image="{{ asset($gal->foto) }}" class="active">
                                                <img src="{{ asset($gal->foto) }}"
                                                data-large-image="{{ asset($gal->foto) }}" alt="img">
                                            </a>
                                        @else
                                            <img src="{{ asset('teamo/images/details-item-1.jpg')}}" alt="img">
                                        @endif
                                        
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="details-infor">
                            <h1 class="product-title">
                                {{$prod->nama_produk}}
                            </h1>
                            {{-- <div class="stars-rating">
                                <div class="star-rating">
                                    <span class="star-5"></span>
                                </div>
                                <div class="count-star">
                                    (7)
                                </div>
                            </div>
                            <div class="availability">
                                availability:
                                <a href="#">in Stock</a>
                            </div> --}}
                            <div class="price">
                                <small>Harga:</small>
                                <span>@currency($prod->harga_produk)</span>
                                <small>/pcs</small>
                            </div>
                            {{-- <div class="product-details-description">
                                <ul>
                                    <li></li>
                                    <li>Imported</li>
                                    <li>Art.No. 06-7680</li>
                                </ul>
                            </div> --}}
                            {{-- <div class="variations">
                                <div class="attribute attribute_color">
                                    <div class="color-text text-attribute">
                                        Color:
                                    </div>
                                    <div class="list-color list-item">
                                        <a href="#" class="color1"></a>
                                        <a href="#" class="color2"></a>
                                        <a href="#" class="color3 active"></a>
                                        <a href="#" class="color4"></a>
                                    </div>
                                </div>
                                <div class="attribute attribute_size">
                                    <div class="size-text text-attribute">
                                        Size:
                                    </div>
                                    <div class="list-size list-item">
                                        <a href="#" class="">xs</a>
                                        <a href="#" class="">s</a>
                                        <a href="#" class="active">m</a>
                                        <a href="#" class="">l</a>
                                        <a href="#" class="">xl</a>
                                        <a href="#" class="">xxl</a>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="group-button">
                                {{-- <div class="yith-wcwl-add-to-wishlist">
                                    <div class="yith-wcwl-add-button">
                                        <a href="#">Add to Wishlist</a>
                                    </div>
                                </div>
                                <div class="size-chart-wrapp">
                                    <div class="btn-size-chart">
                                        <a id="size_chart" href="assets/images/size-chart.jpg" class="fancybox">View
                                            Size Chart</a>
                                    </div>
                                </div> --}}
                                <div class="quantity-add-to-cart">
                                    @foreach((array) session('cart') as $id => $details)
                                        {{-- {{dd($prod->id, $id, session()->get('cart'))}} --}}
                                        @if ($id==$prod->id) 
                                            <div class="quantity">
                                                <div class="control" data-id="{{$id}}">
                                                    <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                    <input type="text" data-step="1" data-min="0" value="{{ $details['quantity'] }}" title="Qty"
                                                        class="input-qty qty update-cart" id="update-cart"size="4" >
                                                    <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                                </div>
                                            </div>
                                            <a class="single_add_to_cart_button button" href="{{ route('add.to.cart', $id) }}">Tambah ke Keranjang</a>
                                    
                                            
                                        @endif

                                       
                                    @endforeach

                                    @if (isset($cart[$prod->id]) == false && empty($cart[$prod->id]) == "")
                                    {{-- Harus pakai empty, kalau gak gitu jadi nambah satu, why... kata stackoverflow-> 
                                        Null and/or empty strings are still set if the variable is declared. --}}
                                        <div class="quantity">
                                            <div class="control" data-id="{{$prod->id}}">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text" data-step="1" data-min="0" value="1" title="Qty"
                                                    class="input-qty qty update-cart" id="update-cart"size="4" >
                                                <a href="#" class="btn-number qtyplus quantity-plus">+</a>
                                            </div>
                                        </div>
                                        <a class="single_add_to_cart_button button" href="{{ route('add.to.cart', $prod->id) }}">Tambah ke Keranjang</a>
                                    
                                    @endif
                                </div>
                            </div>

                            <div class="tab-details-product">
                                <ul class="tab-link">
                                    <li class="active">
                                        <a data-toggle="tab" aria-expanded="true" href="#product-descriptions">Deskripsi </a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" aria-expanded="true" href="#information">Informasi </a>
                                    </li>
                                    {{-- <li class="">
                                        <a data-toggle="tab" aria-expanded="true" href="#reviews">Reviews</a>
                                    </li> --}}
                                </ul>
                                <div class="tab-container">
                                    <div id="product-descriptions" class="tab-panel active">
                                        {{$prod->deskripsi_produk ?? 'Tidak ada deskripsi produk'}}
                                    </div>
                                    <div id="information" class="tab-panel">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>Menu</td>
                                                <td> {{$prod->nama_kategori}}</td>
                                            </tr>
                                            {{-- <tr>
                                                <td>Color</td>
                                                <td>White/ Black/ Teal/ Brown</td>
                                            </tr>
                                            <tr>
                                                <td>Properties</td>
                                                <td>Colorful Dress</td>
                                            </tr> --}}
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div style="clear: left;"></div>
                    {{-- <div class="related products product-grid">
                        <h2 class="product-grid-title">You may also like</h2>
                        <div class="owl-products owl-slick equal-container nav-center"  data-slick ='{"autoplay":false, "autoplaySpeed":1000, "arrows":true, "dots":false, "infinite":true, "speed":800, "rows":1}' data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":3}},{"breakpoint":"1200","settings":{"slidesToShow":2}},{"breakpoint":"992","settings":{"slidesToShow":2}},{"breakpoint":"480","settings":{"slidesToShow":1}}]'>
                            <div class="product-item style-1">
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
                                                <img src="{{asset('teamo/images/product-item-1.jpg')}}" alt="img">
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
                                            <a href="#">Aluminum Plant</a>
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
                            <div class="product-item style-1">
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
                                                <img src="{{asset('teamo/images/product-item-2.jpg')}}" alt="img">
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
                            <div class="product-item style-1">
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
                                                <img src="{{asset('teamo/images/product-item-3.jpg')}}" alt="img">
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
                            <div class="product-item style-1">
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
                                                <img src="{{asset('teamo/images/product-item-4.jpg')}}" alt="img">
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
                                            <a href="#">Bird’s Nest Fern</a>
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
                    </div> --}}
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')
<script>
$("#update-cart").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("div").attr("data-id"), 
                quantity: ele.parents("div").find(".qty").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });

</script>
@endsection