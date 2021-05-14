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

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Order</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                     <form method="POST" action="{{ url('/StoreOrder') }}" class="step-form-horizontal" id="step-form-horizontal" >
                        @csrf
                        
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
                                <input id="nomor_telp" type="text" class="form-control @error('nomor_telp') is-invalid @enderror" name="nomor_telp"  placeholder="081xxx">
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
                                            <tr>
                                                <!-- <td class="center">1</td> -->
                                                <td class="left strong">
                                                    <div class="">
                                                        <select class="form-control selected_product"  id="select_produk" required=""  name="selected_product" >
                                                        <option disabled selected="">Enter Produk</option>
                                                        @foreach($produk as $p)
                                                        <option value="{{ $p->id }}">{{$p->nama_produk}}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="center" style="width:10%;">
                                                    <input id="quantity" type="number" min="0" class="form-control @error('quantity') is-invalid @enderror" name="quantity" required  placeholder="" >
                                                </td>
                                                <td class="right">
                                                    <input id="hargajual" type="number" min="0" class="form-control @error('hargajual') is-invalid @enderror" name="hargajual"  placeholder="" disabled="">
                                                </td>
                                                <td class="right">
                                                    <input id="totalrowharga" type="number" min="0" class="form-control @error('totalrow') is-invalid @enderror" name="totalrowharga" required  placeholder="" disabled="">
                                                </td>
                                            </tr>
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
                                    <div class="col-lg-4 col-sm-5"> </div>
                                    <div class="col-lg-4 col-sm-5 ml-auto">
                                        <br><table class="table table-clear">
                                            <tbody>
                                                <tr>
                                                    <td class="left"><strong>Subtotal</strong></td>
                                                    <td class="right">Rp</td>
                                                </tr>
                                                <tr>
                                                    <td class="left"><strong>Discount (20%)</strong></td>
                                                    <td class="right">Rp</td>
                                                </tr>
                                                <tr>
                                                    <td class="left"><strong>VAT (10%)</strong></td>
                                                    <td class="right">Rp</td>
                                                </tr>
                                                <tr>
                                                    <td class="left"><strong>Total</strong></td>
                                                    <td class="right"><strong>Rp</strong><br></td>
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
let harga= document.getElementById('hargajual');
let qty= document.getElementById('quantity');
let rowharga= document.getElementById('totalrowharga');
let produk= document.getElementById('select_produk');

    $(document).ready(function() {
        
        // $('.selected_product').on('change', function(){
        //     console.log('row produk');
        //     let produkval = $(this).val();

        //         var url = "{{URL('/getdataproduk')}}";
        //         var dltUrl = url+"/"+produkval;
        //         $.ajax({
        //             url: dltUrl,
        //             type:'GET',
        //             success:function(response){
        //                 var response = JSON.parse(response);
        //                 console.log(response);
                            
        //                 harga.value = `${response[0]['harga_produk']}`;
        //                 rowharga.value = parseInt(harga.value) * qty.value;
        //             }          
        //         })
            
        // });

        $(document).on('change','.selected_product', function(){
            console.log('row produk');
            let produkval = $(this).val();

                var url = "{{URL('/getdataproduk')}}";
                var dltUrl = url+"/"+produkval;
                $.ajax({
                    url: dltUrl,
                    type:'GET',
                    success:function(response){
                        var response = JSON.parse(response);
                        console.log(response);
                            
                        harga.value = `${response[0]['harga_produk']}`;
                        rowharga.value = parseInt(harga.value) * qty.value;
                    }          
                })
            
        });


        // $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') } });
        // $('#quantity').on('change', function(){
        //     console.log('row quantity');
        //     rowharga.value = parseInt(harga.value) * qty.value;
            
        // });

        $(document).on('change','#quantity', function(){
            console.log('row quantity');
            rowharga.value = parseInt(harga.value) * qty.value;
            
        });

        //ADD ROW
            var table = $('#simulationRow').DataTable();

            //var counter = 1;
         
            $('#addRow').on( 'click', function () {
                var html = '<tr>';
                html += '<td class="left strong"><div class=""><select class="form-control selected_product"  id="select_produk" required=""  name="selected_product" ><option disabled selected="">Enter Produk</option>@foreach($produk as $p)<option value="{{ $p->id }}">{{$p->nama_produk}}</option>@endforeach</select></div></td>';
                html +='<td class="center" style="width:10%;"><input id="quantity" type="number" min="0" class="form-control @error('quantity') is-invalid @enderror" name="quantity" required  placeholder="" ></td>';
                html +='<td class="right"><input id="hargajual" type="number" min="0" class="form-control @error('hargajual') is-invalid @enderror" name="hargajual"  placeholder="" disabled=""></td>';
                html +='<td class="right"><input id="totalrowharga" type="number" min="0" class="form-control @error('totalrow') is-invalid @enderror" name="totalrowharga" required  placeholder="" disabled=""></td>';
                html += '</tr>';
                // $('#simulationRow tbody').prepend(html);

                // var rowHtml = $("#simulationRow").find("tbody>tr")[0].outerHTML;
                // console.log(rowHtml);
                // table.row.add($(rowHtml)).draw(false);

                table.row.add($(html)).draw(false);


                // $('#simulationRow tbody>tr:last #select_produk').text('').change();
                //$('#simulationRow tbody>tr:last #select_produk').val('');
                //$("td.select_produk", row).empty();
                

                // //CARA ASLI
                // // table.row.add( 
                // //     [
                // //     counter +'.1',
                // //     counter +'.2',
                // //     counter +'.3',
                // //     counter +'.4',
                // //     counter +'.5'
                    
                // //     ]
                // // ).draw( false );
         
                // counter++;
            });
         
            // Automatically add a first row of data
            //$('#addRow').click();

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
            });

            
    });

</script>
@endsection