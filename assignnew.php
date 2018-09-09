
    <?php
    require 'dbcon/user.php';
    require 'dbcon/dbcon.php';



    if(isset($_POST['sumbit'])){

        date_default_timezone_set("Asia/Calcutta");

        $i_no=$_POST['i_no'];
        $i_id=$_POST['i_id'];
        $s_id=$_POST['s_id'];



        $sql2 ="UPDATE tb_item SET i_loc='$s_id' WHERE i_id='$i_id'";
        $result2=mysqli_query($conn,$sql2);
        $sql3 ="UPDATE tb_rack SET part_id='$i_id' WHERE s_id='$s_id'";
        $result3=mysqli_query($conn,$sql3);
        echo '<script language="javascript">';
        echo 'alert("Ward Added Successfully ")</script>;';  //not showing an alert box.
        header('Location:home_screen.php');


    }
    ?>




