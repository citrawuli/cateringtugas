@extends('layouts.backAdmin.layout.defaultSuperAdmin')

@section('content')

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Daftar Order Masuk</a></li>
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
                    <a href="{!! url('/ViewFormPemesanan'); !!}" class="btn light btn-danger">Tambah Pemesanan</a>
                    <a href="{{ url('/TrashedOrder')}}" class="btn btn-primary light btn-card"><i class="fa fa-trash"></i>Lihat Tong Sampah Permintaan</a> 
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
                    <h4 class="card-title">Daftar Order Masuk</h4>
                </div><br>
                
                {{-- <div class="" >
                    <div class="toolbar mb-4" role="toolbar">
                        <div class="btn-group mb-1">
                            <button type="button" class="btn btn-primary light px-3"><i class="fa fa-archive"></i></button>
                            <button type="button" class="btn btn-primary light px-3"><i class="fa fa-exclamation-circle"></i></button>
                            <button type="button" class="btn btn-primary light px-3"><i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                </div> --}}

                <div class="btn-group btn-group-sm" style="margin-left: 5%; margin-right:5%">
                    <button id="menunggu" class="btn light btn-warning filter">Menunggu Konfirmasi</button>
                    <button id="diterima" class="btn light btn-success filter">Diterima</button>
                    <button id="ditolak" class="btn light btn-danger filter">Ditolak</button>
                    <button id="dibatalkan" class="btn light btn-info filter">Dibatalkan</button>
                    <button id="semua" class="btn light btn-secondary filter">Semua</button>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="ordertable" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tanggal Order</th>
                                    <th>Untuk tanggal</th>
                                    <th>Nama Pemesan</th>
                                    <th>Lokasi</th>
                                    <th>Jumlah Transaksi</th>
                                    <th>Status Order</th>
                                    {{-- <th>Keterangan</th> --}}
                                    <!-- 
                                    <th>Deleted At</th>
                                    <th>Created At</th>
                                    <th>Updated At</th> -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $pemesanan as $key =>$order )
                                {{-- {{dd($pemesanan)}}  --}}
                                <tr>
                                  <td>{{ $order->id_pemesanan }}</td>
                                  <td>{{ date('d-M-Y H:i:s', strtotime($order->created_at)) }}</td>
                                  <td>{{ date('d-M-Y', strtotime($order->untuk_tanggal)) }}</td>
                                  <td>{{ $order->nama_lengkap_pembeli }}</td>
                                  <td>{{ $order->alamat_lengkap_pembeli }}</td>
                                  <td>@currency($order->total_transaksi)</td>
                                  {{-- @if ($order ->status_pemesanan == 'Menunggu Konfirmasi')
                                  <td><span class="badge light badge-warning"><i class="fa fa-circle text-warning mr-1"></i>{{ $order->status_pemesanan }}</span></td>
                                  @elseif ($order ->status_pemesanan == 'Diterima')
                                  <td><span class="badge light badge-success"><i class="fa fa-circle text-success mr-1"></i>{{ $order->status_pemesanan }}</span></td>
                                  @elseif ($order ->status_pemesanan == 'Ditolak')
                                  <td><span class="badge light badge-danger"><i class="fa fa-circle text-danger mr-1"></i>{{ $order->status_pemesanan }}</span></td>
                                  @elseif ($order ->status_pemesanan == 'Dibatalkan')
                                  <td><span class="badge light badge-secondary"><i class="fa fa-circle text-secondary mr-1"></i>{{ $order->status_pemesanan }}</span></td>
                                  @endif --}}

                                  @if ($order ->status_pemesanan == '1')
                                  <td><span class="badge light badge-warning"><i class="fa fa-circle text-warning mr-1"></i>Menunggu Konfirmasi</span></td>
                                  @elseif ($order ->status_pemesanan == '2')
                                  <td><span class="badge light badge-success"><i class="fa fa-circle text-success mr-1"></i>Diterima</span>
                                    <a href="{!! url('/Invoice/'. $order->id_pemesanan); !!}" class="btn btn-success btn-xs btn-rounded">Invoice</a>
                                    
                                  </td>
                                  @elseif ($order ->status_pemesanan == '3')
                                  <td><span class="badge light badge-danger"><i class="fa fa-circle text-danger mr-1"></i>Ditolak</span></td>
                                  @elseif ($order ->status_pemesanan == '4')
                                  <td><span class="badge light badge-info"><i class="fa fa-circle text-secondary mr-1"></i>Dibatalkan</span></td>
                                  @endif
                                  {{-- <td>{{ $order->keterangan ?? 'Tidak ada'}}</td> --}}
                                  <!-- 
                                  <td>{{ $order->deleted_at }}</td>
                                  <td>{{ $order->created_at }}</td>
                                  <td>{{ $order->updated_at }}</td> -->
                                  <td>
                                    
                                    <div class="d-flex">
                                        <span data-placement="top" title="Show More Detail" data-toggle="tooltip3" >
                                            <a href=".bd-example-modal-lg"
                                            data-toggle="modal" 
                                            data-target="#modaldetail{{ $order->id_pemesanan }}"
                                            data-title="Detail Produk {{ $order->id_pemesanan }}"
                                            class="btn btn-info shadow btn-xs sharp mr-1">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        </span>

                                       
                                        <div id="modaldetail{{ $order->id_pemesanan }}" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">More Detail</h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        
                                                        
                                                        <table >
                                                            <thead>
                                                                <tr>
                                                                    <th>ID Produk</th>
                                                                    <th>Produk</th>
                                                                    <th>Harga</th>
                                                                    <th>Sub Total</th>
                                                                    <th>Kuantitas</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <center>
                                                                    <p><strong>ID Pemesanan : </strong><span>{{ $order->id_pemesanan }}</span></p>
                                                                    <p><strong>Untuk Tanggal : </strong><span>{{ date('d-M-Y', strtotime($order->untuk_tanggal)) }}</span></p>
                                                                    <p><strong>Untuk Jam : </strong><span>{{ $order->untuk_jam }}</span></p>
                                                                    <p><strong>Pengambilan dengan : </strong>
                                                                        {{-- <span>{{ $order->pengambilan }}</span> --}}
                                                                        @if ($order ->pengambilan == '1')
                                                                        <span class="badge light badge-warning"><i class="fa fa-circle text-warning mr-1"></i>Diambil sendiri</span>
                                                                        @elseif ($order ->pengambilan == '2')
                                                                        <span class="badge light badge-success"><i class="fa fa-circle text-success mr-1"></i>Dikirim Go-Car</span>
                                                                        @endif
                                                                    </p>
                                                                    <p><strong>Alamat : </strong><span>{{ $order->alamat_lengkap_pembeli }}</span></p>
                                                                    <p><strong>Nomor Telepon : </strong><span>{{ $order->no_hp_pembeli }}</span></p>
                                                                    <p><strong>Keterangan : </strong><span>{{ $order->keterangan ?? 'Tidak ada'}}</span></p><br>
                                                                    
                                                                    <p><strong>TABEL PRODUK YANG DIPESAN </strong>
                                                                        <span>
                                                                        {{-- @foreach ($retri as $det_pem  ) --}}
                                                                            {{-- <ul>  --}}
                                                                            {{-- {{dd($retri)}}     --}}
                                                                            {{-- <li>{{ $det_pem->id_produk ?? "null" }}</li> --}}
                                                                            {{-- <li>{{ $pv->pivot_id_produk }}</li> --}}
                                                                            {{-- </ul> --}}
                                                                        {{-- @endforeach --}}
        
                                                                        @foreach ($order->products as $det_pem  )
                                                                            {{-- {{dd($order->products )}}     --}}
                                                                                {{-- <ul>  --}}
                                                                                
                                                                                {{-- <li>{{ $det_pem->pivot->id_produk ?? "null" }}</li>
                                                                                <li>{{ $det_pem->pivot->sub_total ?? "null" }}</li>
                                                                                <li>{{ $det_pem->pivot->kuantitas ?? "null" }}</li>
                                                                                </ul> --}}

                                                                            <tr>
                                                                                {{-- nullnya ga bisa jalan satu statement I wonder whyy --}}
                                                                                <td>{{ $det_pem->pivot->id_produk ?: 'null' }}</td>
                                                                                <td>{{ $det_pem->nama_produk ?: 'null' }}</td>
                                                                                <td>{{ $det_pem->harga_produk ?: 'null' }}</td>
                                                                                <td>{{ $det_pem->pivot->sub_total ?: 'null'}}</td>
                                                                                <td>{{ $det_pem->pivot->kuantitas ?:  'null'}}</td>
                                                                               
                                                                            </tr>
                                                                       
                                                                        @endforeach
                                                                        {{-- {{ $order->detail_idproduk }} --}}
                                                                        </span>
                                                                    </p>
                                                                    <p><strong>Total Subtotal Rp: <span>{{ $order->total_sub ?? 'Tidak ada'}}</span></strong></p>
                                                                    <p><strong>Diskon Rp: <span>{{ $order->discount ?? 'Tidak ada'}}</span></strong></p>
                                                                    <p><strong>Diskon % : <span>{{ $order->discount_inpercent ?? 'Tidak ada'}}</span></strong></p>
                                                                    
                                                                </center>
                                                                
                                                                
                                                                     
                                                            </tbody>

                                                        </table>

                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th>Deleted At</th>
                                                                    <th>Created At</th>
                                                                    <th>Updated At</th>
                                                                </tr>
                                                            </thead>

                                                            
                                                                <tr>
                                                                    <td>{{ $order->deleted_at }}</td>
                                                                    <td>{{ $order->created_at }}</td>
                                                                    <td>{{ $order->updated_at }}</td>
                                                                    
                                                                </tr>

                                                        </table>
                                                       
                                                    </div>
                                                    <div class="modal-footer">
                                                    {{-- menunggu --}}
                                                    @if ($order ->status_pemesanan == '1')
                                                        <a type="button" id="accept" name="{{$order->id_pemesanan}}" class="btn btn-success light accept" ><i class="las la-check-square scale5 text-success mr-2"></i>Accept</a>
                                                        <a type="button" id="reject" name="{{$order->id_pemesanan}}" class="btn btn-danger light reject"><i class="las la-times-circle scale5 text-danger mr-2"></i>Reject</a>
                                                        <button type="button" class="btn btn-secondary light" data-dismiss="modal">Close</button>
                                                    {{-- diterima --}}
                                                    @elseif ($order ->status_pemesanan == '2')
                                                        
                                                        <a type="button" id="reject" name="{{$order->id_pemesanan}}" class="btn btn-danger light reject"><i class="las la-times-circle scale5 text-danger mr-2"></i>Reject</a>
                                                        <a type="button" id="confirm" name="{{$order->id_pemesanan}}" class="btn btn-warning light confirm"><i class="las la-undo scale5 text-warning mr-2"></i>Confirm</a>
                                                        <button type="button" class="btn btn-secondary light" data-dismiss="modal">Close</button>
                                                    {{-- ditolak --}}
                                                    @elseif ($order ->status_pemesanan == '3')   
                                                        <a type="button" id="accept" name="{{$order->id_pemesanan}}" class="btn btn-success light accept" ><i class="las la-check-square scale5 text-success mr-2"></i>Accept</a>
                                                        <a type="button" id="confirm" name="{{$order->id_pemesanan}}" class="btn btn-warning light confirm"><i class="las la-undo scale5 text-warning mr-2"></i>Confirm</a>
                                                        <button type="button" class="btn btn-secondary light" data-dismiss="modal">Close</button>
                                                    {{-- dibatalkan --}}
                                                    @elseif ($order ->status_pemesanan == '4')   
                                                        <button type="button" class="btn btn-secondary light" data-dismiss="modal">Close</button>
                                                    @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- untuk edit --}}
                                        {{-- <a href="{{ url( '/EditOrder/' . $order->id_pemesanan ) }}" class="btn btn-primary shadow btn-xs sharp mr-1" data-toggle="tooltip" data-placement="top" title="Edit Order" id="editt"><i class="fa fa-pencil"></i></a> --}}
                                       
                                        <a href="{{ url( '/DeleteOrder/' . $order->id_pemesanan ) }}" class="btn btn-danger shadow btn-xs sharp" data-toggle="tooltip2" data-placement="top" title="Soft Delete Order"><i class="fa fa-trash"></i></a>
                                        
                                        {{-- untuk accept confirm --}}
                                            {{-- <div class="dropdown ml-auto text-right">
                                                <div class="btn-link" data-toggle="dropdown">
                                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item accept" id="accept" name="{{$order->id_pemesanan}}"><i class="las la-check-square scale5 text-primary mr-2"></i> Diterima</a>
                                                    <a class="dropdown-item reject" id="reject" name="{{$order->id_pemesanan}}"><i class="las la-times-circle scale5 text-danger mr-2"></i> Ditolak</a>
                                                    <a class="dropdown-item confirm" id="confirm" name="{{$order->id_pemesanan}}"><i class="las la-undo scale5 text-warning mr-2"></i> Menunggu Konfirmasi</a>
                                                </div>
                                            </div> --}}

                                        

                                        
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

<script>
    
$(document).ready(function(){

    var dataTable= $('#ordertable').DataTable( {
        dom: 'lBfrtip',
        // Bfrtip you need to add l on your dom. See this for ref: https://datatables.net/reference/option/dom.
    });
    


    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="tooltip2"]').tooltip();
    $('[data-toggle="tooltip3"]').tooltip();

    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') } });
    $('.accept').on('click', function () {
        //its a table row, so yeah... dont do #accept okayy, use more general than id so you figured the rowss
        //I already used id but it will not be as easy as this :)
        var getid=$(this).attr('name');
        console.log("getid");
        console.log(getid);
        
        var a = "{{URL('/accept')}}";
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

    $('.reject').on('click', function () {
        //its a table row, so yeah... dont do #accept okayy, use more general than id so you figured the rowss
        //I already used id but it will not be as easy as this :)
        var getid=$(this).attr('name');
        console.log("getid");
        console.log(getid);
        
        var a = "{{URL('/reject')}}";
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

    $('.confirm').on('click', function () {
        //its a table row, so yeah... dont do #accept okayy, use more general than id so you figured the rowss
        //I already used id but it will not be as easy as this :)
        var getid=$(this).attr('name');
        console.log("getid");
        console.log(getid);
        
        var a = "{{URL('/confirm')}}";
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

    
    $('#diterima').on('click', function () {
        dataTable.columns(6).search("Diterima", true, false, true).draw();
    });

    $('#ditolak').on('click', function () {
        dataTable.columns(6).search("Ditolak", true, false, true).draw();
    });

    $('#menunggu').on('click', function () {
        dataTable.columns(6).search("Menunggu Konfirmasi", true, false, true).draw();
    });

    $('#dibatalkan').on('click', function () {
        dataTable.columns(6).search("Dibatalkan", true, false, true).draw();
    });

    $('#semua').on('click', function () {
        dataTable.columns(6).search("Menunggu Konfirmasi|Ditolak|Diterima", true, false, true).draw();
    });

    // $('#diterima').on('click', function () {
    //     dataTable.columns(6).search("Rejected|Done", true, false, true).draw();
    // });
   



});



// var buttons = document.querySelectorAll('#editt');

// buttons.forEach(function(button) {
//   if (button.value==null) {
//     button.style.display = "none"
//   }
// });

</script>
@endsection