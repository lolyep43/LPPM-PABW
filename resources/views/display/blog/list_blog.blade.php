@extends('blog_layouts.index')
@section('isi')
    <section class = "blog" id = "blog">
        <div class = "container">
          <div class = "title">
            <h2>Latest Blog</h2>
          </div>
          <div class = "blog-content">
            @foreach($blog as $blogs)
            <div class = "blog-item" style="background-color: white; padding: 5px;">
              <div class = "blog-img">
                <img src = "{{$blogs->foto}}" alt = "">
                <span><i class = "far fa-heart"></i></span>
              </div>
              <div class = "blog-text">
                <span>{{$blogs->created_at}}</span>
                <h2>{{$blogs->judul}}</h2>
                <?php
                  $jumlah_kata = "30";
                  $batas_kalimat = implode(" ", array_slice(explode(" ", $blogs->deskripsi), 0, $jumlah_kata));
                  
                ?>
                <p>{!!$batas_kalimat!!}</p>
                <a href = "{{ route('blog-data.isi', $blogs->slug)}}">Read More</a>
              </div>
            </div>
            @endforeach
          </div>
          <div style="text-align: center">{!! $blog->links('pagination::simple-tailwind') !!}</div>
        </div>
    </section>
@endsection