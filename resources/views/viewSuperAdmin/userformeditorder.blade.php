@extends('layouts.backAdmin.layout.defaultSuperAdmin')

@section('content')



<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, selamat datang!</h4>
                <span>Add Order Form</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{!! url('/PemesananTable'); !!}">Daftar Pemesanan</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Formulir Edit Pemesanan</a></li>
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

    <div class="row">    
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit</h4>
                </div>
            @foreach( $pemesanan as $key =>$order )
                <div class="card-body">
                    <form method="POST" action="{{ url('/UpdateOrder/'.$order->id_pemesanan) }}" class="step-form-horizontal">
                        @csrf
                        <div>
           
                            <section>
                                    
                                    <div class="row">
                                        <label for="cariuser" class="col-sm-3 col-form-label">Pemesanan oleh akun*</label>
                                        <div class="col-md-6">
                                        <select class="form-control cariuser"  id="single-select" required=""  name="cariuser" autofocus>
                                        @foreach($users as $u)
                                        @if ($order->user_id==$u->id)
                                            <option value="{{ $u->id }}">{{$u->name}}</option> 
                                        @else
                                            
                                        @endif
                                        @endforeach
                                        </select>
                                        </div>
                                    </div>

                                    <br><h4>Data Pemesanan</h4>
                                    <div class="form-group row">
                                        <label for="nama_lengkap" class="col-sm-3 col-form-label">{{ __('Nama lengkap*') }}</label>

                                        <div class="col-md-6">
                                            <input id="nama_lengkap" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" required  placeholder="Nama lengkap" value="{{ $order->nama_lengkap_pembeli}}">
                                            
                                                {{-- <select class="form-control cariuser"  id="nama_lengkap" required=""  name="cariuser"> --}}
                                                
                                            
                                            
                                            {{-- <a id="searchandpaste" href="#" class="btn btn-primary" style="display:inline-block"><i class="flaticon-381-search-1" ></i></a>  --}}
                                        </div>
                                    </div>
                                

                                    <div class="form-group row">
                                        
                                        <label for="nomor_telp" class="col-sm-3 col-form-label">{{ __('Nomor telepon*') }}</label>

                                        <div class="col-md-6">
                                            <input id="nomor_telp" type="number" class="form-control @error('nomor_telp') is-invalid @enderror" name="nomor_telp"  placeholder="081xxx" value="{{$order->no_hp_pembeli}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="product" class="col-sm-3 col-form-label">{{ __('Pengambilan*') }}</label>

                                        <div class="col-md-6">
                                            {{-- <label class="radio-inline mr-3"><input type="radio" value="1" name="optionkirim"> Diambil</label>
                                            <label class="radio-inline mr-3"><input type="radio" value="2" name="optionkirim"> Dikirim Aisya</label> --}}
                                           
                                                @if ($order->pengambilan == 1)
                                                    <label class="radio-inline mr-3"><input type="radio" value="1" name="optionkirim" checked="true" class="diambil"> Diambil</label>
                                                    <label class="radio-inline mr-3"><input type="radio" value="2" name="optionkirim" class="dikirimaisya"> Dikirim Aisya</label>
                                                @else
                                                <label class="radio-inline mr-3"><input type="radio" value="1" name="optionkirim" class="diambil"> Diambil</label>
                                                <label class="radio-inline mr-3"><input type="radio" value="2" name="optionkirim" checked="true" class="dikirimaisya"> Dikirim Aisya</label>
                                                @endif
                                        </div>
                                    </div>

                                    <div class="form-group row" id='alamatsect'>
                                        <label for="alamat_lengkap" class="col-sm-3 col-form-label">{{ __('Alamat lengkap*') }}</label>

                                        <div class="col-md-6">
                                            <textarea rows="5" class="form-control @error('alamat_lengkap') is-invalid @enderror" name="alamat_lengkap"  placeholder="Alamat Lengkap" value="{{ $order->alamat_lengkap_pembeli }}">{{ $order->alamat_lengkap_pembeli }}</textarea>
                                        </div>
                                        
                                    </div>

                                    <div class="form-group row">
                                        <label for="product" class="col-sm-3 col-form-label">{{ __('Untuk tanggal*') }}</label>

                                        <div class="col-md-6">
                                            <input class="datepicker-default form-control @error('untuk_tanggal') is-invalid @enderror" id="datepicker" name="untuk_tanggal" 
                                            placeholder="Pilih Tanggal" value="{{ $order->untuk_tanggal}}" >
                                            {{-- placeholder="Pilih Tanggal" value="{{ date('d-M-Y', strtotime($order->untuk_tanggal)) }}" > --}}
                                        </div>
                                        
                                    </div>

                                    <div class="form-group row">
                                        <label for="product" class="col-sm-3 col-form-label">{{ __('Untuk jam') }}</label>

                                        <div class="col-md-6">
                                            <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                                <input type="text" class="form-control @error('untuk_jam') is-invalid @enderror" value="{{ $order->untuk_jam }}" name="untuk_jam" placeholder="Pilih Jam (opsional)"> 
                                                <span class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-clock-o"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="product" class="col-sm-3 col-form-label">{{ __('Keterangan') }}</label>

                                        <div class="col-md-6">
                                            <input rows="5" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ $order->keterangan }}"  placeholder="Keterangan(opsional)">
                                        </div>
                                        
                                    </div>
                                                              

                            </section>

                            
            @endforeach
                            
                            <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update Pemesanan') }}
                                        </button>
                                    </div>
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
{{-- <script src="http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer="" type="text/javascript"></script> --}}
<script>

    $(document).ready(function() {
        //SLIDEUP AND DOWN
            $('.dikirimaisya').click(function() {
                $('#alamatsect').slideDown();
            });
            $('.diambil').click(function() {
                $('#alamatsect').slideUp();
            });
   });

</script>
@endsection