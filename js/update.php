<?php

include "koneksi.php";

$id_keluhan = $_GET['id'];

$query = mysqli_query($conn,"UPDATE tabel_keluhan SET status='selesai' WHERE id_keluhan = '$id_keluhan'");

    if($query){
        ?>
            <script>
                alert("sukses!")
                window.location.href = 'index_admin.php';
            </script>
            <?php
    }
?>