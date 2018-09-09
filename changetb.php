
<div class="container ">
    <div class="row">
        <div class="col-md-3">
            <legend class="text-center">Search Parts to Change</legend>
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
    <th>Selling Price</th>
    
  
     <th>Update</th>
     <th>Add Stocks</th>
     <th>Delete</th>
    
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





        echo '<td>'.$i_id.'</td>';
        echo '<td>'.$i_no.'</td>';
        echo '<td>'.$i_type.'</td>';
        echo '<td>'.$i_brand.'</td>';
        echo '<td>'.$i_des.'</td>';
        echo '<td>'.$i_qty.'</td>';
        echo '<td>'.$i_up.'</td>';

        echo '<td><a href="#updateModal'.$i_id.'" role="button" data-toggle="modal"><button type="submit" class="btn btn-primary" data-dismiss="modal">Update</button></a></td>';
        echo '<td><a href="#addModal'.$i_id.'" role="button" data-toggle="modal"><button type="submit" class="btn btn-success" data-dismiss="modal">Add</button></a></td>';
        echo '<td><a href="#deleteModal'.$i_id.'" role="button" data-toggle="modal"><button type="submit" class="btn btn-danger" data-dismiss="modal">Delete</button></a></td>';
       // inventory Modal
        echo '<div class="modal fade" id="addModal'.$i_id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Add Inventory - '.$i_no.'</h3>
    </div>
    <div class="modal-body">
        
        
          <form class="form-horizontal" action="addinventory.php" method="post" style="font-size: 15px">
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
              <label class="col-md-3 control-label" for="name">Selling Price</label>
              <div class="col-md-9">
                <label class="col-md-9 control-label" for="name">Rs. '.$i_up.'</label>
              </div>
            </div>
             <div class="form-group" style="font-size: 15px">
              <label class="col-md-3 control-label" for="name">Unit Price</label>
              <div class="col-md-9">
                <label class="col-md-9 control-label" for="name">Rs. '.$i_mp.'</label>
              </div>
            </div>
            ';
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
                <label class="col-md-12 control-label" for="name">'.$r_lock.'</label>
              </div>
            </div>
             
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Add Quantity</label>
              <div class="col-md-9">
                <input id="name" pattern= "[0-9]" required class="col-md-9 control-label" name="i_inventory" type="text" placeholder="Quantity" class="form-control" style="height:30px">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Selling Price</label>
              <div class="col-md-9">
                <input id="name" name="i_id" type="hidden" placeholder="Enter New Selling Price" class="form-control" value="'.$i_id.'" style="height:30px">
              <input id="name" name="i_mp" type="hidden" placeholder="Unit Price" class="form-control" value="'.$i_mp.'" style="height:30px">
              <input id="name" name="i_qty" type="hidden" placeholder="Unit Price" class="form-control" value="'.$i_qty.'" style="height:30px">
              <input id="name"  required class="col-md-9 control-label" name="i_newprice" type="text" placeholder="Unit Price"  value="'.$i_up.'" class="form-control" style="height:30px">
              </div>
            </div>
            
    
            
          </fieldset>
          <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <input type="submit" class="btn btn-danger" value="Add" name="submit">
    </div>
    </form>
        
    </div>
    
</div>';
        //End Inventory Modal

        // Delete Modal
        echo '<div class="modal fade" id="deleteModal'.$i_id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete Part - '.$i_no.'</h3>
    </div>
    <div class="modal-body">
        
        
          <form class="form-horizontal" action="deleteinventory.php" method="post" style="font-size: 15px">
          <fieldset >
            
    
            <!-- Name input-->
            <div 
            <div class="row form-group" style="font-size: 15px">
            <div class="col-md-3"> 
            </div>
            <div class="col-md-9"> 
            
              <label class="control-label" for="name"><b>Do You Want To Delete  '.$i_no.' ??</b></label>
            </div> 
            </div>
    
           <div class="form-group" style="font-size: 15px">
              <div class="col-md-3">
              
              <label class=" control-label" for="name">Part No</label>
              </div>
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
              <label class="col-md-3 control-label" for="name">Selling Price</label>
              <div class="col-md-9">
                <label class="col-md-3 control-label" for="name">'.$i_up.'</label>
              </div>
            </div>
             <div class="form-group" style="font-size: 15px">
              <label class="col-md-3 control-label" for="name">Unit Price</label>
              <div class="col-md-9">
                <label class="col-md-3 control-label" for="name">'.$i_mp.'</label>
              </div>
            </div>
            ';
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
                <label class="col-md-12 control-label" for="name">'.$r_lock.'</label>
              </div>
            </div>
            <!-- Message body -->
            
            
                <input id="name" name="i_id" type="hidden" placeholder="Enter New Selling Price" class="form-control" value="'.$i_id.'" style="height:30px">
              <input id="name" name="i_mp" type="hidden" placeholder="Unit Price" class="form-control" value="'.$i_mp.'" style="height:30px">
              <input id="name" name="i_qty" type="hidden" placeholder="Unit Price" class="form-control" value="'.$i_qty.'" style="height:30px">
              <input id="name" name="i_loc" type="hidden" placeholder="Unit Price" class="form-control" value="'.$i_loc.'" style="height:30px">
              
              
            
            
    
            
          </fieldset>
          <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <input type="submit" class="btn btn-danger" value="Delete" name="submit">
    </div>
    </form>
        
    </div>
    
</div>';
        //End Delete Modal

echo '
<!-- Update Parts Model-->
<div class="modal fade" id="updateModal'.$i_id.'" tabindex="1"  style="height: auto">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Update Part '.$i_no.'</h3>
    </div>
    <div class="modal-body" style="height: auto">


        <form class="form-horizontal" action="update.php" method="post" style="font-size: 15px">
            <fieldset>
               <!-- <legend class="text-center">Part Details</legend> -->

                <!-- Name input-->
                <div class="form-group">
                    <div class="col-md-6">
                    <label class="col-md-6 control-label" for="message">Part No</label>
                    </div>
                    <div class="col-md-6">
                        <input id="name"  required name="i_no" type="text" value="'.$i_no.'" placeholder="Enter Part No" class="form-control" style="height:30px">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-6 control-label"  for="message">Part Type</label>
                    </div>
                    <div class="col-md-6">
                        <input id="name" name="i_type" required type="text" value="'.$i_type.'" placeholder="Enter Part Type" class="form-control" style="height:30px">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-6 control-label" for="message">Part Brand</label>
                    </div>
                    <div class="col-md-6">
                        <input id="name" name="i_brand" required type="text" value="'.$i_brand.'" placeholder="Enter Part Brand" class="form-control" style="height:30px">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-9 control-label" for="message">Part Description</label>
                    </div>
                    <div class="col-md-6">
                        <input id="name" name="i_des" required type="text" value="'.$i_des.'" placeholder="Enter Part Description" class="form-control" style="height:30px">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-9 control-label" for="message">Part  Quantity</label>
                    </div>
                    <div class="col-md-6">
                        <input id="name" name="i_qty" type="text" required placeholder="Enter Part  Quantity" value="'.$i_qty.'" class="form-control" style="height:30px">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-9 control-label" for="message">Selling Price</label>
                    </div>
                    <div class="col-md-6">
                        <input id="name" name="i_up" type="text" required value="'.$i_up.'" placeholder="Enter Selling Price" class="form-control" style="height:30px">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-9 control-label" for="message"> Unit Price</label>
                    </div>
                    <div class="col-md-6">
                        <input id="name" name="i_mp" type="text" required value="'.$i_mp.'" placeholder="Enter Unit Price" class="form-control" style="height:30px">
                    </div>
                </div>
                
                <div class="modal-footer">
                  <input id="name" name="i_id" value="'.$i_id.'" required type="hidden" placeholder="Enter Part No" class="form-control" style="height:30px">
                  
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    <input type="submit" class="btn btn-danger" value="Update" name="submit">
                </div>
             </fieldset>

        </form>

    </div>

</div>
<!--End Update Part-->

';


    echo '
       </tr>';

    }
    echo '</table> </div>';
}
else{
    echo 'there is No Results to Show';
}


?>