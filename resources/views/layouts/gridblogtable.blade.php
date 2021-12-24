@extends('layouts.front')

@section('container')
<div class="main-content main-content-blog grid no-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="trail-item trail-end active">
                            Blog kami
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-area content-blog col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="site-main">
                    <h3 class="custom_blog_title capi">
                        Blog kami
                    </h3>
                    <div class="blog-list grid-style">
                        <div class="row">
                            @foreach ($blog as $b)
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="blog-item">
                                    {{-- <div class="post-format">
                                        <a href="#">
                                            <img src="assets/images/blog2.jpg" alt="img">
                                        </a>
                                    </div> --}}
                                    <div class="post-info">
                                        {{-- <div class="category-blog">
                                            <a href="#">LIFE STYLE</a>
                                        </div> --}}
                                        
                                        <h3 class="post-title">
                                            <a href="{{url('/readmoreblog/'.$b->id_blog)}}">{{$b->judul_blog}}</a>
                                        </h3>
                                        <small>{{ date('d M Y, H:i:s', strtotime($b->updated_at)) }} - oleh {{$b->name}}</small>
                                        <div class="main-info-post">
                                            <p class="des">
                                                {{-- @if(strlen($b->konten_blog) > 400) --}}
                                                    {{-- {!!substr($b->konten_blog,0,100)!!} --}}
                                                    {{-- {!! substr($b->konten_blog,0,200) !!} --}}
                                                    {{-- <span class="read-more-content"> {!!substr($b->konten_blog,200,strlen($b->konten_blog))!!}</span> --}}
                                                    {{-- <span class="read-more-content"> {!! Str::limit($b->konten_blog, 400) !!}</span><br><br>
                                                    <a href="{{url('/readmoreblog/'.$b->id_blog)}}">Read More... </a>
                                                @else
                                                @endif --}}

                                                {{-- IDK why but this one doesnt put the other blog content to showed up and the anchore doesnt work... sooo use words okay :D--}}
                                                {{-- <span class="read-more-content"> {!! Str::limit($b->konten_blog, 500) !!}</span><br><br> --}}
                                                <span class="read-more-content"> {!! Str::words($b->konten_blog, 150) !!}</span><br><br>                                                
                                                <a href="{{url('/readmoreblog/'.$b->id_blog)}}">Read More... </a>
                                            </p>
                                        </div>
                                        <div class="author-view">
                                            {{-- <div class="author">
                                                <div class="avt">
                                                    <img src="assets/images/avt-blog1.png" alt="img">
                                                </div>
                                                <h3 class="name">
                                                    Penulis : 
                                                </h3>
                                            </div> --}}
                                            {{-- <div class="review">
                                                <div class="view">
                                                    <span class="icon-view">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="count">
                                                        631
                                                    </span>
                                                </div>
                                                <div class="s-comments">
                                                    <span class="icon-cmt">
                                                        <i class="fa fa-commenting" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="count">
                                                        82
                                                    </span>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="pagination clearfix style2 grid">
                        <div class="nav-link">
                            {{-- <a href="#" class="page-numbers"><i class="icon fa fa-angle-left" aria-hidden="true"></i></a>
                            <a href="#" class="page-numbers">1</a>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers current">3</a>
                            <a href="#" class="page-numbers"><i class="icon fa fa-angle-right" aria-hidden="true"></i></a> --}}
                            {!! $blog->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection