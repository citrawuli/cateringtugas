@php
    if(Auth::user()->hasRole('superAdmin')) {
        $layoutDirectory = 'layouts.backAdmin.layout.defaultSuperAdmin';
    }  
    elseif(Auth::user()->hasRole('adminPemesanan')) {
        $layoutDirectory = 'layouts.backAdmin.layout.defaultAdminPemesanan';
    } 
    elseif(Auth::user()->hasRole('adminPembayaran')) {
        $layoutDirectory = 'layouts.backAdmin.layout.defaultAdminPembayaran';
    } 
    elseif(Auth::user()->hasRole('adminBlog')) {
        $layoutDirectory = 'layouts.backAdmin.layout.defaultAdminBlog';
    } 
@endphp
@extends($layoutDirectory)
{{-- @extends('layouts.backAdmin.layout.defaultSuperAdmin') --}}

@section('content')
<style type="text/css">
    .read-more-show{
      cursor:pointer;
      color: #ed8323;
    }
    .read-more-hide{
      cursor:pointer;
      color: #ed8323;
    }

    .hide_content{
      display: none;
    }

   
</style>

<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, selamat datang!</h4>
                <span>Daftar Blog</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Daftar Blog</a></li>
            </ol>
        </div>
    </div>

    @if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    
    <div class="row">

        <div class="col-6">
            <div class="card text-white bg-primary">
                <div class="card-header">
                    <h5 class="card-title text-white">Action Card</h5>
                </div>
                <div class="card-body mb-0">
                    <!-- <button type="button" class="btn light btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Add User</button> -->
                    <a href="{!! url('/blogForm'); !!}" class="btn light btn-danger">Tambah Blog</a>
                    <a href="{{ url('/TrashedBlog')}}" class="btn btn-primary light btn-card"><i class="fa fa-trash" style="margin-right: 10px;"></i>Lihat Tong Sampah</a> 
                </div>
            </div>
        </div>

        <div class="col-12">
            @if (Session::has('message'))
            <div class="alert alert-success alert-dismissible fade show">                                   
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4">
                </polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>  
                <strong>Success! </strong>{{ Session::get('message') }}
                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
            </div>
            @endif
        </div>

        <div class="card">
            <div class="card-header border-0 pb-0 d-sm-flex d-block">
                <div>
                    <h4 class="card-title mb-1 fs-28 font-w600">Blog</h4>
                    <p class="mb-0">Berikut ini adalah tulisan yang akan dimuat pada blog</p>
                </div>
                <div class="dropdown">
                    @if ($orderby == "DESC")
                    <button type="button" class="btn btn-primary dropdown-toggle light fs-14" data-toggle="dropdown" aria-expanded="false">
                        Latest
                    </button>
                    @else
                    <button type="button" class="btn btn-primary dropdown-toggle light fs-14" data-toggle="dropdown" aria-expanded="false">
                        OLD
                    </button>
                    @endif
                    
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('BlogTable')}}">Latest</a>
                        <a class="dropdown-item" href="{{url('BlogTableASC')}}">OLDEST</a>
                    </div>
                </div>
            </div>
            <div class="card-body ">
                @foreach( $blog as $b )
                    <div class="media review-box">
                        {{-- <img class="mr-3 img-fluid btn-rounded" width="55" 
                        src="http://localhost/cathering/public/davur/images/avatar/1.jpg" alt="DexignZone"> --}}
                        <div class="media-body"  >
                            
                            <h4 class="mt-0 mb-0 text-black">{{$b->judul_blog}}</h4>
                            <ul class="review-meta mb-3 d-block d-lg-flex align-items-center">
                                <li class="mr-3"><small>{{$b->name}}</small></li>
                                <li class="mr-3"><small>{{$b->role_name}}</small></li>
                                <li class="mr-3"><small>{{ date('d M Y, H:i:s', strtotime($b->updated_at)) }}</small></li>
                                {{-- <li class="ml-auto"><span class="badge badge-rounded badge-warning light font-w500">Excelent</span></li> --}}
                                <li class="ml-auto">
                                    <a href="{{ url( '/EditBlog/' . $b->id_blog ) }}" class="btn btn-primary shadow btn-xs sharp mr-1" data-toggle="tooltip" data-placement="top" title="Edit Blog" id="editt"><i class="fa fa-pencil"></i></a>
                                    <a href="{{ url( '/DeleteBlog/' . $b->id_blog ) }}" class="btn btn-danger shadow btn-xs sharp" data-toggle="tooltip2" data-placement="top" title="Soft Delete Blog"><i class="fa fa-trash"></i></a>
                                
                                    <a href="{{url('/readmoreblog/'.$b->id_blog)}}"> Read More... </a>
                                </li>
                            </ul> 
                            <span> {!! Str::words($b->konten_blog, 150) !!}</span><br>

                            {{-- {!!Str::limit($b->konten_blog, 300, '....')!!} <a href='#' class='read-more-show'>Read More</a> --}}

                            {{-- {!! Str::limit($b->konten_blog, 100, '...') !!}
                            @if (strlen($b->konten_blog) > 100)
                                <span id="dots{{$b->id_blog}}" name="{{$b->id_blog}}">...</span>
                                <span id="more{{$b->id_blog}}" name="{{$b->id_blog}}" style="display:block">{!! substr($b->konten_blog, 100) !!}</span>
                            @endif
                            <a onclick="myFunction()" id="myBtn{{$b->id_blog}}">Read more</button> --}}
                            {{-- {!!substr($b->konten_blog,10,strlen($b->konten_blog))!!}     <a href='#' class="read-more-show">...ReadMore</a>  --}}
                           

                            {{-- @if(strlen($b->konten_blog) > 300) --}}
                                {{-- {!!substr($b->konten_blog,0,100)!!} --}}
                                {{-- {!!substr($b->konten_blog,0,150) !!}
                                <span class="read-more-show hide_content">More<i class="fa fa-angle-down"></i></span>
                                <span class="read-more-content"> {!!substr($b->konten_blog,300,strlen($b->konten_blog))!!} 
                                <span class="read-more-hide hide_content">Less<i class="fa fa-angle-up"></i></span></span>
                            @else
                                {!! $b->konten_blog !!}
                            @endif --}}

                            

                            
                        </div>
                    </div>       
                @endforeach  
                
               
            </div>

            
            <div class="d-flex justify-content-center">
                {!! $blog->links() !!}
            </div>
            {{-- <div class="card-footer border-0 text-center py-4">
                <a href="javascript:void(0);" class="btn btn-primary see-more" data-page="2" data-link="localhost:8000/post?page=" data-div="#posts">Read More <i class="fa fa-angle-double-down scale2 ml-2"></i></a>
            </div> --}}
        </div>

        
    </div>
</div>
@endsection

@section('script')
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
$(document).ready(function(){
    $('[data-toggle="tooltip2"]').tooltip();
});

$(document).ready(function(){
    $('.read-more-content').addClass('hide_content')
    $('.read-more-show, .read-more-hide').removeClass('hide_content')

    // Set up the toggle effect:
    $('.read-more-show').on('click', function(e) {
        $(this).next('.read-more-content').removeClass('hide_content');
        $(this).addClass('hide_content');
        e.preventDefault();
    });

    // Changes contributed by @diego-rzg
    $('.read-more-hide').on('click', function(e) {
        var p = $(this).parent('.read-more-content');
        p.addClass('hide_content');
        p.prev('.read-more-show').removeClass('hide_content'); // Hide only the preceding "Read More"
        e.preventDefault();
    });
});

function myFunction() {
    var getid=$(this).attr('name');
    var dots = document.getElementById("dots"+getid);
    var moreText = document.getElementById("more"+getid);
    var btnText = document.getElementById("myBtn"+getid);

    if (dots.style.display === "block") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "block";
    } else {
        dots.style.display = "block";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}
            


</script>
@endsection