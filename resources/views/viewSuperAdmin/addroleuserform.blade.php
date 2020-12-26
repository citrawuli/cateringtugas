@extends('layouts.backAdmin.layout.defaultSuperAdmin')

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome back!</h4>
                <span>User Input Form</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{!! url('/UserTable'); !!}">User Table</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">User Role Form</a></li>
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
                <h4 class="card-title">Add User Role</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                     <form method="POST" action="{{ url('/StoreUserRole') }}">
                        @csrf

                        <div class="form-group">
                            <label for="user_id">User</label>
                            <div class="">
                              <select class="form-control "  id="single-select" required=""  name="user_id" >
                              <option disabled selected="">Select User</option>
                              @foreach($users as $u)
                              <option value="{{ $u->id }}">{{$u->name}}</option>
                              @endforeach
                              </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="role_id">Role</label>
                            <div class="">
                              <select class="form-control "  id="single-select" required=""  name="role_id" >
                              <option disabled selected="">Select User Role</option>
                              @foreach($roles as $r)
                              <option value="{{ $r->id }}">{{$r->role_name}}</option>
                              @endforeach
                              </select>
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add User Role') }}
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
