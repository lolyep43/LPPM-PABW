@extends('blog_layouts.index')
@section('isi')
@foreach($data as $blogs)
<section style="padding-bottom: 25px;">
    <div class = "title">
        <h2>Latest Blog</h2>
        <h3>{{$blogs->judul}}
    </div>
    <div class="container">
        <div class="col-md-12 col-lg-8">
            <div class="p-30 mb-30 card-view" style="background-color: white">
                
                <img src="{{ asset($blogs->foto)}}" alt="">
                <h3 class="mt-30 mb-5"><a href="#"><b>{{$blogs->judul}}</b></a></h3>
                <h5 class="mt-30 mb-5"><a href="#"><b>{{$blogs->created_at}}</b></a></h5>
                <h4 class="p-title-isi"><b>Deskripsi</b></h4>
                {!!$blogs->deskripsi!!}
               
            </div>
        </div>
    </div>
</section>
@endforeach
@endsection