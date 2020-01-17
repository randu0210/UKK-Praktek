<?php
include "koneksi.php";
$query= mysqli_query($conn, "SELECT * FROM tabel_keluhan ORDER BY status ASC");
?>
<?php

if (isset($_POST['filter-keluhan'])) {
    $lokasi = $_POST['lokasi'];
    $kategori = $_POST['kategori'];
    $search = $_POST['search'];

    if ($lokasi === null && $kategori === null && $search === null) {
    
        $sql = "SELECT * FROM tabel_keluhan";
    }else{
        
        $sql = "SELECT * FROM tabel_keluhan WHERE lokasi LIKE '%$lokasi%' AND kategori LIKE '%$kategori%' AND id_keluhan LIKE '%$search%'";
    }

    // Mengembalikan nilai
    return mysqli_query($conn, $sql);
}
?>
<html>
<head>
<title>Admin</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
        <img src="Assets/logo 2.PNG" width="30" height="30" class="d-inline-block align-top" alt="">
        Ngadu yuk!!
        </a>
        <a class="navbar-brand ml-auto" href="index.php">keluar</a>
    </nav>
    <div class="container p-3 mt-5 border">
		<form class="form-inline" method="post">
			<div class="form-group mx-1">
				<input class="form-control" type="text" name="lokasi" placeholder="lokasi">
			</div>
			<div class="form-group mx-1">
				<select class="form-control" name="kategori">
					<option value="">Kategori</option>
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
			<div class="form-group mx-1">
				<input class="form-control" type="text" name="search" placeholder="ID Keluhan">
			</div>
			<div class="form-group">
				<button type="submit" name="filter-keluhan" class="btn btn-primary ml-5">Filter</button>
			</div>
		</form>
	</div>
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
                <th scope="col">Tanggal</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php
                while($result = mysqli_fetch_assoc($query)) :
                    echo("
                        <tr>
                            <td>".$result['id_keluhan']."</td>
                            <td>".$result['nama']."</td>
                            <td>".$result['kategori']."</td>
                            <td>".$result['keterangan']."</td>
                            <td>".$result['lokasi']."</td>
                            <td><img src='Assets/upload/".$result['foto']."' width='100'</td>
                            <td>".$result['status']."</td>
                            <td>".$result['feedback']."</td>
                            <td>".$result['datetime']."</td>
                    ")
            ?>

            <?php

                    if($result['status'] !=="selesai"){

                    
            ?>
                <td>
                        <a href="update.php?id=<?= $result['id_keluhan'] ?>">Udahin!!</a>
                </td>
            <?php
                    }else{?>
                        <td>
                            Terlaksana!!
                        </td>
                <?php
                    }
                ?>
                    </tr>
                <?php
                    endwhile;
                ?>
                </tbody>
            </table>
            </div>
            

            
            

</body>
</html>