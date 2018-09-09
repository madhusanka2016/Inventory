<div class="container ">
    <div class="row">
        <h2>Inventory Management System</h2>
        <div id="custom-search-input">
            <form action="home_screen.php" method="post">
                <div class="row"><div class="col-md-9">
                        <input type="text" name="search" class="search-query form-control" placeholder="Search Here" style="height: 40px; font-size: 15px" />

                    </div>
                    <div class="col-md-3">
                        <select class="form-control" id="sel1" name="searchmethod" style="height: 40px; font-size: 15px">
                            <option selected value="i_type">Search On Type</option>
                            <option  value="i_no">Search On Part No</option>
                            <option  value="i_brand">Search On Brand</option>
                            <option  value="i_des">Search On Description</option>

                        </select>
                    </div>
                </div>


            </form>
        </div>

    </div>
</div>