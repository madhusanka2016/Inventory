<html>
<head>
    <title> Inventory Management System </title>
    <link rel="stylesheet" href="css/bootstrap-theme.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-theme.css.map" type="text/css">
    <link rel="stylesheet" href="css/search.css" type="text/css">

    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <link href="css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="js/bootstrap1.min.js"></script>



</head>
<body style="background-position: center;
    background-repeat: no-repeat;
    background-size: cover;"
      background="img/BG_images/Backround.jpg" >
<div class="container" style="">
<?php

session_start();
if(isset($_SESSION['username'])){

    require 'dbcon/user.php';
    require 'dbcon/dbcon.php';

    $username=$_SESSION['username'];
    $sql ="SELECT * FROM tb_user WHERE username='$username'";
    $result=mysqli_query($conn,$sql);
    if($result!="") {
        while ($row = mysqli_fetch_array($result)){
            $usertype= $row['u_type'];
        }
    }
    require 'search.php';
    require 'navbar.php';

    echo '';}
?>