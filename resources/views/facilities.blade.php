@include('partials.header')

<main>
    <div class="container">
        <section class="hero-facilities text-center py-5">
            <h2>Fasilitas Kampus</h2>
            <p>Kampus kami menyediakan berbagai fasilitas modern dan lengkap untuk mendukung proses belajar mengajar serta pengembangan diri mahasiswa, Fasilitas-fasilitas ini dirancang untuk menciptakan lingkungan yang nyaman, inspiratif, dan kondusif bagi mahasiswa, dosen, serta seluruh komunitas kampus. Berikut adalah fasilitas utama yang tersedia:</p>
        </section>

        <section class="facilities-list text-center py-5">
            <div class="facility-card">
                <img src="{{ asset('img/perpustakaan.jpg') }}" alt="perpustakaan">
                <h3>perpustakaan</h3>
                <p>Salah satu fasilitas pendukung pembelajaran di Kampus Sekolah Tinggi Teknologi Cipasung adalah perpustakaan. Saat ini, perpustakaan Sekolah Tinggi Teknologi Cipasung telah memiliki jumlah koleksi buku yang cukup lengkap dari berbagai penerbit dengan judul buku yang relevan dengan program studi yang ada di Sekolah Tinggi Teknologi Cipasung yaitu Teknik Industri, Informatika.</p>
            </div>

            <div class="facility-card">
                <img src="{{ asset('img/lab.jpg') }}" alt="Laboratorium" >
                <h3>Laboratorium</h3>
                <p>Laboratorium kampus dirancang untuk mendukung kegiatan praktikum, penelitian, dan pengembangan ilmu pengetahuan mahasiswa dari berbagai program studi. Setiap laboratorium dilengkapi dengan peralatan modern dan fasilitas yang memenuhi standar pendidikan serta keselamatan. </p>
            </div>

            <div class="facility-card">
                <img src="{{ asset('img/olahraga.jpg') }}" alt="sarana olahraga">
                <h3>sarana olahraga</h3>
                <p>Maka dari itu Sekolah Tinggi Teknologi Cipassung menyediakan berbagai sarana olahraga yang dapat dimanfaatkan oleh mahasiswa, dosen maupun staff Sekolah Tinggi Teknologi Cipasung untuk menyalurkan hobby sekaligus menjaga kebugarannya berupa Lapangan Bola Voli, GOR Badminton dan Lapangan Futsal. </p>
            </div>

            <div class="facility-card">
                <img src="{{ asset('img/kantin1.jpg') }}" alt="kantin">
                <h3>kantin</h3>
                <p>Salah satu layanan kesejahteraan bagi mahasiswa yaitu adanya penyediaan kebutuhan makan dan minum. Di Sekolah Tinggi Teknologi Cipasung tersedia fasilitas kantin bagi mahasiswa maupun dosen.</p>
            </div>
        </section>
    </div>
</main>

@include('partials.footer')

<style>
    .facility-card img {
    width: 100%;
    height: auto;
}
</style>