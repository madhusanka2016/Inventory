

<?php
require 'dbcon/user.php';
require 'dbcon/dbcon.php';
if(isset($_POST['submit'])){

    $i_id=$_POST['i_id'];
    $i_loc=$_POST['i_loc'];







    //$sql = "INSERT INTO `tb_adm`(`a_id`, `p_id`, `w_id`, `e_id`, `a_rem`, `a_price`, `a_date`, `a_time`) VALUES ('$a_id','$p_id','$w_id','$e_id','$a_rem','$a_price','$a_date','$a_time')";



    //$sql = "INSERT INTO `doctors`(`e_type`, `e_id`, `name`, `contact`, `address`, `Special`, `e_date`, `e_time`, `e_add`) VALUES ('$e_type','$e_id','$e_name','$e_cont','$e_add','$e_sp'.'$e_date'.'$e_time','$e_added')";
    //$res1=mysqli_query($conn,$sql);
    //Deduct item
    $sql2 ="DELETE FROM tb_item WHERE i_id='$i_id'";
    $result2=mysqli_query($conn,$sql2);
    $sql3 ="UPDATE tb_rack SET part_id='0' WHERE s_id='$i_loc'";
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