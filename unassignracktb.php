
<div class="container ">
    <div class="row">
        <div class="col-md-3">
            <legend class="text-center">Search Parts to Relocate</legend>
        </div>
        <div id="custom-search-input " class="col-md-6">
            <form action="changepart.php" method="post">
                <div class="input-group col-md-12">
                    <input type="text" name="change" class="search-query form-control" placeholder="Search Here" style="height: 25px; font-size: 15px" />
                    <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                </div>
            </form>
        </div>

    </div>
</div>
<?php

if($result2!="") {
    echo '<div class="well">
    <table class="table" style="font-size: 15px">
    <thead></thead>
    <tr>
        <th>Id</th>
    <th>Part No</th>
    <th>Type</th>
    <th>Brand</th>
    <th>Description</th>
    <th>Quantity</th>
    <th>Selling Price (Rs)</th>
    <th>Location</th>
    
  
     <th>Relocate</th>
    
    
    ';

    echo '
</tr>';
    while ($row = $result2->fetch_assoc()){

        $i_id= $row['i_id'];

        $i_no=$row['i_no'];
        $i_type=$row['i_type'];

        $i_brand=$row['i_brand'];
        $i_des=$row['i_des'];
        $i_qty=$row['i_qty'];
        $i_up=$row['i_up'];
        $i_mp=$row['i_mp'];
        $i_loc=$row['i_loc'];
        if($i_loc!='UN'){
            $sql3 ="SELECT * FROM tb_rack WHERE s_id =$i_loc";
            $result3=mysqli_query($conn,$sql3);
            if($result3!="") {
                $row4 = $result3->fetch_assoc();
                $r_name = $row4['rack_name'];
                $r_floor = $row4['rack_floor'];
                $r_col = $row4['rack_coloum'];
                $r_lock= 'Rack - '.$r_name.', Floor - '.$r_floor.', Column - '.$r_col;

            }

        }





        echo '<td>'.$i_id.'</td>';
        echo '<td>'.$i_no.'</td>';
        echo '<td>'.$i_type.'</td>';
        echo '<td>'.$i_brand.'</td>';
        echo '<td>'.$i_des.'</td>';
        echo '<td>'.$i_qty.'</td>';
        echo '<td>'.$i_up.'</td>';
        echo '<td>'.$r_lock.'</td>';

        echo '<td><a href="#unassignModal'.$i_id.'" role="button" data-toggle="modal"><button type="submit" class="btn btn-primary" data-dismiss="modal">Relocate</button></a></td>';
            // inventory Modal
        echo '  <!-- Ava Rack Model-->
<div class="modal fade" id="unassignModal'.$i_id.'" tabindex="1"  style="height: auto">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Relocate '.$i_no.' </h3>
           
    </div>
    <div class="modal-body" style="height: auto">


        <form class="form-horizontal" action="unassign.php" method="post" style="font-size: 15px">
            <fieldset>
                <!-- <legend class="text-center">Part Details</legend> -->

                <!-- Name input-->

                <div class="form-group">
                    <div class="col-md-9">
                        <label class="col-md-12 control-label" for="message"> <b>Do You Want To Relocate This Part ?</b></label>
                    </div>
                     <div class="col-md-9">
                        <label class="col-md-12 control-label" for="message"> <b>From '.$r_lock.'</b></label>
                    </div>
                    <input id="name" name="i_id" type="hidden" placeholder="Enter New Selling Price" class="form-control" value="'.$i_id.'" style="height:30px">
                      <input id="name" name="i_no" type="hidden" placeholder="Enter New Selling Price" class="form-control" value="'.$i_no.'" style="height:30px">
                      <input id="name" name="s_id" type="hidden" placeholder="Enter New Selling Price" class="form-control" value="'.$i_loc.'" style="height:30px">
      
                    
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-danger" value="Yes" name="sumbit">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
                    
                </div>
            </fieldset>

        </form>

    </div>

</div>
<!--End Ava Rack -->';
        //End Inventory Modal




    echo '
       </tr>';

    }
    echo '</table> </div>';
}
else{
    echo 'there is No Results to Show';
}


?>