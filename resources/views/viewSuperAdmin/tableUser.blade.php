@extends('layouts.backAdmin.layout.defaultSuperAdmin')

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome back!</h4>
                <span>User and Role Table</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">User and Role Table</a></li>
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
                    <a href="{!! url('/UserFormInput'); !!}" class="btn light btn-danger">Add User</a>
                   <a href="{{ url('/AddUserRole')}}" class="btn btn-primary light btn-card">Add User Role</a> 
                </div>
            </div>
        </div>

        <div class="col-12">
            <br>
            <div class="card">
                <div class="card-header text-white bg-danger">
                    <h4 class="card-title">User and Role Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $user as $u )
                                <tr>
                                  <td>{{ $u->id }}</td>
                                  <td>{{ $u->name }}</td>
                                  <td>{{ $u->email }}</td>
                                  <td>{{ $u->role_name }}</td>
                                  <td>{{ $u->created_at }}</td>
                                  <td>{{ $u->updated_at }}</td>
                                  <td>
                                    <div class="d-flex">
                                        @if ($u ->role_name != '')
                                        <a href="{{ url( '/EditUser/' . $u->id ) }}" class="btn btn-primary shadow btn-xs sharp mr-1" data-toggle="tooltip" data-placement="top" title="Edit Role User" value="{{ $u->role_name }}" id="editt"><i class="fa fa-pencil"></i></a>
                                        @endif
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp" data-toggle="tooltip2" data-placement="top" title="Soft Delete User"><i class="fa fa-trash"></i></a>
                                    </div>
                                    <!-- <a href="{{ url( '/EditCustomer/' . $u->id ) }}" class="badge badge-success">Edit</a>                    
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