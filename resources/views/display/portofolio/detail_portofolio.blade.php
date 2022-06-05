@extends('blog_layouts.index')
@section('isi')
<section>
    <div class = "title">
        <h1>Portofolio</h1>
    </div>
    @foreach($data as $portofolio)
    <div class="container">
        <div class="cardpor">
            <img src="{{ asset($portofolio->foto)}}" alt="">
        </div>
        <br>
        <div class="cardpor" style="color: black; font-weight:500; font-size:20px; text-align:center">
            <h1>Problem yang dialami</h1>
            {!!$portofolio->problem!!}
        </div>
        <br>
        <div class="cardpor" style="color: black; font-weight:500; font-size:20px; text-align: center;)">
            <img src="{{ asset('public/assets/ijo.png') }}" alt="">
            <h1>Solusi yang diberikan</h1>
            {!!$portofolio->solusi!!}
        </div>
        <br>
        <div class="cardpor" style="color: black; font-weight:500; font-size:20px; text-align: center">
            <h1>Fitur pengembangan</h1>
            {!!$portofolio->fitur!!}
        </div>
        <br>
        <div class="cardpor" style="color: black; font-weight:500; font-size:20px; text-align:center">
            <h1>Metode pengembangan</h1>
            {!!$portofolio->metode!!}
        </div>
    </div>
    @endforeach
    <x-weather-card></x-weather-card>
</section>
@endsection