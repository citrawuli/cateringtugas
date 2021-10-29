@extends('layouts.backAdmin.layout.defaultSuperAdmin')

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, selamat datang!</h4>
                <span>Tong Sampah Pembayaran</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{!! url('/PaymentTable'); !!}">Daftar Pembayaran</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tong Sampah Pembayaran</a></li>
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
                    <a href="{!! url('/RestoreAllPayment'); !!}" class="btn light btn-danger">Kembalikan Semua</a>
                    {{-- <a href="{{ url('/')}}" class="btn btn-primary light btn-card">Hapus Permanen Semua</a>  --}}
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
                    <h4 class="card-title">Daftar Pembayaran yang Dibuang</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>ID Pemesanan</th>
                                    <th>ID Pembayaran</th>
                                    <th>Status Bayar</th>
                                    <th>Jumlah Bayar</th>
                                    <th>Tanggal Bayar</th>
                                    <th>Bank Transfer</th>
                                    <th>Nomor Rekening</th>
                                    <th>Atas Nama</th>
                                    <th>Deleted At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $model as $mod )
                                <tr>
                                    <td>{{ $mod->id_pemesanan }}</td>
                                    <td>{{ $mod->id_pembayaran }}</td>
                                    @if ($mod->status_bayar == '0')
                                        <td><span class="badge light badge-warning"><i class="fa fa-circle text-warning mr-1"></i>Menunggu Konfirmasi</span></td>
                                    @else
                                        <td><span class="badge light badge-success"><i class="fa fa-circle text-success mr-1"></i>Dikonfirmasi</span>    
                                    @endif
                                        
                                    <td>@currency($mod->jumlah_bayar)</td>
                                    <td>{{ date('d-M-Y H:i:s', strtotime($mod->tanggal_pembayaran)) }}</td>
                                    @if ($mod->bank_transfer == '1')
                                        <td>Tunai</td>
                                    @elseif ($mod->bank_transfer == '2')
                                        <td>BRI</td>
                                    @elseif ($mod->bank_transfer == '3')
                                        <td>BCA</td>
                                    @endif 
                                        
                                    <td>{{ $mod->nomor_rekening }}</td>
                                    <td>{{ $mod->atas_nama }}</td>
                                    <td>{{ $mod->deleted_at }}</td>
                                    <td>
                                    <div class="d-flex">
                                        
                                        <a href="{{ url( '/RestorePayment/' . $mod->id_pembayaran ) }}" class="btn btn-warning shadow btn-xs sharp mr-1" data-toggle="tooltip" data-placement="top" title="Restore Payment" id="editt"><i class="fa fa-repeat"></i></a>
                                       

                                        {{-- <span data-placement="top" data-toggle="tooltip2"  title="Delete Payment Permanent">
                                            <a href="#exampleModalCenter{{ $mod->id_pembayaran}}" class="btn btn-danger shadow btn-xs sharp" data-toggle="modal" data-target="#exampleModalCenter{{ $mod->id_pemesanan }}" ><i class="fa fa-trash"></i></a>
                                        </span> --}}

                                            <div class="modal fade" id="exampleModalCenter{{ $mod->id_pembayaran}}">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Delete Record</h5>
                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Apakah Anda yakin ingin menghapus permanen record <strong>"{{ $mod->id_pembayaran }}"</strong> ?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary light" data-dismiss="modal">Close</button>
                                                            {{-- <a href="{{ url( '/DeletePermanentPayment/' . $mod->id_pembayaran ) }}" class="btn btn-danger light">Delete</a> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>






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
  $('[data-toggle="tooltip"]').tooltip();
});
$(document).ready(function(){
  $('[data-toggle="tooltip2"]').tooltip();
});
$(document).ready(function(){
  $('[data-toggle="tooltip3"]').tooltip();
});

// var buttons = document.querySelectorAll('#editt');

// buttons.forEach(function(button) {
//   if (button.value==null) {
//     button.style.display = "none"
//   }
// });

</script>
@endsection