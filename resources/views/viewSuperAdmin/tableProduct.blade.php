@extends('layouts.backAdmin.layout.defaultSuperAdmin')

@section('content')
<style type="text/css">
	#galeri,#kosong{
		display: none;
	}
</style>
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, selamat datang!</h4>
                <span>Product Table</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Tabel</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Daftar Produk</a></li>
            </ol>
        </div>
    </div>

    @if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif


    
    <div class="row">

        <div class="col-6">
            <div class="card text-white bg-primary">
                <div class="card-header">
                    <h5 class="card-title text-white">Action Card</h5>
                </div>
                <div class="card-body mb-0">
                    <!-- <button type="button" class="btn light btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Add User</button> -->
                    <a href="{!! url('/ViewFormProduct'); !!}" class="btn light btn-danger">Tambah Produk</a>
                    <a href="{{ url('/TrashedProduct')}}" class="btn btn-primary light btn-card"><i class="fa fa-trash" style="margin-right: 10px;"></i>Lihat Tong Sampah</a> 
                </div>
            </div>
        </div>

        <div class="col-12">
            @if (Session::has('message'))
            <div class="alert alert-success alert-dismissible fade show">                                   
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4">
                </polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>  
                <strong>Success! </strong>{{ Session::get('message') }}
                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
            </div>
            @endif
        </div>

        <div class="col-12">
            <br>
            <div class="card">
                <div class="card-header text-white bg-danger">
                    <h4 class="card-title">Daftar Produk</h4>
                </div><br>

                <div class="btn-group btn-group-sm" style="margin-left: 5%; margin-right:5%">
                    <button id="rice" class="btn light btn-secondary filter">Paket Rice Box</button>
                    <button id="snack" class="btn light btn-secondary filter">Paket Snack Box</button>
                    <button id="tumpeng" class="btn light btn-secondary filter">Paket Tumpeng Hantaran</button>
                    <button id="khusus" class="btn light btn-secondary filter">Paket Khusus Ekonomis</button>
                    <button id="aqiqah" class="btn light btn-secondary filter">Paket Aqiqah</button>
                    <button id="ramadhan" class="btn light btn-secondary filter">Paket Ramadhan</button>
                    <button id="lebaran" class="btn light btn-secondary filter">Paket Lebaran</button>
                    <button id="covid" class="btn light btn-secondary filter">Paket Covid-19</button>
                    <button id="wedding" class="btn light btn-secondary filter">Paket Wedding</button>
                    <button id="pemerintahan" class="btn light btn-secondary filter">Paket Pemerintahan</button>
                    <button id="pabrik" class="btn light btn-secondary filter">Paket Corporate/Pabrik</button>
                    <button id="allpack" class="btn light btn-secondary filter">Semua</button>
                </div>
                <br> 

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="producttable" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Kategori</th>
                                    <th>Created At</th>
                                    <th>Nama</th>
                                    <th>Tipe</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Rating</th><!-- 
                                    <th>Deleted At</th>
                                    <th>Created At</th>
                                    <th>Updated At</th> -->
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $product as $prod )
                                <tr>
                                  <td>{{ $prod->id }}</td>
                                  <td>{{ $prod->nama_kategori }}</td>
                                  <td>{{ $prod->created_at }}</td>
                                  <td>{{ $prod->nama_produk }}</td>
                                  <td>{{ $prod->tipe_produk ?? '-'}}</td>
                                  <td>{{ $prod->deskripsi_produk ?? '-' }}</td>
                                  <td>@currency($prod->harga_produk)</td>
                                  <td>{{ $prod->rating_produk ?? '-'}}</td><!-- 
                                  <td>{{ $prod->deleted_at }}</td>
                                  <td>{{ $prod->created_at }}</td>
                                  <td>{{ $prod->updated_at }}</td> -->
                                  <td>
                                    
                                    <div class="d-flex">
                                        
                                        {{-- <span data-placement="top" title="Show More Detail" data-toggle="tooltip3" >
                                        <a href=".bd-example-modal-lg"
                                            data-toggle="modal" 
                                            data-target="#modaldetail{{ $prod->id }}"
                                            data-title="Detail Produk {{ $prod->id }}"
                                            class="btn btn-info shadow btn-xs sharp mr-1">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        </span> --}}
                                       
                                        <div id="modaldetail{{ $prod->id }}" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">More Detail</h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        
                                                        
                                                        <table >
                                                            <thead>
                                                                <tr>
                                                                    <th>Deleted At</th>
                                                                    <th>Created At</th>
                                                                    <th>Updated At</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <center>
                                                                    <p><strong>ID Produk : </strong><span>{{ $prod->id }}</span></p>
                                                                    <p><span>{{ $prod->nama_kategori }}</span></p>
                                                                    <p><span>{{ $prod->nama_produk }}</span></p><br>
                                                                    <p><a href="#collapseExample" name="{{ $prod->id }}" id="lihat{{ $prod->id }}" data-toggle="collapse" role="button" class="lihat">---Lihat Foto Produk---</a></p>
                                                                    
                                                                    
                                                                    <p><a href="#" name="" id="kosong">---Tidak Ada Foto Produk---</a></p>
                                                                    <!-- bawah ini bikin uncaught bolak balik pake public path hmmm ayo ngakali yang atas!!!-->
                                                                    <!-- <p><a href="#" onclick="get_images('{{ $prod->id }}');" id="lihat">---Lihat Foto Produk---</a></p> -->
                                                                    <div class="collapse" id="collapseExample">
                                                                        <div id="galeri{{ $prod->id }}" class="card card-body">
                                                                        </div>
                                                                    </div>
                                                                </center>
                                                                
                                                                <tr>
                        
                                                                  <td>{{ $prod->deleted_at }}</td>
                                                                  <td>{{ $prod->created_at }}</td>
                                                                  <td>{{ $prod->updated_at }}</td>
                                                                  
                                                                </tr>
                                                                     
                                                            </tbody>

                                                        </table>
                                                       
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- <span data-placement="top" title="Add Photo" data-toggle="tooltip3" >
                                            <a href=".bd-example-modal-lg"
                                            data-toggle="modal" 
                                            data-target="#modaladdproduk{{ $prod->id }}"
                                            data-title="Add Produk Photo{{ $prod->id }}"
                                            class="btn btn-warning shadow btn-xs sharp mr-1">
                                            <i class="flaticon-381-photo-camera-1"></i>
                                        </a>
                                        </span> -->

                                        <a href="{{ url('/dropzoneview/'. $prod->id)}}" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="flaticon-381-photo-camera-1" data-toggle="tooltip" data-placement="top" title="Add Photo"></i></a> 

                                        <a href="{{ url( '/EditProduct/' . $prod->id ) }}" class="btn btn-primary shadow btn-xs sharp mr-1" data-toggle="tooltip" data-placement="top" title="Edit Product" id="editt"><i class="fa fa-pencil"></i></a>
                                       
                                        <a href="{{ url( '/DeleteProduct/' . $prod->id ) }}" class="btn btn-danger shadow btn-xs sharp" data-toggle="tooltip2" data-placement="top" title="Soft Delete Product"><i class="fa fa-trash"></i></a>
                                    </div>
                                    

                                  </td>
                                </tr>
                                @endforeach        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('script')
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();

    $('[data-toggle="tooltip2"]').tooltip();

    $('[data-toggle="tooltip3"]').tooltip();

    var dataTable= $('#producttable').DataTable( {
        dom: 'lBfrtip',
        // Bfrtip you need to add l on your dom. See this for ref: https://datatables.net/reference/option/dom.
        "columnDefs": [
            {
                "targets": [ 2 ],
                "visible": false,
                "searchable": false
            },
        ],
        order: [[ 2, "desc" ]]
    });
    $('#rice').on('click', function () {
        dataTable.columns(1).search("Paket Rice Box", true, false, true).draw();
    });
    $('#snack').on('click', function () {
        dataTable.columns(1).search("Paket Snack Box", true, false, true).draw();
    });
    $('#tumpeng').on('click', function () {
        dataTable.columns(1).search("Paket Tumpeng Hantaran", true, false, true).draw();
    });
    $('#khusus').on('click', function () {
        dataTable.columns(1).search("Paket Khusus", true, false, true).draw();
    });
    $('#aqiqah').on('click', function () {
        dataTable.columns(1).search("Paket Aqiqah", true, false, true).draw();
    });
    $('#lebaran').on('click', function () {
        dataTable.columns(1).search("Paket Lebaran", true, false, true).draw();
    });
    $('#ramadhan').on('click', function () {
        dataTable.columns(1).search("Paket Ramadhan", true, false, true).draw();
    });
    $('#covid').on('click', function () {
        dataTable.columns(1).search("Paket Covid-19", true, false, true).draw();
    });
    $('#pemerintahan').on('click', function () {
        dataTable.columns(1).search("Paket Pemerintahan", true, false, true).draw();
    });
    $('#pabrik').on('click', function () {
        dataTable.columns(1).search("Paket Corporate/Pabrik", true, false, true).draw();
    });
    $('#wedding').on('click', function () {
        dataTable.columns(1).search("Paket Wedding", true, false, true).draw();
    });
    $('#allpack').on('click', function () {
        dataTable.columns(1).search("").draw();
    });
    

    


});
</script>

<script>
    //use one click function is good but with document upfront it will effect the entire document. Dont use document this time :')!!!
$(document).ready(function(){
    $(document).on('click', '.lihat', function(e){
    //$('#lihat').click(function(){
        //e.preventDefault();
        // $( "#lihat" ).unbind('click');
        var idpro = $(this).attr('name');
        console.log("masuk lihat");
        //console.log(idpro);
        var url = "{{URL('/getModalPhotoProduct')}}";
        var urlst = url+"/"+idpro;
        // //var urlst = "{{ url('/getModalPhotoProduct/'. $prod->id)}}";
        
        $.ajax({
            type: 'GET',
            url:urlst,
            success: function (data) {
                var response = data;
                console.log(response);

                //showgal(response);
                if (response == '') { 
                    console.log("Array is empty!") 
                    //alert("Tidak ada gambar!");
                    swal({
                        title: "Gambar Tidak Ada!",
                        text: "Hei, tambahkan gambar terlebih dahulu."
                    });
                }
                
                $("#galeri"+idpro).css("display","block");
                
                //$("#galeri").html(data);
                $.each(response, function(index, obj){
                    var tr = $("<tr></tr>");
                    var base_url = '{{ url("") }}';
                    var a = base_url+obj.foto;
                    var b = '{{asset('+obj.foto+')}}';
                    console.log(b);

                    // create a new image tag, setting the src and alt text thanks https://laracasts.com/discuss/channels/laravel/display-image-in-view-with-ajax
                    var img = document.createElement("img");
                    img.src = a; // http://yoursite.com/img/image.jpg
                    img.alt = 'Product Image';
                    img.width ='200';
                    img.height ='200';

                    //add the newly created image to an existing div on the page
                    var targetDiv = document.getElementById("galeri"+idpro); 
                    console.log(targetDiv);
                    targetDiv.append(img); 

                    //BISA
                    //tr.append("<td><img src='{{asset("/images/1627130088-about-background.jpg")}}' width='175' height='175' /></td>");
                    //NGGAK BISA, nggak ke generate a atau obj.foto jadi url, broken image, url 404
                    //tr.append("<td><img src='"+b+"' class='rounded-circle mb-4'/></td>");
                    //tr.append("<td><img src='{{ asset("+a+") }}' class='rounded-circle mb-4'/></td>");
                    //tr.append("<img href='{{ public_path("+a+")}}' width='175' height='175' style='height:175px;'/>");
                    tr.append("<td><button type='button' class='btn btn-link remove_image' id='"+obj.id_galeri+"' name='"+obj.foto+"'>Remove</button></td>");
                    //tr.append("<td>"+a+"</td>");
                    tr.append("<td><a href='"+a+"' target='_blank'>Lihat Gambar Full</a></td>");
                    //CONTOH
                    // tr.append("<td>"+ obj.first_name +"</td>");
                    // tr.append("<td>"+ obj.last_name +"</td>");
                    $("#galeri"+idpro).append(tr);
                    //$("#galeri").html(img);
                });
                
            },
            error: function() { 
                console.log(data);
            }
        });
    });

    // $(".ignore-click").click(function(){
    //     return false;
    // })

    
    //gak jadi pake onclick getimage, ada masalah uncaught error
    function get_images(id){
        //alert(id);
        var idpro=id;
        
        var url = "{{URL('/getModalPhotoProduct')}}";
        var urlst = url+"/"+idpro;
        // //var urlst = "{{ url('/getModalPhotoProduct/'. $prod->id)}}";
        
        $.ajax({
            type: 'GET',
            url:urlst,
            success: function (data) {
                var response = data;
                console.log(response);
                $("#galeri").css("display","block");
                $("#lihat").css("display","none");
                //$("#galeri").html(data);
                $.each(data, function(index, obj){
                    var tr = $("<tr></tr>");
                    var a = obj.foto;
                    tr.append("<td><img src='{{ asset("+a+") }}' width='175' height='175' style='height:175px;'/></td>");
                    // tr.append("<img href='{{ public_path("+a+")}}' width='175' height='175' style='height:175px;'/>");
                    tr.append("<td><button type='button' class='btn btn-link remove_image' id='"+obj.id_galeri+"' name='"+a+"'>Remove</button></td>");
                    tr.append("<td><a href='"+a+"'>Lihat Gambar </a></td>");
                    // tr.append("<td>"+ obj.first_name +"</td>");
                    // tr.append("<td>"+ obj.last_name +"</td>");
                    // <div class="col-md-2" style="margin-bottom:16px;" align="center">
                    // //         
                    // //         <button type="button" class="btn btn-link remove_image" id="'.$image->getFilename().'">Remove</button>
                    // //     </div>

                    $("#galeri").append(tr);
                });

                
                // var your_html = "";
                // $.each(obj['getstamps'], function (key, val) {
                // your_html += "<p>My Value :" +  val + ") </p>"
                // });
                // $("#data").append(you_html); //// For Append
                // $("#mydiv").html(your_html)   //// For replace with previous one
            },
            error: function() { 
                console.log(data);
            }
        });
  	}
});
</script>

<script>
    $(document).on('click', '.remove_image', function(){
        var name = $(this).attr('name');
        var id = $(this).attr('id');
        console.log("masuk remove");
        // console.log(name);
        // console.log(id);
        $.ajax({
            url:"{{ route('dropzone.delete') }}",
            data:{name : name, id:id},
            success:function(data){
                // load_images();
                //$(this).closest("tr").remove();
            }
        })
    });
</script>
@endsection