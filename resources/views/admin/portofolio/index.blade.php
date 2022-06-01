@extends('admin_layouts.master')
@section('title', 'Portofolio - PETAL')
@section('content')

<h1>Portofolio</h1><br>

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success') }}
</div>
@endif

<div class="row">
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="{{ route('portofolio.create')}}" class="btn btn-sm" style="background-color:#2651be; color: white;">Tambah Portofolio</a>
                </h5>
                <table class="mb-0 table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Gambar</th>
                            <th width="17%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $result => $hasil)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $hasil->judul}}</td>
                            <td><img src="{{ asset($hasil->foto) }}" class="img-fluid" style="width:13vw" target="_blank"></td>
                            <td>
                                <form action="{{ route('portofolio.destroy', $hasil->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    {{-- <a href="{{ route('portofolio.isi', $hasil->slug) }}" class="btn btn-primary btn-sm" target="_blank">Lihat</a> --}}
                                    <a href="{{ route('portofolio.edit', $hasil->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus fokus riset tersebut?');">Hapus</button>
                                </form>   
                            </td> 
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                {{ $data->links("pagination::bootstrap-4")}}
            </div>
        </div>
    </div>
</div>
@endsection