
    <?php
    require 'dbcon/user.php';
    require 'dbcon/dbcon.php';



    if(isset($_POST['submit'])){

        date_default_timezone_set("Asia/Calcutta");

        $i_no=$_POST['i_no'];
        $i_type=$_POST['i_type'];
        $i_brand=$_POST['i_brand'];
        $i_up=$_POST['i_up'];
        $i_des=$_POST['i_des'];
        $i_mp=$_POST['i_mp'];
        $i_qty=$_POST['i_qty'];
        $i_loc=$_POST['i_loc'];
        $select=$i_loc;
        $un ="UN";
        date_default_timezone_set("Asia/Calcutta");

        $i_last = date('Y-m-d H:i:s');
        if($i_loc=="UN")
        {
            $sql = "INSERT INTO `tb_item`(`i_no`, `i_type`, `i_brand`, `i_des`, `i_qty`, `i_up`, `i_mp`, `i_loc`, `i_last`) VALUES ('$i_no','$i_type','$i_brand','$i_des','$i_qty','$i_up','$i_mp','$un','$i_last')";
            $res1=mysqli_query($conn,$sql);
            echo '<script language="javascript">';
            echo 'alert("Ward Added Successfully ")</script>;';  //not showing an alert box.
            header('Location:home_screen.php');
        }
        else{
            $sql = "INSERT INTO `tb_item`(`i_no`, `i_type`, `i_brand`, `i_des`, `i_qty`, `i_up`, `i_mp`, `i_loc`, `i_last`) VALUES ('$i_no','$i_type','$i_brand','$i_des','$i_qty','$i_up','$i_mp','$un','$i_last')";
            $res1=mysqli_query($conn,$sql);
            require 'header.php';
            $sql3 = "SELECT i_id FROM tb_item WHERE i_id=(SELECT max(i_id) FROM tb_item)";
            $res13=mysqli_query($conn,$sql3);
            if($res13!="") {
                while ($row = $res13->fetch_assoc()){
                    $i_id= $row['i_id'];
                }
            }




                $i_no= $_POST['i_no'];
                $sql1 ="SELECT * FROM tb_rackmeta WHERE r_name='$i_loc'";
                $rackmeta=mysqli_query($conn,$sql1);
                echo '<legend class="text-center">Assign '.$i_no.' on Rack - '.$i_loc.'</legend>';
                require 'rackassigntbnew.php';

            }






        //$sql = "INSERT INTO `doctors`(`dr_type`, `dr_id`, `name`, `contact`, `address`, `Special`, `dr_date`, `dr_time`, `dr_add`) VALUES ('$dr_type','$dr_id','$dr_name','$dr_cont','$dr_add','$dr_sp'.'$dr_date'.'$dr_time','$dr_added')";



    }
    ?>




