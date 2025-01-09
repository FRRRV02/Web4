@include('includes.header')
@include('includes.navbar')

<div class="container mt-5 text-white">
    <h1 class="mb-4 text-center">Profil Kampus Cipasung</h1>

    <!-- Section: Introduction -->
    <div class="row mb-5">
        <div class="col-md-6">
            <img src="assets/images/campus.jpg" alt="Kampus Cipasung" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <p>Kampus Cipasung adalah salah satu perguruan tinggi terkemuka yang berkomitmen untuk mencetak generasi unggul dan berintegritas. Berlokasi di lingkungan yang strategis dan asri, kampus ini menawarkan suasana belajar yang kondusif bagi mahasiswa.</p>
            <p>Didirikan pada tahun 1985, Kampus Cipasung memiliki visi untuk menjadi institusi pendidikan tinggi yang mampu bersaing di tingkat nasional maupun internasional. Dengan dukungan tenaga pengajar profesional dan fasilitas yang lengkap, kami terus berupaya memberikan pendidikan berkualitas kepada para mahasiswa.</p>
        </div>
    </div>

    

    <!-- Section: Fasilitas Kampus -->
    <div class="row mb-5">
        <div class="col-md-12">
            <h3>Fasilitas Kampus</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-dark text-white mb-3">
                        <img src="assets/images/library.jpg" class="card-img-top" alt="Perpustakaan">
                        <div class="card-body">
                            <h5 class="card-title">Perpustakaan Digital</h5>
                            <p class="card-text">Perpustakaan dengan koleksi buku elektronik dan fisik yang lengkap untuk mendukung kegiatan akademik mahasiswa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-dark text-white mb-3">
                        <img src="assets/images/sports.jpg" class="card-img-top" alt="Fasilitas Olahraga">
                        <div class="card-body">
                            <h5 class="card-title">Fasilitas Olahraga</h5>
                            <p class="card-text">Kampus dilengkapi dengan lapangan olahraga, gym, dan fasilitas rekreasi lainnya untuk mendukung kesejahteraan mahasiswa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-dark text-white mb-3">
                        <img src="assets/images/lab.jpg" class="card-img-top" alt="Laboratorium">
                        <div class="card-body">
                            <h5 class="card-title">Laboratorium Teknologi</h5>
                            <p class="card-text">Laboratorium dengan peralatan canggih untuk mendukung praktikum di berbagai bidang seperti teknik dan sains.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section: Penghargaan -->
    <div class="row mb-5">
        <div class="col-md-12">
            <h3>Penghargaan</h3>
            <p>Selama bertahun-tahun, Kampus Cipasung telah menerima berbagai penghargaan, termasuk:</p>
            <ul>
                <li>Penghargaan Kampus Terbaik dalam Inovasi Pendidikan (2023).</li>
                <li>Juara Lomba Nasional Pengembangan Teknologi (2022).</li>
                <li>Penghargaan Green Campus (2021) untuk upaya pelestarian lingkungan hidup.</li>
            </ul>
        </div>
    </div>

    <!-- Section: Kesempatan Bergabung -->
    <div class="row">
        <div class="col-md-12 text-center">
            <h3>Ayo Bergabung dengan Kami!</h3>
            <p>Jika Anda tertarik untuk melanjutkan pendidikan di Kampus Cipasung, kunjungi halaman <a href="prodi.php" class="text-primary">Program Studi</a> untuk informasi lebih lanjut dan cara pendaftaran.</p>
            <a href="prodi.php" class="btn btn-primary">Lihat Program Studi</a>
        </div>
    </div>
</div>

@include('includes.footer')