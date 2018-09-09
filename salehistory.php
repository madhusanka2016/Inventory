
<?php
require 'header.php';
if(isset($_POST['submit'])){
    $s_date= $_POST['s_date'];


    $sql2 ="SELECT * FROM `tb_sale` WHERE sale_date='$s_date' ";
    $result2=mysqli_query($conn,$sql2);

    echo '<div class="container ">
    <div class="row">
        <div class="col-md-9">
            <legend class="text-center">Sale History On -'.$s_date.'</legend>
        </div>
        

    </div>
</div>';



    if($result2!="") {


        echo '<div class="well">
    <table class="table" style="font-size: 15px">
    <thead></thead>
    <tr>
        <th>Sale Id</th>
    <th>Part No</th>
    <th>Type</th>
    <th>Brand</th>
    <th>Description</th>
    <th>Quantity</th>
    <th>Sale Price</th>
    <th>Total Price</th>
    <th>Sale Date</th>
    <th>Sale Time</th>
     
    
    ';
        $total=0;
        $quantity=0;

        echo '
</tr>';
        while ($row = $result2->fetch_assoc()){



            $s_id= $row['s_id'];

            $i_no=$row['i_no'];
            $i_type=$row['i_type'];

            $i_brand=$row['i_brand'];
            $i_des=$row['i_des'];
            $i_qty=$row['i_qty'];
            $i_up=$row['i_up'];
            $i_tp=$i_qty*$i_up;
            $sale_date=$row['sale_date'];
            $sale_time=$row['sale_time'];
            $total=$total+$i_tp;
            $quantity=$quantity+$i_qty;





            echo '<tr>';
            echo '<td>'.$s_id.'</td>';
            echo '<td>'.$i_no.'</td>';
            echo '<td>'.$i_type.'</td>';
            echo '<td>'.$i_brand.'</td>';
            echo '<td>'.$i_des.'</td>';
            echo '<td>'.$i_qty.'</td>';
            echo '<td>Rs. '.$i_up.'</td>';
            echo '<td>Rs. '.$i_tp.'</td>';
            echo '<td>'.$sale_date.'</td>';
            echo '<td>'.$sale_time.'</td>';
            echo '</tr>';
        }

    }

    echo '</table>
</div>';
    echo '<div class="well">
    <table class="table" style="font-size: 15px">
        <th>     </th>
        <th>Total Quantity</th>
        <th>'. $quantity.'</th>
        <th>       </th>
        <th>Total Price</th>
        <th>Rs. '.$total.'</th>
        <th> </th>

    </table>
</div>';
}
else{
    date_default_timezone_set("Asia/Calcutta");
    $sold_date = date('Y-m-d ');;
    $sql2 ="SELECT * FROM `tb_sale` WHERE sale_date='$sold_date' ";
    $result2=mysqli_query($conn,$sql2);

    echo '<div class="container ">
    <div class="row">
        <div class="col-md-9">
            <legend class="text-center">Sale History On -'.$sold_date.'</legend>
        </div>
        

    </div>
</div>';

if($result2!="") {


echo '<div class="well">
    <table class="table" style="font-size: 15px">
    <thead></thead>
    <tr>
        <th>Sale Id</th>
    <th>Part No</th>
    <th>Type</th>
    <th>Brand</th>
    <th>Description</th>
    <th>Quantity</th>
    <th>Sale Price</th>
    <th>Total Price</th>
    <th>Sale Date</th>
    <th>Sale Time</th>
     
    
    ';
    $total=0;
    $quantity=0;

echo '
</tr>';
while ($row = $result2->fetch_assoc()){



    $s_id= $row['s_id'];

    $i_no=$row['i_no'];
    $i_type=$row['i_type'];

    $i_brand=$row['i_brand'];
    $i_des=$row['i_des'];
    $i_qty=$row['i_qty'];
    $i_up=$row['i_up'];
    $i_tp=$i_qty*$i_up;
    $sale_date=$row['sale_date'];
    $sale_time=$row['sale_time'];
    $total=$total+$i_tp;
    $quantity=$quantity+$i_qty;





echo '<tr>';
    echo '<td>'.$s_id.'</td>';
    echo '<td>'.$i_no.'</td>';
    echo '<td>'.$i_type.'</td>';
    echo '<td>'.$i_brand.'</td>';
    echo '<td>'.$i_des.'</td>';
    echo '<td>'.$i_qty.'</td>';
    echo '<td>Rs. '.$i_up.'</td>';
    echo '<td>Rs. '.$i_tp.'</td>';
    echo '<td>'.$sale_date.'</td>';
    echo '<td>'.$sale_time.'</td>';
    echo '</tr>';
}

}
echo '</table>
</div>';
echo '<div class="well">
    <table class="table" style="font-size: 15px">
        <th>     </th>
        <th>Total Quantity</th>
        <th>'.$quantity.'</th>
        <th>       </th>
        <th>Total Price</th>
        <th>Rs. '.$total.'</th>
        <th> </th>

    </table>
</div>';
}?>



<!--

    echo '

        </div>

        <div class="nav" >
        <table>
        <tr>
        <td> <a href="admit/index.html" target="frame1"><div class="nav_item">Admits</div></a></td>
        <td><a href="patients/index.html" target="frame1"><div class="nav_item">Patients</div></a></td>
        
        <td><a href="wards/index.html" target="frame1"><div class="nav_item">Wards</div></a></td>
        <td><a href="employees/index.html" target="frame1"><div class="nav_item">Employees</div></a></td>
        <td><a href="payment/index.php" target="frame1"><div class="nav_item">Payments</div></a></td>
        <td><a href="users/index.php" target="frame1"><div class="nav_item">Users</div></a></td>
        
        
        
</tr>
</table>
            
            
            
            
            
            
            
        </div>';
    echo '
<hr><iframe name="frame1" scrolling="yes" src="home.html" width="1000px" height="550px" frameborder="none"></iframe>

<hr>';




}
else{
    echo 'no';
}

?>-->

</body>
</html>