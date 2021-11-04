@extends('layouts.backAdmin.layout.defaultSuperAdmin')

@section('content')
<style>

</style>
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, selamat datang!</h4>
                <span>Tambah Kategori</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{!! url('/BlogTable'); !!}">Daftar Blog</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Formulir Blog</a></li>
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
                <h4 class="card-title">Tambah Blog</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                     <form method="POST" action="{{ url('/StoreBlog') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="cariuser" class="col-sm-3 col-form-label">Penulis (*)</label>
                            <div class="col-md-6">
                              <select class="form-control cariuser"  id="single-select" required=""  name="cariuser" autofocus>
                              <!-- <option disabled selected="" autofocus>Select User</option>
                              @foreach($users as $u)
                              <option value="{{ $u->id }}">{{$u->name}}</option>
                              @endforeach -->
                               <option value="{{ Auth::user()->id }}" selected>{{ Auth::user()->name }}</option>
                              </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="judulblog" class="col-sm-3 col-form-label">{{ __('Judul Blog (*)') }}</label>

                            <div class="col-md-6">
                                <input id="judulblog" type="text" class="form-control @error('judulblog') is-invalid @enderror" name="judulblog" required autofocus placeholder="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kontenblog" class="col-sm-3 col-form-label">{{ __('Konten Blog (*)') }}</label>

                            <div class="col-md-8">
                                {{-- <div class="summernote" name="summernote" id="summernote"></div> --}}
                                <textarea class="summernote" id="summernote" name="summernote" required></textarea> 
                            </div>

                            <p><br><br>
                                Mohon mengisi semua kolom (*) sebelum melakukan submit
                            </p>
                        </div>


                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Tambah Blog') }}
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

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
@endsection
