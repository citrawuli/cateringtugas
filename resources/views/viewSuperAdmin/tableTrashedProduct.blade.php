@extends('layouts.backAdmin.layout.defaultSuperAdmin')

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, selamat datang!</h4>
                <span>TrashedProduct Table</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/ProductTable')}}">Product Table</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Trashed Product Table</a></li>
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
                    <a href="{!! url('/RestoreAllProduct'); !!}" class="btn light btn-danger">Kembalikan Semua</a>
                    {{-- <a href="{{ url('/DeletePermanentAllProduct')}}" class="btn btn-primary light btn-card">Hapus Permanen Semua</a>  --}}
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
                    <h4 class="card-title">Trashed Product Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>ID</th><!-- 
                                    <th>Kategori</th> -->
                                    <th>Nama</th>
                                    <th>Tipe</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Rating</th> 
                                    <th>Deleted At</th><!--
                                    <th>Created At</th>
                                    <th>Updated At</th> -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $model as $mod )
                                <tr>
                                  <td>{{ $mod->id }}</td><!-- 
                                  <td>{{ $mod->nama_kategori }}</td> -->
                                  <td>{{ $mod->nama_produk }}</td>
                                  <td>{{ $mod->tipe_produk ?? '-' }}</td>
                                  <td>{{ $mod->deskripsi_produk ?? '-'}}</td>
                                  <td>@currency($mod->harga_produk)</td>
                                  <td>{{ $mod->rating_produk ?? '-' }}</td> 
                                  <td>{{ $mod->deleted_at }}</td><!--
                                  <td>{{ $mod->created_at }}</td>
                                  <td>{{ $mod->updated_at }}</td> -->
                                  <td>
                                    
                                    <div class="d-flex">
                                        
                                        <span data-placement="top" title="Show More Detail" data-toggle="tooltip3" >
                                            <a href=".bd-example-modal-lg"
                                            data-toggle="modal" 
                                            data-target="#modaldetail{{ $mod->id }}"
                                            data-title="Detail Produk {{ $mod->id }}"
                                            class="btn btn-info shadow btn-xs sharp mr-1">
                                            <i class="fa fa-eye"></i>
                                            </a>
                                        </span>

                                       
                                        <div id="modaldetail{{ $mod->id }}" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                                    <th>Deleted At</th>
                                                                    <th>Created At</th>
                                                                    <th>Updated At</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <center>
                                                                    <p><strong>ID Produk : </strong><span>{{ $mod->id }}</span></p>
                                                                    <p><span>{{ $mod->nama_kategori }}</span></p>
                                                                    <p><span>{{ $mod->nama_produk }}</span></p><br>
                                                                </center>
                                                                
                                                                <tr>
                        
                                                                  <td>{{ $mod->deleted_at }}</td>
                                                                  <td>{{ $mod->created_at }}</td>
                                                                  <td>{{ $mod->updated_at }}</td>
                                                                  
                                                                </tr>
                                                                     
                                                            </tbody>

                                                        </table>
                                                       
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="{{ url( '/RestoreProduct/' . $mod->id ) }}" class="btn btn-warning shadow btn-xs sharp mr-1" data-toggle="tooltip" data-placement="top" title="Restore Product" id="editt"><i class="fa fa-repeat"></i></a>
                                       
                                        <!-- <a href="{{ url( '/DeletePermanent/' . $mod->id ) }}" class="btn btn-danger shadow btn-xs sharp" data-toggle="tooltip2" data-placement="top" title="Delete Product Permanent"><i class="fa fa-trash"></i></a> -->

                                        <span data-placement="top" data-toggle="tooltip2"  title="Delete Product Permanent">
                                            <a href="#exampleModalCenter{{ $mod->id }}" class="btn btn-danger shadow btn-xs sharp" data-toggle="modal" data-target="#exampleModalCenter{{ $mod->id }}" ><i class="fa fa-trash"></i></a>
                                        </span>

                                            <div class="modal fade" id="exampleModalCenter{{ $mod->id }}">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Delete Record</h5>
                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Apakah Anda yakin ingin menghapus permanen record <strong>"{{ $mod->nama_produk }}"</strong> dengan id <strong>"{{ $mod->id }}"?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary light" data-dismiss="modal">Close</button>
                                                            {{-- <a href="{{ url( '/DeletePermanent/' . $mod->id ) }}" class="btn btn-danger light">Delete</a> --}}
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