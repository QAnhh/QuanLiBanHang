<?php
session_start();
    
    require_once "progress/dbConnect.php";
    ob_start(); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/imgdb/eel.ico" type="image/ico" />

    <title>Admin</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="css/cssdb/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
          <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
            </div>
            <!-- /top navigation -->
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href=# class="site_title"><i class="fa fa-rocket"></i> <span>Adminator</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="img/imgdb/ntluon.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Database</h3>
                <ul class="nav side-menu">                       
                    <li>
                        <a href="admin.php?page=products">Products</a>
                    </li>
                    
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              
              <a data-toggle="tooltip" data-placement="top" title="Logout" href=#>
                <span class="fa fa-sign-out" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
        <!-- page content -->

        <!-- /page content -->

        
      

    <!-- jQuery -->
    <script src="js/jsdb/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/jsdb/bootstrap.bundle.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="js/jsdb/custom.min.js"></script>
    
        <?php
        $page = $_GET['page']??'products';
        switch ($page)
        {
            case 'products':
                include_once 'displayDB/products.php';
                break;
            default :
                include_once 'displayDB/products.php';
        }
        ?>
    </div>
</body>
</html>

