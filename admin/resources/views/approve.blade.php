{{-- @php
    $edit = !is_null($dataTypeContent->getKey());
    $add  = is_null($dataTypeContent->getKey());
@endphp --}}

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

{{-- @section('page_title', __('voyager::generic.'
.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular')) --}}

{{-- @section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular') }}
    </h1>
    @include('voyager::multilingual.language-selector')
@stop --}}

@section('content')
<div class="container">
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{session('message')}}
        </div>
    @endif
</div>
    {{-- @foreach ($applications as $app) --}}
        {{-- <td>{{ $user_name }}</td>
        <td>{{ $service_name }}</td> --}}
        <div class="row">
        <form action="/admin/approve/done" method="post" class="form-group"> 
            @csrf
            <div class="col-4">
            user ID <input type="number" name="user_id" class="form-control">
            </div>
            <div class="col-4">
            Service ID <input type="number" name="service_id" class="form-control">
            </div>
            <button type="submit" class="btn btn-success form-control">Approve</button>
        </form></div>
    {{-- @endforeach --}}
@stop