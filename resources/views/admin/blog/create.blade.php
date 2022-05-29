@extends('admin_layouts.master')
@section('title', 'Tambah Blog - PETAL')

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

<h1>Tambah Blog</h1><br>
<div class="row">
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <form class="" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="position-relative form-group"><label>Judul</label><input name="judul" type="text" class="form-control"></div>
                        <div class="position-relative form-group"><label>Deskripsi</label><textarea name="deskripsi" class="form-control" id="konten"></textarea></div>
                        <div class="position-relative form-group"><label>Foto</label><input name="foto" type="file" class="form-control-file">
                        <button class="mt-1 btn btn-primary" style="float:right">Publish</button>
                </form>
                <br>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace('konten', {
        filebrowserUploadMethod: 'form',
        height: 250,
		removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar,Print,NewPage,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TexField,Textarea,Select,Button,ImageButton,HiddenField,RemoveFormat,Outdent,Indent,BidiLtr,BidiRtl,CreatePlaceHolder,CreateDiv,Iframe,Smiley,Preview,Save'
    });

</script>
@endsection

