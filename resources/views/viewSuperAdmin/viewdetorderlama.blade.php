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
@endphp
@extends($layoutDirectory)
{{-- @extends('layouts.backAdmin.layout.defaultSuperAdmin') --}}

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, selamat datang!</h4>
                <span>Detail Order</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{!! url('/OrderDiterima'); !!}">Daftar Order Diterima</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Baca Saja - Order Diterima</a></li>
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
                    <h4 class="card-title">Order Diterima</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/StorePemesanan') }}" class="step-form-horizontal">
                        @csrf
                        <div>
            @foreach( $pemesanan as $key =>$order )
                            <section>
                                    
                                    <div class="row">
                                        <label for="cariuser" class="col-sm-3 col-form-label">User</label>
                                        <div class="col-md-6">
                                        <select class="form-control cariuser"  id="single-select" required=""  name="cariuser" autofocus readonly>
                                        
                                        @foreach ($users as $u)
                                            @if ($order->user_id == $u->id)
                                                <option value="{{ $order->user_id }}" selected>{{$u->name}}</option>
                                            @else
                                                <option value="{{ $order->user_id }}" disabled>{{$u->name}}</option>
                                            @endif
                                        @endforeach
                                        </select>
                                        </div>
                                    </div>

                                    <br><h4>Data Pembeli untuk Dihubungi</h4>
                                    <div class="form-group row">
                                        <label for="nama_lengkap" class="col-sm-3 col-form-label">{{ __('Nama lengkap*') }}</label>

                                        <div class="col-md-6">
                                            <input disabled id="nama_lengkap" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" required  placeholder="Nama lengkap" value="{{ $order->nama_lengkap_pembeli}}">
                                            
                                                {{-- <select class="form-control cariuser"  id="nama_lengkap" required=""  name="cariuser"> --}}
                                                
                                            
                                            
                                            {{-- <a id="searchandpaste" href="#" class="btn btn-primary" style="display:inline-block"><i class="flaticon-381-search-1" ></i></a>  --}}
                                        </div>
                                    </div>
                                

                                    <div class="form-group row">
                                        
                                        <label for="nomor_telp" class="col-sm-3 col-form-label">{{ __('Nomor telepon*') }}</label>

                                        <div class="col-md-6">
                                            <input disabled id="nomor_telp" type="number" class="form-control @error('nomor_telp') is-invalid @enderror" name="nomor_telp"  placeholder="081xxx" value="{{$order->no_hp_pembeli}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="alamat_lengkap" class="col-sm-3 col-form-label">{{ __('Alamat lengkap*') }}</label>

                                        <div class="col-md-6">
                                            <input disabled rows="5" class="form-control @error('alamat_lengkap') is-invalid @enderror" name="alamat_lengkap"  placeholder="Alamat Lengkap" value="{{ $order->alamat_lengkap_pembeli }}">
                                        </div>
                                        
                                    </div>

                                    <div class="form-group row">
                                        <label for="product" class="col-sm-3 col-form-label">{{ __('Untuk tanggal*') }}</label>

                                        <div class="col-md-6">
                                            <input disabled class="datepicker-default form-control @error('untuk_tanggal') is-invalid @enderror" id="datepicker" name="untuk_tanggal" placeholder="Pilih Tanggal" value="{{ date('d-M-Y', strtotime($order->untuk_tanggal)) }}" >
                                        </div>
                                        
                                    </div>

                                    <div class="form-group row">
                                        <label for="product" class="col-sm-3 col-form-label">{{ __('Untuk jam') }}</label>

                                        <div class="col-md-6">
                                            <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                                <input disabled type="text" class="form-control @error('untuk_jam') is-invalid @enderror" value="{{ $order->untuk_jam }}" name="untuk_jam" placeholder="Pilih Jam (opsional)"> 
                                                <span class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-clock-o"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="product" class="col-sm-3 col-form-label">{{ __('Pengambilan') }}</label>

                                        <div class="col-md-6">
                                            {{-- <label class="radio-inline mr-3"><input type="radio" value="1" name="optionkirim"> Diambil</label>
                                            <label class="radio-inline mr-3"><input type="radio" value="2" name="optionkirim"> Dikirim Aisya</label> --}}
                                           
                                                @if ($order->pengambilan == 1)
                                                    <label class="radio-inline mr-3"><input type="radio" value="1" name="optionkirim" checked="true"> Diambil</label>
                                                    <label class="radio-inline mr-3"><input type="radio" value="2" name="optionkirim" disabled> Dikirim Aisya</label>
                                                @else
                                                    <label class="radio-inline mr-3"><input type="radio" value="1" name="optionkirim" disabled> Diambil</label>
                                                    <label class="radio-inline mr-3"><input type="radio" value="2" name="optionkirim" checked="true"> Dikirim Aisya</label>
                                                @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="product" class="col-sm-3 col-form-label">{{ __('Keterangan') }}</label>

                                        <div class="col-md-6">
                                            <input disabled rows="5" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ $order->keterangan }}"  placeholder="Keterangan(opsional)">
                                        </div>
                                        
                                    </div>
                                    {{-- 
                                    <div class="form-group row">
                                        <label for="product" class="col-sm-3 col-form-label">{{ __('Total transaksi') }}</label>

                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp</span>
                                                </div>
                                                <input id="product_total" type="number" min="0" class="form-control @error('product_price') is-invalid @enderror" name="product_total" required  placeholder="Total Transaksi" disabled="">
                                            </div>
                                        </div>
                                    </div> --}}

                                    <input id="product_total" hidden type="number" 
                                    class="form-control @error('product_total') is-invalid @enderror" 
                                    name="product_total" required  placeholder="Total Transaksi" hidden>

                                    {{-- <input id="sub_total_todb" hidden type="number" 
                                    class="form-control @error('sub_total_todb') is-invalid @enderror" 
                                    name="sub_total_todb"  placeholder="Sub Total" hidden> --}}
                                    
                                    

                                    

                            </section>

                            <h4>Data Pesanan</h4>
                            <section>
                               
                                                
                                    <div class="table-responsive">
                                            <table class="table table-striped display" id="simulationRow">
                                                <thead>
                                                    <tr>
                                                        <!-- <th class="center">#</th> -->
                                                        <th>Produk</th>
                                                        <th class="center">Qty</th>
                                                        <th class="right">Harga Jual</th>
                                                        <th class="right">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                {{-- lihat js --}}
                                            @foreach ($order->products as $det_pem  )
                                               <tr id="iteration">
                                                    
                                                    <td class="left strong"><div class=""><select class="form-control selected_product"  id="select_produk{{ $loop->iteration }}" required=""  name="select_produk[]" >
                                                        <option disabled selected="">Enter Produk</option>
                                                        @foreach($produk as $p)
                                                        @if ($det_pem->pivot->id_produk == $p->id)
                                                            <option value="{{ $p->id }}" selected>{{$p->nama_produk}}</option>
                                                        @else
                                                            <option value="{{ $p->id }}" disabled>{{$p->nama_produk}}</option>
                                                        @endif
                                                        @endforeach</select></div></td>
                                                    <td class="center" style="width:12%;"><input disabled id="quantity{{ $loop->iteration }}" type="number" min="1" class="form-control @error('+quantity+') is-invalid @enderror" name="quantity[]" required  value="{{ $det_pem->pivot->kuantitas ?: 'null' }}" ></td>
                                                    
                                                    <td class="right"><input id="hargajual{{ $loop->iteration }}" type="number" min="0" class="form-control @error('+hargajual+') is-invalid @enderror" name="hargajual[]" disabled="" 
                                                        value="{{ $det_pem->harga_produk ?: 'null' }}"></td>
                                                    <td class="right"><input id="totalrowharga{{ $loop->iteration }}" type="number"  class="form-control @error('+totalrow+') is-invalid @enderror totalrowharga" name="totalrowharga[]" value="{{ $det_pem->pivot->sub_total ?: 'null'}}" required disabled></td>
                                                </tr>
                                                <input type="text" value="{{ $loop->count }}" hidden id="iteration">
                                            @endforeach
                                            
                                                </tbody>
                                            </table>
                                    </div>

                                    {{-- <div class="row">
                                            <div class="col-lg-12">
                                                <button type="button" class="btn btn-outline-primary btn-sm" id="addRow">Add Row</button>
                                                <button type="button" class="btn btn-outline-warning btn-sm pull-right" id="deleteRow">Delete Row</button> 
                                            </div>
                                    </div> --}}

                                    <div class="row">
                                            <div class="col-lg-4 col-sm-7"> </div>
                                            <div class="col-lg-4 col-sm-7 ml-auto">
                                                <br><table class="table table-clear">
                                                    <tbody>
                                                        <tr>
                                                            <td class="left"><strong>Subtotal</strong></td>
                                                            <td class="right">Rp <p style="display:inline" id="sub_total">{{$order->total_sub }}</p></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="left"><strong>Discount</strong></td>
                                                            <td class="right" >
                                                                @if ($order->discount != null)
                                                                    <div class="row">
                                                                        <label for="money-radio" class="radio-inline mr-3"><input checked type="radio" id="money-radio" name="discount"/> Rp Off</label>
                                                                        <input readonly value="{{$order->discount }}" type="number" class="discount control-group" id="money-text" name="money_off" style="margin-left: 5px" placeholder="dalam rupiah"/>
                                                                    </div>

                                                                    <div class="row">
                                                                        <label for="percent-radio" class="radio-inline mr-3"><input disabled type="radio" id="percent-radio" name="discount"/> % Off</label>
                                                                        <input readonly value="{{$order->discount_inpercent }}" type="number" class="discount control-group" id="percent-text" name="percent_off" style="margin-left: 14px" placeholder="dalam persen" />
                                                                    </div>
                                                                @else
                                                                    <div class="row">
                                                                        <label for="money-radio" class="radio-inline mr-3"><input disabled type="radio" id="money-radio" name="discount"/> Rp Off</label>
                                                                        <input readonly value="{{$order->discount }}" type="number" class="discount control-group" id="money-text" name="money_off" style="margin-left: 5px" placeholder="dalam rupiah"/>
                                                                    </div>

                                                                    <div class="row">
                                                                        <label for="percent-radio" class="radio-inline mr-3"><input checked type="radio" id="percent-radio" name="discount"/> % Off</label>
                                                                        <input readonly value="{{$order->discount_inpercent }}" type="number" class="discount control-group" id="percent-text" name="percent_off" style="margin-left: 14px" placeholder="dalam persen" />
                                                                    </div>
                                                                @endif
                                                                
                                                            
                                                            </td>
                                                        </tr>
                                                        {{-- <tr>
                                                            <td class="left"><strong>PPN (10%)</strong></td>
                                                            <td class="right">Rp <p style="display:inline" id="ppn">0</p></td>
                                                        </tr> --}}
                                                        <tr>
                                                            <td class="left"><strong>Total</strong></td>
                                                            <td class="right"><strong>Rp <p style="display:inline" id="total_amount" name="total_amount">{{$order->total_transaksi}}</p></strong><br></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                    
                            </section>


            @endforeach
                            

                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
		
			
@endsection	

@section('script')
<script src="http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer="" type="text/javascript"></script>
<script>

    $(document).ready(function() {
        //TABLE
            $('#simulationRow').dataTable({searching: false});
            
            $('#percent-radio, #money-radio').change(function() {
                if ($('#percent-radio').is(':checked')) {
                    $('#percent-text').removeAttr('disabled').focus();
                } else {
                    $('#percent-text').attr('disabled', 'disabled');
                }

                if ($('#money-radio').is(':checked')){
                    $('#money-text').removeAttr('disabled').focus();
                } else {
                    $('#money-text').attr('disabled', 'disabled');
                }
            }).change();
            
   });

</script>
@endsection