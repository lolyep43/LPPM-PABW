@extends('admin_layouts.master')
@section('title', 'Edit User - LPPM ITK')

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

<h1>Edit User</h1><br>
<div class="row">
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <form class="" action="{{ route('anggota.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH ')
                            <div class="position-relative form-group"><label>Nama</label><input name="nama" class="form-control" value="{{$data->nama}}"></div>
                            <div class="position-relative form-group"><label>Jabatan</label>
                                <select name="jabatan" class="form-control">
                                    <option value="">Pilih Jabatan</option>
                                    <option {{ $data->jabatan == 'CEO' ? "selected" : "" }} value="CEO">CEO</option>
                                    <option {{ $data->jabatan == 'CTO' ? "selected" : "" }} value="CTO">CTO</option>
                                    <option {{ $data->jabatan == 'Project Manger' ? "selected" : "" }} value="Project Manager">Project Manager</option>
                                    <option {{ $data->jabatan == 'Lead Developer' ? "selected" : "" }} value="Lead Developer">Lead Developer</option>
                                    <option {{ $data->jabatan == 'Fullstack Developer' ? "selected" : "" }} value="Fullstack Developer">Fullstack Developer</option>
                                    <option {{ $data->jabatan == 'Frontend Developer' ? "selected" : "" }} value="Frontend Developer">Frontend Developer</option>
                                    <option {{ $data->jabatan == 'Backend Developer' ? "selected" : "" }} value="Backend Developer">Backend Developer</option>
                                    <option {{ $data->jabatan == 'UI/UX Designer' ? "selected" : "" }} value="UI/UX Designer">UI/UX Designer</option>
                                    <option {{ $data->jabatan == 'DevOps Engineer' ? "selected" : "" }} value="DevOps Engineer">DevOps Engineer</option>
                                </select>
                            </div>
                            <div class="position-relative form-group"><label>Level</label>
                                <select name="level" class="form-control">
                                    <option value="">Pilih Level</option>
                                    <option {{ $data->level == 'Excecutive' ? "selected" : "" }} value="3">Excecutive</option>
                                    <option {{ $data->level == 'Manajemen' ? "selected" : "" }} value="2">Manajemen</option>
                                    <option {{ $data->level == 'Developer' ? "selected" : "" }} value="1">Developer</option>
                                </select>
                            </div>
                            <div class="position-relative form-group"><label>Foto</label><br>
                                <img src="{{ asset($data->foto) }}" class="img-fluid" style="width:80%" target="_blank"><br><br>
                                <input name="foto" type="file" class="form-control-file">
                            </div>
                            <button class="mt-1 btn btn-primary" style="float:right">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection