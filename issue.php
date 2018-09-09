

<?php
require 'dbcon/user.php';
require 'dbcon/dbcon.php';
if(isset($_POST['submit'])){

    $i_id=$_POST['i_id'];
    $i_mp=$_POST['i_mp'];
    $i_qty=$_POST['i_qty'];
    $i_issue=$_POST['i_issue'];
    $i_issueprice=$_POST['i_issueprice'];

    $i_no=$_POST['i_no'];
    $i_type=$_POST['i_type'];
    $i_brand=$_POST['i_brand'];
    $i_des=$_POST['i_des'];


    date_default_timezone_set("Asia/Calcutta");
    $sold_time= date("h:i:sa");
    $sold_date = date('Y-m-d H:i:s');;



    $i_newqty=$i_qty-$i_issue;







    //$sql = "INSERT INTO `tb_adm`(`a_id`, `p_id`, `w_id`, `e_id`, `a_rem`, `a_price`, `a_date`, `a_time`) VALUES ('$a_id','$p_id','$w_id','$e_id','$a_rem','$a_price','$a_date','$a_time')";



    //$sql = "INSERT INTO `doctors`(`e_type`, `e_id`, `name`, `contact`, `address`, `Special`, `e_date`, `e_time`, `e_add`) VALUES ('$e_type','$e_id','$e_name','$e_cont','$e_add','$e_sp'.'$e_date'.'$e_time','$e_added')";
    //$res1=mysqli_query($conn,$sql);
    //Deduct item
    $sql2 ="UPDATE tb_item SET i_qty='$i_newqty' WHERE i_id='$i_id'";
    $result2=mysqli_query($conn,$sql2);

    //sale
    $sql3 ="INSERT INTO `tb_sale`(`i_no`, `i_type`, `i_brand`, `i_des`, `i_qty`, `i_up`, `sale_date`, `sale_time`) VALUES ('$i_no','$i_type','$i_brand','$i_des','$i_issue','$i_issueprice','$sold_date','$sold_time')";
    $result2=mysqli_query($conn,$sql3);
    echo '<script language="javascript">';
    echo 'alert("Patient Admitted Successfully ")</script>;';  //not showing an alert box.
    header('Location:home_screen.php');




}
else{
    echo 'post p';
}
?>