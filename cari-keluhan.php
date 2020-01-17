<?php
include "koneksi.php";
?>
<html>
<head>
<title></title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
            <img src="Assets/logo 2.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Suaramu!
        </a>
    </nav>
    <form action="" method="post" class="form-inline mt-5">
        <div class="form-group mx-sm-3 mb-2">
            <input type="text" name="cari" class="form-control" placeholder="Cari">
        </div>
        <button type="submit" name="search" class="btn btn-primary mb-2">Cari</button>
    </form>
    <div class="container-fluid mt-5">
        <table class="table table-bordered table-responsive-sm">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id keluhan</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Status</th>
                    <th scope="col">Feedback</th>
                    <th scope="col">Date time</th>
                    <th scope="col">Kepuasan</th>

                </tr>
            </thead>
            <tbody>
            <?php
            
                if (isset($_POST['search'])) {
                    $cari = $_POST['cari'];
                    $query = mysqli_query($conn, "SELECT * FROM tabel_keluhan WHERE id_keluhan = '$cari'");

                    
                    if (mysqli_num_rows($query) > 0) {
                    
                        while ($result = mysqli_fetch_assoc($query)) : 
                        echo("

                       <tr>
                        <td>".$result['id_keluhan']." </td>
                        <td>".$result['nama']."</td>
                        <td>".$result['kategori']."</td>
                        <td>".$result['keterangan']."</td>
                        <td>".$result['lokasi']."</td>
                        <td><img src='Assets/upload/".$result['foto']."' width='100'></td>
                        <td>".$result['status']."</td>
                        <td>".$result['feedback']."</td>
                        <td>".$result['datetime']."</td>
                            ");
                            ?>
                        
                        <?php
                             if($result['status'] !=="Puass!!"){
                        ?>
                            <td>
                            <a href="feedback.php?id=<?= $result['id_keluhan'] ?>">Puass??</a>
                            </td>
                        <?php
                             }else if($result['status'] =="belum puas"){ 
                                 ?>
                             <td>
                             Sudah Puass
                             </td>
                             
                             <?php
                             }
                        ?>
            <?php
                        endwhile;
                    }else { ?>
                        <td colspan="6">Data Tidak Ada</td>
            <?php
                    }
                }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>