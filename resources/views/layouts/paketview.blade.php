@extends('layouts.front')

@section('container')
<style>
    p {
    line-height: 24px;
    }

</style>
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

                

                    @if ($katid=='K0010')
                    {{-- //Wedding --}}
                        <div class="page-main-content">
                            <div class="header-banner banner-image">
                                <div class="banner-wrap">
                                    <div class="banner-header">
                                       
                                        <img src="{{ asset('teamo/images/aisya_product/wedding6.jpeg')}}" style="object-fit: cover; width: 670px;
                                                    height: 350px;" alt="img">
                                        <div class="col-lg-5 col-md-offset-7" >
                                            <div class="content-inner">
                                                <h2 class="title">
                                                    Aisya Catering  <br/> Surabaya
                                                </h2>
                                                <div class="sub-title" style="text-align: justify;">
                                                    <p>Hai, Aisya Catering hadir menawarkan layanan katering pernikahan untuk Anda.</p>  
                                                    <p>Aisya Catering menjadi solusi katering pernikahan di Surabaya khususnya dan Jawa Timur pada umumnya.</p>
                                                   <p> Hingga saat ini kami telah melayani ratusan kali acara katering dengan berbagai konsep menyesuaikan permintaan para klien.</p>
                                                                                                
                                                </div>
                                                {{-- <a href="#" class="teamo-button button">Shop now</a> --}}
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-1" style="text-align: justify;">
                                            <h4>Hidangan Sesuai Selera</h4>
                                            <p>Jamu tamu undangan dengan gaya buffet prasmanan, sitting-dinner atau yang lainnya dengan menu hidangan lezat dan berkualitas.</p>
                                            <p>Dimasak oleh pakar kuliner Aisya yang sudah sangat berpengalaman. Ada banyak macam pilihan menu makanan sebagai hidangan dalam acara wedding party sesuai dengan selera Anda.</p>
                                            <p>Free test food menu wedding catering agar Anda dapat mengetahui rasa dan kualitas menu makanan yang Aisya tawarkan.</p>
                                        </div>
                                        <div class="col-lg-5 col-md-offset-7"  style="text-align: justify;" >
                                                <div class="content-inner">
                                                    <h4>Profesional</h4>
                                                    <p>Tidak hanya soal hidangan, Aisya Catering juga sangat memperhatikan dekorasi dan tata ruang dalam setiap acara.</p>
                                                    <p>Kami didukung dengan tim yang solid dan profesional serta berpengalaman dalam menangani katering pernikahan.</p>
                                                    <p>Kami melayani katering pernikahan di Surabaya, Sidoarjo, Gresik, Pasuruan, Malang, Madiun, Kediri, dan berbagai kota lainnya.</p>
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
                                        Mengapa Aisya?
                                    </h2>
                                    <div class="team-member-slider nav-center owl-slick"
                                        data-slick='{"autoplay":false, "autoplaySpeed":3000, "arrows":true, "dots":false, "infinite":true, "speed":800, "rows":1}'
                                        data-responsive='[{"breakpoint":"0","settings":{"slidesToShow":1}},{"breakpoint":"480","settings":{"slidesToShow":1}},{"breakpoint":"767","settings":{"slidesToShow":2}},{"breakpoint":"991","settings":{"slidesToShow":3}},{"breakpoint":"1199","settings":{"slidesToShow":3}},{"breakpoint":"2000","settings":{"slidesToShow":3}}]'>
                                        <div class="teamo-team-member">
                                            <div class="team-member-item">
                                                <div class="member_avatar">
                                                    <video autoplay muted loop controls style="object-fit: cover;border-radius: 50%;width: 310px;
                                                    height: 310px;">
                                                        <source src="{{asset('/teamo/images/aisya_product/vid1.mp4')}}" type="video/mp4">
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="teamo-team-member">
                                            <div class="team-member-item">
                                                <div class="member_avatar">
                                                    <video autoplay muted loop controls style="object-fit: cover;border-radius: 50%;width: 310px;
                                                    height: 310px;">
                                                        <source src="{{asset('/teamo/images/aisya_product/wedding004.mp4')}}" type="video/mp4">
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="teamo-team-member">
                                            <div class="team-member-item">
                                                <div class="member_avatar">
                                                    <video autoplay muted loop controls style="object-fit: cover;border-radius: 50%;width: 310px;
                                                    height: 310px;">
                                                        <source src="{{asset('/teamo/images/aisya_product/wedding005.mp4')}}" type="video/mp4">
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="teamo-team-member">
                                            <div class="team-member-item">
                                                <div class="member_avatar">
                                                    <video autoplay muted loop controls style="object-fit: cover;border-radius: 50%;width: 310px;
                                                    height: 310px;">
                                                        <source src="{{asset('/teamo/images/aisya_product/wedding003.mp4')}}" type="video/mp4">
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="teamo-team-member">
                                            <div class="team-member-item">
                                                <div class="member_avatar">
                                                    <video autoplay muted loop controls style="object-fit: cover;border-radius: 50%;width: 310px;
                                                    height: 310px;">
                                                        <source src="{{asset('/teamo/images/aisya_product/wedding002.mp4')}}" type="video/mp4">
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="teamo-team-member">
                                            <div class="team-member-item">
                                                <div class="member_avatar">
                                                    <video autoplay muted loop controls style="object-fit: cover;border-radius: 50%;width: 310px;
                                                    height: 310px;">
                                                        <source src="{{asset('/teamo/images/aisya_product/wedding007.mp4')}}" type="video/mp4">
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="teamo-iconbox  layout1">
                                        <div class="iconbox-inner">
                                            <div class="icon-item">
                                                <h1 class="title" style="color: rgb(101,161,90)">
                                                   1
                                                </h1>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">
                                                    Bisa Test Menu Catering Pernikahan
                                                </h4>
                                                <div class="text">
                                                    Anda tidak perlu khawatir soal rasa hidangan kami, karena Anda bisa mencoba langsung
                                                    bagaimana kualitas menu yang nantinya akan dihidangkan kepada tamu undangan.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="teamo-iconbox  layout1">
                                        <div class="iconbox-inner">
                                            <div class="icon-item">
                                               <h1 class="title" style="color: rgb(101,161,90)">
                                                   2
                                                </h1>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">
                                                    Harga Terjangkau
                                                </h4>
                                                <div class="text">
                                                    Dengan harga terjangkau, Anda tetap akan mendapatkan pengalaman katering yang baik karena kami sangat memprioritaskan 
                                                    kualitas makanan baik dari segi rasa maupun kebersihannya.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="teamo-iconbox  layout1">
                                        <div class="iconbox-inner">
                                            <div class="icon-item">
                                               <h1 class="title" style="color: rgb(101,161,90)">
                                                   3
                                                </h1>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">
                                                    Dekorasi Mewah dan Ekslusif
                                                </h4>
                                                <div class="text">
                                                    Tak hanya soal makanan saja, kami memiliki tim dekorasi yang handal yang siap menjadikan tampilan dekorasi pesta pernikahan Anda terkesan mewah dan eksklusif.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="teamo-iconbox  layout1">
                                        <div class="iconbox-inner">
                                            <div class="icon-item">
                                                <h1 class="title" style="color: rgb(101,161,90)">
                                                    4
                                                 </h1>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">
                                                    Tim yang Profesional
                                                </h4>
                                                <div class="text">
                                                    Aisya Catering didukung dengan SDM yang telah berpengalaman bertahun-tahun dalam dunia catering wedding. 
                                                    Chef yang handal mampu menyajikan makanan dengan cita rasa yang lezat dan nikmat sehingga
                                                    tamu undangan akan merasa puas dengan acara pesta pernikahan Anda.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="teamo-iconbox  layout1">
                                        <div class="iconbox-inner">
                                            <div class="icon-item">
                                                <h1 class="title" style="color: rgb(101,161,90)">
                                                    5
                                                 </h1>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">
                                                    Hidangan yang Higienis
                                                </h4>
                                                <div class="text">
                                                    Kebersihan makanan merupakan poin yang sangat penting dalam menjamu tamu undangan. 
                                                    Kami menjamin kebersihan makanan maupun kebersihan peralatan yang kami sediakan nantinya. 
                                                    Jangan sampai pesta pernikahan Anda meninggalkan kesan negatif bagi tamu undangan hanya karena hidangan yang kurang bersih.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="teamo-iconbox  layout1">
                                        <div class="iconbox-inner">
                                            <div class="icon-item">
                                                <h1 class="title" style="color: rgb(101,161,90)">
                                                    6
                                                 </h1>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">
                                                    Menu Makanan yang Bervariasi
                                                </h4>
                                                <div class="text">
                                                    Kami siap menjamu tamu undangan acara pesata pernikahan Anda dengan menu yang bervariasi seperti Aneka olahan seafood, Aneka olahan Daging, 
                                                    Aneka olahan Ayam, Aneka olahan sayur, salad, sup, Dessert dan berbagai menu makanan lainnya.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                             <div class="team-member">
                                    <div class="row">
                                        <div class="col-sm-12 border-custom">
                                            <span></span>
                                        </div>
                                    </div>
                                    <h2 class="custom_blog_title center">
                                        Contoh paket Aisya
                                    </h2>
                             </div>
                        </div>
                        <br><br><br>
                    @else
                        
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
                                          
                                            @if ($katid!='K0010')
                                                <div class="loop-form-add-to-cart">
                                                    <a class="single_add_to_cart_button button" href="{{ route('add.to.cart', $prod->id) }}">Add to cart
                                                    </a>
                                                </div>
                                            @endif
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
