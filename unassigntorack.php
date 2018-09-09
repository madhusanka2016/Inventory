
<?php
require 'header.php';

if(isset($_POST['change'])){
    $search= $_POST['change'];
    $sql2 ="SELECT * FROM tb_item WHERE (i_no LIKE '%$search%', i_loc != 'UN' )";
    $result2=mysqli_query($conn,$sql2);
    require 'unassignracktb.php';
}
else{
    $sql2 ="SELECT * FROM tb_item  WHERE  i_loc != 'UN'  ";
    $result2=mysqli_query($conn,$sql2);
    require 'unassignracktb.php';
}?>
</div>

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