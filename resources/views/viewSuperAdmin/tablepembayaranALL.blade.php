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
@endphp
@extends($layoutDirectory)
{{-- @extends('layouts.backAdmin.layout.defaultSuperAdmin') --}}

@section('link')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.1/css/dataTables.dateTime.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
@endsection

@section('content')
<style>
    .zoom {
        transition: transform .08s;
        width: 214px;
        height: 115px;
    }

    .zoom:hover {
        -ms-transform: scale(1.5); /* IE 9 */
        -webkit-transform: scale(1.5); /* Safari 3-8 */
        transform: scale(1.5); 
    }

    /* .toggle-class{
        max-height:80% !important; 
    } */
</style>
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, selamat datang!</h4>
                <span>Daftar Pembayaran</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Tabel</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Daftar Pembayaran</a></li>
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
                    <a href="{!! url('/AddPayment'); !!}" class="btn light btn-danger">Tambah Pembayaran</a>
                    <a href="{{ url('/TrashedPayment')}}" class="btn btn-primary light btn-card"><i class="fa fa-trash" style="margin-right: 10px;"></i>Lihat Tong Sampah</a> 
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

        

        <div class="col-12">
            <br>
            <div class="card">
                <div class="card-header text-white bg-danger">
                    <h4 class="card-title">Daftar Pembayaran</h4>
                </div>
                <br>
                <div class="btn-group btn-group-sm" style="margin-left: 5%; margin-right:5%">
                    <button id="menunggu" class="btn light btn-warning filter">Menunggu Verifikasi</button>
                    <button id="diverif" class="btn light btn-success filter">Diverifikasi</button>
                    <button id="penangguhan" class="btn light btn-dark filter">Penangguhan</button>
                    <button id="semuatagihan" class="btn light btn-secondary filter">Semua Tagihan</button>
                </div>
                <br>
        
                <table border="0" cellspacing="5" cellpadding="5" style="margin-left: 5%; margin-right:5%">
                    <tbody>
                        <tr>
                            <td> <strong>Untuk tanggal antara  :</strong>   <input type="text" id="min" name="min"> 
                                <strong>-</strong> <input type="text" id="max" name="max">
                                
                                {{-- <button id="semuatgl" class="btn btn-secondary filter btn-xs">Refresh</button> --}}
                            </td>
                        </tr>
                    </tbody>
                </table>


                <div class="card-body">
                    <div class="table-responsive">
                        <table id="pymntalltable" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>ID Pemesanan</th>
                                    <th>ID Pembayaran</th>
                                    <th>Status Bayar</th>
                                    <th>Metode Bayar</th>
                                    <th>Bukti Bayar</th>
                                    <th>Jumlah Bayar</th>
                                    <th>Tanggal Bayar</th>
                                    
                                    <th>Nomor Rekening</th>
                                    <th>Atas Nama</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
@foreach( $pembayaran as $b )    
                                <tr>
                                    <td>{{ $b->id_pemesanan }}</td>
                                    <td>{{ $b->id_pembayaran }}</td>
                                    
                                    @if ($b->status_bayar == '0')
                                        <td>
                                            <span class="badge light badge-warning"><i class="fa fa-circle text-warning mr-1"></i>Menunggu Verifikasi</span>
                                            {{-- <input data-id="{{$b->id_pembayaran}}" class="toggle-class" type="checkbox" 
                                            data-onstyle="success" data-offstyle="danger" data-toggle="toggle" 
                                            data-on="Active" data-off="InActive" {{ $b->status_bayar ? 'checked' : '' }}> --}}
                                            {{-- <input data-id="{{$b->id_pembayaran}}" type="checkbox" data-toggle="toggle" class="toggle-class " 
                                            data-on="Diverifikasi" data-off="Klik untuk verifikasi" data-onstyle="success" data-offstyle="danger" {{ $b->status_bayar ? 'checked' : '' }}> --}}
                                        </td>
                                    @elseif($b->status_bayar == '1')
                                        <td>
                                            <span class="badge light badge-success"><i class="fa fa-circle text-success mr-1"></i>Diverifikasi</span> 
                                            {{-- <input data-id="{{$b->id_pembayaran}}" type="checkbox" data-toggle="toggle" class="toggle-class"
                                            data-on="Diverifikasi" data-off="Klik untuk verifikasi" data-onstyle="success" data-offstyle="danger" {{ $b->status_bayar ? 'checked' : '' }}>   --}}
                                        </td> 
                                    @elseif ($b->status_bayar == '2')
                                        <td>
                                            <span class="badge light badge-dark"><i class="fa fa-circle text-dark mr-1"></i>Penangguhan</span> 
                                        </td>
                                    @endif

                                    @if ($b->bank_transfer == '1')
                                        <td>Tunai</td>
                                    @elseif ($b->bank_transfer == '2')
                                        <td>BRI</td>
                                    @elseif ($b->bank_transfer == '3')
                                        <td>BCA</td>
                                    @endif

                                    <td>
                                        @if ($b->bukti_bayar != null)
                                        <div class="zoom">
                                            <img src="{{ asset($b->bukti_bayar) }}" width="200px" >
                                            <a href='{{ asset($b->bukti_bayar) }}' target='_blank'>Lihat Gambar Full</a>
                                        </div>
                                        @else
                                            Tidak Ada Gambar
                                        @endif
                                    </td>
                                    <td>@currency($b->jumlah_bayar)</td>
                                    <td>{{ date('d-M-Y H:i:s', strtotime($b->tanggal_pembayaran)) }}</td>
                                    
                                    
                                    <td>{{ $b->nomor_rekening ?? '-'}}</td>
                                    <td>{{ $b->atas_nama ?? '-'}}</td>
                                    <td>{{ $b->created_at }}</td>
                                    <td>{{ $b->updated_at }}</td>
                                    <td>
                                        <div class="d-flex">
                                            
                                            {{-- <a href="{{ url( '/EditPay/' . $b->id ) }}" class="btn btn-primary shadow btn-xs sharp mr-1" data-toggle="tooltip" data-placement="top" title="Edit Kategori" id="editt"><i class="fa fa-pencil"></i></a> --}}
                                            
                                            <a href="{{ url( '/DeletePayment/' . $b->id_pembayaran ) }}" class="btn btn-danger shadow btn-xs sharp" data-toggle="tooltip2" data-placement="top" title="Soft Delete Pembayaran"><i class="fa fa-trash"></i></a>
                                            {{-- @if ($b->status_bayar == '0')
                                            <input data-id="{{$b->id_pembayaran}}" type="checkbox" data-toggle="toggle" class="toggle-class" 
                                            data-on="Diverifikasi" data-off="Klik untuk verifikasi" data-onstyle="success" data-offstyle="danger" {{ $b->status_bayar ? 'checked' : '' }}>
                                            @else
                                            <input data-id="{{$b->id_pembayaran}}" type="checkbox" data-toggle="toggle" class="toggle-class"
                                            data-on="Diverifikasi" data-off="Klik untuk verifikasi" data-onstyle="success" data-offstyle="danger" {{ $b->status_bayar ? 'checked' : '' }}>  
                                            @endif --}}
                                            <div style="margin-left: 20px">
                                            @if ($b->status_bayar == '0')
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown"><span style="display: none">_</span>Menunggu Verifikasi</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item penangguhan"  name="{{$b->id_pembayaran}}"><i class="flaticon-381-pause scale5 text-warning mr-2"></i>Penangguhan</a>
                                                        <a class="dropdown-item verified" name="{{$b->id_pembayaran}}"><i class="flaticon-381-success-2 scale5 text-success mr-2"></i>Sudah Diverifikasi</a>
                                                    </div>
                                                </div>
                                            @elseif ($b->status_bayar == '1')
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><span style="display: none">_</span>Sudah Diverifikasi</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item needverification" name="{{$b->id_pembayaran}}"><i class="flaticon-381-promotion scale5 text-danger mr-2"></i>Menunggu Verifikasi</a>
                                                        <a class="dropdown-item penangguhan"  name="{{$b->id_pembayaran}}"><i class="flaticon-381-pause scale5 text-warning mr-2"></i>Penangguhan</a>
                                                    </div>
                                                </div>
                                            @elseif ($b->status_bayar == '2')
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown"><span style="display: none">_</span>Penangguhan</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item needverification" name="{{$b->id_pembayaran}}"><i class="flaticon-381-promotion scale5 text-danger mr-2"></i>Menunggu Verifikasi</a>
                                                        <a class="dropdown-item verified" name="{{$b->id_pembayaran}}"><i class="flaticon-381-success-2 scale5 text-success mr-2"></i>Sudah Diverifikasi</a>
                                                    </div>
                                                </div>
                                            @endif
                                            </div>
                                        </div>
                                    </td>
                                  
                                </tr>
@endforeach        
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    {{-- <th style="text-align:right">Jumlah Bayar:</th> --}}
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>  
            </div>
        </div>

    </div>
</div>
@endsection

@section('script')
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.1.1/js/dataTables.dateTime.min.js"></script>

<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="tooltip2"]').tooltip();

    // $('.toggle-class').change(function() {
    //     var status = $(this).prop('checked') == true ? 1 : 0; 
    //     var user_id = $(this).data('id'); 
         
    //     $.ajax({
    //         type: "GET",
    //         dataType: "json",
    //         url: '/changeStatus',
    //         data: {'status': status, 'user_id': user_id},
    //         success: function(data){
    //           console.log(data.success)
    //         }
    //     });
    // });

    var dataTable= $('#pymntalltable').DataTable( {
        dom: 'lBfrtip',
        // Bfrtip you need to add l on your dom. See this for ref: https://datatables.net/reference/option/dom.
        buttons: [
            'copyHtml5',
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 3,4,5,6,7,8,9,10]
                },
            },
            {
                extend: 'csvHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 3,4,5,6,7,8,9,10]
                },
            },
            // 'pdfHtml5',
            {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'A4',
                exportOptions: {
                    columns: [ 0, 1, 2, 3,4,5,6,7,8,9,10]
                },
                footer: true,
                // messageBottom: function() {
                //     return '\r\n Total pembayaran' 
                //         // +   '\r\n this is the second line' + '\r\n \r\n this is the third line preceeded by an empty line'
                //         ;
                // },
            },
            'colvis'
        ],
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\Rp,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            total = api
                .column( 5 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Total over this page
            pageTotal = api
                .column( 5, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Update footer
            var numFormat = $.fn.dataTable.render.number( ',', '.', 3, 'Rp' ).display;
            $( api.column( 5 ).footer() ).html(
                // 'Total Pembayaran: '+ numFormat(total)
                // 'Due '+ numFormat(total)
            );
            // $( api.column( 5 ).footer() ).html(
            //     'Laman Ini : Rp'+pageTotal +' ( Seluruh Laman : Rp'+ total +')'
            
                // 'Laman Ini: '+numFormat(pageTotal) +'\r\n Seluruh Laman: '+ numFormat(total) +''
            // );
        },
        fixedHeader: {
            header: true,
            footer: true
        }
    });

    $('#menunggu').on('click', function () {
        dataTable.columns(2).search("Menunggu Verifikasi", true, false, true).draw();
    });

    $('#diverif').on('click', function () {
        dataTable.columns(2).search("Diverifikasi", true, false, true).draw();
    });

    $('#penangguhan').on('click', function () {
        dataTable.columns(2).search("Penangguhan", true, false, true).draw();
    });

    $('#semuatagihan').on('click', function () {
        dataTable.columns(2).search("").draw();
    });

        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') } });
        $('.toggle-class').on('change', function () {
        //its a table row, so yeah... dont do #toggle-class okayy, use more general than id so you figured the rowss
        //I already used id but it will not be as easy as this :)
        console.log("hai");
            var status = $(this).prop('checked') == true ? 1 : 0; 
            var getid = $(this).data('id');
            console.log("getid");
            console.log(getid);
            
            var a = "{{URL('/changeStatusConfirm')}}";
            var fUrl = a+"/"+getid;
            $.ajax({
                url: fUrl,
                type:'POST',
                data: {'status': status, 'id': getid},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(response){
                    
                    setTimeout(function(){window.location = window.location}, 300); 
                    
                                    
                },
                error: function() {
                    console.log( "Ajax Not Working" );
                }         
            });    
        });

        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') } });
        $('.needverification').on('click', function () {
            //its a table row, so yeah... dont do #... okayy, use more general than id so you figured the rowss
            //I already used id but it will not be as easy as this :)
            var getid=$(this).attr('name');
            console.log("getid");
            console.log(getid);
            
            var a = "{{URL('/changeStatusConfirm')}}";
            var fUrl = a+"/"+getid;
            $.ajax({
                url: fUrl,
                type:'POST',
                data: {'status': 0, 'id': getid},
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
        $('.verified').on('click', function () {
            //its a table row, so yeah... dont do #... okayy, use more general than id so you figured the rowss
            //I already used id but it will not be as easy as this :)
            var getid=$(this).attr('name');
            console.log("getid");
            console.log(getid);
            
            var a = "{{URL('/changeStatusConfirm')}}";
            var fUrl = a+"/"+getid;
            $.ajax({
                url: fUrl,
                type:'POST',
                data: {'status': 1, 'id': getid},
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
        $('.penangguhan').on('click', function () {
            //its a table row, so yeah... dont do #... okayy, use more general than id so you figured the rowss
            //I already used id but it will not be as easy as this :)
            var getid=$(this).attr('name');
            console.log("getid");
            console.log(getid);
            
            var a = "{{URL('/changeStatusConfirm')}}";
            var fUrl = a+"/"+getid;
            $.ajax({
                url: fUrl,
                type:'POST',
                data: {'status': 2, 'id': getid},
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
            var date = new Date( data[6] );
    
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