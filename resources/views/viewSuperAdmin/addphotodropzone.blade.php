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


<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>



<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, selamat datang!</h4>
                <span>Tambahkan Foto Produk</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{!! url('/ProductTable'); !!}">Daftar Produk</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambahkan Foto Produk</a></li>
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
                <h4 class="card-title">Tambahkan Foto Produk </h4><br>
            </div>

            <div class="card-body">

              <div class="informasiproduk">

                <table>
                  <tr>
                    <th>ID Produk</th>
                    <td style="padding-right: 20px;padding-left: 20px;">:</td>
                    <td>{{ $produk['id'] }}</td>
                  </tr>
                  <tr>
                    <th>Nama Produk</th>
                    <td style="padding-right: 20px;padding-left: 20px;">:</td>
                    <td>{{ $produk['nama_produk'] }}</td>
                  </tr>
                </table>
                <br>
              </div> 
                
<div class="compose-content">
    <h5 class="mb-4"><i class="fa fa-paperclip"></i> Attachment</h5>

     <form action="{{ url( '/dropzone/store/' . $produk -> id ) }}" method="post" files="true" enctype="multipart/form-data" class="dropzone" id="dropzoneForm">                                              
        @csrf                                                             
        <div class="fallback">
            <input name="file[]" type="file" id="filephoto" multiple hidden="">
        </div>                                                                  
    </form>

    <div align="center">
      <button type="submit" class="btn btn-primary" id="submit-all" style="margin-top: 10px;">Submit Images</button>
    </div>

    <!-- <div class="panel-heading">
      <br><h5 class="mb-4"><i class="fa fa-paperclip"></i> Uploaded Image</h5>
    </div>

    <div class="panel-body" id="uploaded_image">
        <img src="'.asset('images/' . $image->getFilename()).'"  width="175" height="175" style="height:175px;" />
        <button type="button" class="btn btn-link remove_image" id="'.$image->getFilename().'">Remove</button>
    </div> -->

</div>



            </div>
        </div>
    </div>
</div>


<div class="col-lg-12">
  <div class="card">
          <div class="card-header">
              <h4 class="card-title">Foto</h4><br>
          </div>
          
          <div class="card-body">
             
                @foreach ($galpro as $object)
                                 
                
                <table>
                  <tr>
                    <td><img src="{{ asset($object->foto) }}"width="300px"></th>
                    <td><a type='button' class='btn btn-link remove_image' href="{{url('deleteImage/'.$object->id_galeri)}}">Remove</a></td>
                    <td><a href='{{ asset($object->foto)}}' target='_blank'>Lihat Gambar Full</a></td>
                  </tr>
                  <tr>
                    
                  </tr>
                </table>
                @endforeach
                
                {{-- <a href='{{ asset($b->bukti_bayar) }}' target='_blank'>Lihat Gambar Full</a> --}}
           
           
          </div>
  </div>
</div>








@endsection
 
@section('script')
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script> --> -->
<script>

    Dropzone.options.dropzoneForm = {
	    autoProcessQueue : false,
      addRemoveLinks: true,
	    acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg", 
      success: function(file, response){
        //alert(response);
        Swal.fire(
              'Success!',
              'Upload Berhasil',
              'success'
            )
      },
	    init:function(){
	      	var submitButton = document.querySelector("#submit-all");
	      	myDropzone = this;

	      	submitButton.addEventListener('click', function(){
	        	myDropzone.processQueue();
            //load_images();
	      	});

	      	this.on("complete", function(){
            //alert("UPLOAD BERHASIL")
            // Swal.fire(
            //   'Success!',
            //   'Upload Berhasil',
            //   'success'
            // )
	        	if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0){
	          		var _this = this;
	          		_this.removeAllFiles();
	        	}
	      	});
	    }
	};

    //NGGAK JADI PAKAI AJAX DI BAWAH :) NGGAK PERLU
  	function load_images(){
      var urlst = "{{ url( '/dropzone/store/' . $produk -> id ) }}";
      var photo = $('#filephoto').val();
          console.log("terpanggil");
      $.post(urlst,{ _token: "{{ csrf_token() }}", foto:photo },function(result){
            console.log(result);
        });
      //CARA 2 JUGA BERHASIL
      //$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') } });
	    // $.ajax({
      //     url:urlst,
      //     type:'POST',
      //     // data: $('#dropzoneForm').serialize(),
      //     data: {
      //       foto:photo
		  //     },
      //     headers: {
			//       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			//     },
	    //   	success:function(data){
      //       var response = data;
      //           console.log(response);
      //       // $(".alert-success").css("display", "block");
      //       // $(".alert-success").append("Upload Berhasil");
      //       $('.alert-success').css('display', 'block');
      //       $('.alert-success').html(data.message);
      //       $('.alert-success').addClass(data.class_name);
	    //     	$('#uploaded_image').html(data.uploaded_image);
      //       //$('#uploaded_image').html(data);
	    //   	}, error: function (error) {
      //     console.log('upload Error', error);
      //     alert('Something went wrong');
      //     }
	    // })


  	}

    function load_images_asli(){
	    $.ajax({
	      	url:"{{ route('dropzone.fetch') }}",
	      	success:function(data){
	        	$('#uploaded_image').html(data);
	      	}
	    })
  	}



</script>
@endsection