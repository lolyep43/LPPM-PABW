@extends('admin_layouts.master')
@section('title', 'Edit Contact Us - PETAL')

@section('content')

@if(count($errors)>0)
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>
@endforeach
@endif

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success') }}
</div>
@endif

<h1>Edit Contact Us</h1><br>
<div class="row">
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="col-md-12">
                    <form class="" action="{{ route('contact.update', 1) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH ')
                        <div class="position-relative form-group"><label>Nomor</label><input name="nomor" type="text" class="form-control" value="{{$data->nomor}}"></div>
                        <div class="position-relative form-group"><label>Alamat</label><input name="alamat" class="form-control" id="konten" value="{{$data->alamat}}"></div>
                        <button class="mt-1 btn btn-primary" style="float:right">Publish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

