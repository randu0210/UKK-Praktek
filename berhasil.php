<?php
$id_keluhan = $_GET['n'];

?>
<html>
<head>
<title>sukses boss</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<head>
<body>
<nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
        <img src="Assets/logo 2.PNG" width="30" height="30" class="d-inline-block align-top" alt="">
        Ngadu yuk!!
        </a>
    </nav>
    <div class="container mt-5">
        <div class="card">
            <h5 class="card-header">Selamat</h5>
            <p class="card-text">Pengaduanmu Berhasil Terkirim<strong><?= $id_keluhan ?> simpan id keluhan untuk mencari keluhan!!</p>
            <a href="index.php" class="btn btn-primary btn-sm">Kembali ke home</a>
            </div>
        </div>
    </div>
</body>
</html>