@extends('layouts.backAdmin.layout.defaultSuperAdmin')

@section('content')
<div class="compose-content">
    <h5 class="mb-4"><i class="fa fa-paperclip"></i> Attachment</h5>
   <!--  <form action="{{ url( '/dropzone/storecoba') }}" method="POST" files="true" enctype="multipart/form-data" class="dropzone" id="dropzoneForm">

        @csrf
        //<input hidden id="file" name="file"/>
        <div class="fallback">
            <input name="file[]" type="file" multiple="multiple" hidden="">

        </div>
        <div align="center">
            <button type="submit" class="btn btn-primary" id="submit-all" style="margin-top: 10px;">Submit Images</button>
        </div>
    </form> -->

    <form id="dropzoneForm" class="dropzone" action="{{ route('dropzone.upload') }}">
            @csrf
    </form>
          	<div align="center">
            	<button type="button" class="btn btn-info" id="submit-all">Upload</button>
          	</div>

          	<div class="panel-heading">
		        <h3 class="panel-title">Uploaded Image</h3>
		    </div>
		    <div class="panel-body" id="uploaded_image">
          	</div>
@endsection
 
@section('script')
<!-- <script type="text/javascript">
Dropzone.options.dropzoneForm = { 
    paramName: "file",
    autoProcessQueue : false,
    acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",
    uploadMultiple: true,
    parallelUploads: 10,
    maxFiles: 10,

    init:function(){
        var submitButton = document.getElementById('submit-all');   
        myDropzone = this;

        submitButton.addEventListener('click', function(){
            myDropzone.processQueue();
        });

        this.on("complete", function(){
            if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0){
                var _this = this;
                _this.removeAllFiles();
            }
            load_images();
        });
    }
};

load_images();

function load_images(){
    $.ajax({
        url:"{{ route('dropzone.fetch') }}",
        success:function(data) {
            $('#uploaded_image').html(data);
        }
    })
}

$(document).on('click', '.remove_image', function(){
    var name = $(this).attr('id');
    $.ajax({
        url:"{{ route('dropzone.delete') }}",
        data:{name : name},
        success:function(data){
            load_images();
        }
    })
});
// var buttons = document.querySelectorAll('#editt');

// buttons.forEach(function(button) {
//   if (button.value==null) {
//     button.style.display = "none"
//   }
// });

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script> -->
<script>
    Dropzone.options.dropzoneForm = {
	    autoProcessQueue : false,
	    acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",

	    init:function(){
	      	var submitButton = document.querySelector("#submit-all");
	      	myDropzone = this;

	      	submitButton.addEventListener('click', function(){
	        	myDropzone.processQueue();
	      	});

	      	this.on("complete", function(){
	        	if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0){
	          		var _this = this;
	          		_this.removeAllFiles();
	        	}
	        	load_images();
	      	});
	    }
	};

  	load_images();

  	function load_images(){
	    $.ajax({
	      	url:"{{ route('dropzone.fetch') }}",
	      	success:function(data){
	        	$('#uploaded_image').html(data);
	      	}
	    })
  	}

  	$(document).on('click', '.remove_image', function(){
    	var name = $(this).attr('id');
    	$.ajax({
      		url:"{{ route('dropzone.delete') }}",
      		data:{name : name},
      		success:function(data){
        		load_images();
      		}
    	})
  	});

</script>
@endsection