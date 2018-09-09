

<?php
require 'dbcon/user.php';
require 'dbcon/dbcon.php';
if(isset($_POST['submit'])){

    $i_id=$_POST['i_id'];

    $i_qty=$_POST['i_qty'];
    $i_inventory=$_POST['i_inventory'];
    $i_newprice=$_POST['i_newprice'];




    date_default_timezone_set("Asia/Calcutta");
    $sold_time= date("h:i:sa");
    $sold_date = date('Y-m-d H:i:s');



    $i_newqty=$i_qty+$i_inventory;
echo $i_newprice;

echo $i_newqty;






    //$sql = "INSERT INTO `tb_adm`(`a_id`, `p_id`, `w_id`, `e_id`, `a_rem`, `a_price`, `a_date`, `a_time`) VALUES ('$a_id','$p_id','$w_id','$e_id','$a_rem','$a_price','$a_date','$a_time')";



    //$sql = "INSERT INTO `doctors`(`e_type`, `e_id`, `name`, `contact`, `address`, `Special`, `e_date`, `e_time`, `e_add`) VALUES ('$e_type','$e_id','$e_name','$e_cont','$e_add','$e_sp'.'$e_date'.'$e_time','$e_added')";
    //$res1=mysqli_query($conn,$sql);
    //Deduct item
    $sql2 ="UPDATE tb_item SET i_qty='$i_newqty' WHERE i_id='$i_id'";
    $result2=mysqli_query($conn,$sql2);
    $sql3 ="UPDATE tb_item SET i_up='$i_newprice' WHERE i_id='$i_id'";
    $result3=mysqli_query($conn,$sql3);

    //sale

    echo '<script language="javascript">';
    echo 'alert("Patient Admitted Successfully ")</script>;';  //not showing an alert box.
    header('Location:changepart.php');




}
else{
    echo 'post p';
}
?>