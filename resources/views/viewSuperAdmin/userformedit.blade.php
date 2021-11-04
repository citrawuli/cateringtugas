@extends('layouts.backAdmin.layout.defaultSuperAdmin')

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, selamat datang!</h4>
                <span>Edit User Form</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{!! url('/UserTable'); !!}">Daftar Pengguna</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Formulir Pengguna</a></li>
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
                <h4 class="card-title">Edit Pengguna</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                     <form method="POST" action="{{ url( '/UpdateUser/' . $user -> id ) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">{{ __('Nama (*)') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus placeholder="Name" disabled="">

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">{{ __('Alamat E-Mail (*)') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" placeholder="Email" disabled="">

                                <!-- @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-sm-3 col-form-label">Peran Hak Akses (*)</label>
                            <div class="col-md-6">
                                <select class="form-control select2" required=""  name="role">
                                                             
                              <!-- @foreach($roles as $r)
                              <option value="{{ $r->id }}">{{$r->role_name}}</option>
                              @endforeach -->

                                @foreach($roles as $r)
                                    @if ($role_users->role_id == $r->id)
                                        <option value="{{ $r->id }}" selected>{{ $r->role_name }}</option>
                                    @else
                                        <option value="{{ $r->id }}">{{ $r->role_name }}</option>
                                    @endif
                                @endforeach
                              </select>
                            </div>
                        </div>

                    

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit Pengguna') }}
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
<script>
$(document).ready(function(){
    $('.select2').select2();
});
</script>
@endsection