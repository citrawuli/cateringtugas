@extends('layouts.backAdmin.layout.defaultSuperAdmin')

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, selamat datang!</h4>
                <span>Tong Sampah Kategori</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/')}}">Kalender</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Kalender Orderan</a></li>
            </ol>
        </div>
    </div>

    @if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif


    
    <div class="row">

        {{-- <div class="col-6">
            <div class="card text-white bg-primary">
                <div class="card-header">
                    <h5 class="card-title text-white">Action Card</h5>
                </div>
                <div class="card-body mb-0">
                    <!-- <button type="button" class="btn light btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Add User</button> -->
                    
                </div>
            </div>
        </div> --}}

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
        
        <div class="row">
            {{-- <div class="col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-intro-title">Calendar</h4>

                        <div class="">
                            <div id="external-events" class="my-3">
                                <p>Drag and drop your event or click in the calendar</p>
                                <div class="external-event" data-class="bg-primary"><i class="fa fa-move"></i>New Theme Release</div>
                                <div class="external-event" data-class="bg-success"><i class="fa fa-move"></i>My Event
                                </div>
                                <div class="external-event" data-class="bg-warning"><i class="fa fa-move"></i>Meet manager</div>
                                <div class="external-event" data-class="bg-dark"><i class="fa fa-move"></i>Create New theme</div>
                            </div>
                            <!-- checkbox -->
                            <div class="checkbox custom-control checkbox-event custom-checkbox pt-3 pb-5">
                                <input type="checkbox" class="custom-control-input" id="drop-remove">
                                <label class="custom-control-label" for="drop-remove">Remove After Drop</label>
                            </div>
                            <a href="javascript:void()" data-toggle="modal" data-target="#add-category" class="btn btn-primary btn-event w-100">
                                <span class="align-middle"><i class="ti-plus"></i></span> Create New
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div> --}}


            <div class="col-xl-9">
                <div class="card">
                    <div class="card-body">
                        <div id="calendar" class="app-fullcalendar"></div>
                    </div>
                </div>
            </div>
            <!-- BEGIN MODAL -->
            <div class="modal fade none-border" id="event-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><strong>Add New Event</strong></h4>
                        </div>
                        <div class="modal-body"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success save-event waves-effect waves-light">Create
                                event</button>

                            <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Add Category -->
            <div class="modal fade none-border" id="add-category">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><strong>Add a category</strong></h4>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label">Category Name</label>
                                        <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">Choose Category Color</label>
                                        <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                            <option value="success">Success</option>
                                            <option value="danger">Danger</option>
                                            <option value="info">Info</option>
                                            <option value="pink">Pink</option>
                                            <option value="primary">Primary</option>
                                            <option value="warning">Warning</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('script')
<script>
   

    var a = function getEvents(){
        $.ajax({
            url: '{{ url("OrderCalendar")}}',
            type: 'GET', // Send post data
            data: {type: 'fetch',
                   branch: $('#branch').val(),
                   inst: $('#instrument').val()},
            async: false,
            success: function(s){
                json_events = s;
            }
        })
    }

    document.addEventListener('DOMContentLoaded', function() {
        
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            editable: true,
            events: a,
            displayEventTime: false,
            editable: true,
            eventRender: function(event, element, view) {
                if (event.allDay === 'true') {
                    event.allDay = true;
                } else {
                    event.allDay = false;
                }
            },
            selectable: true,
            selectHelper: true,
            select: function(start, end, allDay) {

            var title = prompt('Event Title:');

            if (title) {
                var start = $.fullCalendar.formatDate(start, "DD-MM-Y");
                var end = $.fullCalendar.formatDate(end, "DD-MM-Y");
                $.ajax({
                    url: '{{ url("OrderCalendar")}}',
                    data: {
                        title: detpem.nama_lengkap_pembeli,
                        start: start,
                        end: end,
                        type: 'add'
                    },
                    type: "POST",
                    success: function(data) {
                        displayMessage("Event Created Successfully");

                        calendar.fullCalendar('renderEvent', {
                            id: data.id,
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay
                        }, true);

                        calendar.fullCalendar('unselect');
                    }
                });
                }
            },
          
        });
        calendar.render();
    });

</script>
@endsection