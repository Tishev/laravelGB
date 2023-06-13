@extends('layouts.admin')
@section('content')
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb2 mb-3">
        <h2 class="h2">админка</h2>
        <div class="btn-toolbar mb-2 mb-md-0">
            
        </div>
        <x-alert :type="request()->get('type', 'success')" message="message"></x-alert>
            <x-alert type="success" message="message"></x-alert>
            <x-alert type="warning" message="message"></x-alert>
            <x-alert type="info" message="message"></x-alert>
            <x-alert type="danger" message="message"></x-alert>
            <x-alert type="alert" message="message"></x-alert>
    </div>
@endsection