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
<?php
if (isset($_REQUEST['add_package'])) {
    $name = $_REQUEST['name'];
    $desc = $_REQUEST['desc'];
    $category = $_REQUEST['category'];
    $price = $_REQUEST['price'];
    $img = $_REQUEST['img'];
    $source = $_REQUEST['source'];
    $bwtplaces = $_REQUEST['bwtplaces'];
    $destination = $_REQUEST['destination'];
    if ($_REQUEST['rate'] > 0 && $_REQUEST['rate'] <= 5) {
        $rate = $_REQUEST['rate'];
    } else {
        $rate = $_REQUEST['rate'] = 1;
    }
    $pack_category_id=mysqli_fetch_column(mysqli_query($conn,"SELECT pack_cat_id FROM package_category WHERE pack_cat_name='$category'"));
    echo $pack_category_id;
    $sql = "INSERT INTO package VALUES(NULL,'$name','$desc',$pack_category_id,'$category',$price,'$img','$source','$bwtplaces','$destination',$rate)";   
    $query = mysqli_query($conn, $sql);
    if (!$query) {
        echo "<script>alert('Not Inserted')</script>";
        echo mysqli_error($conn);
        unset($_REQUEST['add_package']);
    } else {
        echo "<script>alert('Inserted..!')</script>";
        unset($_REQUEST['add_package']);
    }
}
if (isset($_REQUEST['up_package'])) {
    $uid = $_REQUEST['uid'];
    $name = $_REQUEST['name'];
    $desc = $_REQUEST['desc'];
    $category = $_REQUEST['category'];
    $price = $_REQUEST['price'];
    $img = $_REQUEST['img'];
    $source = $_REQUEST['source'];
    $bwtplaces = $_REQUEST['bwtplaces'];
    $destination = $_REQUEST['destination'];
    // $arr=$_REQUEST['arr'];
    // $leave=$_REQUEST['leave'];
    if ($_REQUEST['rate'] > 0 && $_REQUEST['rate'] <= 5) {
        $rate = $_REQUEST['rate'];
    } else {
        $rate = $_REQUEST['rate'] = 1;
    }

    $sql = "UPDATE package SET 
    package_name='$name',
    package_desc='$desc',
    pack_category_name='$category',
    package_price='$price',
    package_img='$img',
    package_source='$source',
    between_places='$bwtplaces',
    package_destination='$destination',
    rate=$rate where package_id=$uid";
    $query = mysqli_query($conn, $sql);
    if (!$query) {
        echo "<script>alert('Not Updated')</script>";
        unset($_REQUEST['up_package']);
    } else {
        echo "<script>alert('Updated..!')</script>";
        unset($_REQUEST['up_package']);
    }
}
if (isset($_REQUEST['del_package'])) {
    $did = $_REQUEST['uid'];
    // $cat_did = $_REQUEST['cat_uid'];
    $sql = "DELETE from package where package_id=$did";
    $in = mysqli_query($conn, $sql);
    if (!$in) {
        echo "<script>alert('Not Deleted')</script>";
        unset($_REQUEST['del_package']);
    } else {
        echo "<script>alert('Deleted..!')</script>";
        unset($_REQUEST['del_package']);
    }
}
?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Flexy lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Flexy admin lite design, Flexy admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Flexy Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <link rel="icon" type="image/png" sizes="16x16" href="/Tours4Real/img/logo.png">
    <title>Admin-Package</title>
    <!-- <link rel="canonical" href="https://www.wrappixel.com/templates/Flexy-admin-lite/" /> -->
    <!-- Favicon icon -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href=""> -->
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <style>
        .table {
            border: 1.5px;
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
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
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
                                <li class="breadcrumb-item active" aria-current="page">Manage package</li>
                            </ol>
                        </nav>
                        <h1 class="mb-0 fw-bold">Package</h1>
                    </div>
                    <div class="col-6">

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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title">Package</h1>
                                <h6 class="card-subtitle"></h6>
                                <h6 class="card-title m-t-40"> </h6>
                                <button type="submit" class="btn btn-outline-primary btn-lg" data-bs-toggle="modal" data-bs-target="#addPack" style="margin: 12px; padding-right: 22px; padding-left: 22px" value="Add New Package">Add New Package</button>

                                <div class="modal fade" id="addPack" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add New Package</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <!-- <span aria-hidden="true">&times;</span> -->
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Enter Package Name:</label>
                                                        <input type="text" name="name" value="" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Enter Package Description:</label>
                                                        <input type="text" name="desc" value="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message-text" class="col-form-label" style="margin-right: 12px;">Select the Package Category:</label>
                                                        <select name="category" style="width: 15em; height: 2em; line-height: 3; overflow: hidden; border-radius: .25em; padding-bottom: 10px;" required>
                                                            <?php
                                                            $sql = "select pack_cat_id,pack_cat_name from package_category";
                                                            $qu = mysqli_query($conn, $sql);
                                                            while ($row = mysqli_fetch_assoc($qu)) {
                                                            ?>
                                                                <option value="<?php echo $row['pack_cat_name'];?>">
                                                                    <?php echo $row['pack_cat_name'];?>
                                                                </option>
                                                                <?php } ?>
                                                        </select>
                                                        <input type="hidden" name="cat_id" value="<?php echo $row['pack_cat_id'];?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message-text" class="col-form-label">Enter Package Price:</label>
                                                        <input type="text" name="price" value="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Enter link of Image:</label>
                                                        <input type="text" name="img" value="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Enter the Source:</label>
                                                        <input type="text" name="source" value="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Between Places:</label>
                                                        <input type="text" name="bwtplaces" value="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Enter the Destination:</label>
                                                        <input type="text" name="destination" value="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Enter the rating:</label>
                                                        <input type="text" name="rate" value="" class="form-control">
                                                    </div>
                                                    <!-- <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Enter the starting date for package:</label>
                                                        <input type="date" name="arr" value="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Enter the Ending date for package::</label>
                                                        <input type="date" name="leave" value="" class="form-control">
                                                    </div> -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary" name="add_package" value="Add Package">Add Package</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table">

                                        <tr>
                                            <?php
                                            $sql = "show COLUMNS from package";
                                            $query1 = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($query1)) {
                                            ?>
                                                <th scope="col"><?php echo $row[0]; ?></th>
                                            <?php
                                            }
                                            ?>
                                            <th>Action</th>
                                        </tr>

                                        <?php
                                        $sql = "SELECT * FROM package";
                                        $query = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($query)) {
                                            echo "<tr>";

                                            echo "<th>";
                                            $id = $row['package_id'];
                                            echo $id;
                                            echo "</th>";

                                            echo "<th>";
                                            echo $row['package_name'];
                                            echo "</th>";

                                            echo "<th>";
                                            echo "<details>";
                                            echo "<summary>"; 
                                                echo "Read More About ".$row['package_name']." :";
                                            echo "</summary>";
                                            echo "<p>";
                                                echo $row['package_desc'];
                                            echo "</p>";
                                            echo "</details>";
                                            echo "</th>";

                                            echo "<th>";
                                            echo $row['pack_category_id'];
                                            echo "</th>";

                                            echo "<th>";
                                            echo $row['pack_category_name'];
                                            echo "</th>";

                                            echo "<th>";
                                            echo $row['package_price'];
                                            echo "</th>";

                                            echo "<th>";
                                        ?>

                                            <img src="<?php echo $row['package_img']; ?>" width="150px" height="120px" style="border-radius: .7rem;">

                                            <?php
                                            echo "</th>";

                                            echo "<th>";
                                            echo $row['package_source'];
                                            echo "</th>";

                                            echo "<th>";
                                            echo $row['between_places'];
                                            echo "</th>";

                                            echo "<th>";
                                            echo $row['package_destination'];
                                            echo "</th>";

                                            echo "<th>";
                                            echo $row['rate'];
                                            echo "</th>";
                                            ?>

                                            <th>
                                                <button data-bs-toggle="modal" data-bs-target="#upPack<?php echo $row['package_id'];?>" name="packageedit" class="btn btn-primary" style="margin-bottom: 12px;">Edit</button>
                                                <button data-bs-toggle="modal" data-bs-target="#delPack<?php echo $row['package_id'];?>" name=" packagedel" class="btn btn-danger">Delete</button>
                                            </th>

                                            </tr>
                                        <?php
                                        }
                                        ?>
                                        </tr>

                                    </table>
                                </div>


                            </div>
                            <?php
                            $sql = "select * from package";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                               
                            ?>

                                <div class="modal fade" id="upPack<?php echo $row['package_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update Package</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <!-- <span aria-hidden="true">&times;</span> -->
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST">
                                                    <input type="hidden" name="uid" value="<?php echo $row['package_id']; ?>" class="form-control" required>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Enter Package Name:</label>
                                                        <input type="text" name="name" value="<?php echo $row['package_name']; ?>" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Enter Package Description:</label>
                                                        <input type="text" name="desc" value="<?php echo $row['package_desc']; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Enter Package Category:</label>
                                                        <input type="text" name="category" value="<?php echo $row['pack_category_name']; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message-text" class="col-form-label">Enter Package Price:</label>
                                                        <input type="text" class="form-control" value="<?php echo $row['package_price']; ?>" name="price" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Enter link of Image:</label>
                                                        <input type="text" name="img" value="<?php echo $row['package_img']; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Enter the Source:</label>
                                                        <input type="text" name="source" value="<?php echo $row['package_source']; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Between Places:</label>
                                                        <input type="text" name="bwtplaces" value="<?php echo $row['between_places']; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Enter the Destination:</label>
                                                        <input type="text" name="destination" value="<?php echo $row['package_destination']; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Enter the rating:</label>
                                                        <input type="text" name="rate" value="<?php echo $row['rate']; ?>" class="form-control">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary" name="up_package" value="Update Package">Update Package</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php
                            $sql1 = "select * from package";
                            $res = mysqli_query($conn, $sql1);
                            while ($row1 = mysqli_fetch_array($res)) {
                            ?>
                                <div class="modal fade" id="delPack<?php echo $row1['package_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Delete Package</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="">
                                                    <input type="hidden" name="uid" value="<?php echo $row1['package_id'];?>" class="form-control" required>
                                                    <input type="hidden" name="cat_uid" value="<?php echo $row1['pack_category_id'];?>" class="form-control" required>
                                                    <p>Do You Want to Delete <?php echo $row1['package_name']; ?> ?</p>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary" name="del_package" value="Delete Place">Delete Package</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
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
                            All Rights Reserved, Designed and Developed by <a href="#">Tours4Real</a>.
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