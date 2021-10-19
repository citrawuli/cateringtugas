@extends('layouts.backAdmin.layout.defaultSuperAdmin')

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, selamat datang!</h4>
                <span>Daftar Kategori</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Tabel</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Daftar Kategori</a></li>
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
                    <a href="{!! url('/ViewFormCategory'); !!}" class="btn light btn-danger">Tambah Kategori</a>
                    <a href="{{ url('/TrashedCategory')}}" class="btn btn-primary light btn-card"><i class="fa fa-trash" style="margin-right: 10px;"></i>Lihat Tong Sampah</a> 
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
                    <h4 class="card-title">Daftar Kategori</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Kategori</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $category as $cat )
                                <tr>
                                  <td>{{ $cat->id }}</td>
                                  <td>{{ $cat->nama_kategori }}</td>
                                  <td>
                                    <div class="d-flex">
                                        
                                        <a href="{{ url( '/EditCategory/' . $cat->id ) }}" class="btn btn-primary shadow btn-xs sharp mr-1" data-toggle="tooltip" data-placement="top" title="Edit Kategori" id="editt"><i class="fa fa-pencil"></i></a>
                                        
                                        <a href="{{ url( '/DeleteCategory/' . $cat->id ) }}" class="btn btn-danger shadow btn-xs sharp" data-toggle="tooltip2" data-placement="top" title="Soft Delete Kategori"><i class="fa fa-trash"></i></a>
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


</script>
@endsection