@extends('layouts.backAdmin.layout.defaultSuperAdmin')

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome back!</h4>
                <span>Edit Product Form</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{!! url('/ProductTable'); !!}">Product Table</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Product Form</a></li>
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

	<div class="col-lg-12">
		<div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Product</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                     <form method="POST" action="{{ url( '/UpdateProduct/' . $produk -> id ) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="category_name" class="col-sm-3 col-form-label">Category*</label>
                            <div class="col-md-6">
                              <select class="form-control "  id="single-select" required=""  name="category_name" autofocus>
                
                              @foreach($category as $cat)
                                    @if ($produk->id_kategori == $cat->id)
                                        <option value="{{ $cat->id }}" selected>{{$cat->nama_kategori}}</option>
                                    @else
                                        <option value="{{ $cat->id }}" selected>{{$cat->nama_kategori}}</option>
                                    @endif
                                @endforeach
                              </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="product" class="col-sm-3 col-form-label">{{ __('Product Name*') }}</label>

                            <div class="col-md-6">
                                <input id="product" type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name" required  placeholder="Product Name" value="{{ $produk->nama_produk }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="product" class="col-sm-3 col-form-label">{{ __('Product Type') }}</label>

                            <div class="col-md-6">
                                <input id="product" type="text" class="form-control @error('product_type') is-invalid @enderror" name="product_type"  placeholder="Product Type (optional)" value="{{ $produk->tipe_produk }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="product" class="col-sm-3 col-form-label">{{ __('Product Description') }}</label>

                            <div class="col-md-6">
                                <textarea rows="5" class="form-control @error('product_desc') is-invalid @enderror" name="product_desc"  placeholder="Type your description here (optional)" value="{{ $produk->deskripsi_produk }}"></textarea>
                            </div>
                            
                        </div>

                        <div class="form-group row">
                            <label for="product" class="col-sm-3 col-form-label">{{ __('Product Price*') }}</label>

                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                     <div class="input-group-prepend">
                                        <span class="input-group-text">Rp</span>
                                    </div>
                                    <input id="product" type="number" min="0" class="form-control @error('product_price') is-invalid @enderror" name="product_price" required  placeholder="Product Price" value="{{ $produk->harga_produk}}">
                                </div>
                            </div>
                        </div>

                    

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit Product') }}
                                </button>
                            </div>
                        </div>

                        

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection