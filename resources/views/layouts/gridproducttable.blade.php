@extends('layouts.front')

@section('container')
<div class="main-content main-content-product no-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="trail-item trail-end active">
                            Katalog Produk
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="content-area shop-grid-content full-width col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="site-main">
                    <h3 class="custom_blog_title">
                        Katalog Produk
                    </h3>
                    <div class="shop-top-control">
                        <form class="select-item select-form">
                            <span class="title">Sort</span>
                            <select title="sort" data-placeholder="12 Produk/Laman" class="chosen-select">
                                <option value="12">12 Produk/Laman</option>
                                <option value="24">24 Produk/Laman</option>
                                <option value="36">36 Produk/Laman</option>
                            </select>
                        </form>
                        <form class="filter-choice select-form">
                            <span class="title">Sort by</span>
                            <select title="sort-by" data-placeholder="Harga: Rendah -> Tinggi" class="chosen-select">
                                <option value="1">Harga: Rendah -> Tinggi</option>
                                <option value="1">Harga: Tinggi -> Rendah</option>
                                <option value="2">Urutkan: paling baru</option>
                                <option value="2">Urutkan: paling populer</option>
                            </select>
                        </form>
                        <div class="grid-view-mode">
                            <div class="inner">
                                {{-- <a href="listproducts.html" class="modes-mode mode-list">
                                    <span></span>
                                    <span></span>
                                </a> --}}
                                <a href="{{url('/catalogproduct')}}" class="modes-mode mode-grid active">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    @if (Session::has('message'))
                    <div class="alert alert-success alert-dismissible fade show">                                   
                        
                        <strong>Success! </strong>{{ Session::get('message') }}
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                    </div>
                    @endif
                
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                            </button>
                        </div>
                    @endif

                    <ul class="row list-products auto-clear equal-container product-grid">
                        @foreach ( $produk as $prod)
                        <li class="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                            <div class="product-inner equal-element">
                                <div class="product-top">
                                    @foreach ($newarrival as $newestpr)
                                        @if ($prod->id == $newestpr->id)
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
                                                @if ($prod->id == $gal->id_produk)
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
                                            {{-- selengkapnya lihat di file frontend-plugin.js --}}
                                            <div class="loop-form-add-to-cart">
                                                <a class="single_add_to_cart_button button" href="{{ route('add.to.cart', $prod->id) }}">Add to cart
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-name product_title">
                                        <a href="#">{{$prod->nama_produk}}</a>
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
                                                @currency($prod->harga_produk)
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <div class="pagination clearfix style2">
                        <div class="nav-link">
                            {!! $produk->links() !!}
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
<script>




 // ------------------------Quick view----------------------------------------
//  var produk = <?php echo json_encode($produk);?>;
 function quickview_popup() {
        var window_size = parseFloat(jQuery('body').innerWidth());
        window_size += kt_get_scrollbar_width();
        if (window_size > 992) {
            $(document).on('click', '.quick-wiew-button', function () {
                $.magnificPopup.open({
                    items: {
                        src: 
                            '@foreach ($produk as $p)'+
                            '<div class="kt-popup-quickview ">'+
                                '<div class="details-thumb">'+
                                    '<div class="slider-product slider-for">'+
                                        '<div class="details-item">'+
                                           ' @foreach ($galpro->slice(0, 1) as $gal)'+
                                                '@if ($p->id == $gal->id_produk)'+
                                                '<span href="{!! url('/ecom-product-detail') !!}">'+
                                                    '<img class="mr-3 img-fluid rounded"  style="max-width: 300px" src="{{ asset($gal->foto) }}" alt="Gamber Produk">'+
                                               ' </span>'+
                                               ' @else'+
                                                '<img src='+"{{ asset('teamo/images/popup-quickview-item-1.jpg')}}"+ 'alt="img">'+
                                                '@endif'+
                                            '@endforeach'+
                                        '</div>'+
                                    '</div>'+
                                   ' <div class="slider-product-button slider-nav nav-center">'+
                                        '<div class="details-item">'+
                                            '<img src="" alt="img">'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="details-infor">'+
                                    '<h1 class="product-title">{{$p->nama_produk}}</h1>'+
                                    '<div class="price">'+
                                        '<span>{{$p->harga_produk}}</span>'+
                                    '</div>'+
                                   ' <div class="product-details-description">'+
                                        '<ul>'+
                                            '<li>{{$p->nama_kategori}}</li>'+
                                            '<li>{{$p->tipe_produk}}</li>'+
                                            '<li>{{$p->deskripsi_produk}}</li>'+
                                        '</ul>'+
                                    '</div>'+
                                   
                                    '<div class="group-button">'+
                                       
                                        // '<div class="size-chart-wrapp">'+
                                        //     '<div class="btn-size-chart">'+
                                        //         '<a id="size_chart" href="assets/images/size-chart.jpg" class="fancybox"  target="_blank">View Size Chart</a>'+
                                        //     '</div>'+
                                        // '</div>'+
                                        '<div class="quantity-add-to-cart">'+
                                            '<div class="quantity">'+
                                               ' <div class="control">'+
                                                    '<a class="btn-number qtyminus quantity-minus" href="#">-</a>'+
                                                   ' <input type="text" data-step="1" data-min="0" value="1" title="Qty" class="input-qty qty" size="4">'+
                                                    '<a href="#" class="btn-number qtyplus quantity-plus">+</a>'+
                                                '</div>'+
                                           ' </div>'+
                                            '<button class="single_add_to_cart_button button">Add to cart</button>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                            '@endforeach',
                        type: 'inline'
                    }
                });
                slick_quickview_popup();
                return false;
            });
        }
    }

    function slick_quickview_popup() {
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            focusOnSelect: true,
            infinite: true,
            prevArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            nextArrow: '<i class="fa fa-angle-right " aria-hidden="true"></i>',
        });
    }
</script>
@endsection