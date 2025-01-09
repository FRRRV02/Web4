@include('includes.header')
@include('includes.navbar')

<div class="container mt-5 text-white">
    <?php
    include 'config/database.php';
    $id = $_GET['id'];
    $query = "SELECT title, content, created_at FROM news WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $news = mysqli_fetch_assoc($result);
    ?>

    <h1 class="mb-4"><?php echo $news['title']; ?></h1>
    <p class="text-muted"><small>Diterbitkan pada <?php echo date("d M Y, H:i", strtotime($news['created_at'])); ?></small></p>
    <div class="mt-4">
        <p><?php echo nl2br($news['content']); ?></p>
    </div>

    <!-- Tambahkan area navigasi ke berita lain -->
    <div class="mt-5">
        <h3 class="mb-3">Berita Lainnya</h3>
        <div class="row">
            <?php
            $other_news_query = "SELECT id, title FROM news WHERE id != $id ORDER BY created_at DESC LIMIT 3";
            $other_news_result = mysqli_query($conn, $other_news_query);

            while ($other_news = mysqli_fetch_assoc($other_news_result)) {
            ?>
            <div class="col-md-4">
                <div class="card bg-dark text-white h-100 border-0 mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $other_news['title']; ?></h5>
                        <a href="detail_berita.php?id=<?php echo $other_news['id']; ?>" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

@include('includes.footer') 