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
                <li class="breadcrumb-item"><a href="{!! url('/PemesananTable'); !!}">Order Request Table</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Order Form</a></li>
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
                    <h4 class="card-title">Add Order</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/StorePemesanan') }}" class="step-form-horizontal" id="step-form-horizontal" >
                        @csrf  
                        <div>
                            <h4>Info Pegawai</h4>
                            <section>
                                <div class="form-group row">
                                    <label for="cariuser" class="col-sm-3 col-form-label">User(Pegawai)*</label>
                                    <div class="col-md-6">
                                      <select class="form-control cariuser"  id="single-select" required=""  name="cariuser" autofocus>
                                      <!-- <option disabled selected="" autofocus>Select User</option>
                                      @foreach($users as $u)
                                      <option value="{{ $u->id }}">{{$u->name}}</option>
                                      @endforeach -->
                                       <option value="{{ Auth::user()->id }}" selected>{{ Auth::user()->name }}</option>
                                      </select>
                                    </div>
                                </div>
                            </section>

                            <h4>Info Pembeli</h4>
                            <section>
                                <div class="row">
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label for="nama_lengkap" class="text-label">{{ __('Nama lengkap*') }}</label>
                                            <input id="nama_lengkap" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" required  placeholder="Nama lengkap">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label for="nomor_telp" class="text-label">{{ __('Nomor telepon*') }}</label>
                                            <input id="nomor_telp" type="number" class="form-control @error('nomor_telp') is-invalid @enderror" name="nomor_telp"  placeholder="081xxx">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label for="alamat_lengkap" class="text-label">{{ __('Alamat lengkap*') }}</label>
                                            <textarea rows="5" class="form-control @error('alamat_lengkap') is-invalid @enderror" name="alamat_lengkap"  placeholder="Alamat Lengkap"></textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-lg-6 mb-2">
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="product" class="text-label">{{ __('Untuk tanggal*') }}</label>
                                                <input class="datepicker-default form-control @error('untuk_tanggal') is-invalid @enderror" id="datepicker" name="untuk_tanggal" placeholder="Pilih Tanggal">
                                            </div>

                                            <div class="form-group">
                                                <label for="product" class="text-label">{{ __('Untuk jam') }}</label>
                                                <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                                    <input type="text" class="form-control @error('untuk_jam') is-invalid @enderror" value="" name="untuk_jam" placeholder="Pilih Jam (opsional)"> 
                                                    <span class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-clock-o"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 mb-2">
                                        
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label for="product" class="col-sm-3 col-form-label">{{ __('Pengambilan') }}</label>
        <label class="radio-inline mr-3"><input type="radio" value="Diambil" name="optionkirim"> Diambil</label>
                                        <label class="radio-inline mr-3"><input type="radio" value="Dikirim Go-Car" name="optionkirim"> Dikirim Go-Car</label>
                                    
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="form-group row">
                                    
                                    <div class="col-md-6">
                                        </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="product" class="col-sm-3 col-form-label">{{ __('Keterangan') }}</label>
        
                                    <div class="col-md-6">
                                        <textarea rows="5" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan"  placeholder="Keterangan(opsional)"></textarea>
                                    </div>
                                    
                                </div>
        
                                <div class="form-group row">
                                    <label for="product" class="col-sm-3 col-form-label">{{ __('Total transaksi') }}</label>
        
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                             <div class="input-group-prepend">
                                                <span class="input-group-text">Rp</span>
                                            </div>
                                            <input id="product" type="number" min="0" class="form-control @error('product_price') is-invalid @enderror" name="product_price" required  placeholder="Total Transaksi" disabled="">
                                        </div>
                                    </div>
                                </div>
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
                                        </tbody>
                                    </table>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-outline-primary btn-sm" id="addRow">Add Row</button>
                                    <button type="button" class="btn btn-outline-warning btn-sm pull-right" id="deleteRow">Delete Row</button> 
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-sm-7"> </div>
                                    <div class="col-lg-4 col-sm-7 ml-auto">
                                        <br><table class="table table-clear">
                                            <tbody>
                                                <tr>
                                                    <td class="left"><strong>Subtotal</strong></td>
                                                    <td class="right">Rp <p style="display:inline" id="sub_total">0</p></td>
                                                </tr>
                                                <tr>
                                                    <td class="left"><strong>Discount</strong></td>
                                                    <td class="right" >Rp 
                                                        <input id="discount" type="number" min="0" class="form-control @error('discount') is-invalid @enderror" 
                                                        name="discount" required  placeholder="0" style="width:88%; display:inline; white-space:nowrap; margin-left: 5px;">
                                                    </td>
                                                </tr>
                                                {{-- <tr>
                                                    <td class="left"><strong>PPN (10%)</strong></td>
                                                    <td class="right">Rp <p style="display:inline" id="ppn">0</p></td>
                                                </tr> --}}
                                                <tr>
                                                    <td class="left"><strong>Total</strong></td>
                                                    <td class="right"><strong>Rp <p style="display:inline" id="total_amount">0</p></strong><br></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            
                            </section>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">    
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Order</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/StorePemesanan') }}" class="step-form-horizontal">
                        @csrf
                        <div>
                            <section>
                                    
                                    <div class="row">
                                        <label for="cariuser" class="col-sm-3 col-form-label">User(Pegawai)*</label>
                                        <div class="col-md-6">
                                        <select class="form-control cariuser"  id="single-select" required=""  name="cariuser" autofocus>
                                        <!-- <option disabled selected="" autofocus>Select User</option>
                                        @foreach($users as $u)
                                        <option value="{{ $u->id }}">{{$u->name}}</option>
                                        @endforeach -->
                                        <option value="{{ Auth::user()->id }}" selected>{{ Auth::user()->name }}</option>
                                        </select>
                                        </div>
                                    </div>

                                    <br><h4>Data Pembeli</h4>

                                    <div class="form-group row">
                                        <label for="nama_lengkap" class="col-sm-3 col-form-label">{{ __('Nama lengkap*') }}</label>

                                        <div class="col-md-6">
                                            <input id="nama_lengkap" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" required  placeholder="Nama lengkap">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nomor_telp" class="col-sm-3 col-form-label">{{ __('Nomor telepon*') }}</label>

                                        <div class="col-md-6">
                                            <input id="nomor_telp" type="number" class="form-control @error('nomor_telp') is-invalid @enderror" name="nomor_telp"  placeholder="081xxx">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="alamat_lengkap" class="col-sm-3 col-form-label">{{ __('Alamat lengkap*') }}</label>

                                        <div class="col-md-6">
                                            <textarea rows="5" class="form-control @error('alamat_lengkap') is-invalid @enderror" name="alamat_lengkap"  placeholder="Alamat Lengkap"></textarea>
                                        </div>
                                        
                                    </div>

                                    <div class="form-group row">
                                        <label for="product" class="col-sm-3 col-form-label">{{ __('Untuk tanggal*') }}</label>

                                        <div class="col-md-6">
                                            <input class="datepicker-default form-control @error('untuk_tanggal') is-invalid @enderror" id="datepicker" name="untuk_tanggal" placeholder="Pilih Tanggal">
                                        </div>
                                        
                                    </div>

                                    <div class="form-group row">
                                        <label for="product" class="col-sm-3 col-form-label">{{ __('Untuk jam') }}</label>

                                        <div class="col-md-6">
                                            <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                                <input type="text" class="form-control @error('untuk_jam') is-invalid @enderror" value="" name="untuk_jam" placeholder="Pilih Jam (opsional)"> 
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
                                            <label class="radio-inline mr-3"><input type="radio" value="Diambil" name="optionkirim"> Diambil</label>
                                            <label class="radio-inline mr-3"><input type="radio" value="Dikirim Go-Car" name="optionkirim"> Dikirim Go-Car</label>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="product" class="col-sm-3 col-form-label">{{ __('Keterangan') }}</label>

                                        <div class="col-md-6">
                                            <textarea rows="5" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan"  placeholder="Keterangan(opsional)"></textarea>
                                        </div>
                                        
                                    </div>

                                    <div class="form-group row">
                                        <label for="product" class="col-sm-3 col-form-label">{{ __('Total transaksi') }}</label>

                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp</span>
                                                </div>
                                                <input id="product" type="number" min="0" class="form-control @error('product_price') is-invalid @enderror" name="product_price" required  placeholder="Total Transaksi" disabled="">
                                            </div>
                                        </div>
                                    </div>



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
                                                </tbody>
                                            </table>
                                    </div>

                                    <div class="row">
                                            <div class="col-lg-12">
                                                <button type="button" class="btn btn-outline-primary btn-sm" id="addRow">Add Row</button>
                                                <button type="button" class="btn btn-outline-warning btn-sm pull-right" id="deleteRow">Delete Row</button> 
                                            </div>
                                    </div>

                                    <div class="row">
                                            <div class="col-lg-4 col-sm-7"> </div>
                                            <div class="col-lg-4 col-sm-7 ml-auto">
                                                <br><table class="table table-clear">
                                                    <tbody>
                                                        <tr>
                                                            <td class="left"><strong>Subtotal</strong></td>
                                                            <td class="right">Rp <p style="display:inline" id="sub_total">0</p></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="left"><strong>Discount</strong></td>
                                                            <td class="right" >Rp 
                                                                <input id="discount" type="number" min="0" class="form-control @error('discount') is-invalid @enderror" 
                                                                name="discount" required  placeholder="0" style="width:88%; display:inline; white-space:nowrap; margin-left: 5px;">
                                                            </td>
                                                        </tr>
                                                        {{-- <tr>
                                                            <td class="left"><strong>PPN (10%)</strong></td>
                                                            <td class="right">Rp <p style="display:inline" id="ppn">0</p></td>
                                                        </tr> --}}
                                                        <tr>
                                                            <td class="left"><strong>Total</strong></td>
                                                            <td class="right"><strong>Rp <p style="display:inline" id="total_amount">0</p></strong><br></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                    

                            </section>



                            
                            <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Add Product') }}
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
<script src="http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer="" type="text/javascript"></script>
<script>

// $(document).ready(function() {
//     $('#single-select').select2({
//         placeholder: 'Cari...',
//         var eurl = "{{URL('/cariUser')}}";
//         ajax: {
//             url: eurl,
//             dataType: 'json',
//             delay: 250,
//             processResults: function (data) {
//                 return {
//                     results:  $.map(data, function (item) {
//                         return {
//                             text: item.name,
//                             id: item.id
//                         }
//                     })
//                 };
//             },
//             cache: true
//         }
//     });

//     $('.cariproduk').select2({
//         placeholder: 'Select Produk',
//         var eurl = "{{URL('/cariProduk')}}";
//         ajax: {
//             url: eurl,
//             dataType: 'json',
//             delay: 250,
//             processResults: function (data) {
//                 return {
//                     results: $.map(data, function (item) {
//                         return {
//                             text: item.nama_produk,
//                             id: item.id
//                         }
//                     })
//                 };
//             },
//             cache: true
//         }
//     });

// $('.datepicker').pickadate({
//     var date = new Date();
//         var currentMonth = date.getMonth();
//         var currentDate = date.getDate();
//         var currentYear = date.getFullYear();
//     disable: [
//         new Date(new Date(currentYear, currentMonth, currentDate)),
//     ]
// })
    
// });



    $(document).ready(function() {
        $('#simulationRow').dataTable({searching: false});

        //MASK 
            //$('#discount').mask('#.##0', {reverse: true});

        //ADD ROW
            var table = $('#simulationRow').DataTable();
            var p = <?php echo json_encode($produk);?>;
            var counter = 1;

            $('#addRow').on( 'click', function () {
                //var id=p['id'];
                var id=counter;
                //$(this).parent().index();
                console.log('id '+id);
                console.log(p);
                // var html = '<tr>';
                var html = '<tr id="'+id+'">';
                html += '<td class="left strong"><div class=""><select class="form-control selected_product"  id="select_produk'+id+'" required=""  name="select_produk'+id+'" ><option disabled selected="">Enter Produk</option>@foreach($produk as $p)<option value="{{ $p->id }}">{{$p->nama_produk}}</option>@endforeach</select></div></td>';
                html +='<td class="center" style="width:12%;"><input id="quantity'+id+'" type="number" min="1" class="form-control @error('+quantity+') is-invalid @enderror" name="quantity'+id+'" required   ></td>';
                html +='<td class="right"><input id="hargajual'+id+'" type="number" min="0" class="form-control @error('+hargajual+') is-invalid @enderror" name="hargajual[]"  placeholder="" disabled=""></td>';
                html +='<td class="right"><input id="totalrowharga'+id+'" type="number"  class="form-control @error('+totalrow+') is-invalid @enderror totalrowharga" name="totalrowharga'+id+'" required  placeholder="" disabled=""></td>';
                html += '</tr>';

                table.row.add($(html)).draw(false);
                counter++;
                
                hitung(id);
                
            });

            function hitung(id){

                let harga= $("#hargajual"+id);
                console.log("harga");
                console.log(harga);
                let qty= $("#quantity"+id);
                console.log("qty "+harga);
                let rowharga= $("#totalrowharga"+id);
                let produk= $("#select_produk"+id);
                //dont use class .select okayyy it wil ruined all
                $(document).on('change','#select_produk'+id, function(){
                    console.log('row produk');
                    let produkval = $(this).val();
                    console.log("val"+produkval);
                        var a = "{{URL('/getdataproduk')}}";
                        var dltUrl = a+"/"+produkval;
                        $.ajax({
                            url: dltUrl,
                            type:'GET',
                            success:function(response){
                                console.log("response");
                                var response = JSON.parse(response);
                                console.log(response);
                                
                                var hg = `${response[0]['harga_produk']}`;
                                harga.val(hg);
                                console.log("hargaa");
                                console.log(hg);

                                //$("#hargajual"+id).html(response[0]['harga_produk']);    
                                
                                let thg= hg * qty.val();
                                //$("#totalrowharga"+id).val(thg);
                                
                                //$("#totalrowharga"+id).mask('#.##0', {reverse: true});
                                $("#totalrowharga"+id).val(thg);
                                hitung_calc();
                            }          
                        })
                    
                });

                $(document).on('change','#quantity'+id, function(){
                    console.log('row quantity');
                    //oke entah kenapa yg ini bisa. awas non nan * non nan jadi nan lagi!!!
                    qty2=parseInt(qty.val());
                    // console.log(qty2);
                    // alert ( isNaN(qty2)); 

                    hargaa=parseInt(harga.val());
                    // console.log(hargaa);
                    // alert ( isNaN(hargaa)); 

                    //thg= parseInt(hargaa.innerHTML) * qty2.value;
                    thg= qty2 * hargaa;
                    //alert ( isNaN(thg)); 
                    $("#totalrowharga"+id).val(thg);

                    hitung_calc();
                });

                hitung_calc();
            }

            function hitung_calc(){
                console.log('row calc');
                sbtotal=0;
                $('.totalrowharga').each(function() {
                    sbtotal += parseInt($(this).val());
                });
                
                $('#sub_total').html(sbtotal);
                
                discount = $('#discount').val();
                
                
                ta=parseInt(sbtotal-discount);
                // alert(isNaN(discount));
                // alert(isNaN(ta));
                $('#total_amount').html(ta);
            }

            $(document).on('change','#discount', function(){
                console.log('row discount');
                hitung_calc();
                    
            });

         
        //Automatically add a first row of data
            $('#addRow').click();

        //DELETE ROW
            $('#simulationRow tbody').on( 'click', 'tr', function () {
                if ( $(this).hasClass('selected') ) {
                    $(this).removeClass('selected');
                }
                else {
                    table.$('tr.selected').removeClass('selected');
                    $(this).addClass('selected');
                }
            });
         
            $('#deleteRow').click( function () {
                table.row('.selected').remove().draw( false );
                hitung_calc();
            });

            
    });

</script>
@endsection