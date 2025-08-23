<?php
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
        <h1>Selamat Datang di Website Kharizma!</h1>
        <p>Halo <strong><?= htmlspecialchars($nama) ?></strong></p>
        <div class="box">
            <p>Waktu server: <code><?= $waktu ?></code></p>
            <p><a href="home.php">Ke Halaman Home</a></p>
        </div>
    </div>
</body>
</html>