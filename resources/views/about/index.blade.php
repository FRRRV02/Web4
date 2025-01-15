@include('partials.header')

<main>
    <div class="container">
        <!-- Hero Section -->
        <section class="hero-programs text-center py-5">
            <h2>Tentang STT Cipasung</h2>
        </section>

        <!-- Content Sections -->
        <div class="cards">
            <div class="card">
                <img src="{{ asset('img/g1.jpg') }}" alt="Campus History">
                <h4>Sejarah</h4>
                <p>Sekolah Tinggi Teknologi Cipasung (STT Cipasung) merupakan lembaga pendidikan tinggi formal di bawah Yayasan Pondok Pesantren Cipasung. Pesantren Cipasung didirikan tahun 1931 oleh almarhum KH. Ruhiat, terletak di Desa Cipakat Kecamatan Singaparna Kabupaten Tasikmalaya, sekitar 100 km dari Kota Bandung.</p>
            </div>

            <div class="card">
                <h4>Misi</h4>
                <p>1. Meningkatkan kualitas pendidikan dan pengajaran yang adil dan akses yang luas

                    2. Meningkatkan iklim penelitian yang relevan dengan potensi lokal

                    3. Meningkatkan kegiatan pengabdian kepada masyarakat sesuai dengan kebutuhan dan pembangunan daerah

                    4. Menyiapkan civitas STT Cipasung agar menjadi pribadi yang berjiwa entrepreneur, berakhlak mulia dan berdaya saing tinggi

                    5. Memperkuat kerjasama dengan institusi lain di tingkat wilayah maupun di tingkat nasional.

                    6. Meningkatkan tata kelola perguruan tinggi yang transparan dan terukur

                    </p>
            </div>

            <div class="card">
                <h4>Visi</h4>
                <p>Menjadi Sekolah Tinggi lima besar di Priangan Timur pada tahun 2024 dan unggul di bidang entrepreneurship yang rahmatan lil’alamin.</p>
            </div>
        </div>

        <div class="values">
            <h3>Tujuan</h3>
            <ul>
                <li>  Menghasilkan lulusan yang berkualitas dan siap berkontribusi di lingkungan masyarakat</li>
                <li> Menghasilkan riset dan karya ilmiah di bidang teknik dan entrepreneurship yang mendorong pengembangan potensi lokal</li>
                <li> Menghasilkan kegiatan pengabdian kepada masyarakat yang sesuai dengan kebutuhan dan pembangunan daerah</li>
                <li> Menjadikan civitas STT Cipasung berkualitas dan siap berkontribusi di lingkungan masyarakat</li>
            </ul>
        </div>
    </div>
</main>

@include('partials.footer')
