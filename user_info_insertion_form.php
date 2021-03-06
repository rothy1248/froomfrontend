<?php include 'header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3" style="padding-right: 0px; padding-left: 0px; padding-top: 0px;">
            <nav class="navbar navbar-default navbar-static-top" role="navigation">
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav">                            
                            <li>
                                <a href="user_info_dashboard.php" class="nav_side_txt_color"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <!--                            <li>
                                                            <a href="index.html"><i class="fa fa-envelope fa-fw"></i> Message <span class="badge" style="float: right;">10</span></a>
                                                        </li>-->
                            <li>
                                <a href="user_info_details.php" class="nav_side_txt_color"><i class="fa fa-user fa-fw"></i></i> User Details</a>                                
                            </li> 
                            <li>
                                <a href="index.html" class="nav_side_txt_color"><i class="fa fa-wrench fa-fw"></i></i> Settings</a>                                
                            </li>                                                  
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-7">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please complete your profile.</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" tabindex="2">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="display_name" id="display_name" class="form-control" placeholder="Phone Number" tabindex="3">
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <select class="form-control input-sm">
                                                <option selected>Current state</option>
                                                <option value="" >Washington DC</option>
                                                <option value="" >Washington DC</option>
                                                <option value="" >Chian</option>
                                                <option value="" >Washington DC</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <select class="form-control input-sm">
                                                <option selected>Current city</option>
                                                <option value="" >kabalega</option>
                                                <option value="" >labdanum DC</option>
                                                <option value="" >Chian</option>
                                                <option value="" >baas DC</option>
                                            </select>
                                        </div>
                                    </div>                        
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="number" name="zip" class="form-control" placeholder="Zip code" tabindex="1">
                                        </div>
                                    </div>                        
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Current Address"></textarea>
                                </div>

                                <hr class="colorgraph">
                                <div class="row">
                                    <div class="col-xs-12 col-md-12 contact_agent_button_place"><a href="#" class="btn btn-warning btn-block">Complete</a></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>     
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>