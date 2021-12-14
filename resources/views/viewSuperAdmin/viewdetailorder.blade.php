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
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, selamat datang!</h4>
                <span>Detail Order</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{!! url('/OrderDiterima'); !!}">Daftar Order Diterima</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Order Diterima</a></li>
            </ol>
        </div>
    </div>

    @if (Session::has('message'))
    <div class="alert alert-success alert-dismissible fade show">                                   
        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4">
        </polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>  
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

    <div class="container-fluid">
    @foreach( $pemesanan as $key =>$order )
        <div class="form-head d-flex mb-3 align-items-start">
            <div class="mr-auto d-none d-lg-block">
                <h2 class="text-black font-w600 mb-0">Order ID {{$order->id_pemesanan}}</h2>
                {{-- <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{!! url('/OrderDiterima'); !!}">Daftar Order Diterima</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Baca Saja - Order Diterima</a></li>
                </ol> --}}
            </div>

            <div class="dropdown mb-md-3 mb-2 ml-auto">
                
                @if ($order->status_progress == '1')
                <div class="btn btn-danger">
                    <svg width="22" class="mr-2" height="28" viewBox="0 0 22 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16647 27.9558C9.25682 27.9856 9.34946 28.0001 9.44106 28.0001C9.71269 28.0001 9.97541 27.8732 10.1437 27.6467L21.5954 12.2248C21.7926 11.9594 21.8232 11.6055 21.6746 11.31C21.526 11.0146 21.2236 10.8282 20.893 10.8282H13.1053V0.874999C13.1053 0.495358 12.8606 0.15903 12.4993 0.042327C12.1381 -0.0743215 11.7428 0.0551786 11.5207 0.363124L0.397278 15.7849C0.205106 16.0514 0.178364 16.403 0.327989 16.6954C0.477614 16.9878 0.77845 17.1718 1.10696 17.1718H8.56622V27.125C8.56622 27.5024 8.80816 27.8373 9.16647 27.9558ZM2.81693 15.4218L11.3553 3.58389V11.7032C11.3553 12.1865 11.7471 12.5782 12.2303 12.5782H19.1533L10.3162 24.479V16.2968C10.3162 15.8136 9.92444 15.4218 9.44122 15.4218H2.81693Z" fill="#fff"/></svg>
                    <span>BELUM DIPROSES</span>
                </div>
                @elseif ($order->status_progress == '2')
                <div class="btn btn-warning">
                    <svg width="22" class="mr-2" height="28" viewBox="0 0 22 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16647 27.9558C9.25682 27.9856 9.34946 28.0001 9.44106 28.0001C9.71269 28.0001 9.97541 27.8732 10.1437 27.6467L21.5954 12.2248C21.7926 11.9594 21.8232 11.6055 21.6746 11.31C21.526 11.0146 21.2236 10.8282 20.893 10.8282H13.1053V0.874999C13.1053 0.495358 12.8606 0.15903 12.4993 0.042327C12.1381 -0.0743215 11.7428 0.0551786 11.5207 0.363124L0.397278 15.7849C0.205106 16.0514 0.178364 16.403 0.327989 16.6954C0.477614 16.9878 0.77845 17.1718 1.10696 17.1718H8.56622V27.125C8.56622 27.5024 8.80816 27.8373 9.16647 27.9558ZM2.81693 15.4218L11.3553 3.58389V11.7032C11.3553 12.1865 11.7471 12.5782 12.2303 12.5782H19.1533L10.3162 24.479V16.2968C10.3162 15.8136 9.92444 15.4218 9.44122 15.4218H2.81693Z" fill="#fff"/></svg>
                    <span>SEDANG DIPROSES</span>
                </div>
                @elseif ($order->status_progress == '3')
                <div class="btn btn-info">
                    <svg width="22" class="mr-2" height="28" viewBox="0 0 22 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16647 27.9558C9.25682 27.9856 9.34946 28.0001 9.44106 28.0001C9.71269 28.0001 9.97541 27.8732 10.1437 27.6467L21.5954 12.2248C21.7926 11.9594 21.8232 11.6055 21.6746 11.31C21.526 11.0146 21.2236 10.8282 20.893 10.8282H13.1053V0.874999C13.1053 0.495358 12.8606 0.15903 12.4993 0.042327C12.1381 -0.0743215 11.7428 0.0551786 11.5207 0.363124L0.397278 15.7849C0.205106 16.0514 0.178364 16.403 0.327989 16.6954C0.477614 16.9878 0.77845 17.1718 1.10696 17.1718H8.56622V27.125C8.56622 27.5024 8.80816 27.8373 9.16647 27.9558ZM2.81693 15.4218L11.3553 3.58389V11.7032C11.3553 12.1865 11.7471 12.5782 12.2303 12.5782H19.1533L10.3162 24.479V16.2968C10.3162 15.8136 9.92444 15.4218 9.44122 15.4218H2.81693Z" fill="#fff"/></svg>
                    <span>DALAM PENGIRIMAN</span>
                </div>
                @elseif ($order->status_progress == '4')
                <div class="btn btn-success">
                    <svg width="22" class="mr-2" height="28" viewBox="0 0 22 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16647 27.9558C9.25682 27.9856 9.34946 28.0001 9.44106 28.0001C9.71269 28.0001 9.97541 27.8732 10.1437 27.6467L21.5954 12.2248C21.7926 11.9594 21.8232 11.6055 21.6746 11.31C21.526 11.0146 21.2236 10.8282 20.893 10.8282H13.1053V0.874999C13.1053 0.495358 12.8606 0.15903 12.4993 0.042327C12.1381 -0.0743215 11.7428 0.0551786 11.5207 0.363124L0.397278 15.7849C0.205106 16.0514 0.178364 16.403 0.327989 16.6954C0.477614 16.9878 0.77845 17.1718 1.10696 17.1718H8.56622V27.125C8.56622 27.5024 8.80816 27.8373 9.16647 27.9558ZM2.81693 15.4218L11.3553 3.58389V11.7032C11.3553 12.1865 11.7471 12.5782 12.2303 12.5782H19.1533L10.3162 24.479V16.2968C10.3162 15.8136 9.92444 15.4218 9.44122 15.4218H2.81693Z" fill="#fff"/></svg>
                    <span>SELESAI</span>
                </div>
                @endif
                
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-xxl-3 col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-xl-12 col-lg-6 ">
                        <div class="card h-auto">
                            @foreach ($users as $u)
                                @if ($order->user_id == $u->id)
                                    <div class="card-body text-center">
                                        <img src="{{ asset('davur/images/avatar/7.jpg') }}" width="150" class="rounded-circle mb-4" alt=""/>
                                        <h4 class="mb-3 text-black font-w600">{{$u->name}}</h4>
                                        <a href="javascript:void(0);" class="btn btn-primary light btn-xs">{{$u->role_name}}</a>
                                    </div>
                                @endif
                            @endforeach
                            
                            <div class="card bg-secondary sticky mb-0">
                                <div class="card-header border-0 pb-0">
                                    <h5 class="card-title text-white mt-2">Keterangan Tambahan</h5>
                                </div>
                                <div class="card-body pt-3">
                                    <p class="fs-14 op7 text-white">{{$order->keterangan ?? 'Tidak Ada'}}</p>
                                </div>
                                <div class="card-footer border-0 py-4 bg-warning rounded-xl">
                                    <div class="media align-items-center">
                                        <img class="mr-3 img-fluid rounded-circle" width="50" src="{{ asset('davur/images/delivery.png') }}" alt="DexignZone">
                                        <div class="media-body">
                                            <h5 class="my-0 text-white">{{ $order->alamat_lengkap_pembeli }}<br>
                                                @if ($order->pengambilan == 1)
                                                Diambil Sendiri
                                                @else
                                                Dikirim Go Car
                                                @endif
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-6">
                        {{-- <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">Disease History</h4>
                            </div>
                            <div class="card-body">
                                <div class="widget-timeline-icon">
                                    <ul class="timeline">
                                        <li>
                                            <div class="icon bg-primary"></div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <h4 class="mb-2">Order Delivered</h4>
                                                <p class="fs-15 mb-0 ">Wait..</p>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="icon bg-primary"></div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <h4 class="mb-2">On Delivery</h4>
                                                <p class="fs-15 mb-0 ">Sat, 23 Jul 2020, 01:24 PM</p>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="icon bg-primary"></div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <h4 class="mb-2">Payment Success</h4>
                                                <p class="fs-15 mb-0 ">Fri, 22 Jul 2020, 10:44 AM</p>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="icon bg-primary"></div>
                                            <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                <h4 class="mb-2">Order Created</h4>
                                                <p class="fs-15 mb-0 ">Thu, 21 Jul 2020, 11:49 AM</p>
                                            </a>
                                        </li>
                                    </ul>	
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-xxl-9 col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body pt-2">
                                <div class="table-responsive ">
                                    <table class="table items-table">
                                    
                                        <tr>
                                            <th class="my-0 text-black font-w500 fs-20">Item</th>
                                            <th style="width:10%;" class="my-0 text-black font-w500 fs-20">Qty</th>
                                            <th style="width:20%;" class="my-0 text-black font-w500 fs-20">Harga</th>
                                            <th class="my-0 text-black font-w500 fs-20">Sub Total</th>
                                            <th></th>
                                        </tr>
                                        @foreach ($order->products as $det_pem  )
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    

                                                    @foreach ($galpro->slice(0, 1) as $gal)
                                                    @if ($det_pem->id == $gal->id_produk)
                                                    <span href="{!! url('/ecom-product-detail'); !!}">
                                                        <img class="mr-3 img-fluid rounded" width="85" src="{{ asset($gal->foto) }}" alt="DexignZone">
                                                    </span>
                                                    @endif
                                                    @endforeach

                                                    <div class="media-body">
                                                        @foreach ($category as $cat)
                                                        @if ($det_pem->id_kategori == $cat->id)
                                                        <small class="mt-0 mb-1 font-w500"><span class="text-primary" href="javascript:void(0);">
                                                            {{$cat->nama_kategori}}</span>
                                                        </small>
                                                        
                                                    @endif
                                                        @endforeach
                                                        
                                                        
                                                        <h5 class="mt-0 mb-2 mb-4"><span class="text-black" href="{!! url('/ecom-product-detail'); !!}">{{$det_pem->nama_produk}}</span></h5>
                                                        {{-- <div class="star-review fs-14">
                                                            <i class="fa fa-star text-orange"></i>
                                                            <i class="fa fa-star text-orange"></i>
                                                            <i class="fa fa-star text-orange"></i>
                                                            <i class="fa fa-star text-gray"></i>
                                                            <i class="fa fa-star text-gray"></i>
                                                            <span class="ml-3 text-dark">451 reviews</span>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h4 class="my-0 text-secondary font-w600">{{ $det_pem->pivot->kuantitas ?: 'null' }}</h4>
                                            </td>
                                            <td>
                                                @if ($det_pem->harga_produk != null)
                                                <h4 class="my-0 text-secondary font-w600">@currency($det_pem->harga_produk)</h4>
                                                @else
                                                -
                                                @endif
                                            </td>
                                            <td>
                                                @if ($det_pem->pivot->sub_total != null)
                                                <h4 class="my-0 text-secondary font-w600">@currency($det_pem->pivot->sub_total)</h4>
                                                @else
                                                -
                                                @endif
                                            </td>
                                            {{-- <td>
                                                <a href="javascript:void(0);" class="ti-close fs-28 text-danger las la-times-circle"></a>
                                            </td> --}}
                                        </tr>
                                        
                                    @endforeach
                                    </table>
                                </div>	
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="card">
                            
                            <table class="table table-clear" >
                                <tbody style=" float: right; margin-right:17%">
                                    <tr >
                                        <td class="left" ><h4 class="my-0 text-secondary font-w600">Subtotal</h4></td>
                                        <td class="right"><h4 class="my-0 text-secondary font-w600" style="display:inline" id="sub_total">@currency($order->total_sub)</h4></td>
                                    </tr>
                                    <tr>
                                        <td class="left"><h4 class="my-0 text-secondary font-w600">Discount</h4></td>
                                        <td class="right" ><h4 class="my-0 text-secondary font-w600">
                                            @if ($order->discount != null)
                                            @currency($order->discount )
                                            @else
                                            {{$order->discount_inpercent }}%
                                            </h4>
                                            @endif
                                        </td>
                                    </tr>
                                    {{-- <tr>
                                        <td class="left"><strong>PPN (10%)</strong></td>
                                        <td class="right">Rp <p style="display:inline" id="ppn">0</p></td>
                                    </tr> --}}
                                    <tr>
                                        <td class="left"><h4 class="my-0 text-secondary font-w600">Total</h4></td>
                                        <td class="right"><h4 class="my-0 text-secondary font-w600">@currency($order->total_transaksi)</h4></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                    </div>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                            
                                <div class="row mx-0">
                                    <div class="media align-items-center col-md-4 col-lg-6 px-0 mb-3 mb-md-0">
                                        {{-- <img class="mr-3 img-fluid rounded-circle" width="65" src="{{ asset('davur/images/avatar/3.jpg') }}" alt="DexignZone"> --}}
                                        <div class="media-body">
                                            <h4 class="my-0 text-black">Tn/Ny {{ $order->nama_lengkap_pembeli}}</h4>
                                            <small></small>
                                        </div>
                                    </div>
                                    <div class="iconbox col-md-4 col-lg-3 mb-3 mb-md-0">
                                        <i class="las la-phone"></i>
                                        <small>Telepon</small>
                                        <p>{{ $order->no_hp_pembeli ?? '-'}}</p>
                                    </div>
                                    <div class="iconbox col-md-4 col-lg-3 mb-md-0">
                                        <i class="las la-shipping-fast"></i>
                                        <small>Waktu</small>
                                        <p>{{ date('d-M-Y', strtotime($order->untuk_tanggal)) }}, {{ $order->untuk_jam}} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    @endforeach
    </div>







</div>
		
			
@endsection	

@section('script')
<script src="http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer="" type="text/javascript"></script>
<script>

    $(document).ready(function() {
        //TABLE
            $('#simulationRow').dataTable({searching: false});
            
            $('#percent-radio, #money-radio').change(function() {
                if ($('#percent-radio').is(':checked')) {
                    $('#percent-text').removeAttr('disabled').focus();
                } else {
                    $('#percent-text').attr('disabled', 'disabled');
                }

                if ($('#money-radio').is(':checked')){
                    $('#money-text').removeAttr('disabled').focus();
                } else {
                    $('#money-text').attr('disabled', 'disabled');
                }
            }).change();
            
   });

</script>
@endsection