

<?php
require 'dbcon/user.php';
require 'dbcon/dbcon.php';
if(isset($_POST['Select'])){

    $r_name=$_POST['r_names'];
    $sql1 ="SELECT * FROM tb_rack WHERE rack_name='$r_name'";
    $racknames=mysqli_query($conn,$sql1);
    if($racknames!="") {

        while ($row = $racknames->fetch_assoc()){


            $i_loc= $row['s_id'];
            $sql3 ="UPDATE tb_item SET i_loc='UN' WHERE i_loc='$i_loc'";
            $result3=mysqli_query($conn,$sql3);
            $sql2 ="DELETE FROM tb_rack WHERE s_id='$i_loc'";
            $result2=mysqli_query($conn,$sql2);

        }
    }








    //$sql = "INSERT INTO `tb_adm`(`a_id`, `p_id`, `w_id`, `e_id`, `a_rem`, `a_price`, `a_date`, `a_time`) VALUES ('$a_id','$p_id','$w_id','$e_id','$a_rem','$a_price','$a_date','$a_time')";



    //$sql = "INSERT INTO `doctors`(`e_type`, `e_id`, `name`, `contact`, `address`, `Special`, `e_date`, `e_time`, `e_add`) VALUES ('$e_type','$e_id','$e_name','$e_cont','$e_add','$e_sp'.'$e_date'.'$e_time','$e_added')";
    //$res1=mysqli_query($conn,$sql);
    //Deduct item

    $sql2 ="DELETE FROM tb_rackmeta WHERE r_name='$r_name'";
    $result2=mysqli_query($conn,$sql2);
    //sale

    echo '<script language="javascript">';
    echo 'alert("Patient Admitted Successfully ")</script>;';  //not showing an alert box.
    header('Location:home_screen.php');




}
else{
    echo 'post p';
}
?>