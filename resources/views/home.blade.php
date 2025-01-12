@include('partials.header')
<body class="body-home">
<main>
<div class="image-container">
    <img class="img-home" src="{{url ('storage/img/image.png')}}" alt="Gambar Contoh">
    <div class="text-overlay"><h1>Selamat datang di STT Cipasung</h1>
        <h3>"Teknologi dan Teknik untuk Peradaban Masa Depan"</h3>
    </div>
  </div>

  <div class="container-home">
           
    
           <!-- Seksi Program -->
           <section class="program1 py-5">
               <h2 class="text-center">Tentang Kami</h2>
               <div class="program-cards">
                   <div class="card">
                       <img src="{{ url('storage/img/image.png') }}" alt="Program 1">
                       <h3 class="h33">About Us</h3>
                       <p class="pp">Sekolah Tinggi Teknologi Cipasung (STT Cipasung) merupakan lembaga pendidikan tinggi formal di bawah Yayasan Pondok Pesantren Cipasung. Pesantren Cipasung didirikan tahun 1931 oleh almarhum KH. Ruhiat, terletak di Desa Cipakat Kecamatan Singaparna Kabupaten Tasikmalaya, sekitar 100 km dari Kota Bandung.</p>
                       <button class="btn"><a href="/about">pelajari lebih lanjut</a></button>
                   </div>
                   <div class="card">
                       <img src="{{ url('storage/img/program.jpg') }}" alt="Program 2">
                       <h3 class="h33">Programs</h3>
                       <p class="pp">Program studi" adalah istilah yang mengacu pada suatu bidang pendidikan atau jurusan yang ditawarkan oleh institusi pendidikan, seperti universitas, sekolah tinggi, atau politeknik. Program studi biasanya dirancang untuk memberikan pengetahuan, keterampilan, dan kompetensi tertentu kepada mahasiswa di bidang tertentu.</p>
                       <button class="btn"><a href="/programs">pelajari lebih lanjut</a></button>
                   </div>
                   <div class="card">
                       <img src="{{ url('storage/img/image.png') }}" alt="Program 3">
                       <h3 class="h33">News</h3>
                       <p>Menyiapkan tenaga profesional untuk pembangunan infrastruktur berkelanjutan.</p>
                       <button class="btn"><a href="/news">pelajari lebih lanjut</a></button>
                   </div>

               </div>
           </section>
   
           <!-- Seksi Testimoni -->
           <section class="testimonials py-5">
               <h2 class="text-center">Apa Kata Mereka?</h2>
               <div class="testimonial-cards">
                   <div class="testimonial">
                       <p class="pp">"Belajar di STT Cipasung adalah pengalaman luar biasa. Fasilitas lengkap dan dosen berkualitas."</p>
                       <span>- Andi, Alumni</span>
                   </div>
                   <div class="testimonial">
                       <p class="pp">"Lingkungan belajar yang mendukung dan banyak kesempatan untuk mengembangkan diri."</p>
                       <span>- Siti, Mahasiswa</span>
                   </div>
                   <div class="testimonial">
                       <p class="pp">"Pilihan tepat untuk masa depan yang lebih cerah. Kurikulumnya relevan dengan kebutuhan industri."</p>
                       <span>- Rudi, Alumni</span>
                   </div>
               </div>
           </section>
       </div>
</main>
</body>


@include('partials.footer')