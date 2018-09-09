<html>
<head>
    <title> Inventory Control   </title>
    <link rel="icon" href="img/icons/logo.png" type="image/png" sizes="32x32">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/main1.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-theme.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-theme.css.map" type="text/css">
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>

</head>
<body style="background-position: center;
    background-repeat: no-repeat;
    background-size: cover;"
      background="img/BG_images/Backround.jpg" >


<?php

include('dbcon/dbcon.php');

session_start();



if (isset($_SESSION['username']) ) {
    header('Location: home_screen.php');


}


else{
    header('Location:login-form.php');

}


?>


</body>
</html>