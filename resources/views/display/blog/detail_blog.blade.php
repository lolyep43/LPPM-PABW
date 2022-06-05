@extends('blog_layouts.index')
@section('isi')
<section>
    <div class = "title">
        <h1>Blog</h1>
    </div>
    @foreach($data as $blogs)
    <div class="container">
        <div class="col-md-12 col-lg-8 card-view" style="background-color: white; padding: 20px;">
            <img src="{{ asset($blogs->foto)}}" alt="">
            <h1>{{$blogs->judul}}</h1>
            <h3>Dibuat: {{$blogs->created_at}}</h3>
            <br>
            <div style="color: black; font-weight:400; font-size:18px">{!!$blogs->deskripsi!!}</div>
        </div>
    </div>
    @endforeach
    <x-weather-card></x-weather-card>
</section>
@endsection