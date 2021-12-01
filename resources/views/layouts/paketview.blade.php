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
                         @foreach ($thiskategori->take(1) as $kategori)
                         <li class="trail-item trail-end active">
                            {{ $kategori->nama_kategori}}
                         </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="content-area shop-grid-content full-width col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="site-main">                    
                    @foreach ($thiskategori->take(1) as $kategori)
                    <h3 class="custom_blog_title">
                        {{$kategori->nama_kategori}}
                    </h3>
                    @endforeach

                    @if (empty($countprod)) 
                        Tidak ada data produk pada kategori ini
                    @endif

                    @if (Session::has('message'))
                    <div class="alert alert-success alert-dismissible show">                                   
                        
                        <strong>Success! </strong>{{ Session::get('message') }}
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                    </div>
                    @endif
                
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible show">
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
                        @foreach ( $thiskategori as $prod)
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
                                        <a href="{{url('/viewproduct/'.$prod->id)}}">
                                            @if($prod->images()->exists())
                                            @foreach ($prod->images->slice(0,1) as  $gal)
                                
                                                <img id="img_zoom" data-zoom-image="{{ asset($gal->foto) }}"
                                                src="{{ asset($gal->foto) }}" alt="img">
                                                
                                                {{-- <a href="#" class="btn-zoom open_qv"><i class="fa fa-search" aria-hidden="true"></i></a> --}}
                                            @endforeach
                                            @else
                                            <img src="{{ asset('teamo/images/product-item-1.jpg')}}" alt="img">
                                            @endif

                                        </a>
                                        <div class="thumb-group">
                                           
                                            <a href="{{url('/viewproduct/'.$prod->id)}}" class="button quick-wiew-button" id="quick-wiew-button"">Quick View</a>
                                          
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
                                        
                                        <div>
                                            Menu:{{$prod->nama_kategori}}
                                        </div>
                                        <div class="price">
                                            
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
                            {!! $thiskategori->links() !!}
                            
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>


@endsection
