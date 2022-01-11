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
                        @foreach ($pembayaran as $pem)
                        <li class="trail-item trail-end active">
                            <a href="{{url('/seeyourdetailorder/'.$pem->id_pemesanan)}}">Detail Pemesanan</a>
                        </li>
                        @endforeach
                        <li class="trail-item trail-end active">
                            <a href="#">Edit Pembayaran</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Pembayaran</h4>
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
                        
                    @foreach ($pembayaran as $pem)
                    <div class="checkout-wrapp">
                        <div class="shipping-address-form-wrapp">
                            <div class="shipping-address-form  checkout-form">
                                <div class="row-col-1 row-col">
                                    <div class="shipping-address">
                                        <form id="form-id" method="POST" action="{{ url('/updateyourpayment/'.$pemid) }}" enctype="multipart/form-data">
                                            @csrf
                                            <small>*Wajib diisi. Mohon membayar sejumlah dengan tagihan bayar.</small>
                                            <br><br>
                                            <div class="form-row form-row-col">
                                                <label for="id_pembayaran" class="text">ID Pemesanan (*)</label>
                                                    <select class="chosen-select"  id="single-select" required=""  name="id_pembayaran" autofocus readonly>
                                                        <option value="{{ $pemid }}" selected>{{ $pemid }}</option>
                                                    </select>
                                            </div>
                                            <br>
                                            <div class="form-row form-row-col">
                                                <label for="optionbank" class="text">{{ ('Bank Transfer (*)') }}</label>

                                            @if ($pem->bank_transfer == 1)
                                                <label class="radio-inline mr-3 tunai"><input type="radio" value="1" name="optionbank" checked="true"> Tunai</label>
                                                <label class="radio-inline mr-3 bri"><input type="radio" value="2" name="optionbank" > BRI</label>
                                                <label class="radio-inline mr-3 bca"><input type="radio" value="3" name="optionbank" > BCA</label>
                                                <label class="radio-inline mr-3 banklain"><input type="radio" value="4" name="optionbank" > Bank Lainnya</label>
                                                <input type="text" maxlength="20" class="discount control-group lainnya" name="lainnya"
                                                     style="margin-left: 14px" placeholder="Mohon diisi"  />
                                            @elseif ($pem->bank_transfer == 2)
                                                <label class="radio-inline mr-3 bri"><input type="radio" value="2" name="optionbank" checked="true" > BRI</label>
                                                <label class="radio-inline mr-3 bca"><input type="radio" value="3" name="optionbank" > BCA</label> 
                                                <label class="radio-inline mr-3 banklain"><input type="radio" value="4" name="optionbank" > Bank Lainnya</label>
                                                <input type="text" maxlength="20" class="discount control-group lainnya" name="lainnya"
                                                     style="margin-left: 14px" placeholder="Mohon diisi"/>
                                            @elseif ($pem->bank_transfer == 3)
                                                <label class="radio-inline mr-3 bri"><input type="radio" value="2" name="optionbank" > BRI</label>
                                                <label class="radio-inline mr-3 bca"><input type="radio" value="3" name="optionbank" checked="true"> BCA</label>
                                                <label class="radio-inline mr-3 banklain"><input type="radio" value="4" name="optionbank" > Bank Lainnya</label>
                                                <input type="text" maxlength="20" class="discount control-group lainnya" name="lainnya"
                                                     style="margin-left: 14px" placeholder="Mohon diisi" />
                                            @else
                                                <label class="radio-inline mr-3 bri"><input type="radio" value="2" name="optionbank" > BRI</label>
                                                <label class="radio-inline mr-3 bca"><input type="radio" value="3" name="optionbank"> BCA</label>
                                                <label class="radio-inline mr-3 banklain"><input type="radio" value="4" name="optionbank" checked="true" > Bank Lainnya</label>
                                                <input type="text" maxlength="20" class="discount control-group lainnya" name="lainnya"  
                                                     style="margin-left: 14px" placeholder="Mohon diisi" value={{$pem->bank_transfer}} />
                                                 
                                                
                                            @endif
                        
                                                    
                                                
                                            </div>
                                            <br>
                                            <div class="form-row form-row-col">
                                                <label for="jumlah_bayar" class="text">{{ ('Jumlah Bayar (*)') }}</label>
                        
                                                    <div class="input-group mb-3">
                                                        <input value="{{$pem->jumlah_bayar}}" id="jumlah_bayar" type="text" min="0" class="input-text @error('jumlah_bayar') is-invalid @enderror" required  placeholder="Jumlah bayar(Rp)" autofocus name="jumlah_bayar">
                                                    </div>
                                            </div>
                                            <br>
                                            <div class="form-row form-row-col">
                                                <label for="atas_nama" class="text">{{ ('Atas Nama (*)') }}</label>
                        
                                                    <input value="{{$pem->atas_nama}}"id="atas_nama" type="text" class="input-text @error('atas_nama') is-invalid @enderror" name="atas_nama" placeholder="Nama tertera pada bukti bayar" required>
                                                
                                            </div>
                        
                                            <br>
                                            <div class="form-row form-row-col">
                                                            
                                                <label for="no_rek" class="text">{{ ('Nomor Rekening (*)') }}</label>
                        
                                                    <input value="{{$pem->nomor_rekening}}"id="no_rek" type="number" class="input-text @error('no_rek') is-invalid @enderror" name="no_rek"  placeholder="119xxxxxxxxxx" required>
                                                
                                            </div>

                                            <br>
                                            <div class="form-row form-row-col">
                                                <label class="text">Tanggal bayar tertera (*)</label>
                                                <input value="{{$pem->tanggal_pembayaran}}"type="text"class="input-text datepicker-default @error('tanggal_bayar') is-invalid @enderror" required id="datepicker" name="tanggal_bayar" placeholder="pilih tanggal">
                                            
                                            </div>
                                          
                                            <br>
                                            <div class="form-row form-row-col ">
                                                <label for="no_rek" class="text">{{ ('Bukti Bayar Baru (*)') }}</label>
                                                <small> .jpg atau .jpeg </small>
                                                
                                                    <input type="file" name="file" accept="image/jpg, image/jpeg" >
                                                
                                            </div>
                        
                                            
                        
                                            <br><br>
                                            <div class="form-row form-row-first mb-0">
                                                <div class="offset-md-4">
                                                    <button id="submit-all" type="submit" class="btn btn-primary">
                                                        {{ __('Update Pembayaran') }}
                                                    </button>
                                                </div>
                                            </div>
                        
                                            
                        
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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

    $('.tunai').click(function() {
         $('.lainnya').slideUp();
         
    });
    $('.bri').click(function() {
         $('.lainnya').slideUp();
    });
    $('.bca').click(function() {
         $('.lainnya').slideUp();
    });
    $('.banklain').click(function() {
         $('.lainnya').slideDown();
    });

});
</script>
@endsection