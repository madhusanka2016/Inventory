
    <?php
    require 'dbcon/user.php';
    require 'dbcon/dbcon.php';



    if(isset($_POST['submit'])){

        date_default_timezone_set("Asia/Calcutta");

        $r_name=$_POST['r_name'];
        $r_des=$_POST['r_des'];
        $r_floor=$_POST['r_floor'];
        $r_col=$_POST['r_col'];
        $part_id='Available';

        date_default_timezone_set("Asia/Calcutta");

        $i_last = date('Y-m-d H:i:s');

        for($floor=1; $floor <=$r_floor;$floor++ ){
            for($column=1; $column <=$r_col; $column++ ){
                $sql1 = "INSERT INTO `tb_rack`(`rack_name`, `rack_floor`, `rack_coloum`, `part_id`) VALUES ('$r_name','$floor','$column','$part_id')";
                $res11=mysqli_query($conn,$sql1);
            }
        }

        $sql = "INSERT INTO `tb_rackmeta`(`r_name`, `r_des`, `r_floor`, `r_col`) VALUES ('$r_name','$r_des','$r_floor','$r_col')";



        //$sql = "INSERT INTO `doctors`(`dr_type`, `dr_id`, `name`, `contact`, `address`, `Special`, `dr_date`, `dr_time`, `dr_add`) VALUES ('$dr_type','$dr_id','$dr_name','$dr_cont','$dr_add','$dr_sp'.'$dr_date'.'$dr_time','$dr_added')";
        $res1=mysqli_query($conn,$sql);
        echo '<script language="javascript">';
        echo 'alert("Ward Added Successfully ")</script>;';  //not showing an alert box.
        header('Location:home_screen.php');


    }
    ?>




