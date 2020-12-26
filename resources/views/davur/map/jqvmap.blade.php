{{-- Extends layout --}}
@extends('davur.layout.default')



{{-- Content --}}
@section('content')

			<div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span>jqvmap</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Map</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">jqvmap</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->

                <!-- Vectormap -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">World Map</h4>
                            </div>
                            <div class="card-body">
                                <div id="world-map"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">USA</h4>
                            </div>
                            <div class="card-body">
                                <div id="usa" style="height: 450px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
@endsection