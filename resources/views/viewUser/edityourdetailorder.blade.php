@extends('layouts.front')
@section('link')
    <link rel="stylesheet" href="{{ asset('davur/vendor/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('davur/vendor/clockpicker/css/bootstrap-clockpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('davur/vendor/pickadate/themes/default.css') }}">
    <link rel="stylesheet" href="{{ asset('davur/vendor/pickadate/themes/default.date.css') }}">
@endsection

@section('container')
<div class="main-content main-content-checkout">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        {{-- <li class="trail-item trail-end active">
                            <a href="{{url('/user')}}">Laman Akun</a>
                        </li>
                        <li class="trail-item trail-end active">
                            <a href="{{url('/seeyourorder')}}">Daftar Pemesanan Anda</a>
                        </li> --}}
                        <li class="trail-item trail-end active">
                            <a href="{{url('/seeyourdetailorder/'.$pemid)}}">Detail Pemesanan</a>
                        </li>
                        <li class="trail-item trail-end active">
                            <a href="#">Edit Pemesanan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <h3 class="custom_blog_title">
            EDIT PEMESANAN
        </h3>
        
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
    
       
        @foreach ($pemesanan as $pem)
        <form action="{{url('/updateyourdetailorder/'.$pem->id_pemesanan)}}">
            @csrf
            
            <div class="shipping-address-form  checkout-form">
            <div class="shipping-address">
                <h3 class="title-form">
                    Data Pemesan
                    <small>(untuk dihubungi)</small>
                </h3>
                <p>
                    <small>(*) harus diisi</small>
                </p>
                <p class="form-row form-row-first">
                    <label class="text">Nama Pemesan (*)</label>
                    <input id="nama_lengkap" type="text" class="input-text" name="cariuser" required value="{{$pem->nama_lengkap_pembeli}}">
                </p>

                <p class="form-row form-row-last">
                    <label class="text">Nomor Telepon (*)</label>
                    <input id="nomor_telp" type="number" class="input-text @error('nomor_telp') is-invalid @enderror" required name="nomor_telp" placeholder="081xxx" value="{{ $pem->no_hp_pembeli }}">
                </p>

                <p class="form-row form-row-first">
                    <label class="text">Untuk tanggal (*)</label>
                    <input type="text"class="input-text datepicker-default @error('untuk_tanggal') is-invalid @enderror" required id="datepicker" name="untuk_tanggal" placeholder="pilih tanggal" value="{{ $pem->untuk_tanggal }}">
                </p>

                <p class="form-row form-row-last">
                    <label class="text">Untuk jam</label>
                    <span style="width: 100%;" class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                        <input type="text" class="input-text @error('untuk_jam') is-invalid @enderror" value="{{$pem->untuk_jam}}" name="untuk_jam" placeholder="pilih jam (opsional)"> 
                    </span>
                </p>

                <p class="form-row forn-row-first">
                    <label class="text">Pengambilan (*)</label>
                   @if ($pem->pengambilan == 1)
                        <label class="radio-inline mr-3 diambilsendiri"><input type="radio" value="1" name="optionkirim" checked="true"> Diambil</label>
                        <label class="radio-inline mr-3 bygocar"><input type="radio" value="2" name="optionkirim"> Dikirim Go-Car</label>
                    @else
                        <label class="radio-inline mr-3 diambilsendiri"><input type="radio" value="1" name="optionkirim" > Diambil</label>
                        <label class="radio-inline mr-3 bygocar"><input type="radio" value="2" name="optionkirim" checked="true"> Dikirim Go-Car</label>
                    @endif
                
                
                </p>

                <p class="form-row form-row-col forn-row-col-1" >
                    <span id="alamatsect">
                        <label class="text">Alamat Pengantaran</label>
                        <small>Mohon menuliskan alamat pengantaran dengan jelas. Pengantaran akan dikenakan biaya tambahan terpisah.</small>
                        <textarea rows="3" class="input-text @error('alamat_lengkap') is-invalid @enderror" name="alamat_lengkap" value="{{ $pem->alamat_lengkap_pembeli }}" placeholder="">{{ $pem->alamat_lengkap_pembeli }}</textarea>
                    </span>
                </p>

                <div class="form-row forn-row-first">
                    <label for="product" class="text">{{ ('Keterangan') }}</label>
                    <textarea rows="3" class="input-text @error('keterangan') is-invalid @enderror" name="keterangan"  placeholder="Catatan tambahan untuk penjual (opsional)">{{$pem->keterangan}}</textarea>
                    
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4"><br>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Update Pemesanan') }}
                        </button>
                    </div>
                </div>

            </div>
            </div>
        </form>       
        @endforeach
        
@endsection

@section('script')
<script src="{{ asset('davur/vendor/moment/moment.min.js') }}" defer="" type="text/javascript"></script>
<script src="{{ asset('davur/vendor/bootstrap-daterangepicker/daterangepicker.js') }}" defer="" type="text/javascript"></script>
<script src="{{ asset('davur/vendor/clockpicker/js/bootstrap-clockpicker.min.js') }}" defer="" type="text/javascript"></script>
<script src="{{ asset('davur/vendor/pickadate/picker.js') }}" defer="" type="text/javascript"></script>
<script src="{{ asset('davur/vendor/pickadate/picker.time.js') }}" defer="" type="text/javascript"></script>
<script src="{{ asset('davur/vendor/pickadate/picker.date.js') }}" defer="" type="text/javascript"></script>
<script src="{{ asset('davur/js/plugins-init/bs-daterange-picker-init.js') }}" defer="" type="text/javascript"></script>
<script src="{{ asset('davur/js/plugins-init/clock-picker-init.js') }}" defer="" type="text/javascript"></script>
<script src="{{ asset('davur/js/plugins-init/pickadate-init.js') }}" defer="" type="text/javascript"></script>
<script>
    $(document).ready(function() {
            $('.bygocar').click(function() {
                $('#alamatsect').slideDown();
            });
            $('.diambilsendiri').click(function() {
                $('#alamatsect').slideUp();
            });
    });
</script>
@endsection