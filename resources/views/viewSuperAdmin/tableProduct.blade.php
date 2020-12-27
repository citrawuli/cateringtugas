@extends('layouts.backAdmin.layout.defaultSuperAdmin')

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome back!</h4>
                <span>Product Table</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Product Table</a></li>
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
                    <a href="{!! url('/ViewFormProduct'); !!}" class="btn light btn-danger">Add Product</a>
                   <!--  <a href="{{ url('/AddUserRole')}}" class="btn btn-primary light btn-card">Add User Role</a>  -->
                </div>
            </div>
        </div>

        <div class="col-12">
            <br>
            <div class="card">
                <div class="card-header text-white bg-danger">
                    <h4 class="card-title">Product Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Kategori</th>
                                    <th>Nama</th>
                                    <th>Tipe</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Rating</th>
                                    <!-- <th>Deleted At</th>
                                    <th>Created At</th>
                                    <th>Updated At</th> -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $product as $prod )
                                <tr>
                                  <td>{{ $prod->id }}</td>
                                  <td>{{ $prod->nama_kategori }}</td>
                                  <td>{{ $prod->nama_produk }}</td>
                                  <td>{{ $prod->tipe_produk }}</td>
                                  <td>{{ $prod->deskripsi_produk }}</td>
                                  <td>@currency($prod->harga_produk)</td>
                                  <td>{{ $prod->rating_produk }}</td>
                                  <!-- <td>{{ $prod->deleted_at }}</td>
                                  <td>{{ $prod->created_at }}</td>
                                  <td>{{ $prod->updated_at }}</td> -->
                                  <td>
                                    
                                    <div class="d-flex">
                                        <a href=".bd-example-modal-lg"
                                            data-toggle="modal" 
                                            data-target=".bd-example-modal-lg"
                                            data-title="Detail Produk {{ $prod->id }}"
                                            class="btn btn-info shadow btn-xs sharp mr-1">
                                            <i class="fa fa-eye"></i>
                                        </a>

                                       
                                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Detail Produk</h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @foreach( $product as $prod )
                                                        
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
                                                                    <p><strong>ID Produk : </strong><span>{{ $prod->id }}</span></p>
                                                                    <p><span>{{ $prod->nama_kategori }}</span></p>
                                                                    <p><span>{{ $prod->nama_produk }}</span></p><br>
                                                                </center>
                                                                
                                                                <tr>
                        
                                                                  <td>{{ $prod->deleted_at }}</td>
                                                                  <td>{{ $prod->created_at }}</td>
                                                                  <td>{{ $prod->updated_at }}</td>
                                                                  
                                                                </tr>
                                                                     
                                                            </tbody>

                                                        </table>
                                                        @endforeach   
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="{{ url( '/EditProduk/' . $prod->id ) }}" class="btn btn-primary shadow btn-xs sharp mr-1" data-toggle="tooltip" data-placement="top" title="Edit Produk" id="editt"><i class="fa fa-pencil"></i></a>
                                       
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp" data-toggle="tooltip2" data-placement="top" title="Soft Delete Produk"><i class="fa fa-trash"></i></a>
                                    </div>
                                    <!-- <a href="{{ url( '/EditCustomer/' . $prod->id ) }}" class="badge badge-success">Edit</a>                    
                                    <a href="#exampleModal" data-toggle="modal" class="badge badge-important">Delete</a> -->

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

// var buttons = document.querySelectorAll('#editt');

// buttons.forEach(function(button) {
//   if (button.value==null) {
//     button.style.display = "none"
//   }
// });

</script>
@endsection