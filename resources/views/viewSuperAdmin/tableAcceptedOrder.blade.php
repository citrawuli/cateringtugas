@extends('layouts.backAdmin.layout.defaultSuperAdmin')

@section('link')
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.1/css/dataTables.dateTime.min.css">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, selamat datang!</h4>
                <span>Tabel Order Masuk</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Tabel</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Daftar Order Diterima</a></li>
            </ol>
        </div>
    </div>

    @if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif


    
    <div class="row">

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

        <div class="col-12">
            <br>
            <div class="card">
                <div class="card-header text-white bg-danger">
                    <h4 class="card-title">Daftar Order Diterima</h4>
                </div><br>

                <div class="btn-group btn-group-sm" style="margin-left: 5%; margin-right:5%">
                    <button id="belumdiproses" class="btn light btn-danger filter">Belum Diproses</button>
                    <button id="sedangdiproses" class="btn light btn-warning filter">Sedang Diproses</button>
                    <button id="dalampengiriman" class="btn light btn-info filter">Dalam Pengiriman</button>
                    <button id="sudahselesai" class="btn light btn-success filter">Sudah Selesai</button>
                    <button id="Semua" class="btn light btn-secondary filter">Semua Progress</button>
                </div>
                <br>
                <div class="btn-group btn-group-sm" style="margin-left: 5%; margin-right:5%">
                    <button id="belumlunas" class="btn light btn-dark filter">Belum Lunas</button>
                    <button id="lunas" class="btn light btn-light filter">Lunas</button>
                    <button id="semuatagihan" class="btn light btn-secondary filter">Semua Tagihan</button>
                    <button id="notverified" class="btn light btn-warning filter">Belum Diverifikasi!!!</button>
                    <button id="verified" class="btn light btn-info filter">Diverifikasi</button>
                </div>
                <br> 
                <table border="0" cellspacing="5" cellpadding="5" style="margin-left: 5%; margin-right:5%">
                    <tbody>
                        <tr>
                            <td> <strong>Untuk tanggal antara  :</strong>   <input type="text" id="min" name="min"> <strong>-</strong> <input type="text" id="max" name="max"></tr>
                                {{-- <button id="semuatgl" class="btn light btn-secondary filter">Semua</button> --}}
                        </tr>
                    </tbody>
                </table>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="ordertable" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Untuk tanggal</th>
                                    <th>Nama Pemesan</th>
                                    <th>Status Progres</th>
                                    <th>Status Bayar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $pemesanan as $key =>$order )
                                {{-- {{dd($pemesanan)}}  --}}
                                <tr>
                                    <td>{{ $order->id_pemesanan }}</td>
                                    <td>{{ date('d-M-Y', strtotime($order->untuk_tanggal)) }}</td>
                                    <td>{{ $order->nama_lengkap_pembeli }}</td>

                                    <td>
                                        @if ($order ->status_progress == '1')
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown"><span style="display: none">_</span>Belum Diproses</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item inprocess"  name="{{$order->id_pemesanan}}"><i class="flaticon-381-time scale5 text-warning mr-2"></i>Sedang Diproses </a>
                                                    <a class="dropdown-item insend" name="{{$order->id_pemesanan}}"><i class="flaticon-381-route scale5 text-primary mr-2"></i>Dalam Pengiriman </a>
                                                    <a class="dropdown-item done" name="{{$order->id_pemesanan}}"><i class="las la-check-square scale5 text-success mr-2"></i>Sudah Selesai </a>
                                                </div>
                                            </div>
                                        @elseif ($order ->status_progress == '2')
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown"><span style="display: none">_</span>Sedang Diproses</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item notyet"  name="{{$order->id_pemesanan}}"><i class="las la-undo scale5 text-danger mr-2"></i>Belum Diproses </a>
                                                    <a class="dropdown-item insend" name="{{$order->id_pemesanan}}"><i class="flaticon-381-route scale5 text-primary mr-2"></i>Dalam Pengiriman </a>
                                                    <a class="dropdown-item done" name="{{$order->id_pemesanan}}"><i class="las la-check-square scale5 text-success mr-2"></i>Sudah Selesai </a>
                                                </div>
                                            </div>
                                        @elseif ($order ->status_progress == '3')
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown"><span style="display: none">_</span>Dalam Pengiriman</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item notyet"  name="{{$order->id_pemesanan}}"><i class="las la-undo scale5 text-danger mr-2"></i>Belum Diproses </a>
                                                    <a class="dropdown-item inprocess"  name="{{$order->id_pemesanan}}"><i class="flaticon-381-time scale5 text-warning mr-2"></i>Sedang Diproses </a>
                                                    <a class="dropdown-item done" name="{{$order->id_pemesanan}}"><i class="las la-check-square scale5 text-success mr-2"></i>Sudah Selesai </a>
                                                </div>
                                            </div>
                                        @elseif ($order ->status_progress == '4')
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><span style="display: none">_</span>Sudah Selesai</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item notyet"  name="{{$order->id_pemesanan}}"><i class="las la-undo scale5 text-danger mr-2"></i>Belum Diproses</a>
                                                    <a class="dropdown-item inprocess"  name="{{$order->id_pemesanan}}"><i class="flaticon-381-time scale5 text-warning mr-2"></i>Sedang Diproses</a>
                                                    <a class="dropdown-item insend" name="{{$order->id_pemesanan}}"><i class="flaticon-381-route scale5 text-primary mr-2"></i>Dalam Pengiriman</a>
                                                </div>
                                            </div>
                                        @endif
                                    </td>

                                    <td>
                                        @php
                                        $total = 0;
                                        @endphp  

                                        @foreach ($order->payments as $payid  )
                                            {{-- {{ $payid->jumlah_bayar }} --}}
                                            @php
                                                $total += $payid->jumlah_bayar;
                                            @endphp                            
                                        @endforeach
                                        {{-- <p>Total {{ $total }}</p>                  --}}
                                        @if ($order->total_transaksi > $total)
                                            <span class="badge light badge-danger"><i class="fa fa-circle text-danger mr-1"></i>Belum Lunas</span>
                                            @foreach ($order->payments as $payid  )
                                            @if ($payid->status_bayar == '1' )
                                                <span class="badge light badge-info"><i class="fa text-info mr-1"></i><span style="display: none">_</span>Diverifikasi </span>
                                            @elseif ($payid->status_bayar == '0' )
                                                <span class="badge light badge-warning"><i class="fa text-warning mr-1"></i><span style="display: none">_</span>Belum diverifikasi!!! </span>
                                            @endif                
                                        @endforeach
                                        @elseif($total >= $order->total_transaksi )
                                            <span class="badge light badge-success"><i class="fa fa-circle text-success mr-1"></i><span style="display: none">_</span>Lunas</span>
                                            @foreach ($order->payments as $payid  )
                                                @if ($payid->status_bayar == '1' )
                                                    <span class="badge light badge-info"><i class="fa text-info mr-1"></i><span style="display: none">_</span>Diverifikasi </span>
                                                @elseif ($payid->status_bayar == '0' )
                                                    <span class="badge light badge-warning"><i class="fa text-warning mr-1"></i><span style="display: none">_</span>Belum Diverifikasi!!! </span>
                                                @endif                
                                            @endforeach
                                        @endif
                                    </td>

                                    <td>
                                        <a href="{!! url('/Invoice/'. $order->id_pemesanan); !!}" class="btn btn-success btn-xs btn-rounded">Invoice</a>
                                        <a href="{!! url('/Payment/'. $order->id_pemesanan); !!}" class="btn btn-info btn-xs btn-rounded">Pembayaran</a>
                                        <a href="{!! url('/LihatDetailOrder/'. $order->id_pemesanan); !!}" class="btn btn-secondary btn-xs btn-rounded">Lihat detail</a>
                                    </td>
                                </tr>
                                
                                @endforeach        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.1.1/js/dataTables.dateTime.min.js"></script>
<script>
    
$(document).ready(function(){

    var dataTable= $('#ordertable').DataTable( {
        dom: 'lBfrtip',
        // Bfrtip you need to add l on your dom. See this for ref: https://datatables.net/reference/option/dom.
    });
    
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="tooltip2"]').tooltip();
    $('[data-toggle="tooltip3"]').tooltip();

    //to trick dropdown filter in datatable im using hidden span :)
    
    $('#belumdiproses').on('click', function () {
        dataTable.columns(3).search("_Belum Diproses", true, false, true).draw();
    });

    $('#sedangdiproses').on('click', function () {
        dataTable.columns(3).search("_Sedang Diproses", true, false, true).draw();
    });

    $('#dalampengiriman').on('click', function () {
        dataTable.columns(3).search("_Dalam Pengiriman", true, false, true).draw();
    });

    $('#sudahselesai').on('click', function () {
        dataTable.columns(3).search("_Sudah Selesai", true, false, true).draw();
    });

    $('#Semua').on('click', function () {
        dataTable.columns(3).search("_Belum Diproses|_Sedang Diproses|_Dalam Pengiriman|_Sudah Selesai", true, false, true).draw();
    });

    $('#belumlunas').on('click', function () {
        dataTable.columns(4).search("Belum Lunas", true, false, true).draw();
    });

    $('#lunas').on('click', function () {
        dataTable.columns(4).search("_Lunas", true, false, true).draw();
    });

    $('#semuatagihan').on('click', function () {
        dataTable.columns(4).search("_Lunas|Belum Lunas", true, false, true).draw();
    });

    $('#notverified').on('click', function () {
        dataTable.columns(4).search("_Belum Diverifikasi!!!", true, false, true).draw();
    });

    $('#verified').on('click', function () {
        dataTable.columns(4).search("_Diverifikasi", true, false, true).draw();
    });


    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') } });
    $('.notyet').on('click', function () {
        //its a table row, so yeah... dont do #notyet okayy, use more general than id so you figured the rowss
        //I already used id but it will not be as easy as this :)
        var getid=$(this).attr('name');
        console.log("getid");
        console.log(getid);
        
        var a = "{{URL('/notyet')}}";
        var fUrl = a+"/"+getid;
        $.ajax({
            url: fUrl,
            type:'POST',
            headers: {
			    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
            success:function(response){
                setTimeout(function(){window.location = window.location}, 300); 
            },
            error: function() {
                console.log( "Ajax Not Working" );
            }         
        })
    });

    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') } });
    $('.inprocess').on('click', function () {
        //its a table row, so yeah... dont do #inprocess okayy, use more general than id so you figured the rowss
        //I already used id but it will not be as easy as this :)
        var getid=$(this).attr('name');
        console.log("getid");
        console.log(getid);
        
        var a = "{{URL('/inprocess')}}";
        var fUrl = a+"/"+getid;
        $.ajax({
            url: fUrl,
            type:'POST',
            headers: {
			    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
            success:function(response){
                setTimeout(function(){window.location = window.location}, 300); 
            },
            error: function() {
                console.log( "Ajax Not Working" );
            }         
        })
    });

    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') } });
    $('.insend').on('click', function () {
        //its a table row, so yeah... dont do #insend okayy, use more general than id so you figured the rowss
        //I already used id but it will not be as easy as this :)
        var getid=$(this).attr('name');
        console.log("getid");
        console.log(getid);
        
        var a = "{{URL('/insend')}}";
        var fUrl = a+"/"+getid;
        $.ajax({
            url: fUrl,
            type:'POST',
            headers: {
			    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
            success:function(response){
                setTimeout(function(){window.location = window.location}, 300); 
            },
            error: function() {
                console.log( "Ajax Not Working" );
            }         
        })
    });

    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') } });
    $('.done').on('click', function () {
        //its a table row, so yeah... dont do #done okayy, use more general than id so you figured the rowss
        //I already used id but it will not be as easy as this :)
        var getid=$(this).attr('name');
        console.log("getid");
        console.log(getid);
        
        var a = "{{URL('/done')}}";
        var fUrl = a+"/"+getid;
        $.ajax({
            url: fUrl,
            type:'POST',
            headers: {
			    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
            success:function(response){
                setTimeout(function(){window.location = window.location}, 300); 
            },
            error: function() {
                console.log( "Ajax Not Working" );
            }         
        })
    });

    var minDate, maxDate;
    //Custom filtering function which will search data in column four between two values
    $.fn.dataTable.ext.search.push(
        function( settings, data, dataIndex ) {
            var min = minDate.val();
            var max = maxDate.val();
            var date = new Date( data[1] );
    
            if (
                (min == null && max == null) ||
                (min == null && date <= max) ||
                (max == null && date >=  min) ||
                (date <= max && date >= min)
            ) {
                return true;
            }
            return false;
        }
    );
    // Create date inputs
    minDate = new DateTime($('#min'), {
        format: 'DD-MMM-YYYY'
    });
    maxDate = new DateTime($('#max'), {
        format: 'DD-MMM-YYYY'
    });
 
    // Refilter the table
    $('#min, #max').on('change', function () {
        // table.draw();
        dataTable.draw();
    });




});
</script>
@endsection