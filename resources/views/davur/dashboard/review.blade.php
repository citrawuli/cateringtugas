{{-- Extends layout --}}
@extends('davur.layout.default')



{{-- Content --}}
@section('content')
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex mb-3 mb-md-4 align-items-start">
					<div class="mr-auto d-none d-lg-block">
						<h2 class="text-black font-w600 mb-1">Reviews</h2>
						<ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)" class="text-primary">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Customer Reviews</a></li>
                        </ol>
					</div>
					<div class="dropdown custom-dropdown">
						<div class="btn btn-sm btn-primary light d-flex align-items-center svg-btn" data-toggle="dropdown">
							<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><g><path d="M22.4281 2.856H21.8681V1.428C21.8681 0.56 21.2801 0 20.4401 0C19.6001 0 19.0121 0.56 19.0121 1.428V2.856H9.71606V1.428C9.71606 0.56 9.15606 0 8.28806 0C7.42006 0 6.86006 0.56 6.86006 1.428V2.856H5.57206C2.85606 2.856 0.560059 5.152 0.560059 7.868V23.016C0.560059 25.732 2.85606 28.028 5.57206 28.028H22.4281C25.1441 28.028 27.4401 25.732 27.4401 23.016V7.868C27.4401 5.152 25.1441 2.856 22.4281 2.856ZM5.57206 5.712H22.4281C23.5761 5.712 24.5841 6.72 24.5841 7.868V9.856H3.41606V7.868C3.41606 6.72 4.42406 5.712 5.57206 5.712ZM22.4281 25.144H5.57206C4.42406 25.144 3.41606 24.136 3.41606 22.988V12.712H24.5561V22.988C24.5841 24.136 23.5761 25.144 22.4281 25.144Z" fill="#2F4CDD"></path></g></svg>
							<div class="text-left ml-3">
								<span class="d-block fs-16">Filter Periode</span>
								<small class="d-block fs-13">4 June 2020 - 4 July 2020</small>
							</div>
							<i class="fa fa-angle-down scale5 ml-3"></i>
						</div>
						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="#">4 June 2020 - 4 July 2020</a>
							<a class="dropdown-item" href="#">5 july 2020 - 4 Aug 2020</a>
						</div>
					</div>
				</div>
                <div class="row">
					<div class="col-md-12">
						<div class="widget-carousel owl-carousel">
							<div class="items">
								<div class="bootstrap-media card p-4">
									<div class="media mb-4 align-items-center">
										<a href="{!! url('/ecom-product-detail'); !!}"><img class="mr-3 img-fluid rounded-xl" width="94" src="{{ asset('davur/images/dish/pic1.jpg') }}" alt="DexignZone"></a>
										<div class="media-body">
											<h5 class="mt-0 mb-3"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Tuna soup spinach with himalaya salt</a></h5>
											<small class="mb-0"><a class="text-primary" href="javascript:void(0);">BURGER</a></small>
										</div>
									</div>
									<p class="fs-18 text-black mb-4">A very fine addition to the not over plentiful supply of good restaurants in this part of west London.</p>
									<div class="reviewer-box">
										<div class="media align-items-center">
											<img class="mr-3 img-fluid rounded" width="55" src="{{ asset('davur/images/avatar/1.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="mt-0 mb-1 text-white">Roberto Jr.</h4>
												<small class="mb-0 text-light">Head Marketing</small>
											</div>
											<div class="star-review">
												<i class="fa fa-star text-orange"></i>
												<span class="ml-2">4.2</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="items">
								<div class="bootstrap-media card p-4">
									<div class="media mb-4 align-items-center">
										<a href="{!! url('/ecom-product-detail'); !!}"><img class="mr-3 img-fluid rounded-xl" width="94" src="{{ asset('davur/images/dish/pic2.jpg') }}" alt="DexignZone"></a>
										<div class="media-body">
											<h5 class="mt-0 mb-3"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Chicken curry special with cucumber</a></h5>
											<small class="mb-0"><a class="text-primary" href="javascript:void(0);">PIZZA</a></small>
										</div>
									</div>
									<p class="fs-18 text-black mb-4">Fast, professional and friendly service, we ordered the six course tasting menu and every dish was spectacular</p>
									<div class="reviewer-box">
										<div class="media align-items-center">
											<img class="mr-3 img-fluid rounded" width="55" src="{{ asset('davur/images/avatar/2.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="mt-0 mb-1 text-white">Jubaedah</h4>
												<small class="mb-0 text-light">Food Vlogger</small>
											</div>
											<div class="star-review">
												<i class="fa fa-star text-orange"></i>
												<span class="ml-2">5.0</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="items">
								<div class="bootstrap-media card p-4">
									<div class="media mb-4 align-items-center">
										<a href="{!! url('/ecom-product-detail'); !!}"><img class="mr-3 img-fluid rounded-xl" width="94" src="{{ asset('davur/images/dish/pic3.jpg') }}" alt="DexignZone"></a>
										<div class="media-body">
											<h5 class="mt-0 mb-3"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Tuna soup spinach with himalaya salt</a></h5>
											<small class="mb-0"><a class="text-primary" href="javascript:void(0);">JUICE</a></small>
										</div>
									</div>
									<p class="fs-18 text-black mb-4">A very fine addition to the not over plentiful supply of good restaurants in this part of west London.</p>
									<div class="reviewer-box">
										<div class="media align-items-center">
											<img class="mr-3 img-fluid rounded" width="55" src="{{ asset('davur/images/avatar/3.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="mt-0 mb-1 text-white">Steve Henry</h4>
												<small class="mb-0 text-light">Internship Students</small>
											</div>
											<div class="star-review">
												<i class="fa fa-star text-orange"></i>
												<span class="ml-2">3.5</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="items">
								<div class="bootstrap-media card p-4">
									<div class="media mb-4 align-items-center">
										<a href="{!! url('/ecom-product-detail'); !!}"><img class="mr-3 img-fluid rounded-xl" width="94" src="{{ asset('davur/images/dish/pic4.jpg') }}" alt="DexignZone"></a>
										<div class="media-body">
											<h5 class="mt-0 mb-3"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Meidum Spicy Spagethi Italiano</a></h5>
											<small class="mb-0"><a class="text-primary" href="javascript:void(0);">BURGER</a></small>
										</div>
									</div>
									<p class="fs-18 text-black mb-4">A very fine addition to the not over plentiful supply of good restaurants in this part of west London.</p>
									<div class="reviewer-box">
										<div class="media align-items-center">
											<img class="mr-3 img-fluid rounded" width="55" src="{{ asset('davur/images/avatar/4.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="mt-0 mb-1 text-white">Willy Wonca</h4>
												<small class="mb-0 text-light">Sales Marketing</small>
											</div>
											<div class="star-review">
												<i class="fa fa-star text-orange"></i>
												<span class="ml-2">4.2</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="items">
								<div class="bootstrap-media card p-4">
									<div class="media mb-4 align-items-center">
										<a href="{!! url('/ecom-product-detail'); !!}"><img class="mr-3 img-fluid rounded-xl" width="94" src="{{ asset('davur/images/dish/pic5.jpg') }}" alt="DexignZone"></a>
										<div class="media-body">
											<h5 class="mt-0 mb-3"><a class="text-black" href="{!! url('/ecom-product-detail'); !!}">Tuna soup spinach with himalaya salt</a></h5>
											<small class="mb-0"><a class="text-primary" href="javascript:void(0);">PIZZA</a></small>
										</div>
									</div>
									<p class="fs-18 text-black mb-4">A very fine addition to the not over plentiful supply of good restaurants in this part of west London.</p>
									<div class="reviewer-box">
										<div class="media align-items-center">
											<img class="mr-3 img-fluid rounded" width="55" src="{{ asset('davur/images/avatar/5.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="mt-0 mb-1 text-white">Roberto Jr.</h4>
												<small class="mb-0 text-light">Head Marketing</small>
											</div>
											<div class="star-review">
												<i class="fa fa-star text-orange"></i>
												<span class="ml-2">4.2</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8 col-xl-9 col-xxl-8">
						<div class="card">
							<div class="card-header border-0 pb-0 d-sm-flex d-block">
								<div>
									<h4 class="card-title mb-1 fs-28 font-w600">Recent Review</h4>
									<p class="mb-0">Here is customer review about your restaurant </p>
								</div>
								<div class="dropdown">
									<button type="button" class="btn btn-primary dropdown-toggle light fs-14" data-toggle="dropdown" aria-expanded="false">
										Latest
									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Latest</a>
										<a class="dropdown-item" href="#">OLD</a>
									</div>
								</div>
							</div>
							<div class="card-body p-0">
								<div class="media review-box">
									<img class="mr-3 img-fluid btn-rounded" width="55" src="{{ asset('davur/images/avatar/1.jpg') }}" alt="DexignZone">
									<div class="media-body">
										<h4 class="mt-0 mb-0 text-black">Glee Smiley</h4>
										<ul class="review-meta mb-3 d-block d-sm-flex align-items-center">
											<li class="mr-3"><small>Head Marketing</small></li>
											<li class="mr-3"><small>24 June 2020</small></li>
											<li class="ml-auto"><span class="badge badge-rounded badge-warning light font-w500">Excelent</span></li>
										</ul>
										<p class="mb-3 text-secondary">We recently had dinner with friends at David CC and we all walked away with a great experience. Good food, pleasant environment, personal attention through all the evening. Thanks to the team and we will be back!</p>
									</div>
									<div class="media-footer align-self-center">
										<div class="star-review text-md-center">
											<span class="text-secondary">4.5</span>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-gray"></i>
										</div>
									</div>
								</div>
								<div class="media review-box">
									<img class="mr-3 img-fluid btn-rounded" width="55" src="{{ asset('davur/images/avatar/2.jpg') }}" alt="DexignZone">
									<div class="media-body">
										<h4 class="mt-0 mb-0 text-black">Samuel Hawkins</h4>
										<ul class="review-meta mb-3 d-block d-sm-flex align-items-center">
											<li class="mr-3"><small>Head Marketing</small></li>
											<li class="mr-3"><small>24 June 2020</small></li>
											<li class="ml-auto">
												<span class="badge badge-rounded badge-warning light font-w500">Recomended</span> 
												<span class="badge badge-rounded badge-warning light font-w500 ml-1">Great</span>
											</li>
										</ul>
										<p class="mb-3 text-secondary">We recently had dinner with friends at David CC and we all walked away with a great experience. Good food, pleasant environment, personal attention through all the evening. Thanks to the team and we will be back!</p>
									</div>
									<div class="media-footer align-self-center">
										<div class="star-review text-md-center">
											<span class="text-secondary">4.8</span>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-gray"></i>
										</div>
									</div>
								</div>
								<div class="media review-box">
									<img class="mr-3 img-fluid btn-rounded" width="55" src="{{ asset('davur/images/avatar/3.jpg') }}" alt="DexignZone">
									<div class="media-body">
										<h4 class="mt-0 mb-0 text-black">Dicky Sitompul</h4>
										<ul class="review-meta mb-3 d-block d-sm-flex align-items-center">
											<li class="mr-3"><small>Head Marketing</small></li>
											<li class="mr-3"><small>24 June 2020</small></li>
											<li class="ml-auto"><span class="badge badge-rounded badge-warning light font-w500">Excelent</span></li>
										</ul>
										<p class="mb-3 text-secondary">We recently had dinner with friends at David CC and we all walked away with a great experience. Good food, pleasant environment, personal attention through all the evening. Thanks to the team and we will be back!</p>
									</div>
									<div class="media-footer align-self-center">
										<div class="star-review text-md-center">
											<span class="text-secondary">4.0</span>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-gray"></i>
										</div>
									</div>
								</div>
								<div class="media review-box">
									<img class="mr-3 img-fluid btn-rounded" width="55" src="{{ asset('davur/images/avatar/4.jpg') }}" alt="DexignZone">
									<div class="media-body">
										<h4 class="mt-0 mb-0 text-black">Dracule Mihawk</h4>
										<ul class="review-meta mb-3 d-block d-sm-flex align-items-center">
											<li class="mr-3"><small>Head Marketing</small></li>
											<li class="mr-3"><small>24 June 2020</small></li>
										</ul>
										<p class="mb-3 text-secondary">We recently had dinner with friends at David CC and we all walked away with a great experience. Good food, pleasant environment, personal attention through all the evening. Thanks to the team and we will be back!</p>
									</div>
									<div class="media-footer align-self-center">
										<div class="star-review text-md-center">
											<span class="text-secondary">2.0</span>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-gray"></i>
											<i class="fa fa-star text-gray"></i>
											<i class="fa fa-star text-gray"></i>
										</div>
									</div>
								</div>
								<div class="media review-box">
									<img class="mr-3 img-fluid btn-rounded" width="55" src="{{ asset('davur/images/avatar/5.jpg') }}" alt="DexignZone">
									<div class="media-body">
										<h4 class="mt-0 mb-0 text-black">Samuel Hawkins</h4>
										<ul class="review-meta mb-3 d-block d-sm-flex align-items-center">
											<li class="mr-3"><small>Head Marketing</small></li>
											<li class="mr-3"><small>24 June 2020</small></li>
											<li class="ml-auto">
												<span class="badge badge-rounded badge-warning light font-w500">Delcious</span> 
												<span class="badge badge-rounded badge-warning light font-w500 ml-1">Excelent</span>
												<span class="badge badge-rounded badge-warning light font-w500 ml-1">Good Services</span>
											</li>
										</ul>
										<p class="mb-3 text-secondary">We recently had dinner with friends at David CC and we all walked away with a great experience. Good food, pleasant environment, personal attention through all the evening. Thanks to the team and we will be back!</p>
									</div>
									<div class="media-footer align-self-center">
										<div class="star-review text-md-center">
											<span class="text-secondary">3.0</span>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-gray"></i>
											<i class="fa fa-star text-gray"></i>
										</div>
									</div>
								</div>
								<div class="media review-box">
									<img class="mr-3 img-fluid btn-rounded" width="55" src="{{ asset('davur/images/avatar/1.jpg') }}" alt="DexignZone">
									<div class="media-body">
										<h4 class="mt-0 mb-0 text-black">Sanji Lee</h4>
										<ul class="review-meta mb-3 d-block d-sm-flex align-items-center">
											<li class="mr-3"><small>Head Marketing</small></li>
											<li class="mr-3"><small>24 June 2020</small></li>
											<li class="ml-auto"><span class="badge badge-rounded badge-warning light font-w500">Excelent</span></li>
										</ul>
										<p class="mb-3 text-secondary">We recently had dinner with friends at David CC and we all walked away with a great experience. Good food, pleasant environment, personal attention through all the evening. Thanks to the team and we will be back!</p>
									</div>
									<div class="media-footer align-self-center">
										<div class="star-review text-md-center">
											<span class="text-secondary">1.0</span>
											<i class="fa fa-star text-primary"></i>
											<i class="fa fa-star text-gray"></i>
											<i class="fa fa-star text-gray"></i>
											<i class="fa fa-star text-gray"></i>
											<i class="fa fa-star text-gray"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer border-0 text-center py-4">
								<a href="javascript:void(0);" class="btn btn-primary">Read More <i class="fa fa-angle-double-down scale2 ml-2"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-xl-3 col-xxl-4">
						<div class="card bg-secondary h-auto sticky">
							<div class="card-header border-0 pb-0 d-sm-flex d-block" style="display:flex !important">
								<div>
									<h3 class="card-title mb-1 text-white fs-28 font-w600">Newest</h3>
								</div>
								<div class="testimonial-one-navigation owl-clienr-btn pull-left">
									<span id="next-slide" class="prev"><i class="fa fa-chevron-left"></i></span>
									<span id="prev-slide" class="next"><i class="fa fa-chevron-right"></i></span>
								</div>
							</div>
							<div class="card-body">
								<div class="testimonial-one owl-carousel">
									<div class="items">
										<div class="text-white">
											<div class="media align-items-center mb-3">
												<img class="mr-3 img-fluid rounded-circle" width="50" src="{{ asset('davur/images/avatar/1.jpg') }}" alt="DexignZone">
												<div class="media-body">
													<h4 class="mt-0 mb-1 text-white">James Kowalski</h4>
													<small class="mb-0 text-light">Head Marketing</small>
												</div>
											</div>
											<p class="mb-3">This was not just great cooking but exceptional cooking using only the best ingredients.</p>
											<p class="mb-3">Fast, professional and friendly service, we ordered the six course tasting menu and every dish was spectacular</p>
											<ul class="list-inline newest-tag">
												<li><a href="javascript:void(0);" class="badge badge-rounded badge-secondary mb-1">Excelent</a></li>
												<li><a href="javascript:void(0);" class="badge badge-rounded badge-secondary mb-1">Good Services</a></li>
												<li><a href="javascript:void(0);" class="badge badge-rounded badge-secondary mb-1">Recomended</a></li>
												<li><a href="javascript:void(0);" class="badge badge-rounded badge-secondary mb-1">Satisfying</a></li>
											</ul>
										</div>
									</div>
									<div class="items">
										<div class="text-white">
											<div class="media align-items-center mb-3">
												<img class="mr-3 img-fluid rounded-circle" width="50" src="{{ asset('davur/images/avatar/2.jpg') }}" alt="DexignZone">
												<div class="media-body">
													<h4 class="mt-0 mb-1 text-white">James Kowalski</h4>
													<small class="mb-0 text-light">Head Marketing</small>
												</div>
											</div>
											<p class="mb-3">This was not just great cooking but exceptional cooking using only the best ingredients.</p>
											<p class="mb-3">Fast, professional and friendly service, we ordered the six course tasting menu and every dish was spectacular</p>
											<ul class="list-inline newest-tag">
												<li><a href="javascript:void(0);" class="badge badge-rounded badge-secondary mb-1">Excelent</a></li>
												<li><a href="javascript:void(0);" class="badge badge-rounded badge-secondary mb-1">Good Services</a></li>
												<li><a href="javascript:void(0);" class="badge badge-rounded badge-secondary mb-1">Recomended</a></li>
												<li><a href="javascript:void(0);" class="badge badge-rounded badge-secondary mb-1">Satisfying</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer border-0 text-center py-4 bg-warning rounded-xl">
								<div class="star-review text-md-center d-flex justify-content-center align-items-center">
									<span class="text-white fs-32 font-w600 mr-3">4.0</span>
									<i class="fa fa-star fs-22 mx-1 text-white"></i>
									<i class="fa fa-star fs-22 mx-1 text-white"></i>
									<i class="fa fa-star fs-22 mx-1 text-white"></i>
									<i class="fa fa-star fs-22 mx-1 text-white"></i>
									<i class="fa fa-star fs-22 mx-1 text-white op3"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
			
@endsection			