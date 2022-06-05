@extends('blog_layouts.index')
@section('isi')

    <!-- detail section -->
    <section class="detail">
        <div class="container">
          <div class="row">
            <div class="detail-item wow animate__animated animate__fadeInLeft animate__slow">
              <span><i class="fas fa-tablet-alt"></i></span>
              <h2>Responsive Design</h2>
              <div class="line"></div>
              <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam provident suscipit culpa minus aliquid possimus, nemo ducimus amet itaque nam quis quaerat debitis. Quis, quidem.</p>
            </div>
  
            <div class="detail-item wow animate__animated animate__fadeInUp animate__s">
              <span><i class="fab fa-html5"></i></span>
              <h2>HTML5</h2>
              <div class="line"></div>
              <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam provident suscipit culpa minus aliquid possimus, nemo ducimus amet itaque nam quis quaerat debitis. Quis, quidem.</p>
            </div>
  
            <div class="detail-item wow animate__animated animate__fadeInRight animate__slow">
              <span><i class="far fa-bell"></i></span>
              <h2>24 Hour Support</h2>
              <div class="line"></div>
              <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam provident suscipit culpa minus aliquid possimus, nemo ducimus amet itaque nam quis quaerat debitis. Quis, quidem.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- end of detial section -->
  
      <!-- abouts section -->
      <section class="about" id="about">
        <div class="container">
          <div class="row">
            <div class="about-left wow animate__animated animate__fadeInUp animate__slow">
              <img src="{{ asset('assets/petal.png') }}" alt="" />
            </div>
            <div class="about-right wow animate__animated animate__fadeInUp animate__slow">
              <div class="title">
                <h2>Abouts</h2>
                <p class="text">PeTaL berlokasi di Balikpapan, Kalimantan Timur - Indonesia. PeTaL adalah
                  sebuah Software House yang baru saja berdiri tepatnya bulan Januari 2022.</p>
              </div>
  
              <div class="about-item">
                <span><i class="fas fa-tablet-alt"></i></span>
                <div>
                  <h3>Visi</h3>
                  <p class="text">Menjadikan PETAL sebagai perusahaan utama dalam pelayanan jasa untuk pengembangan perangkat lunak (Software).</p>
                </div>
              </div>
  
              <div class="about-item">
                <span><i class="fas fa-clone"></i></span>
                <div>
                  <h3>Misi</h3>
                  <ul>
                    <li>- Memajukan perkembangan teknologi di kota Balikpapan</li>
                    <li>- Menjadi salah satu bagian dari pelopor pengembangan teknologi di Balikpapan.</li>
                    <li>- Memberikan pelayanan jasa yang profesional, cepat, tepat dan akurat agar terbentuknya kemitraan baik dalam jangka waktu lama ataupun pendek (Long Time and Short Time)</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end of abouts section -->
  
      <!-- team section -->
      <section class="team" id="team">
        <div class="container">
          <div class="title">
            <h2 class="wow animate__animated animate__bounceIn animate__slow">Meet Best People</h2>
            <p class="text">Our Excellent Team for your Company Startup</p>
          </div>
          
            <div class="row owl-carousel owl-theme wow animate__animated animate__fadeInUp animate__slow">
              @foreach($anggota as $anggotas)
              <div class="team-item">
                <div class="team-img">
                  <img src="{{ asset($anggotas->foto) }}" alt="" />
                  <div class="team-icons">
                    <a href="#" class="center">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="center">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </div>
                </div>
                <div class="team-info">
                  <h3>{{$anggotas->nama}}</h3>
                  <span>{{$anggotas->jabatan}}</span>
                </div>
              </div>
              @endforeach
            </div>
        </div>
      </section>
          
      <!-- end of team section -->
  
      <!-- faq section -->
      <section class="faq" id="faq">
        <div class="container">
          <div class="title">
            <h2 class="wow animate__animated animate__bounceIn animate__slow">Frequently Asked Questions?</h2>
            <p class="text">Lorem ipsum dolor sit amet consectetur</p>
          </div>
  
          <div class="row wow animate__animated animate__fadeInUp animate__slow">
            @foreach($faq as $faqs)
            <div class="faq-item">
              <div class="faq-head">
                <h3>{{$faqs->pertanyaan}}</h3>
                <span><i class="fas fa-plus"></i></span>
              </div>
              <div class="faq-content">
                <p class="text">{{$faqs->jawaban}}</p>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>
      <!-- end of faq section -->
  
      <!-- contact section -->
      <section class="contact" id="contact">
        <div class="container">
          <div class="title">
            <h2 class="wow animate__animated animate__bounceIn animate__slow">Contact Us</h2>
            <p class="text">Lorem ipsum dolor sit amet consectetur</p>
          </div>
  
          <div class="row wow animate__animated animate__fadeInUp animate__slow">
            <div class="contact-left">
              <form>
                <h1>Masukkan daerah mu di sini</h1>
                <select class="select2 form-control" id="select-provinsi" data-placeholder="Province">
  
                </select>
                <div class="select2-divider"></div>
                <select class="select2 form-control" id="select-kota" data-placeholder="City">
                </select>
                <h1 style="margin-top: 30px">Masukkan email dan text mu di sini</h1>
                <input type="text" class="form-control" placeholder="Name"  />
                <input type="email" class="form-control" placeholder="Email" />
                <textarea placeholder="Message" rows="6"></textarea>
                <button type="submit" class="submit-btn">Send Now</button>
              </form>
            </div>
  
            <div class="contact-right">
              @foreach($contact as $contacts)
              <div>
                <h2>Visit Office</h2>
                <iframe src="https://maps.google.com/maps?q=-1.235622, 116.837431&amp;hl=id&amp;z=14&amp;output=embed" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
              </div>
              <div>
                <h2>Call Us</h2>
                <p class="text">{{$contacts->alamat}}
                <p class="text">{{$contacts->nomor}}</p>
              </div>
              <div>
                <h2>Send Email</h2>
                <p class="text">zulfikarganteng@petal.com</p>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <x-weather-card></x-weather-card>
      </section>
@endsection
      
  