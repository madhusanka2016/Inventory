
<?php


if($rackmeta!="") {
    echo '<div class="well">
    <table class="table" style="font-size: 15px">
    <thead></thead>
    <tr> ';
    while ($row = $rackmeta->fetch_assoc()){
        $r_col= $row['r_col'];
        $r_floor= $row['r_floor'];
        echo '<th class="text-center"></th>';
        for($i=1; $i <=$r_col;$i++ ){
            echo '<th class="text-center">'.$i.'</th>';
        }
        echo '
</tr>';
        for($i=$r_floor; $i >0;$i-- ){
            echo '<tr>';
                echo '<td style="text-decoration-style: double">'.$i.'</td>';
            for($j=1; $j <=$r_col;$j++ ){
                $sql2 ="SELECT * FROM tb_rack WHERE ((rack_name ='$select') &(rack_floor =$i) & (rack_coloum = $j)) ";
                $rackdetails=mysqli_query($conn,$sql2);
                if($rackdetails!="") {
                    $row2 = $rackdetails->fetch_assoc();
                        $part_id= $row2['part_id'];
                        if ($part_id=='0'){

                            $x= '<td style="background-color: green; color:white" class="text-center">Available </td>';
                        }
                        else{

                            $sql3 ="SELECT * FROM tb_item WHERE i_id =$part_id";
                            $result3=mysqli_query($conn,$sql3);
                            if($result3!="") {
                                $row4 = $result3->fetch_assoc();
                                $i_name = $row4['i_no'];
                                $i_type = $row4['i_type'];
                                $i_qty = $row4['i_qty'];
                            }
                            $x= '<td style="background-color: red;color:white" class="text-center">'.$i_name.' '.$i_type.' '.$i_qty.'pcs</td>';
                        }
                    echo $x;
                }
            }

            echo '</tr>';
        }
       /*
        echo '<td><a href="#issueModal'.$i_id.'" role="button" data-toggle="modal"><button type="submit" class="btn btn-success" data-dismiss="modal">ISSUE</button></a></td>';
        echo '<div class="modal fade" id="issueModal'.$i_id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                <label class="col-md-3 control-label" for="name">'.$i_id.'</label>
              </div>
            </div>
    
           <div class="form-group" style="font-size: 15px">
              <label class="col-md-3 control-label" for="name">Part No</label>
              <div class="col-md-9">
                <label class="col-md-3 control-label" for="name">'.$i_no.'</label>
              </div>
            </div>
            <div class="form-group" style="font-size: 15px">
              <label class="col-md-3 control-label" for="name">Type</label>
              <div class="col-md-9">
                <label class="col-md-3 control-label" for="name">'.$i_type.'</label>
              </div>
            </div>
            <div class="form-group" style="font-size: 15px">
              <label class="col-md-3 control-label" for="name">Brand</label>
              <div class="col-md-9">
                <label class="col-md-3 control-label" for="name">'.$i_brand.'</label>
              </div>
            </div>
            <div class="form-group" style="font-size: 15px">
              <label class="col-md-3 control-label" for="name">Description</label>
              <div class="col-md-9">
                <label class="col-md-3 control-label" for="name">'.$i_des.'</label>
              </div>
            </div>
             <div class="form-group" style="font-size: 15px">
              <label class="col-md-3 control-label" for="name">Quantity</label>
              <div class="col-md-9">
                <label class="col-md-3 control-label" for="name">'.$i_qty.'</label>
              </div>
            </div>
             <div class="form-group" style="font-size: 15px">
              <label class="col-md-3 control-label" for="name">Unit Price</label>
              <div class="col-md-9">
                <label class="col-md-3 control-label" for="name">'.$i_up.'</label>
              </div>
            </div>
             <div class="form-group" style="font-size: 15px">
              <label class="col-md-6 control-label" for="name">Minimum unit Price</label>
              <div class="col-md-6">
                <label class="col-md-3 control-label" for="name">'.$i_mp.'</label>
              </div>
            </div>
             <div class="form-group" style="font-size: 15px">
              <label class="col-md-6 control-label" for="name">Location</label>
              <div class="col-md-6">
                <label class="col-md-3 control-label" for="name">'.$i_loc.'</label>
              </div>
            </div>
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Issue Quantity</label>
              <div class="col-md-9">
                <input id="name" name="i_issue" type="text" placeholder="Quantity" class="form-control" style="height:30px">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Unit Price</label>
              <div class="col-md-9">
                <input id="name" name="i_id" type="hidden" placeholder="Unit Price" class="form-control" value="'.$i_id.'" style="height:30px">
              <input id="name" name="i_mp" type="hidden" placeholder="Unit Price" class="form-control" value="'.$i_mp.'" style="height:30px">
              <input id="name" name="i_qty" type="hidden" placeholder="Unit Price" class="form-control" value="'.$i_qty.'" style="height:30px">
              <input id="name" name="i_issueprice" type="text" placeholder="Unit Price"  value="'.$i_up.'" class="form-control" style="height:30px">
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
*/
    }
    echo '</table> </div>';
}
else{
    echo 'there is No Results to Show';
}


?>