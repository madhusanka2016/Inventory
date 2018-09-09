
<!-- Select Date Model-->
<div class="modal fade" id="saleModal" tabindex="1"  style="height: auto">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Sale History</h3>
    </div>
    <div class="modal-body" style="height: auto">


        <form class="form-horizontal" action="salehistory.php" method="post" style="font-size: 15px">
            <fieldset>
                 <legend class="text-center">Salect Date</legend>

                <!-- Name input-->

                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-3 control-label" for="message">Date</label>
                    </div>
                    <div class="col-md-6">
                        <input id="name" name="s_date" min="2017-04-01" max="2050-04-30" type="date" placeholder="Enter Year" class="form-control" style="height:30px">
                    </div>
                </div>




                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    <input type="submit" class="btn btn-danger" value="Select" name="submit">
                </div>
            </fieldset>

        </form>

    </div>

</div>
<!--End Select Date-->


<!-- New Parts Model-->
<div class="modal fade" id="newpartModal" tabindex="1"  style="height: auto">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Add New Part</h3>
    </div>
    <div class="modal-body" style="height: auto">


        <form class="form-horizontal" action="addpart.php" method="post" style="font-size: 15px">
            <fieldset>
               <!-- <legend class="text-center">Part Details</legend> -->

                <!-- Name input-->
                <div class="form-group">
                    <div class="col-md-6">
                    <label class="col-md-6 control-label" for="message">Part No</label>
                    </div>
                    <div class="col-md-6">
                        <input id="name" name="i_no" required required type="text" placeholder="Enter Part No" class="form-control" style="height:30px">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-3 control-label" required for="message">Part Type</label>
                    </div>
                    <div class="col-md-6">
                        <input id="name" name="i_type" required type="text" required placeholder="Enter Part Type" class="form-control" style="height:30px">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-3 control-label" required required for="message">Part Brand</label>
                    </div>
                    <div class="col-md-6">
                        <input id="name" name="i_brand" type="text" required placeholder="Enter Part Brand" class="form-control" style="height:30px">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-3 control-label" required for="message">Part Description</label>
                    </div>
                    <div class="col-md-6">
                        <input id="name" name="i_des" required type="text" placeholder="Enter Part Description" class="form-control" style="height:30px">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-3 control-label"  required for="message">Part Initial Quantity</label>
                    </div>
                    <div class="col-md-6">
                        <input id="name" name="i_qty" type="text"  placeholder="Enter Part Initial Quantity" class="form-control" style="height:30px" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-3 control-label" for="message">Selling Price (Rs)</label>
                    </div>
                    <div class="col-md-6">
                        <input id="name" name="i_up" type="text"  required placeholder="Enter Selling Price" class="form-control" style="height:30px">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-3 control-label" for="message"> Unit Price (Rs)</label>
                    </div>
                    <div class="col-md-6">
                        <input id="name" name="i_mp" type="text"  required placeholder="Enter  Unit Price" class="form-control" style="height:30px">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-3 control-label" for="message">Assign Rack</label>
                    </div>
                    <div class="col-md-6">
                        <select class="form-control" id="sel1" name="i_loc">
                            <option selected value="UN">Not Assigned</option>
                            <?php
                            $sql1 ="SELECT * FROM tb_rackmeta ";
                            $racknames=mysqli_query($conn,$sql1);
                            if($racknames!="") {

                                while ($row = $racknames->fetch_assoc()){

                                    $r_names= $row['r_name'];
                                    $r_id= $row['id'];
                                    $r_des= $row['r_des'];
                                    echo '<option value="'.$r_names.'">'.$r_names.' - '. $r_des.'</option>';

                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    <input type="submit" class="btn btn-danger" value="Add" name="submit">
                </div>
             </fieldset>

        </form>

    </div>

</div>
<!--End Add Part-->

<!--Start Add Rack-->
<div class="modal fade" id="newrackModal" tabindex="1"  style="height: auto">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Add New Rack</h3>
    </div>
    <div class="modal-body" style="height: auto">


        <form class="form-horizontal" action="addrack.php" method="post" style="font-size: 15px">
            <fieldset>
                <!-- <legend class="text-center">Part Details</legend> -->

                <!-- Name input-->
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-6 control-label" for="message">Rack Name</label>
                    </div>
                    <div class="col-md-6">
                        <input id="name" name="r_name" type="text" required placeholder="Enter Rack Name" class="form-control" style="height:30px">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-3 control-label" for="message">Description</label>
                    </div>
                    <div class="col-md-6">
                        <input id="name" name="r_des" type="text"  required placeholder="Enter Rack Description" class="form-control" style="height:30px">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-3 control-label" pattern= "[0-9]" required for="message">No Of Floors</label>
                    </div>
                    <div class="col-md-6">
                        <input id="name" name="r_floor" type="text" placeholder="Enter No Of Floors" class="form-control" style="height:30px">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-3 control-label" pattern= "[0-9]" required for="message">Columns Per Floor</label>
                    </div>
                    <div class="col-md-6">
                        <input id="name" name="r_col" type="text" placeholder="Enter Cloumns Per Floor" class="form-control" style="height:30px">
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    <input type="submit" class="btn btn-danger" value="Add" name="submit">
                </div>
            </fieldset>

        </form>

    </div>

</div>

<!-- End Add Rack-->

<!-- Ava Rack Model-->
<div class="modal fade" id="avarackModal" tabindex="1"  style="height: auto">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Select Rack</h3>
    </div>
    <div class="modal-body" style="height: auto">


        <form class="form-horizontal" action="rack_view%20.php" method="post" style="font-size: 15px">
            <fieldset>
                <!-- <legend class="text-center">Part Details</legend> -->

                <!-- Name input-->

                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-3 control-label" for="message">Assign Rack</label>
                    </div>

                    <div class="col-md-6">
                        <select class="form-control" id="sel1" name="r_names">
                            <?php
                            $sql1 ="SELECT * FROM tb_rackmeta ";
                            $racknames=mysqli_query($conn,$sql1);
                            if($racknames!="") {

                                while ($row = $racknames->fetch_assoc()){

                                $r_names= $row['r_name'];
                                $r_id= $row['id'];
                                $r_des= $row['r_des'];
                                echo '<option value="'.$r_names.'">'.$r_names.' - '. $r_des.'</option>';

                                }
                            }
                            ?>

                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    <input type="submit" class="btn btn-danger" value="Select" name="Select">
                </div>
            </fieldset>

        </form>

    </div>

</div>
<!--End Ava Rack -->


<!-- Ava Rack Model-->
<div class="modal fade" id="deleterackModal" tabindex="1"  style="height: auto">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Detele Rack</h3>
    </div>
    <div class="modal-body" style="height: auto">


        <form class="form-horizontal" action="deleterack.php" method="post" style="font-size: 15px">
            <fieldset>
                <!-- <legend class="text-center">Part Details</legend> -->

                <!-- Name input-->

                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-md-12 control-label" for="message">Select Rack to Delete</label>
                    </div>

                    <div class="col-md-6">
                        <select class="form-control" id="sel1" name="r_names">
                            <?php
                            $sql1 ="SELECT * FROM tb_rackmeta ";
                            $racknames=mysqli_query($conn,$sql1);
                            if($racknames!="") {

                                while ($row = $racknames->fetch_assoc()){

                                    $r_names= $row['r_name'];
                                    $r_id= $row['id'];
                                    $r_des= $row['r_des'];
                                    echo '<option value="'.$r_names.'">'.$r_names.' - '. $r_des.'</option>';

                                }
                            }
                            ?>

                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    <input type="submit" class="btn btn-danger" value="Delete" name="Select">
                </div>
            </fieldset>

        </form>

    </div>

</div>
<!--End Ava Rack -->



<div class="container">
<div class="navbar col-md-12">
    <div class="navbar-inner">
        <div class="container ">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="nav-collapse">
                <ul class="nav">
                    <li class="active"><a href="home_screen.php">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Parts <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#newpartModal"  data-toggle="modal">Add Part</a></li>
                            <li class="divider"></li>
                            <li><a href="changepart.php">Update Parts</a></li>
                            <li><a href="changepart.php">Add Inventory</a></li>
                            <li><a href="changepart.php">Delete Part</a></li>
                            <li class="divider"></li>

                            <li><a href="unassigntorack.php">Relocate Part</a></li>
                            <li><a href="assigntorack.php">Assign Parts To Rack</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Racks <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#newrackModal" data-toggle="modal">Add Rack</a></li>
                            <li><a href="#avarackModal" data-toggle="modal">View Rack Avaliability</a></li>
                            <li class="divider"></li>
                            <li class="divider"></li>
                            <li class="divider"></li>
                            <li class="divider"></li>
                            <li><a href="#deleterackModal" data-toggle="modal" style="text-decoration-color: red">Delete Rack</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sales <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="salehistory.php">Sales on Today</a></li>
                            <li><a href="#saleModal" data-toggle="modal">Sales on Sepecific Day</a></li>

                        </ul>
                    </li>
                </ul>

                <ul class="nav pull-right">
                    <!--
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $username;?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"></a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="sessionout.php" class="btn btn-danger btn-block"style="  width: 150px; padding: 0px; padding-bottom: 5px;">Log Out</a></li>
                        </ul>
                    </li>
                    -->
                    <li class="divider-vertical"></li>
                    <li>
                        <div class="navbar-login navbar-login-session">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p>
                                        <a href="backup1.php" class="btn btn-primary btn-block"style="  width: 150px;  padding: 3px;    padding-bottom: 3px;">Restore</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="divider-vertical"></li>
                    <li>
                        <div class="navbar-login navbar-login-session">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p>
                                        <a href="backup.php" class="btn btn-standard btn-block"style="  width: 150px;  padding: 3px;    padding-bottom: 3px;">Backup</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="divider-vertical"></li>
                    <li>
                        <div class="navbar-login navbar-login-session">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p>
                                        <a href="sessionout.php" class="btn btn-danger btn-block"style="  width: 150px;
    padding: 3px;
    padding-bottom: 3px;">Log Out</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div><!-- /.nav-collapse -->
        </div>
    </div><!-- /navbar-inner -->
</div>
</div>