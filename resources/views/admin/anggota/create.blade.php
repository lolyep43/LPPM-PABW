@extends('admin_layouts.master')
@section('title', 'Tambah Anggota - PETAL')

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

<h1>Tambah Anggota</h1><br>
<div class="row">
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <form class="" action="{{ route('anggota.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="position-relative form-group"><label>Nama</label><input name="nama" type="text" class="form-control"></div>
                            <div class="position-relative form-group"><label>Jabatan</label>
                                <select name="jabatan" class="form-control">
                                    <option value="">Pilih Jabatan</option>
                                    <option value="CEO">CEO</option>
                                    <option value="CTO">CTO</option>
                                    <option value="Project Manager">Project Manager</option>
                                    <option value="Lead Developer">Lead Developer</option>
                                    <option value="Fullstack Developer">Fullstack Developer</option>
                                    <option value="Frontend Developer">Frontend Developer</option>
                                    <option value="Backend Developer">Backend Developer</option>
                                    <option value="UI/UX Designer">UI/UX Designer</option>
                                    <option value="DevOps Engineer">DevOps Engineer</option>
                                </select>
                            </div>
                            <div class="position-relative form-group"><label>Foto</label><input name="foto" type="file" class="form-control-file">
                            <button class="mt-1 btn btn-primary" style="float:right">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection