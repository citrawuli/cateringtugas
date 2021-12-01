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
                <li class="breadcrumb-item"><a href="{!! url('/PemesananTable'); !!}">Daftar Permintaan</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Formulir Edit Permintaan</a></li>
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
                    <form method="POST" action="{{ url('/StorePemesanan') }}" class="step-form-horizontal">
                        @csrf
                        <div>
            @foreach( $pemesanan as $key =>$order )
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

                                    <br><h4>Data Pembeli untuk Dihubungi</h4>
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
                                        <label for="alamat_lengkap" class="col-sm-3 col-form-label">{{ __('Alamat lengkap*') }}</label>

                                        <div class="col-md-6">
                                            <input rows="5" class="form-control @error('alamat_lengkap') is-invalid @enderror" name="alamat_lengkap"  placeholder="Alamat Lengkap" value="{{ $order->alamat_lengkap_pembeli }}">
                                        </div>
                                        
                                    </div>

                                    <div class="form-group row">
                                        <label for="product" class="col-sm-3 col-form-label">{{ __('Untuk tanggal*') }}</label>

                                        <div class="col-md-6">
                                            <input class="datepicker-default form-control @error('untuk_tanggal') is-invalid @enderror" id="datepicker" name="untuk_tanggal" placeholder="Pilih Tanggal" value="{{ date('d-M-Y', strtotime($order->untuk_tanggal)) }}" >
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
                                        <label for="product" class="col-sm-3 col-form-label">{{ __('Pengambilan') }}</label>

                                        <div class="col-md-6">
                                            {{-- <label class="radio-inline mr-3"><input type="radio" value="1" name="optionkirim"> Diambil</label>
                                            <label class="radio-inline mr-3"><input type="radio" value="2" name="optionkirim"> Dikirim Aisya</label> --}}
                                           
                                                @if ($order->pengambilan == 1)
                                                    <label class="radio-inline mr-3"><input type="radio" value="1" name="optionkirim" checked="true"> Diambil</label>
                                                    <label class="radio-inline mr-3"><input type="radio" value="2" name="optionkirim"> Dikirim Aisya</label>
                                                @else
                                                <label class="radio-inline mr-3"><input type="radio" value="1" name="optionkirim" > Diambil</label>
                                                <label class="radio-inline mr-3"><input type="radio" value="2" name="optionkirim" checked="true"> Dikirim Aisya</label>
                                                @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="product" class="col-sm-3 col-form-label">{{ __('Keterangan') }}</label>

                                        <div class="col-md-6">
                                            <input rows="5" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ $order->keterangan }}"  placeholder="Keterangan(opsional)">
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
                                                            <option value="{{ $p->id }}">{{$p->nama_produk}}</option>
                                                        @endif
                                                        @endforeach</select></div></td>
                                                    <td class="center" style="width:12%;"><input id="quantity{{ $loop->iteration }}" type="number" min="1" class="form-control @error('+quantity+') is-invalid @enderror" name="quantity[]" required  value="{{ $det_pem->pivot->kuantitas ?: 'null' }}" ></td>
                                                    
                                                    <td class="right"><input id="hargajual{{ $loop->iteration }}" type="number" min="0" class="form-control @error('+hargajual+') is-invalid @enderror" name="hargajual[]" disabled="" 
                                                        value="{{ $det_pem->harga_produk ?: 'null' }}"></td>
                                                    <td class="right"><input id="totalrowharga{{ $loop->iteration }}" type="number"  class="form-control @error('+totalrow+') is-invalid @enderror totalrowharga" name="totalrowharga[]" value="{{ $det_pem->pivot->sub_total ?: 'null'}}" required readonly></td>
                                                </tr>
                                                <input type="text" value="{{ $loop->count }}" hidden id="iteration">
                                            @endforeach
                                            
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
                                                            <td class="right" >
                                                                {{-- <input id="discount" type="number" min="0" class="discount form-control @error('discount') is-invalid @enderror" 
                                                                name="discount" required  placeholder="0" style="width:88%; display:inline; white-space:nowrap; margin-left: 5px;">
                                                                 --}}
                                                                 
                                                                <div class="row">
                                                                    <label for="money-radio" class="radio-inline mr-3"><input type="radio" id="money-radio" name="discount"/> Rp Off</label>
                                                                    <input type="number" class="discount control-group" id="money-text" name="money_off" style="margin-left: 5px" placeholder="dalam rupiah"/>
                                                                </div>

                                                                <div class="row">
                                                                    <label for="percent-radio" class="radio-inline mr-3"><input type="radio" id="percent-radio" name="discount"/> % Off</label>
                                                                    <input type="number" class="discount control-group" id="percent-text" name="percent_off" style="margin-left: 14px" placeholder="dalam persen" />
                                                                </div>
                                                            
                                                            </td>
                                                        </tr>
                                                        {{-- <tr>
                                                            <td class="left"><strong>PPN (10%)</strong></td>
                                                            <td class="right">Rp <p style="display:inline" id="ppn">0</p></td>
                                                        </tr> --}}
                                                        <tr>
                                                            <td class="left"><strong>Total</strong></td>
                                                            <td class="right"><strong>Rp <p style="display:inline" id="total_amount" name="total_amount">0</p></strong><br></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                    
                            </section>


            @endforeach
                            
                            <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update Product') }}
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

    $(document).ready(function() {
        //TABLE
            $('#simulationRow').dataTable({searching: false});
            

        //DATE
        // $('.datepicker-default').datetimepicker({
        //     // MYTODO: change locale depending on current user locale.
        //     locale: 'id',
        //     format: 'DD-MM-YY',
        //     useCurrent: false
        // });
        
        //MASK 
            //$('#discount').mask('#.##0', {reverse: true});
        
        //data
        var iter = $('#iteration');
        var counteriteration=parseInt(iter.val());
        alert(counteriteration);
       
       
        
        //ADD ROW
            var table = $('#simulationRow').DataTable();
            var p = <?php echo json_encode($produk);?>;
            var counter = 1;
            
        
            $('#addRow').on( 'click', function () {
                
                
                // console.log('id '+id);
                
                var id=counteriteration+1;

                var html = '<tr id="'+id+'">';
                html += '<td class="left strong"><div class=""><select class="form-control selected_product"  id="select_produk'+id+'" required=""  name="select_produk[]" ><option disabled selected="">Enter Produk</option>@foreach($produk as $p)<option value="{{ $p->id }}">{{$p->nama_produk}}</option>@endforeach</select></div></td>';
                html +='<td class="center" style="width:12%;"><input id="quantity'+id+'" type="number" min="1" class="form-control @error('+quantity+') is-invalid @enderror" name="quantity[]" required   ></td>';
                html +='<td class="right"><input id="hargajual'+id+'" type="number" min="0" class="form-control @error('+hargajual+') is-invalid @enderror" name="hargajual[]" disabled=""></td>';
                html +='<td class="right"><input id="totalrowharga'+id+'" type="number"  class="form-control @error('+totalrow+') is-invalid @enderror totalrowharga" name="totalrowharga[]" required readonly></td>';
                html += '</tr>';

                table.row.add($(html)).draw(false);
                counteriteration++;
                
                hitung(id);
                
            });

            function hitung(id){

                let harga= $("#hargajual"+id);
                // console.log("harga");
                // console.log(harga);
                let qty= $("#quantity"+id);
                // console.log("qty "+harga);
                let rowharga= $("#totalrowharga"+id);
                let produk= $("#select_produk"+id);
                //dont use class .select okayyy it wil ruined all
                $(document).on('change','#select_produk'+id, function(){
                    console.log('row select produk');
                    let produkval = $(this).val();
                    // console.log("val"+produkval);
                        var a = "{{URL('/getdataproduk')}}";
                        var dltUrl = a+"/"+produkval;
                        $.ajax({
                            url: dltUrl,
                            type:'GET',
                            success:function(response){
                                var response = JSON.parse(response);
                                // console.log("response");
                                // console.log(response);
                                
                                var hg = `${response[0]['harga_produk']}`;
                                harga.val(hg);
                                // console.log("hargaa");
                                // console.log(hg);

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
                //console.log('row calc');
                sbtotal=0;
                $('.totalrowharga').each(function() {
                    sbtotal += parseInt($(this).val());
                });
                
                $('#sub_total').html(sbtotal);
                $('#sub_total_todb').html(sbtotal);
                discount=0;
               //discount = $('.discount').val(); this is without radio button
                if ($('#money-radio').is(':checked')) {
                    $('#percent-text').val(null);
                    discount = $('#money-text').val();
                    $('#discount_todb').val(discount);
                }
                else if($('#percent-radio').is(':checked')) {
                    $('#money-text').val(null);
                    discount = ($('#percent-text').val()/100)*sbtotal;
                    $('#discount_dbinpercent').val(discount);


                }
               
                
                
                ta=parseInt(sbtotal-discount);
                // alert(isNaN(discount));
                // alert(isNaN(ta));
                $('#total_amount').html(ta);
                $('#product_total').val(ta);
                
            }

            $(document).on('input','.discount', function(){
                console.log('row discount');
                hitung_calc();
                    
            });

        
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
        
        //gakbisa
            // $(document).on('click', '#searchandpaste', function(){
            //     $('#nama_lengkap').find('input').autocomplete();
            //     var u = "{{URL('/cariUser')}}";
            //         $.ajax({
            //             type:'GET',
            //             url:u,
            //             success:function(response){
            //                 // var response = JSON.parse(response);
            //                 // console.log(response);

            //                 //arr to obj
            //                 var userArr = response;
            //                 var userData = {};
            //                 var userData2 = {};
            //                 for(var i=0; i<userArr.length; i++){
            //                     userData[userArr[i].name] = null;
            //                     userData2[userArr[i].name] = userArr[i];
            //                 }
            //                 //arr to obj end
            //                 console.log(userData2);
                            
            //             }
            //         });

            //         $('#nama_lengkap').autocomplete({
            //                     minLength: 2,
            //                     source:response,
            //                     // success:function(reqdata){
            //                     //     console.log("success reqdata");
            //                     //     console.log(reqdata);
                                    
            //                     //     $("#alamat_lengkap").val(userData2[reqdata]['alamat_user'])
            //                     // }
            //                 });
            // });
        
        //gak bisa
            // $( "#nama_lengkap" ).find('input').autocomplete({
            //     source: function( request, response ) {
            //         var u = "{{URL('/cariUser')}}";
            //         $.ajax({
            //             url:u,
            //             type: 'get',
            //             success: function( data ) {
            //                 response( data );
            //             }
            //         });
            //     },
            //     select: function (event, ui) {
            //         // Set selection
            //         $('#alamat_lengkap').val(ui['alamat_user'); // display the selected text
            //         // $('#selectuser_id').val(ui.item.value); // save selected id to input
            //         return false;
            //     },
            //     focus: function(event, ui){
            //         $('#alamat_lengkap').val(ui.item.alamat_user);
            //         // $( "#selectuser_id" ).val( ui.item.value );
            //         return false;
            //     },
            // });
        //end
        
        
        // $('#nama_lengkap').select2({
        //     placeholder: 'Cari...',
        //     ajax: {
        //         url: "{{URL('/cariUser')}}",
        //         dataType: 'json',
        //         delay: 250,
        //         processResults: function (data) {
        //             return {
        //                 results:  $.map(data, function (item) {
        //                 return {
        //                     id: item.id,
        //                     text: item.name,
        //                 }
        //             })
        //         };
        //     },
        //         cache: true
        //     }
        // });
            
         
        
        
        
        
        //Automatically add a first row of data
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
                hitung_calc();
            });

            
   });

</script>
@endsection