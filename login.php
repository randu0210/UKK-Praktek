<?php
include "koneksi.php";
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query="SELECT * FROM tabel_admin WHERE username ='$username' AND password ='$password'";
        $result= mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0 ){
            header ("location: index_admin.php");
            }
            else{
                header("location: login.php?pesan=gagal-login");
            }
    }
?>
<html>
<head>
<title>login</title>
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
    <h1>Admin login yuk!</h1>
    <form action="" method="post">
        <div class="form-group">
        <label>Username:</label>
            <input type="text" name="username" class="form-control" placeholder="username" required>
        </div>
        <br>
        <div class="form-group">
        <label>Password:</label>
            <input type="text" name="password" class="form-control" placeholder="password" required>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" name="submit" class="tn btn-primary btn-block"> Login</button>
        </div>
</body>
</html>