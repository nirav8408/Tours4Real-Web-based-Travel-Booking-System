<?php
    ob_start();
    include("connection.php");
    if(!isset($_SESSION['adminid']))
    {
        header('location:index.php');
    }

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<!-- place_360 -->
<?php
if (isset($_REQUEST['add_place'])) {
    $title = $_REQUEST['tplace'];
    $imgLink = $_REQUEST['timg'];
    $img360 = $_REQUEST['timg360'];
    $Pdesc = $_REQUEST['tdesc'];
    $Pcat = $_REQUEST['tcat'];
    $sql = "insert into place_360 values (null,'$title','$imgLink','$img360','$Pdesc','$Pcat')";
    $in = mysqli_query($conn, $sql);
    if (!$in) {
        echo "<script>alert('Not Inserted')</script>";
    } else {
        echo "<script>alert('Inserted..!')</script>";
    }
}
if (isset($_REQUEST['up_place'])) {
    $uid = $_REQUEST['uid'];
    $utitle = $_REQUEST['uplace'];
    $uimgLink = $_REQUEST['uimg'];
    $uimg360 = $_REQUEST['uimg360'];
    $uPdesc = $_REQUEST['udesc'];
    $uPcat = $_REQUEST['ucat'];
    $sql = "update place_360 set place_id=$uid,place_title='$utitle',place_img='$uimgLink ',popup_img='$uimg360',popup_desc='$uPdesc ',place_cat=' $uPcat ' where place_id=$uid";
    $in = mysqli_query($conn, $sql);
    if (!$in) {
        echo "<script>alert('Not Updated')</script>";
    } else {
        echo "<script>alert('Updated..!')</script>";
    }
}
if (isset($_REQUEST['del_place'])) {
    $did = $_REQUEST['uid'];
    $sql = "delete from place_360 where place_id=$did";
    $in = mysqli_query($conn, $sql);
    if (!$in) {
        echo "<script>alert('Not Deleted')</script>";
    } else {
        echo "<script>alert('Deleted..!')</script>";
    }
}
?>
<!-- photogallery -->
<?php
if (isset($_REQUEST['add_photo'])) {
    $imgLink = $_REQUEST['ph_img'];
    $name = $_REQUEST['ph_name'];
    $search = $_REQUEST['ph_dt'];
    $sql = "insert into photogallery values (null,'$imgLink','$name','$search')";
    $in = mysqli_query($conn, $sql);
    if (!$in) {
        echo "<script>alert('Not Inserted')</script>";
    } else {
        echo "<script>alert('Inserted..!')</script>";
    }
}
if (isset($_REQUEST['up_photo'])) {
    $uid = $_REQUEST['uid'];
    $userach = $_REQUEST['udt'];
    $uname = $_REQUEST['uname'];
    $uimgLink = $_REQUEST['uimg'];
    $sql = "update photogallery set PhotoG_id=$uid,PhotoG_name='$uname',PhotoG_img='$uimgLink ', PhotoG_dt='$userach ' where PhotoG_id=$uid";
    $in = mysqli_query($conn, $sql);
    if (!$in) {
        echo "<script>alert('Not Updated')</script>";
    } else {
        echo "<script>alert('Updated..!')</script>";
    }
}
if (isset($_REQUEST['del_photo'])) {
    $did = $_REQUEST['uid'];
    $sql = "delete from photogallery where PhotoG_id=$did";
    $in = mysqli_query($conn, $sql);
    if (!$in) {
        echo "<script>alert('Not Deleted')</script>";
    } else {
        echo "<script>alert('Deleted..!')</script>";
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
    <title>Admin-Places</title>
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
                                <li class="breadcrumb-item active" aria-current="page">Manage Place</li>
                            </ol>
                        </nav>
                        <h1 class="mb-0 fw-bold">Manage Place</h1>
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
                        <!-- place_360 -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">360- view part</h4>
                                <h6 class="card-subtitle">Using this you can manipulate 360-view part of the web page.</h6>
                                <h6 class="card-title m-t-40"><i class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i>place_360</h6>
                                <button class="btn btn-outline-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin: 12px; padding-right: 22px; padding-left: 22px">Add New Place</button>

                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add New Place</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <!-- <span aria-hidden="true">&times;</span> -->
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="GET" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Enter the Title for Place:</label>
                                                        <input type="text" name="tplace" value="" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Enter the Image Link or Image:</label>
                                                        <input type="text" name="timg" value="" class="form-control">
                                                        <!-- <center>Or</center>
                                                        <input type="file" name="timg" value="" class="form-control" accept="image/*" required> -->
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Enter the 360 Image Link or Image:</label>
                                                        <input type="text" name="timg360" value="" class="form-control">
                                                        <!-- <center>Or</center>
                                                        <input type="file" name="timg360" value="" class="form-control" accept="image/*" required> -->
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message-text" class="col-form-label">Enter the Description for Place:</label>
                                                        <textarea class="form-control" value="" name="tdesc" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message-text" class="col-form-label" style="margin-right: 12px;">Select the Place Category:</label>
                                                        <select name="tcat" style="width: 15em; height: 2em; line-height: 3; overflow: hidden; border-radius: .25em; padding-bottom: 10px;" required>
                                                            <?php
                                                            $sql = "select distinct(place_cat) from place_360";
                                                            $qu = mysqli_query($conn, $sql);
                                                            while ($row = mysqli_fetch_assoc($qu)) {
                                                            ?>
                                                                <option value="<?php echo $row['place_cat'] ?>"><?php echo $row['place_cat'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary" name="add_place" value="Add Place">Add Place</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <?php
                                                $sql = "show COLUMNS from place_360;";
                                                $query1 = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_array($query1)) {
                                                ?>
                                                    <th scope="col"><?php echo $row[0]; ?></th>
                                                <?php
                                                }
                                                ?>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "select * from place_360;";
                                            $query1 = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_assoc($query1)) {
                                            ?>
                                                <tr>
                                                    <th><?php echo $row['place_id']; ?></th>
                                                    <td><?php echo $row['place_title']; ?></td>
                                                    <td><img src="<?php echo $row['place_img'];?>" width="200px" height="150px" alt="" style="border-radius: 1rem;"></td>
                                                    <td><iframe width="200px" height="150px" src="<?php echo $row['popup_img'];?>" style="border-radius: 1rem;"> </iframe></td>
                                                    <!-- <td>
                                                        <h6 style=" width: 200px; color: #858b95;"><?php //echo $row['popup_desc']; ?></h6>
                                                    </td> -->
                                                    <td>
                                                    <details>
                                                    <summary>
                                                        <?php echo "Read More About ".$row['place_title']." :";?>
                                                    </summary>
                                                    <p>
                                                        <?php echo $row['popup_desc'];?>
                                                    </p>
                                                    </details>
                                                    </td>
                                                    <td><?php echo $row['place_cat']; ?></td>
                                                    <td>
                                                        <button data-bs-toggle="modal" data-bs-target="#exampleModal1<?php echo $row['place_id'] ?>" name="placeedit" class="btn btn-primary" style="margin-bottom: 12px;">Edit</button>
                                                        <button data-bs-toggle="modal" data-bs-target="#delModel<?php echo $row['place_id'] ?>" name=" placedel" class="btn btn-danger">Delete</button>
                                                    </td>
                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <?php
                        $sql1 = "select * from place_360";
                        $res = mysqli_query($conn, $sql1);
                        while ($row1 = mysqli_fetch_array($res)) {
                        ?>
                            <div class="modal fade" id="exampleModal1<?php echo $row1['place_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel1">Update Place</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="">
                                                <input type="hidden" name="uid" value="<?php echo $row1['place_id'] ?>" class="form-control" required>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Enter the Title for Place:</label>
                                                    <input type="text" name="uplace" value="<?php echo $row1['place_title'] ?>" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Enter the Image Link or Image:</label>
                                                    <input type="text" name="uimg" value="<?php echo $row1['place_img'] ?>" class="form-control">
                                                    <!-- <center>Or</center>
                            <input type="file" name="timg" value="" class="form-control" accept="image/*" required> -->
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Enter the 360 Image Link or Image:</label>
                                                    <input type="text" name="uimg360" value="<?php echo $row1['popup_img'] ?>" class="form-control">
                                                    <!-- <center>Or</center>
                            <input type="file" name="timg360" value="" class="form-control" accept="image/*" required> -->
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="col-form-label">Enter the Description for Place:</label>
                                                    <textarea class="form-control" name="udesc" required><?php echo $row1['popup_desc'] ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="col-form-label" style="margin-right: 12px;">Select the Place Category:</label>
                                                    <input type="text" name="ucat" value="<?php echo $row1['place_cat'] ?>" class="form-control">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="up_place" value="Update Place">Update Place</button>
                                                </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <?php
                        $sql1 = "select * from place_360";
                        $res = mysqli_query($conn, $sql1);
                        while ($row1 = mysqli_fetch_array($res)) {
                        ?>
                            <div class="modal fade" id="delModel<?php echo $row1['place_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel1">Delete Place</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="">
                                                <input type="hidden" name="uid" value="<?php echo $row1['place_id'] ?>" class="form-control" required>
                                                <p>Do You Want to Delete <?php echo $row1['place_title']; ?> ?</p>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="del_place" value="Delete Place">Delete Place</button>
                                                </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>


                        <!-- photogallery -->


                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">photogallery</h4>
                                <h6 class="card-subtitle">Using this you can manipulate photogallery of the web page.</h6>
                                <h6 class="card-title m-t-40"><i class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i>photogallery</h6>
                                <button class="btn btn-outline-primary btn-lg " data-bs-toggle="modal" data-bs-target="#addPhoto" style="margin: 12px; padding-right: 22px; padding-left: 22px">Add Photogallery</button>

                                <div class="modal fade" id="addPhoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add New Photo</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <!-- <span aria-hidden="true">&times;</span> -->
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Enter the Image Link :</label>
                                                        <input type="text" name="ph_img" value="" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Enter the name :</label>
                                                        <input type="text" name="ph_name" value="" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Enter the city name which you want to search for photo :</label>
                                                        <input type="text" name="ph_dt" value="" class="form-control" required>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary" name="add_photo" value="Add Photo">Add Photo</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <?php
                                                $sql = "show COLUMNS from photogallery;";
                                                $query1 = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_array($query1)) {
                                                ?>
                                                    <th scope="col"><?php echo $row[0]; ?></th>
                                                <?php
                                                }
                                                ?>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "select * from photogallery;";
                                            $query1 = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_assoc($query1)) {
                                            ?>
                                                <tr>
                                                    <th><?php echo $row['PhotoG_id']; ?></th>
                                                    <td><img src="<?php echo $row['PhotoG_img'] ?>" width="200px" height="150px" alt="" style="border-radius: 1rem;"></td>
                                                    <td>
                                                        <h6 style=" width: 250px; color: #858b95;"><?php echo $row['PhotoG_name']; ?></h6>
                                                    </td>
                                                    <td>
                                                        <h6 style=" width: 250px; color: #858b95;"><?php echo $row['PhotoG_dt']; ?></h6>
                                                    </td>
                                                    <td>
                                                        <button data-bs-toggle="modal" data-bs-target="#phEdit<?php echo $row['PhotoG_id'] ?>" name="photoedit" class="btn btn-primary" >Edit</button>
                                                        <button data-bs-toggle="modal" data-bs-target="#phDel<?php echo $row['PhotoG_id'] ?>" name=" photodel" class="btn btn-danger">Delete</button>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <?php
                        $sql1 = "select * from photogallery";
                        $res = mysqli_query($conn, $sql1);
                        while ($row1 = mysqli_fetch_array($res)) {
                        ?>
                            <div class="modal fade" id="phEdit<?php echo $row1['PhotoG_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel1">Update Photo</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                <!-- <span aria-hidden="true">&times;</span> -->
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="">
                                                <input type="hidden" name="uid" value="<?php echo $row1['PhotoG_id'] ?>" class="form-control" required>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Enter the name for photo:</label>
                                                    <input type="text" name="uname" value="<?php echo $row1['PhotoG_name'] ?>" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Enter the Image Link or Image:</label>
                                                    <input type="text" name="uimg" value="<?php echo $row1['PhotoG_img'] ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Enter the city name which you want to search for photo :</label>
                                                        <input type="text" name="udt" value="<?php echo $row1['PhotoG_dt'] ?>" class="form-control" required>
                                                    </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="up_photo" value="Update Photo">Update Photo</button>
                                                </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php
                        $sql1 = "select * from photogallery";
                        $res = mysqli_query($conn, $sql1);
                        while ($row1 = mysqli_fetch_array($res)) {
                        ?>
                            <div class="modal fade" id="phDel<?php echo $row1['PhotoG_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel1">Delete Photo</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                <!-- <span aria-hidden="true">&times;</span> -->
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="">
                                                <input type="hidden" name="uid" value="<?php echo $row1['PhotoG_id'] ?>" class="form-control" required>
                                                <p>Do You Want to Delete <?php echo $row1['PhotoG_name']; ?> ?</p>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="del_photo" value="Delete Place">Delete Photo</button>
                                                </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
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