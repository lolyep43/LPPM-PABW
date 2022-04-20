@extends('admin_layouts.master')
@section('title', 'Edit Portofolio - PETAL')

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

<h1>Edit Portofolio</h1><br>
<div class="row">
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="col-md-12">
                    <form class="" action="{{ route('portofolio.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH ')
                        <div class="position-relative form-group"><label>Jenis</label>
                            <select name="jenis" class="form-control">
                                <option value="">Pilih jenis website</option>
                                <option {{ $data->jenis == 'E-Commerce' ? "selected" : "" }} value="E-Commerce">E-Commerce</option>
                                <option {{ $data->jenis == 'ARP' ? "selected" : "" }} value="ARP">ARP</option>
                            </select>
                        </div>
                        <div class="position-relative form-group"><label>Judul</label><input name="judul" type="text" class="form-control" value="{{ $data->judul}}"></div>
                        <div class="position-relative form-group"><label>Problem</label><textarea name="problem"  class="form-control" id="konten" value="{{ $data->problem }}"></textarea></div>
                        <div class="position-relative form-group"><label>Solusi</label><textarea name="solusi"  class="form-control" id="konten1" value="{{ $data->solusi }}"></textarea></div>
                        <div class="position-relative form-group"><label>Metode</label><textarea name="metode"  class="form-control" id="konten2" value="{{ $data->metode }}"></textarea></div>
                        <div class="position-relative form-group"><label>Fitur</label><textarea name="fitur"  class="form-control" id="konten3" value="{{ $data->fitur }}"></textarea></div>
                        <div class="position-relative form-group"><label>Foto</label><br>
                            <img src="{{ asset($data->foto) }}" class="img-fluid" style="width:80%" target="_blank"><br><br>
                            <input name="foto" type="file" class="form-control-file">
                        </div>
                        <button class="mt-1 btn btn-primary" style="float:right">Publish</button>
                    </form>
                </div>
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

    CKEDITOR.replace('konten1', {
        filebrowserUploadMethod: 'form',
        height: 250,
		removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar,Print,NewPage,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TexField,Textarea,Select,Button,ImageButton,HiddenField,RemoveFormat,Outdent,Indent,BidiLtr,BidiRtl,CreatePlaceHolder,CreateDiv,Iframe,Smiley,Preview,Save'
    });

    CKEDITOR.replace('konten2', {
        filebrowserUploadMethod: 'form',
        height: 250,
		removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar,Print,NewPage,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TexField,Textarea,Select,Button,ImageButton,HiddenField,RemoveFormat,Outdent,Indent,BidiLtr,BidiRtl,CreatePlaceHolder,CreateDiv,Iframe,Smiley,Preview,Save'
    });

    CKEDITOR.replace('konten3', {
        filebrowserUploadMethod: 'form',
        height: 250,
		removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar,Print,NewPage,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TexField,Textarea,Select,Button,ImageButton,HiddenField,RemoveFormat,Outdent,Indent,BidiLtr,BidiRtl,CreatePlaceHolder,CreateDiv,Iframe,Smiley,Preview,Save'
    });

</script>
@endsection

