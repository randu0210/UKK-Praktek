<?php

include "koneksi.php";

$id_keluhan = $_GET['id'];

$query = mysqli_query($conn,"UPDATE tabel_keluhan SET feedback='Puass!!' WHERE id_keluhan = '$id_keluhan'");

    if($query){
        ?>
            <script>
                alert("sukses!")
                window.location.href = 'cari-keluhan.php';
            </script>
            <?php
    }
?>