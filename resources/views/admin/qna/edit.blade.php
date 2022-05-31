@extends('admin_layouts.master')
@section('title', 'Edit QNA - PETAL')

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

<h1>Edit FAQ</h1><br>
<div class="row">
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="col-md-12">
                    <form class="" action="{{ route('QNA.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH ')
                        <div class="position-relative form-group"><label>Pertanyaan</label><input name="pertanyaan" type="text" class="form-control" value="{{$data->pertanyaan}}"></div>
                        <div class="position-relative form-group"><label>Jawaban</label><textarea name="jawaban" class="form-control" id="konten"> {{$data->jawaban}}</textarea></div>
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

</script>
@endsection

