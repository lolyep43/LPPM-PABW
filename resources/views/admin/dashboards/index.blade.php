@extends('admin_layouts.master')
@section('title', 'Dashboard - LPPM ITK')
@section('content')
<div class="row">
    <div class="col-md-12 d-flex justify-content-center">
        <h1>Selamat datang di {{auth()->user()->name}}</h1>
    </div>
</div>
@endsection