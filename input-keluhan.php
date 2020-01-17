<?php
include "koneksi.php";

if(isset($_POST['submit'])){
    $id_keluhan = date("dhs").rand(11,99);
    $nama = $_POST['nama'];
    $kategori = $_POST["kategori"];
    $keterangan = $_POST['keterangan'];
    $lokasi = $_POST['lokasi'];
    $status = "proses";
    $feedback = "belum puas";
    $file = $_FILES['foto'];
    
    $fileTmpName = $file['tmp_name'];

    $separate =  explode('.', $file['name']);
    $ext = strtolower(end($separate));
    $foto = date('dhs').rand(11,99).'.'.$ext;

    move_uploaded_file($fileTmpName, 'Assets/upload/'.$foto);

    $query = mysqli_query($conn, "INSERT INTO tabel_keluhan(id_keluhan,nama,kategori,keterangan,lokasi,foto,status,feedback) VALUES('$id_keluhan','$nama','$kategori','$keterangan','$lokasi','$foto','$status','$feedback')");
    if($query){
        header("location:berhasil.php?n='$id_keluhan'");
    }
    else{
        echo mysqli_error($conn);
    }


}
    $tabel = mysqli_query($conn,"SELECT * FROM daftar_buku ORDER BY kode_buku ASC");
    $no=1;
?>
<html>
<head>
<title>input</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
        <img src="Assets/logo 2.PNG" width="30" height="30" class="d-inline-block align-top" alt="">
        Ngadu yuk!!
        </a>
    </nav>
<div class="container mt-3">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
        <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="nama" required>
        </div>
        <div class="form-group">
        <select name="kategori" class="form-control" required>
            <option value="">kategori</option>
            <?php
            function call($conn){
                $query="SELECT * FROM tabel_kategori";
                return mysqli_query($conn, $query);

            }
            $kategori = call($conn);
            while ($d =  mysqli_fetch_assoc($kategori)){
                echo("
                      <option value='".$d['kategori']."'>".$d['kategori']."</option>             
                ");
            }
        
            ?>
            </select>
        </div>
        <div class="form-group">
        <label>Keterangan:</label>
            <textarea name="keterangan" cols="30" row="5" class="form-control" placeholder="keterangan"></textarea>
        </div>
        <div class="form-group">
        <label>lokasi:</label>
            <input type="text" class="form-control" name="lokasi" placeholder="lokasi">
        </div>
        <div class="form-group">
        <label>foto:</label>
            <input class="d-block" type="file" name="foto">
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="tn btn-primary btn-block"> Kirim</button>
        </div>
    </form>
    </div>
    <div class="container-fluid mt-5">
        <table class="table table-bordered table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Kode Buku</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Kategori</th>
                </tr>
            </thead>
            <tbody>
                <?php
            foreach ($tabel as $row){
               echo "<tr>
            <td>".$row['kode_buku']."</td>
            <td>".$row['judul_Buku']."</td>
            <td>".$row['pengarang']."</td>
            <td>".$row['kategori']."</td>
           
			
              </tr>";
        $no++;
    }
    ?>
            </tbody>
        </table>
    </div>
</body>
</html>