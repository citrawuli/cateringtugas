@extends('layouts.front')
@section('link')
@endsection

@section('container')
<div class="main-content main-content-blog single right-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="trail-item">
                            <a href="{{url('/gridblog')}}">Blog</a>
                        </li>
                        @foreach ( $ablog as $blog)
                        <li class="trail-item trail-end active">
                            {{$blog->judul_blog}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-area content-blog col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="site-main">
                    @foreach ( $ablog as $blog)
                    <div class="post-item">
                        {{-- <div class="post-format">
                            <a href="#">
                                <img src="assets/images/blog1.jpg" alt="img">
                            </a>
                        </div> --}}
                        <div class="post-infor">
                            {{-- <div class="category-blog">
                                <a href="#">LIFE STYLE</a>
                            </div> --}}
                            <h3 class="post-title">
                                <a href="#">{{$blog->judul_blog}}</a>
                            </h3>
                            <div class="main-info-post">
                                {!!$blog->konten_blog!!}
                                <blockquote>
                                    <p>
                                        {{ date('d M Y, H:i:s', strtotime($blog->updated_at)) }} 
                                    </p>
                                    <div class="author">
                                        <span class="name">
                                            {{$blog->name}}
                                        </span>
                                        <span class="desc">
                                            Penulis
                                        </span>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection