@extends('layouts.front')
@section('link')
    <link rel="stylesheet" href="{{ asset('davur/vendor/pickadate/themes/default.css') }}">
    <link rel="stylesheet" href="{{ asset('davur/vendor/pickadate/themes/default.date.css') }}">
@endsection
@section('container')
<div class="main-content main-content-product no-sidebar">
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
                            <a href="{{url('/seeyourdetailorder/'.$pemesanan_id)}}">Detail Pemesanan</a>
                        </li>
                        <li class="trail-item trail-end active">
                            <a href="#">Tambah Pembayaran</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Pembayaran</h4>
                    </div>


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
    
                    <div class="checkout-wrapp">
                        <div class="shipping-address-form-wrapp">
                            <div class="shipping-address-form  checkout-form">
                                <div class="row-col-1 row-col">
                                    <div class="shipping-address">
                                        <form id="form-id" method="POST" action="{{ url('/storeyourpayment/'.$pemesanan_id) }}" enctype="multipart/form-data">
                                            @csrf
                                            <small>*Wajib diisi. Mohon membayar sejumlah dengan tagihan bayar.</small>
                                            <br><br>
                                            <div class="form-row form-row-col">
                                                <label for="id_pemesanan" class="text">ID Pemesanan (*)</label>
                                                    <select class="chosen-select"  id="single-select" required=""  name="id_pemesanan" autofocus readonly>
                                                        <option value="{{ $pemesanan_id }}" selected>{{ $pemesanan_id }}</option>
                                                    </select>
                                            </div>
                                            <br>
                                            <div class="form-row form-row-col">
                                                <label for="optionbank" class="text">{{ ('Bank Transfer (*)') }}</label>
                        
                                                    <label class="radio-inline mr-3"><input type="radio" value="2" name="optionbank"> BRI</label>
                                                    <label class="radio-inline mr-3"><input type="radio" value="3" name="optionbank"> BCA</label>
                                                    <label class="radio-inline mr-3 banklain"><input type="radio" value="4" name="optionbank" > Bank Lainnya</label>
                                                    <input type="text" maxlength="20" class="discount control-group lainnya" name="lainnya"  
                                                     style="margin-left: 14px" placeholder="Mohon diisi"  />
                                                 
                                            </div>
                                            <br>
                                            <div class="form-row form-row-col">
                                                <label for="jumlah_bayar" class="text">{{ ('Jumlah Bayar (*)') }}
                                                    <button style="background-color: #ffffff; color: black;outline: none;border: none;"type="button"
                                                     class="btn btn-light" data-bs-toggle="popover" title="Keterangan Pembayaran" >&#x1F6C8;</button>
                                                </label>
                                                @foreach ($pemesanan as $pem)
                                                    <input type="text" hidden id="transaction_sum" name="@currency($pem->total_transaksi)">
                                                    <input type="text" hidden id="sudahbayar_sum" name="@currency($jumlahSudahBayar)">
                                                    <input type="text" hidden id="tagihan_sum" name="@currency($pem->total_transaksi-$jumlahSudahBayar)">
                                                
                                                    <div class="input-group mb-3">
                                                        <input id="jumlah_bayar" value="{{$pem->total_transaksi-$jumlahSudahBayar}}"type="text" min="0" class="input-text @error('jumlah_bayar') is-invalid @enderror" required  placeholder="Jumlah bayar(Rp)" autofocus name="jumlah_bayar">
                                                    </div>
                                                @endforeach
                                                    
                                            </div>
                                            <br>
                                            <div class="form-row form-row-col">
                                                <label for="atas_nama" class="text">{{ ('Atas Nama (*)') }}</label>
                        
                                                    <input id="atas_nama" type="text" class="input-text @error('atas_nama') is-invalid @enderror" name="atas_nama" placeholder="Nama tertera pada bukti bayar" required>
                                                
                                            </div>
                        
                                            <br>
                                            <div class="form-row form-row-col">
                                                            
                                                <label for="no_rek" class="text">{{ ('Nomor Rekening (*)') }}</label>
                        
                                                    <input id="no_rek" type="number" class="input-text @error('no_rek') is-invalid @enderror" name="no_rek"  placeholder="119xxxxxxxxxx" required>
                                                
                                            </div>

                                            <br>
                                            <div class="form-row form-row-col">
                                                <label class="text">Tanggal bayar tertera (*)</label>
                                                <input type="text"class="input-text datepicker-default @error('untuk_tanggal') is-invalid @enderror" required id="datepicker" name="tanggal_bayar" placeholder="pilih tanggal">
                                            
                                            </div>
                                          
                                            <br>
                                            <div class="form-row form-row-col ">
                                                <label for="no_rek" class="text">{{ ('Bukti Bayar  (*)') }}</label>
                                                <small> .jpg atau .jpeg </small>
                                                
                                                    <input type="file" name="file" accept="image/jpg, image/jpeg" required>
                                                
                                            </div>
                        
                                            
                        
                                            <br><br>
                                            <div class="form-row form-row-first mb-0">
                                                <div class="offset-md-4">
                                                    <button id="submit-all" type="submit" class="btn btn-primary">
                                                        {{ __('Tambah Pembayaran') }}
                                                    </button>
                                                </div>
                                            </div>
                        
                                            
                        
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('script')
<script src="{{ asset('davur/vendor/maskk/js/jquery.mask.js') }}"></script>
<script src="{{ asset('davur/vendor/moment/moment.min.js') }}" defer="" type="text/javascript"></script>
<script src="{{ asset('davur/vendor/pickadate/picker.js') }}" defer="" type="text/javascript"></script>
<script src="{{ asset('davur/vendor/pickadate/picker.date.js') }}" defer="" type="text/javascript"></script>
<script src="{{ asset('davur/js/plugins-init/pickadate-init.js') }}" defer="" type="text/javascript"></script>
<script>
$(document).ready(function(){
    $('#jumlah_bayar').mask('#.##0', {reverse: true});

    $("#form-id").submit(function(){
        var value=$('#jumlah_bayar').cleanVal();
        $('#jumlah_bayar').val(value);
    });

    // Enable popovers everywhere
    var total_sum = $("#transaction_sum").attr("name");
    var sudahbayar_sum = $("#sudahbayar_sum").attr("name");
    var tagihan_sum = $("#tagihan_sum").attr("name");    
    $('[data-bs-toggle="popover"]').popover({
        title: '<h4 class="custom-title"><i class="bi-info-circle-fill"></i> Popover info</h4>',
        content: '<p>Total transaksi yang harus dibayar: <strong> ' +total_sum+'</strong></p><p>Jumlah sudah bayar (diverifikasi) : <strong>' +sudahbayar_sum+'</strong></p><p>Jumlah sisa tagihan : <strong>' +tagihan_sum+'<strong></p>',
        html: true
    }); 

});
</script>
@endsection