<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ config('dz.name') }} | @yield('title', $page_title ?? '')</title>
	
	<meta name="description" content="@yield('page_description', $page_description ?? '')"/>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('teamo/images/aisyacatering_kontak_logo.png') }}">
	@yield('link')
	
	
	@if(!empty(config('dz.public.pagelevel.css.'.$action))) 
		@foreach(config('dz.public.pagelevel.css.'.$action) as $style)
				<link href="{{ asset($style) }}" rel="stylesheet" type="text/css"/>
		@endforeach
	@endif	

	{{-- Global Theme Styles (used by all pages) --}}
	@if(!empty(config('dz.public.global.css'))) 
		@foreach(config('dz.public.global.css') as $style)
			<link href="{{ asset($style) }}" rel="stylesheet" type="text/css"/>
		@endforeach
	@endif	


</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{!! url('/'); !!}" class="brand-logo">
			@if(!empty($logo))
				<img class="logo-abbr" src="{{ asset($logo) }}" alt="">
			@else
                <img class="logo-abbr" src="{{ asset('davur/images/logo.png') }}" alt="">
			@endif
			@if(!empty($logoText))
                <img class="logo-compact" src="{{ asset($logoText) }}" alt="">
                <img class="brand-title" src="{{ asset($logoText) }}" alt="">
			@else
                <img class="logo-compact" src="{{ asset('davur/images/logo-text.png') }}" alt="">
                <img class="brand-title" src="{{ asset('davur/images/logo-text.png') }}" alt="">
			@endif	
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        
		@include('layouts.backAdmin.elementsAdminBlog.header')
		
		
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('layouts.backAdmin.elementsAdminBlog.sidebarAdBlog')
        <!--**********************************
            Sidebar end
        ***********************************-->

		
		
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            @yield('content')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        
		@include('layouts.backAdmin.elementsAdminBlog.footer')
		
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
	@include('layouts.backAdmin.elementsAdminBlog.footer-scripts')
    @yield('script')
</body>
</html>