<?php 
include "config.php";

session_start();

if(!isset($_SESSION['admin_name'])){
    header('location:login.php');
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="kaze.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h3>Halo, <span>Admin</span></h3>
            <h1>Selamat datang, <span><?php echo $_SESSION['admin_name']?></span></h1>
            <p>Ini page admin</p>
            <a href="login.php" class="btn">login</a>
            <a href="register_page.php" class="btn">register</a>
            <a href="logout.php" class="btn">logout</a>
        </div>
    </div>
</body>
</html>