@php
    if(Auth::user()->hasRole('superAdmin')) {
        $layoutDirectory = 'layouts.backAdmin.layout.defaultSuperAdmin';
    }  
    elseif(Auth::user()->hasRole('adminPemesanan')) {
        $layoutDirectory = 'layouts.backAdmin.layout.defaultAdminPemesanan';
    } 
    elseif(Auth::user()->hasRole('adminPembayaran')) {
        $layoutDirectory = 'layouts.backAdmin.layout.defaultAdminPembayaran';
    } 
    elseif(Auth::user()->hasRole('adminBlog')) {
        $layoutDirectory = 'layouts.backAdmin.layout.defaultAdminBlog';
    } 
@endphp
@extends($layoutDirectory)
{{-- @extends('layouts.backAdmin.layout.defaultSuperAdmin') --}}

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, selamat datang!</h4>
                <span>Formulir Tambah Pembayaran</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{!! url('/PaymentTable'); !!}">Daftar Pembayaran </a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Formulir Pembayaran</a></li>
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
                <h4 class="card-title">Tambah Pembayaran</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                     <form id="form-id" method="POST" action="{{ url('/storepaymentID') }}" enctype="multipart/form-data">
                        @csrf
                                    
                        
                        <div class="form-group row">
                            <label for="id_pemesanan" class="col-sm-3 col-form-label">ID Pemesanan (*)</label>
                            <div class="col-md-6">
                                <select class="form-control select2"  id="single-select" required=""  name="id_pemesanan" autofocus>
                                <option disabled selected="" autofocus>Select Pemesanan</option>
                                @foreach($pemesanan as $p)
                                <option value="{{ $p->id_pemesanan }}">{{$p->id_pemesanan}} - {{$p->nama_lengkap_pembeli}}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>

                    <div id="kontengulung">
                        <div class="form-group row">
                            <label for="optionbank" class="col-sm-3 col-form-label">{{ __('Jenis Bayar (*)') }}</label>

                            <div class="col-md-6">
                                <label class="radio-inline mr-3"><input type="radio" value="1" name="optionbank" id="tunai"> Tunai</label>
                                <label class="radio-inline mr-3"><input type="radio" value="2" name="optionbank" id="bri"> BRI</label>
                                <label class="radio-inline mr-3"><input type="radio" value="3" name="optionbank" id="bca"> BCA</label>
                                <label class="radio-inline mr-3"><input type="radio" value="4" name="optionbank" id="banklainnya"> Lainnya</label>
                                <input type="text" maxlength="20" class="discount control-group" id="lainnya" name="lainnya" style="margin-left: 14px" placeholder="Mohon diisi" />
                            </div>

                           
                        </div>

                        <div class="form-group row">
                            <label for="jumlah_bayar" class="col-sm-3 col-form-label">{{ __('Jumlah Bayar (*)') }}
                                <button style="background-color: #ffffff; color: black;outline: none;border: none;"type="button"
                                class="btn btn-light" data-bs-toggle="popover" title="Keterangan Pembayaran" >&#x1F6C8;</button>
                            </label>

                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                     <div class="input-group-prepend">
                                        <span class="input-group-text">Rp</span>
                                    </div>
                                    <input id="jumlah_bayar" type="text" min="0" class="form-control @error('jumlah_bayar') is-invalid @enderror" required  placeholder="Pay Amount" autofocus name="jumlah_bayar">
                                    <!-- <input id="hiddenrp" hidden="" type="text" min="0" name="product_price"placeholder="Product Price"> -->
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="atas_nama" class="col-sm-3 col-form-label">{{ __('Atas Nama Pembayar') }}</label>

                            <div class="col-md-6">
                                <input id="atas_nama" type="text" class="form-control @error('atas_nama') is-invalid @enderror" name="atas_nama" placeholder="Paid By">
                            </div>
                        </div>

                        
                        <div class="form-group row" id="divrek">
                                        
                            <label for="no_rek" class="col-sm-3 col-form-label">{{ __('Nomor Rekening') }}</label>

                            <div class="col-md-6">
                                <input id="no_rek" type="number" class="form-control @error('no_rek') is-invalid @enderror" name="no_rek"  placeholder="119xxxxxxxxxx">
                            </div>
                        </div>

                        <div class="form-group row " id="divbukti">
                            <label for="no_rek" class="col-sm-3 col-form-label">{{ __('Bukti Bayar (.jpg atau .jpeg)') }}</label>
                            <div class="col-md-6 input-group">
                                <input type="file" name="file" accept="image/jpg, image/jpeg">
                            </div>
                        </div>

                         

                       
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button id="submit-all" type="submit" class="btn btn-primary">
                                    {{ __('Tambah Pembayaran') }}
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
<script>
$(document).ready(function(){
    // let a = document.getElementById("hiddenrp");
    $('#jumlah_bayar').mask('#.##0', {reverse: true});
    //$('#hproduct').inputmask({removeMaskOnSubmit: true});

    // $('#hproduct').keyup(function(){
    //     a=$('#hproduct').val();
    //     console.log(a);
    //     document.getElementById("hiddenrp").value=a.unmask();
    // });

    $("#form-id").submit(function(){
        var value=$('#jumlah_bayar').cleanVal();
        $('#jumlah_bayar').val(value);
    });

   
    $('.select2').select2();

    $('#tunai').click(function() {
         $('#lainnya').slideUp();
         $('#divrek').slideUp();
         $('#divbukti').slideUp();
         
    });
    $('#bri').click(function() {
         $('#lainnya').slideUp();
         $('#divrek').slideDown();
         $('#divbukti').slideDown();
    });
    $('#bca').click(function() {
         $('#lainnya').slideUp();
         $('#divrek').slideDown();
         $('#divbukti').slideDown();
    });
    $('#banklainnya').click(function() {
         $('#lainnya').slideDown();
         $('#divrek').slideDown();
         $('#divbukti').slideDown();
    });

    $('[data-bs-toggle="popover"]').popover({
                    title: '<h4 class="custom-title"><i class="bi-info-circle-fill"></i> Popover info</h4>',
                    content: 'Mohon memilih pemesanan terlebih dahulu',
                    html: true
                }); 

    $('#single-select').on('change',function(e) {
    var pemesanan_id = e.target.value;
    var a = "{{url('/jumlahtagihan')}}";
    var fUrl = a+"/"+pemesanan_id;
    $.ajax({
        url:fUrl,
        type:"get",
        data: {
            pemesanan_id: pemesanan_id
        },
        success:function (response) {
            // console.log(response);
            $('#jumlah_bayar').empty();
            totaltr=response['totaltr'];
            sdhbayar=response['jumlahSudahBayar'];
            if(totaltr>sdhbayar){
                tagihan=totaltr-sdhbayar;
                $('#jumlah_bayar').val(parseInt(tagihan).toLocaleString('id') );
                $('#kontengulung').slideDown();
                $('[data-bs-toggle="popover"]').popover("dispose").popover({
                    title: '<h4 class="custom-title"><i class="bi-info-circle-fill"></i> Popover info</h4>',
                    content: '<p>Total transaksi yang harus dibayar: <strong> ' +parseInt(totaltr).toLocaleString('id')+'</strong></p><p>Jumlah sudah bayar (diverifikasi) : <strong>' +parseInt(sdhbayar).toLocaleString('id')+'</strong></p><p>Jumlah sisa tagihan : <strong>' +parseInt(tagihan).toLocaleString('id')+'<strong></p>',
                    html: true
                }); 
            }
            else{
                $('#kontengulung').slideUp(); 
               
            }
            
        }
    })
    });

           


});
</script>
@endsection
