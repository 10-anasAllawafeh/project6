<!-- voyager.dashboard -->
@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .panel .mce-panel {
            border-left-color: #fff;
            border-right-color: #fff;
        }

        .panel .mce-toolbar,
        .panel .mce-statusbar {
            padding-left: 20px;
        }

        .panel .mce-edit-area,
        .panel .mce-edit-area iframe,
        .panel .mce-edit-area iframe html {
            padding: 0 10px;
            min-height: 350px;
        }

        .mce-content-body {
            color: #555;
            font-size: 14px;
        }

        .panel.is-fullscreen .mce-statusbar {
            position: absolute;
            bottom: 0;
            width: 100%;
            z-index: 200000;
        }

        .panel.is-fullscreen .mce-tinymce {
            height:100%;
        }

        .panel.is-fullscreen .mce-edit-area,
        .panel.is-fullscreen .mce-edit-area iframe,
        .panel.is-fullscreen .mce-edit-area iframe html {
            height: 100%;
            position: absolute;
            width: 99%;
            overflow-y: scroll;
            overflow-x: hidden;
            min-height: 100%;
        }
    </style>
@stop

@section('content')

<div class="row ">
    <div class="card col-lg-4 col-md-6 col-sm-12 mb-3">
        <img class="card-img-top" height="400px" src="/storage/settings/june2022/volunteers.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">123 Volunteers</h5>
          <p class="card-text">Our Volunteering participants numbres increasing day after day</p>
          <p class="card-text"><small class="text-muted">Last updated 3 hrs ago</small></p>
        </div>
      </div>
      <div class="card col-lg-4 col-md-6 col-sm-12 mb-3">
        <img class="card-img-top" height="400px" src="/storage/settings/june2022/pexels-kaboompics-com-5865.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">17 Services</h5>
          <p class="card-text">All across the kingdom,we plant hope and beauty</p>
          <p class="card-text"><small class="text-muted">Last updated 2 days ago</small></p>
        </div>
      </div>
      <div class="card col-lg-4 col-md-6 col-sm-12 mb-3">
        <img class="card-img-top" height="400px" src="/storage/settings/june2022/volunteer.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">8 certificates</h5>
          <p class="card-text">Our efforts appriciated by many different institutes</p>
          <p class="card-text"><small class="text-muted">Last updated 7 months ago</small></p>
        </div>
      </div>
</div>
    
@endsection