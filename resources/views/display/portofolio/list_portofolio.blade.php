@extends('blog_layouts.index')
@section('isi')
    <section class = "blog" id = "blog">
        <div class = "container">
          <div class = "title">
            <h2>Latest Testimoni</h2>
          </div>
          <div class = "blog-content">
            @foreach($portofolio as $data)
            <div class = "blog-item" style="background-color: white; padding: 5px;">
              <div class = "blog-img">
                <img src = "{{$data->foto}}" alt = "">
              </div>
              <div class = "blog-text">
                <span>{{$data->created_at}}</span>
                <h2>{{$data->judul}}</h2>
                <?php
                  $jumlah_kata = "30";
                  $batas_kalimat = implode(" ", array_slice(explode(" ", $data->problem), 0, $jumlah_kata));
                ?>
                <p>{!!$batas_kalimat!!}</p>
                <a href = "{{ route('portofolio-data.isi', $data->slug)}}">Read More</a>
              </div>
            </div>
            @endforeach
          </div>
          <div style="text-align: center">{!! $portofolio->links('pagination::simple-tailwind') !!}</div>
        </div>
    </section>
@endsection