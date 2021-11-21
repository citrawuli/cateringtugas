@extends('layouts.front')

@section('container')
<div class="product-in-stock-wrapp">
    <div class="container">
            <div class="breadcrumb-trail breadcrumbs">
                <ul class="trail-items breadcrumb">
                    <li class="trail-item trail-begin">
                        Kembali ke
                    </li>
                    <li class="trail-item trail-end active">
                        <a href="{{url('/user')}}">Laman Akun</a>
                    </li>
                </ul>
            </div>
            
        <br>
        <h3>EDIT PROFIL</h3>
        <p>Halo, {{ Auth::user()->name }}. Selamat datang di laman Edit Profil!</p>
        
                    @if (Session::has('message'))
                        <div class="alert alert-success alert-dismissible show">                                   
                            
                            <strong>Success! </strong>{{ Session::get('message') }}
                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                            </button>
                        </div>
                        @endif
                
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible show">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                            </button>
                        </div>
                    @endif
        <br><br>
        <div class="basic-form">
            <form method="POST" action="{{ url('/updateyouruprofile') }}">
               @csrf

               <div class="form-group row">
                   <label for="name" class="col-sm-3 col-form-label">{{ __('Nama') }}</label>

                   <div class="col-md-6">
                       <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}"  autocomplete="name" autofocus placeholder="My Name">

                       <!-- @error('name')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror -->
                   </div>
               </div>

               <div class="form-group row">
                   <label for="email" class="col-sm-3 col-form-label">{{ __('Alamat E-mail') }}</label>

                   <div class="col-md-6">
                       <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}"  autocomplete="email" placeholder="My Email">

                       <!-- @error('email')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror -->
                   </div>
               </div>

               <div class="form-group row">
                    <label for="alamat_lengkap" class="col-sm-3 col-form-label">{{ __('Alamat Pengantaran') }}</label>
                    
                    <div class="col-md-6">
                        <small>Mohon memasukkan alamat pengantaran dengan jelas. Alamat ini akan muncul setiap kali Anda melakukan checkout.</small>
                        <textarea rows="3" class="form-control @error('alamat_lengkap') is-invalid @enderror" name="alamat_lengkap" value="{{ Auth::user()->alamat_user }}" placeholder="">{{ Auth::user()->alamat_user }}</textarea>
                        <!-- @error('alamat_lengkap')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror -->
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nomor_telp" class="col-sm-3 col-form-label">{{ __('Nomor Telepon') }}</label>
                    
                    <div class="col-md-6">
                        <small>Mohon memasukkan nomor yang dapat dihubungi melalui Whatsapp atau telepon biasa.</small>
                        <input id="nomor_telp" type="number" class="form-control @error('nomor_telp') is-invalid @enderror" required name="nomor_telp" placeholder="081xxx" value="{{ Auth::user()->ponsel_user }}">
                                
                        <!-- @error('nomor_telp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror -->
                    </div>
                </div>

               <div class="form-group row">
                   <label for="current_password" class="col-sm-3 col-form-label">{{ __('Password Lama') }}</label>

                   <div class="col-md-6">
                       <input id="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" autocomplete="current_password" placeholder="My Current Password">

                       <!-- @error('current_password')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror -->
                   </div>
               </div>

               <div class="form-group row">
                   <label for="new_password" class="col-sm-3 col-form-label">{{ __('Password Baru') }}</label>

                   <div class="col-md-6">
                       <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="new_password" placeholder="My New Password">
                   </div>
               </div>

               <div class="form-group row mb-0">
                   <div class="col-md-6 offset-md-4">
                       <button type="submit" class="btn btn-primary">
                           {{ __('Update Profil') }}
                       </button>
                   </div>
               </div>

               

               
           </form>
       </div>
        <br><br><br><br>
    </div>
</div>
@endsection

