<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penerimaan Mahasiswa Baru</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Penerimaan Mahasiswa Baru</h1>
        <form action="submit.php" method="POST">
            <label for="name">Nama Lengkap:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="phone">Nomor Telepon:</label>
            <input type="tel" id="phone" name="phone" required>
            
            <label for="program">Program Studi:</label>
            <select id="program" name="program" required>
                <option value="Informatika">Informatika</option>
                <option value="Teknik Industri">Teknik Industri</option>
            </select>
            
            <button type="submit">Daftar</button>
        </form>
    </div>
</body>
</html>
