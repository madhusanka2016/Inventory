<?php

if($result2!="") {
    echo '<div class="well">
    <table class="table" style="font-size: 15px">
    <thead></thead>
    <tr>
        <th>Id</th>
    <th>Type</th>
    <th>Part No</th>
   
    <th>Brand</th>
    <th>Description</th>
    <th>Quantity</th>
   
    <th>Selling Price</th>
     <th>Unit Price</th>
    <th>Location</th>
     <th>Action</th>
    
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
        else{
            $r_lock='Unassigned TO Rack';
        }


        if ($i_qty<=10){
            $sss='style="background-color: red; color:white"';

        }
        else{
            $sss='style="background-color: green; color:white"';
        }




        echo '<td>'.$i_id.'</td>';
        echo '<td>'.$i_type.'</td>';
        echo '<td>'.$i_no.'</td>';
        echo '<td>'.$i_brand.'</td>';
        echo '<td>'.$i_des.'</td>';
       // echo '<td>'.$sss.'</td>';
        echo '<td '.$sss.'>'.$i_qty.'</td>';
        echo '<td>Rs. '.$i_up.'</td>';
        echo '<td>Rs. '.$i_mp.'</td>';
        echo '<td>'.$r_lock.'</td>';
        echo '<td><a href="#issueModal'.$i_id.'" role="button" data-toggle="modal"><button type="submit" class="btn btn-success" data-dismiss="modal">ISSUE</button></a></td>';
        echo '<div class="modal fade" id="issueModal'.$i_id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Issue Parts - '.$i_no.'</h3>
    </div>
    <div class="modal-body">
        
        
          <form class="form-horizontal" action="issue.php" method="post" style="font-size: 15px">
          <fieldset >
            
    
            <!-- Name input-->
            <div class="form-group" style="font-size: 15px">
              <label class="col-md-3 control-label" for="name">ID</label>
              <div class="col-md-9">
                <label class="col-md-9 control-label" for="name">'.$i_id.'</label>
              </div>
            </div>
    
           <div class="form-group" style="font-size: 15px">
              <label class="col-md-3 control-label" for="name">Part No</label>
              <div class="col-md-9">
                <label class="col-md-9 control-label" for="name">'.$i_no.'</label>
              </div>
            </div>
            <div class="form-group" style="font-size: 15px">
              <label class="col-md-3 control-label" for="name">Type</label>
              <div class="col-md-9">
                <label class="col-md-9 control-label" for="name">'.$i_type.'</label>
              </div>
            </div>
            <div class="form-group" style="font-size: 15px">
              <label class="col-md-3 control-label" for="name">Brand</label>
              <div class="col-md-9">
                <label class="col-md-9 control-label" for="name">'.$i_brand.'</label>
              </div>
            </div>
            <div class="form-group" style="font-size: 15px">
              <label class="col-md-3 control-label" for="name">Description</label>
              <div class="col-md-9">
                <label class="col-md-9 control-label" for="name">'.$i_des.'</label>
              </div>
            </div>
             <div class="form-group" style="font-size: 15px">
              <label class="col-md-3 control-label" for="name">Quantity</label>
              <div class="col-md-9">
                <label class="col-md-9 control-label" for="name">'.$i_qty.'</label>
              </div>
            </div>
             <div class="form-group" style="font-size: 15px">
              <label class="col-md-3 control-label" for="name">Selling Price </label>
              <div class="col-md-9">
                <label class="col-md-9 control-label" for="name">Rs. '.$i_up.'</label>
              </div>
            </div>
             <div class="form-group" style="font-size: 15px">
              <label class="col-md-3 control-label" for="name">Unit Price</label>
              <div class="col-md-9">
                <label class="col-md-9 control-label" for="name">Rs. '.$i_mp.'</label>
              </div>
            </div>'
           ;
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
        else{
            $r_lock="Unassigned To Rack";
        }


        echo '
             <div class="form-group" style="font-size: 15px">
              <label class="col-md-3 control-label" for="name">Location</label>
              <div class="col-md-9">
                <label class="col-md-9 control-label" for="name">'.$r_lock.'</label>
              </div>
            </div>
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Issue Quantity</label>
              <div class="col-md-9">
                <input class="col-md-9 control-label" id="name" name="i_issue" type="number" pattern= "[0-9]" required min="1" max="'.$i_qty.'" title="Max '.$i_qty.' " placeholder="Quantity" class="form-control" style="height:30px">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Unit Price</label>
              <div class="col-md-9">
                <input id="name" name="i_id" type="hidden" placeholder="Unit Price" class="form-control" value="'.$i_id.'" style="height:30px">
              <input id="name" name="i_mp" type="hidden" placeholder="Unit Price" class="form-control" value="'.$i_mp.'" style="height:30px">
              <input id="name" name="i_no" type="hidden" placeholder="Unit Price" class="form-control" value="'.$i_no.'" style="height:30px">
              <input id="name" name="i_type" type="hidden" placeholder="Unit Price" class="form-control" value="'.$i_type.'" style="height:30px">
              <input id="name" name="i_qty" type="hidden" placeholder="Unit Price" class="form-control" value="'.$i_qty.'" style="height:30px">
              <input id="name" class="col-md-9 control-label" name="i_issueprice" type="text" placeholder="Unit Price"  value="'.$i_up.'" required class="form-control" style="height:30px">
              <input id="name" name="i_brand" type="hidden" placeholder="Unit Price" class="form-control" value="'.$i_brand.'" style="height:30px">
              <input id="name" name="i_des" type="hidden" placeholder="Unit Price" class="form-control" value="'.$i_des.'" style="height:30px">
              </div>
            </div>
            
    
            
          </fieldset>
          <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <input type="submit" class="btn btn-danger" value="Issue" name="submit">
    </div>
    </form>
        
    </div>
    
</div>';




    echo '
       </tr>';

    }
    echo '</table> </div>';
}
else{
    echo 'there is No Results to Show';
}


?>