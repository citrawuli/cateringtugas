@extends('layouts.backAdmin.layout.defaultSuperAdmin')

@section('link')<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
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
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 845px">
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
                                            <input data-id="{{$b->id_pembayaran}}" type="checkbox" data-toggle="toggle" class="toggle-class " 
                                            data-on="Diverifikasi" data-off="Klik untuk verifikasi" data-onstyle="success" data-offstyle="danger" {{ $b->status_bayar ? 'checked' : '' }}>
                                        </td>
                                    @else
                                        <td>
                                            <span class="badge light badge-success"><i class="fa fa-circle text-success mr-1"></i>Diverifikasi</span> 
                                            <input data-id="{{$b->id_pembayaran}}" type="checkbox" data-toggle="toggle" class="toggle-class"
                                            data-on="Diverifikasi" data-off="Klik untuk verifikasi" data-onstyle="success" data-offstyle="danger" {{ $b->status_bayar ? 'checked' : '' }}>  
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
                                    <td>{{ $b->atas_nama }}</td>
                                    <td>{{ $b->created_at }}</td>
                                    <td>{{ $b->updated_at }}</td>
                                    <td>
                                        <div class="d-flex">
                                            
                                            {{-- <a href="{{ url( '/EditPay/' . $b->id ) }}" class="btn btn-primary shadow btn-xs sharp mr-1" data-toggle="tooltip" data-placement="top" title="Edit Kategori" id="editt"><i class="fa fa-pencil"></i></a> --}}
                                            
                                            <a href="{{ url( '/DeletePayment/' . $b->id_pembayaran ) }}" class="btn btn-danger shadow btn-xs sharp" data-toggle="tooltip2" data-placement="top" title="Soft Delete Pembayaran"><i class="fa fa-trash"></i></a>
                                        </div>
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
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
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
});


</script>
@endsection