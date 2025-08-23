<?php
// Mengatur halaman: index atau home
$page = $_GET['page'] ?? 'index';
$nama = "Peserta Praktik";
$waktu = date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Website PHP Kharizma</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .container { max-width: 600px; margin: 0 auto; }
        .box { background: #f0f8ff; padding: 20px; border-radius: 10px; margin-top: 20px; }
        a { text-decoration: none; color: #0077cc; }
    </style>
</head>
<body>
    <div class="container">
        <?php if ($page === 'index'): ?>
            <h1>Selamat Datang di Website Kharizma!</h1>
            <p>Halo <strong><?= htmlspecialchars($nama) ?></strong></p>
            <div class="box">
                <p>Waktu server: <code><?= $waktu ?></code></p>
                <p><a href="?page=home">Ke Halaman Home</a></p>
            </div>

        <?php elseif ($page === 'home'): ?>
            <h1> Halaman Home!</h1>
            <p>Halo <strong><?= htmlspecialchars($nama) ?></strong></p>
            <div class="box">
                <p>Waktu server: <code><?= $waktu ?></code></p>
                <p><a href="?page=index">Kembali ke Index</a></p>
            </div>
        <?php else: ?>
            <h1>Halaman tidak ditemukan!</h1>
            <p><a href="?page=index">Kembali ke Halaman utama</a></p>
        <?php endif; ?>
    </div>
</body>
</html>
