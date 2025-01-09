<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div class="container mt-5  text-white">
    <div class="text-center mb-5">
        <h1 class="display-4">Selamat Datang di Website Kampus Cipasung</h1>
        <p class="lead">Membangun Generasi Cerdas dan Berakhlak Mulia.</p>
        <a class="btn btn-primary btn-lg" href="tentang.php" role="button">Tentang Kami</a>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card bg-dark text-white h-100 border-0">
                <img src="assets/images/logo.png" class="card-img-top" alt="Berita">
                <div class="card-body">
                    <h5 class="card-title">Berita Terbaru</h5>
                    <p class="card-text">Dapatkan informasi terkini seputar kampus kami.</p>
                    <a href="berita.php" class="btn btn-primary">Lihat Berita</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-dark text-white h-100 border-0">
                <img src="assets/images/logo.png" class="card-img-top" alt="Prodi">
                <div class="card-body">
                    <h5 class="card-title">Program Studi</h5>
                    <p class="card-text">Kenali program studi yang tersedia di kampus kami.</p>
                    <a href="prodi.php" class="btn btn-primary">Lihat Prodi</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-dark text-white h-100 border-0">
                <img src="assets/images/logo.png" class="card-img-top" alt="Kontak">
                <div class="card-body">
                    <h5 class="card-title">Kontak Kami</h5>
                    <p class="card-text">Hubungi kami untuk informasi lebih lanjut.</p>
                    <a href="kontak.php" class="btn btn-primary">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>