<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bamboo Life Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <!-- Main css for theme -->
    <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/charisma-app.css" rel="stylesheet">
    <!-- Main corousal css for theme -->
    <link href="<?php echo base_url(); ?>assets/admin/css/slick.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/slick-theme.css" rel="stylesheet">
    <link href='<?php echo base_url(); ?>assets/admin/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>assets/admin/css/style.css' rel='stylesheet'>
    <link href="<?php echo base_url();?>assets/admin/css/datepicker.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/css/simpleFilePreview.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery.min.js"></script>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/admin/img/favicon.ico">
</head>
<body>
<!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"> <!-- <img alt="Charisma Logo" src="img/logo20.png" class="hidden-xs"/> -->
            <span>Bamboo Life</span></a>
            <?php if (!empty($this->session->userdata('logged_in'))){?>
                <!-- user dropdown starts -->
                <div class="btn-group pull-right">
                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> 
                        <?php 
                        $session_data = $this->session->userdata('logged_in');
                        echo $session_data['username']; ?></span>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url()."admin/users/edit_adminusers/".$session_data['userid'] ?>">Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>admin/logout">Logout</a></li>
                    </ul>
                </div>
                <!-- user dropdown ends -->
            <?php } ?>

            <ul class="collapse navbar-collapse nav navbar-nav top-menu pull-right">
                <li><a href="<?php echo base_url(); ?>"><i class="glyphicon glyphicon-globe"></i> Visit Site</a></li>
            </ul>
        </div>
    </div>
    <!-- topbar ends -->
    <?php 
    //echo $_SERVER['REQUEST_URI']."<br>";
    //echo $this->config->item('admin_base_url')."<br>"; 
    ?>
    <?php if (!empty($this->session->userdata('logged_in'))){?> 
    <!-- left menu starts -->
    <div class="row">
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">
                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">My Dashboard</li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/dashboard"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li> 
                       <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-user"></i><span> Users</span></a>
                            <ul class="nav nav-pills nav-stacked sub-menu">
                                 <li><a href="<?php echo base_url(); ?>admin/users/adminusers">Admin Users</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/users/endusers">End users</a></li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <?php $uri_segment = $this->uri->segment(3); ?>
                            <a href="#"><i class="glyphicon glyphicon-inbox"></i><span> Catalog</span></a>
                            <ul class="nav nav-pills nav-stacked sub-menu">
                            <li class="<?php if($uri_segment =="add_category"||$uri_segment =="edit_category"){echo "active";}?>"><a href="<?php echo base_url(); ?>admin/admindashboard/category">Category </a></li>
                            <li class="<?php if($uri_segment =="add_subcategory"||$uri_segment =="edit_subcategory"){echo "active";}?>"><a href="<?php echo base_url(); ?>admin/admindashboard/subcategory">Subcategory </a></li>
                            <li class="<?php if($uri_segment =="add_recipient"||$uri_segment =="edit_recipient"){echo "active";}?>"><a href="<?php echo base_url(); ?>admin/admindashboard/recipient">Recipient</a></li>
                            <li class="<?php if($uri_segment =="add_product_attributes"||$uri_segment =="edit_product_attributes"){echo "active";}?>"><a href="<?php echo base_url(); ?>admin/admindashboard/product_attributes">Product Attributes </a></li>
                            <li class="<?php if($uri_segment =="add_giftproduct"||$uri_segment =="edit_giftproduct"){echo "active";}?>"><a href="<?php echo base_url(); ?>admin/admindashboard/giftproduct">Product </a></li>
                            <li><a href="<?php echo base_url(); ?>admin/admindashboard/product_attribute_sets">Product Attributes Sets </a></li>
                            </ul>
                            </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-map-marker"></i><span> Location</span></a>
                            <ul class="nav nav-pills nav-stacked sub-menu">
                                <li class="<?php if($uri_segment =="add_state"||$uri_segment =="edit_state"){echo "active";}?>"><a href="<?php echo base_url(); ?>admin/admindashboard/state">State</a></li>
                                <li class="<?php if($uri_segment =="add_city"||$uri_segment =="edit_city"){echo "active";}?>"><a href="<?php echo base_url(); ?>admin/admindashboard/city">City</a></li>
                                <li class="<?php if($uri_segment =="add_area"||$uri_segment =="edit_area"){echo "active";}?>"><a href="<?php echo base_url(); ?>admin/admindashboard/area">Area </a></li>
                            </ul>
                        </li>
                         <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-sort-by-order"></i><span> Order</span></a>
                            <ul class="nav nav-pills nav-stacked sub-menu">
                                <li class="<?php if($uri_segment =="edit_order"){echo "active";}?>"><a href="<?php echo base_url(); ?>admin/admindashboard/order">Order </a></li>
                                <li class="<?php if($uri_segment =="edit_orderitem"){echo "active";}?>"><a href="<?php echo base_url(); ?>admin/admindashboard/orderitem">Order Item</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/admindashboard/transaction">Transaction</a></li>
                            </ul>
                        </li>
                </div>
            </div>
        </div>
        <!--/span-->
<!-- left menu ends -->
<?php } ?>
