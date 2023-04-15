<?php 

include "config.php";


session_start();
session_unset();
session_destroy();

if(!isset($_SESSION['admin_name'])){
    header('location:login.php');
}


header('location:login.php');

?>