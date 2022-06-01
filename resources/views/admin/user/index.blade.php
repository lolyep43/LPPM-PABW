@extends('admin_layouts.master')
@section('title', 'User - PETAL')
@section('content')

<h1>User</h1><br>

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
                    <a href="{{ route('user.create')}}" class="btn btn-sm" style="background-color:#2651be; color: white;">Tambah User</a>
                </h5>
                <table class="mb-0 table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th width="17%">Role</th>
                            <th>Aksi<th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($User as $result => $hasil)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $hasil->name}}</td>
                            <td>{{ $hasil->email}}</td>
                            <td>{{ $hasil->role}}</td>
                            <td>
                                <form action="{{ route('user.destroy', $hasil->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('user.edit', $hasil->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus {{ $hasil->name}}?');">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                {{ $User->links("pagination::bootstrap-4")}}
            </div>
        </div>
    </div>
</div>
@endsection