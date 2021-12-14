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


@section('link')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, selamat datang!</h4>
                <span>Daftar Pengguna</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Tabel</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Rekap Besok</a></li>
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
                    <h4 class="card-title">Rekap Besok</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="rekaptable" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>Untuk tanggal - Jam</th>
                                    <th>ID Pemesanan</th>
                                    <th>Nama pemesan</th>
                                    <th>Pesanan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $pemesanan as $key => $rekap )
                               {{-- {{ dd($rekap)}} --}}
                                <tr>
                                    <td>{{ date('d-M-Y', strtotime($rekap->untuk_tanggal)) }} || <strong>{{ $rekap->untuk_jam }}</strong> </td>
                                    <td>{{ $rekap->id_pemesanan }}</td>
                                    <td>{{ $rekap->nama_lengkap_pembeli }}</td>
                                    <td>
                                        @foreach ($rekap->products as $det_pem  )
                                        <ul> 
                                            <li> <strong>{{ $det_pem->nama_produk ?: 'null' }} </strong> [{{ $det_pem->pivot->id_produk ?: 'null' }} ] </li>
                                            <li> QTY : {{ $det_pem->pivot->kuantitas ?:  'null'}} @  @currency($det_pem->harga_produk)</li>
                                            <li> @currency($det_pem->pivot->sub_total)</li>
                                        </ul>
                                        <br><br>
                                        @endforeach
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

<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>
<script>
    
$(document).ready(function(){
var dataTable= $('#rekaptable').DataTable( {
        dom: 'lBfrtip',
        // Bfrtip you need to add l on your dom. See this for ref: https://datatables.net/reference/option/dom.
        buttons: [
            'copyHtml5',
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 3]
                },
            },
            {
                extend: 'csvHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 3]
                },
            },
            // 'pdfHtml5',
            {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'A4',
                exportOptions: {
                    columns: [ 0, 1, 2, 3]
                },
                footer: true,
            },
            'colvis'
        ],
        fixedHeader: {
            header: true,
            footer: true
        }
    });
});
</script>
@endsection