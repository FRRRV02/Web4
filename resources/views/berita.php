<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div class="container mt-5">
    <h1 class="mb-5 text-center text-white">Berita Terbaru</h1>

    <div class="row">
        <?php
        // Koneksi ke database dan ambil data berita
        include 'config/database.php';
        $sql = "SELECT * FROM news ORDER BY created_at DESC";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>
        <div class="col-md-4 mb-4">
            <div class="card bg-dark text-white h-100 shadow-sm">
                <img src="assets/images/berita.jpg" class="card-img-top" alt="Berita" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['title']; ?></h5>
                    <p class="card-text"><?php echo substr($row['content'], 0, 100); ?>...</p>
                    <a href="detail_berita.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        <?php
            }
        } else {
            echo "<p class='text-center text-white'>Tidak ada berita terbaru.</p>";
        }
        ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>