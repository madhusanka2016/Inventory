<?php
include('dbcon/dbcon.php');
session_start();
$_SESSION['nID'] = 1;

if($_SERVER["REQUEST_METHOD"] == "POST") {

    // username and password sent from form

    $session_username = $_POST['username'];
    $session_password = $_POST['password'];


    $sqlid = "SELECT id FROM tb_user WHERE username = '$session_username' AND u_pw = '$session_password'";
    $sqltype = "SELECT u_type FROM tb_user WHERE username = '$session_username' AND u_pw = '$session_password'";

    $querytype = mysqli_query($conn, $sqltype);
    $type = mysqli_fetch_array($querytype, MYSQLI_ASSOC);

    $querysql = mysqli_query($conn, $sqlid);
    //checking query result is valid or not
    if (!$querysql) {
        die('Invalid query: ' . mysql_error());
    }
    //


    $count = mysqli_num_rows($querysql);




        if (($type['u_type'])&& ($count == 1)) {
            $_SESSION['username'] = $session_username;
            $stype = $type['u_type'];
            $_SESSION['type'] = $stype;
            header('Location:index.php');
        } else {
            $_SESSION['error'] ='Your User Name or Password is Wrong';
            header('Location:index.php');
        }

}

?>
