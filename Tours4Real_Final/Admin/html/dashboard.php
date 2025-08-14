<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php
    ob_start();
    include("connection.php");
    if(!isset($_SESSION['adminid']))
    {
        header('location:index.php');
    }
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Flexy lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Flexy admin lite design, Flexy admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Flexy Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <link rel="icon" type="image/png" sizes="16x16" href="/Tours4Real/img/logo.png">
    <title>Admin-Dashboard</title>
    <!-- <link rel="canonical" href="https://www.wrappixel.com/templates/Flexy-admin-lite/" /> -->
    <!-- Favicon icon -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png"> -->
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<style>
    .card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
</style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text" style="color: rgb(42, 34, 151); font-weight: bold;" >
                            <!-- dark Logo text -->
                             Tours4Real
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5"> -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <!-- <ul class="navbar-nav float-start me-auto"> -->
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <!-- <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><i class="mdi mdi-magnify me-1"></i> <span class="font-16">Search</span></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                            </form>
                        </li> -->
                    <!-- </ul> -->
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <!-- <ul class="navbar-nav float-end"> -->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../assets/images/users/profile.png" alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/html/pages-profile.html"><i class="ti-user m-r-5 m-l-5"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i>
                                    Log out</a>
                            </ul>
                        </li> -->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    <!-- </ul> -->
                <!-- </div> -->
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="dashboard.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Dashboard</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="manage_user.php" aria-expanded="false"><i class="mdi mdi-border-all"></i><span
                                    class="hide-menu">Manage User</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="manage_place.php" aria-expanded="false"><i class="mdi mdi-border-all"></i><span
                                    class="hide-menu">Manage place</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="manage_category.php" aria-expanded="false"><i class="mdi mdi-border-all"></i><span
                                    class="hide-menu">Package Category</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="manage_package.php" aria-expanded="false"><i class="mdi mdi-border-all"></i><span
                                class="hide-menu">Package</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="booking.php" aria-expanded="false"><i class="mdi mdi-border-all"></i><span
                                class="hide-menu">Bookings</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="feedback.php" aria-expanded="false"><i class="mdi mdi-file"></i><span
                                    class="hide-menu">Feedback</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="error-404.html" aria-expanded="false"><i class="mdi mdi-alert-outline"></i><span
                                    class="hide-menu">404</span></a></li>
                    </ul>


                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Dashboard</h1> 
                    </div>
                    
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- <li class="nav-item" style="width: 170px"> -->
        <!-- <a type="button" class="btn btn-primary nav-link active" href="create.php">Add New</a> -->
        </li>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                    <div class="col-md-4">
                                    <a href="manage_user.php">
                                    <div class="card-counter primary">
                                        <i class="fa fa-users"></i>
                                        
                                        <span class="count-numbers">
                                            <?php      
                                                $sql="SELECT user_id FROM registration where fullname!='admin';";
                                                $result=mysqli_query($conn,$sql);
                                                $row=mysqli_num_rows($result);
                                                echo $row;
                                            ?>
                                        </span>
                                        <span class="count-name">USERS</span>
                                    </div>
                                    </a>
                                    </div>

                                    <div class="col-md-4">
                                    <a href="manage_place.php">
                                    <div class="card-counter danger">
                                        <i class="fa fa-code-fork"></i>
                                        <span class="count-numbers">
                                        <?php      
                                            $sql="SELECT * from place_360;";
                                            $result=mysqli_query($conn,$sql);
                                            $row=mysqli_num_rows($result);
                                            echo $row;
                                        ?>
                                        </span>
                                        <span class="count-name">PLACES</span>
                                    </div>
                                    </a>
                                    </div>

                                    <div class="col-md-4">
                                    <a href="manage_place.php">
                                    <div class="card-counter success">
                                        <i class="fa fa-ticket"></i>
                                        <span class="count-numbers">
                                        <?php      
                                            $sql="SELECT * from photogallery;";
                                            $result=mysqli_query($conn,$sql);
                                            $row=mysqli_num_rows($result);
                                            echo $row;
                                        ?>
                                        </span>
                                        <span class="count-name">PHOTO GALLERY</span>
                                    </div>
                                    </a>
                                    </div>

                                    <div class="col-md-4">
                                    <a href="manage_category.php">
                                    <div class="card-counter primary">
                                        <i class="fa fa-users"></i>
                                        
                                        <span class="count-numbers">
                                            <?php      
                                                $sql="SELECT pack_cat_id FROM package_category;";
                                                $result=mysqli_query($conn,$sql);
                                                $row=mysqli_num_rows($result);
                                                echo $row;
                                            ?>
                                        </span>
                                        <span class="count-name">Package Categories</span>
                                    </div>
                                    </a>
                                    </div>

                                    <div class="col-md-4">
                                    <a href="manage_package.php">
                                    <div class="card-counter info">
                                        <i class="fa fa-cube"></i>
                                        <span class="count-numbers">
                                        <?php      
                                            $sql="SELECT package_id FROM package;";
                                            $result=mysqli_query($conn,$sql);
                                            $row=mysqli_num_rows($result);
                                            echo $row;
                                        ?>
                                        </span>
                                        <span class="count-name">PACKAGES</span>
                                    </div>
                                    </a>
                                    </div>

                                    <div class="col-md-4">
                                    <a href="booking.php">
                                    <div class="card-counter bg-warning">
                                        <i class="fa fa-database"></i>
                                        <span class="count-numbers" style="color:white;">
                                        <?php
                                            $sql="SELECT * FROM booking;";
                                            $result=mysqli_query($conn,$sql);
                                            $row=mysqli_num_rows($result);
                                            echo $row;
                                        ?>
                                        </span>
                                        <span class="count-name" style="color:white;">BOOKINGS</span>
                                    </div>
                                    </a>
                                    </div>

                                    <div class="col-md-4">
                                    <a href="feedback.php">
                                    <div class="card-counter bg-secondary">
                                        <i class="fa fa-comment" style="color:white;"></i>
                                        <span class="count-numbers" style="color:white;">
                                        <?php      
                                            $sql="SELECT * FROM feedback";
                                            $result=mysqli_query($conn,$sql);
                                            $row=mysqli_num_rows($result);
                                            echo $row;
                                        ?>
                                        </span>
                                        <span class="count-name" style="color:white;">FEEDBACKS</span>
                                    </div>
                                    </a>
                                    </div>
                                    <div class="col-md-4">
                                    <a href="logout.php">
                                    <div class="card-counter bg-primary">
                                        <i class="fa fa-user" style="color:white;"></i>
                                        <span class="count-numbers" style="color:white;">
                                        </span>
                                        <span class="count-name" style="color:white;">Logout</span>
                                    </div>
                                    </a>
                                    </div>
                                </div>
                            </div> 
                            </div>
                            
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved, Designed and Developed by <a
                    href="#">Tours4Real</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.js"></script>
</body>

</html>