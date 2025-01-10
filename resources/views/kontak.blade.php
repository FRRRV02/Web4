@include('partials.header', ['title' => 'Kontak - STT Cipasung'])
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div class="container mt-5 text-white">
    <h1>Kontak Kami</h1>
    <form action="submit_kontak.php" method="POST">
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control bg-dark text-white" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control bg-dark text-white" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Pesan</label>
            <textarea class="form-control bg-dark text-white" id="message" name="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>


@include('partials.footer')