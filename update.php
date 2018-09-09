
    <?php
    require 'dbcon/user.php';
    require 'dbcon/dbcon.php';



    if(isset($_POST['submit'])){

        date_default_timezone_set("Asia/Calcutta");
        $i_id=$_POST['i_id'];
        $i_no=$_POST['i_no'];
        $i_type=$_POST['i_type'];
        $i_brand=$_POST['i_brand'];
        $i_up=$_POST['i_up'];
        $i_des=$_POST['i_des'];
        $i_mp=$_POST['i_mp'];
        $i_qty=$_POST['i_qty'];
        $i_loc=$_POST['i_loc'];
        date_default_timezone_set("Asia/Calcutta");

        $i_last = date('Y-m-d H:i:s');



        $sql2 ="UPDATE tb_item SET i_qty='$i_qty' WHERE i_id='$i_id'";
        $result2=mysqli_query($conn,$sql2);
        $sql2 ="UPDATE tb_item SET i_no='$i_no' WHERE i_id='$i_id'";
        $result2=mysqli_query($conn,$sql2);
        $sql2 ="UPDATE tb_item SET i_type='$i_type' WHERE i_id='$i_id'";
        $result2=mysqli_query($conn,$sql2);
        $sql2 ="UPDATE tb_item SET i_brand='$i_brand' WHERE i_id='$i_id'";
        $result2=mysqli_query($conn,$sql2);
        $sql2 ="UPDATE tb_item SET i_up='$i_up' WHERE i_id='$i_id'";
        $result2=mysqli_query($conn,$sql2);
        $sql2 ="UPDATE tb_item SET i_mp='$i_mp' WHERE i_id='$i_id'";
        $result2=mysqli_query($conn,$sql2);
        $sql2 ="UPDATE tb_item SET i_last='$i_last' WHERE i_id='$i_id'";
        $result2=mysqli_query($conn,$sql2);
        $sql2 ="UPDATE tb_item SET i_des='$i_des' WHERE i_id='$i_id'";
        $result2=mysqli_query($conn,$sql2);





        echo '<script language="javascript">';
        echo 'alert("Ward Added Successfully ")</script>;';  //not showing an alert box.
        header('Location:changepart.php');


    }
    ?>




