<?php 
include "config.php";
$alert_script = "";
$id = $_SESSION['ID'];
if(isset($_POST['cb'])){
    $bid=$_POST['bid'];
    $qu1=mysqli_query($conn,"select cancel from booking where book_id=$bid AND user_id=$id;");
    if($qu1->num_rows === 1){
        $row=mysqli_fetch_assoc($qu1);
        if($row['cancel']==="0"){
            $query=mysqli_query($conn,"update booking set cancel=1 where book_id=$bid AND user_id=$id;");
            if($query){
                $alert_script = "<script>alert('Booking Successfully Cancelled.!'); window.location.href = window.location.href;</script>";
            }
        } else {
            $alert_script = "<script>swal('Booking Already cancelled.!')</script>";
        }
    } else {
        $alert_script = "<script>swal('No such booking exists!')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
if (isset($_SESSION['ID'])) {
    $userid=$_SESSION['ID'];
            $sql="SELECT * FROM registration where user_id=$userid";
            $query=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($query);
            if($row['status']==1)
            {
                unset($_SESSION['ID']);
                session_destroy();
                header('location:login.php');
            }
    echo '<style>#signin,#register{display:none;}</style>';
    echo '<style>#logout,#update{display:block;}</style>';
} else {
    echo '<script>alert("Please Login")</script>';
    header('location:login.php');
    echo '<style>#signin,#register{display:block;}</style>';
    echo '<style>#logout,#update{display:none;}</style>';
}
?>

<head>
    <title>Tours4Real/Bookings</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Travelix Project">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script defer type="text/javascript" src="js/boking_script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="css/dd.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/offers_styles.css">
    <link rel="stylesheet" type="text/css" href="css/offers_responsive.css">
    <link rel="stylesheet" type="text/css" href="css/privacy.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <style>
    table {
        border: 1px solid #ccc;
        border-collapse: collapse;
        margin: 0;
        padding: 0;
        width: 100%;
        table-layout: fixed;
    }

    table caption {
        font-size: 1.5em;
        margin: .5em 0 .75em;
    }

    table tr {
        background-color: #f8f8f8;
        border: 1px solid #ddd;
        padding: 2.35em;
    }

    table th,
    table td {
        padding: .625em;
        text-align: center;
        font-size: .55em;
    }

    table th {
        font-size: .55em;
        letter-spacing: .1em;
        text-transform: uppercase;
    }

    @media screen and (max-width: 600px) {
        table {
            border: 0;
            border-radius: 1rem;
        }

        table caption {
            font-size: 1.3em;
        }

        table thead {
            border: none;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }

        table tr {
            border-bottom: 3px solid #ddd;
            display: block;
            padding: auto;
            margin-bottom: .625em;
        }

        table td {
            border-bottom: 1px solid #ddd;
            display: block;
            font-size: .55em;
            text-align: right;
        }

        table td::before {
            /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
            content: attr(data-label);
            float: left;
            font-weight: bold;
            text-transform: uppercase;
        }

        table td:last-child {
            border-bottom: 0;
        }
    }

    /* general styling */
    body {
        font-family: "Open Sans", sans-serif;
        line-height: 1.25;
    }
    </style>
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header style=" background: #034752;  backdrop-filter: blur(4px);">
            <a href="#" class="logo" style="margin-right: 60px;"><img src="img/logo-final-removebg-preview.png"
                    style="color: aqua;height: 65px; width: 175px" alt="">
            </a>

            <ul class="n">
                <li><a href="index.php">Home</a></li>
                <li><a href="package.php">Package</a></li>
                <li><a href="offers.php" class="active">Booking</a></li>
                <li><a href="place.php">Places</a></li>
                <li><a href="feedback.php">Feedback</a></li>
            </ul>
            <div class="main-a">
            <div class="input-box-a">
                <input type="search" id="search" placeholder="Search here..." onkeyup="search()" />
                    <i class="ri-search-2-line"></i>
            </div>
                <!-- <a href="#" class="search"><i class="ri-search-2-line"></i></a> -->
                <a href="login.php" id="signin" class="user-a"><i class="ri-user-fill"></i>Sign In</a>
                <!-- <a href="register_new.php" id="register" class="reg-a">Register</a> -->
                <a href="edit_info.php" id="update" class="reg-a">Profile</a>
                <a href="logout.php" id="logout" class="user-a"><i class="ri-logout-circle-fill"></i>Logout</a>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </header>


        <!-- Home -->

        <div class="home">
            <div class="home_background parallax-window" data-parallax="scroll"
                data-image-src="img/about_background.jpg"></div>
            <div class="home_content">
                <div class="home_title">Book Package</div>
            </div>
        </div>

        <!-- Offers -->

        <div class="offers">

            <!-- Search -->

            <div class="search">
                <div class="search_inner" style="background: linear-gradient(#f49a28,#9253f4);">

                    <!-- Search Contents -->

                    <div class="container fill_height no-padding">
                        <div class="row fill_height no-margin">
                            <div class="col fill_height no-padding">

                                <!-- Search Tabs -->

                                <div class="search_tabs_container">
                                    <!-- <div class="search_tabs d-flex  flex-column  align-items-start justify-content-lg-start ">
                                    <div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="img/bus.png" alt=""><span>Trips</span></div>
                                    <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="img/suitcase.png" alt="">Package</div> -->
                                    <div
                                        class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                                        <div
                                            class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
                                            <img src="images/suitcase.png" alt="">Book Package
                                        </div>
                                        <div
                                            class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
                                            Booking History
                                        </div>
                                        <div
                                            class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
                                            Booking Cancellation
                                        </div>
                                        <!-- <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/departure.png" alt="">flights</div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/island.png" alt="">trips</div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/cruise.png" alt="">cruises</div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/diving.png" alt="">activities</div> -->
                                    </div>
                                </div>
                            </div>

                            <!-- Search Panel -->
                            <div class="search_panel active">
                                <!-- <center>
                                    <h3 style="margin-top: 30px; color: aliceblue; font-weight: bold;">Book Your Trip</h3>
                                    <hr style="color: aliceblue;">
                                </center> <br> <br> -->
                                <?php
                            if (isset($_POST['Bpackage'])) {
                                // $pack_id=$_POST['Bpackage'];
                                // setcookie("packid",$pack_id,time()+60,"/");
                                // $pack_id=$_COOKIE['packid'];
                                ?>
                                <form action="payment.php" id="search_form_1" method="POST"
                                    class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                                    <div class="search_item">
                                        <?php
                                        $sql = "SELECT fullname,email from registration where user_id=$id";
                                         $result = mysqli_query($conn, $sql);
                                            $row = mysqli_fetch_assoc($result);
                                            ?>
                                        <div>Name</div>
                                        <input type="text" class="Name search_input" placeholder="Enter Name"
                                            required="required" value="<?php
                                        echo $row['fullname'];
                                                            ?>">
                                        <div></div>
                                        <div>Email</div>
                                        <input type="email" class="Email search_input" placeholder="Enter Email"
                                            required="required" value="<?php
                                        echo $row['email'];
                                            ?>">
                                        <div></div>
                                        <div>Source</div>
                                        <input type="hidden" name="pack_id" value="<?php echo $_POST['id']; ?>">
                                        <input type="hidden" name="pack_img" value="<?php echo $_POST['img']; ?>">
                                        <input type="hidden" name="pack_name" value="<?php echo $_POST['name']; ?>">
                                        <input type="hidden" name="pack_cat" value="<?php echo $_POST['cat']; ?>">
                                        <input type="hidden" name="pack_price" value="<?php echo $_POST['price']; ?>">

                                        <input type="text" name="source" value="<?php echo $_POST['source']; ?>"
                                            class="Source search_input" placeholder="Enter Source" required readonly>

                                        <div></div>
                                        <div>Destination</div>
                                        <input type="text" name="dest" value="<?php echo $_POST['dest']; ?>"
                                            class="Source search_input" placeholder="Enter Destination" required
                                            readonly>
                                    </div>
                                    <div class="search_item">
                                        <div>Arrivals</div>
                                        <input type="date" name="arr" min="<?php echo date("Y-m-d");?>" class="check_in search_input"
                                            value="" class="destination search_input"
                                            required>
                                        <div></div>
                                        <div>Leaving</div>
                                        <input type="date" name="leave" min="<?php echo date("Y-m-d");?>" class="check_in search_input"
                                            value="" class="destination search_input"
                                            required>
                                    </div>
                                    <div class="search_item">
                                        <div>Adults</div>
                                        <select name="adults" id="adults_1" class="dropdown_item_select search_input">
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                        </select>
                                        <div></div>
                                        <div>children</div>
                                        <select name="children" id="children_1"
                                            class="dropdown_item_select search_input">
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                        </select>
                                    </div>
                                    
                                    <div class="extras">
                                        <button type="submit" name="book" value="book"
                                            class="button search_button">Book<span></span><span></span><span></span></button>
                                    </div>
                                </form>
                                <?php
} else  {
    // $pack_id=$_POST['Bpackage'];
    // setcookie("packid",$pack_id,time()+60,"/");
    // $pack_id=$_COOKIE['packid'];
    ?>
                                <form action="payment.php" id="search_form_2" method="post"
                                    class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-around align-items-start  justify-content-lg-around justify-content-start">
                                    <div class="search_item">
                                        <?php
                                                            $sql = "SELECT fullname,email from registration where user_id=$id";
                                                                $result = mysqli_query($conn, $sql);
                                                                $row = mysqli_fetch_assoc($result);
                                                                ?>
                                        <div>Name</div>
                                        <input type="text" class="Name search_input" placeholder="Enter Name" value="<?php
                                            echo $row['fullname'];
                                                ?>" required="required">
                                        <div></div>
                                        <div>Email</div>
                                        <input type="email" class="Email search_input" placeholder="Enter Email"
                                            value="<?php echo $row['email']; ?>" required="required">
                                        <div></div>
                                        <div>Package Name</div>
                                        <select name="pack_name" class="dropdown_item_select search_input">
                                            <?php
                                                            $q = "select distinct(package_name) from package";
                                                                $re = mysqli_query($conn, $q);
                                                                while ($r = mysqli_fetch_assoc($re)) {?>
                                            <option value="<?php echo $r['package_name']; ?>">
                                                <?php echo $r['package_name']; ?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="search_item">
                                        <div>Arrivals</div>
                                        <input type="date" id="arr" name="arr1" min="<?php echo date("Y-m-d");?>" class="check_in search_input" class="destination search_input"
                                            required>
                                        <div></div>
                                        <div>Leaving</div>
                                        <input type="date" id="lea" name="leave1" min="<?php echo date("Y-m-d");?>" class="check_in search_input" class="destination search_input"
                                            required>
                                    </div>
                                    <div class="search_item">
                                        <div>Adults</div>
                                        <select name="adults" id="adults_1" class="dropdown_item_select search_input">
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                        </select>
                                        <div></div>
                                        <div>children</div>
                                        <select name="children" id="children_1"
                                            class="dropdown_item_select search_input">
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                        </select>
                                    </div>
                                    
                                    
                                    <div class="extras search_panel_content d-xl-flex  align-items-lg-center align-items-end justify-content-sm-center"
                                        style="margin-right: 830px;">
                                        <button type="submit" name="book1"
                                            class="button search_button ">Book<span></span><span></span><span></span></button>
                                    </div>
                                </form>
                                <?php }?>
                            </div>

                            <div class="search_panel">
                                <table style="padding:10px;">
                                    <thead>
                                        <tr style="padding:0px 20px;">

                                            <th scope="col" colspan=2>Booking Id</th>
                                            <th scope="col" colspan=2>Package Name</th>
                                            <th scope="col" colspan=2>Package Category</th>
                                            <th scope="col" colspan=2>Source</th>
                                            <th scope="col" colspan=2>Destination</th>
                                            <th scope="col" colspan=2>Card Holder Name</th>
                                            <th scope="col" colspan=2>Total Persons</th>
                                            <th scope="col" colspan=2>Total Price</th>
                                            <th scope="col" colspan=2>Arrival Date</th>
                                            <th scope="col" colspan=2>Leaving Date</th>
                                            <th scope="col" colspan=2>Booking Date</th>
                                            <th scope="col" colspan=3>Receipt</th>
                                            <th scope="col" colspan=2>Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php

                                                    $sql = "SELECT b.book_id ,b.cancel,p.package_id, p.package_name, p.pack_category_name,p.package_source, p.package_destination, b.card_holder, b.adults, b.childrens, b.total_price, b.Arrival_DT, b.Leaving_DT, b.book_date,r.username from registration r, package p, booking b where
                                                                                            p.package_id=b.package_id AND r.user_id=b.user_id AND b.user_id=$id ORDER BY b.book_id DESC";
                                                    $result = mysqli_query($conn, $sql);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo "<td data-label='Booking Id' colspan=2>";
                                                        
                                                        echo  $row['book_id'] ;
                                                        
                                                        echo "</td>";

                                                        echo "<td data-label='Package Name' colspan=2>";
                                                        echo $row['package_name'];
                                                        echo "</td>";

                                                        echo "<td data-label='Package Category' colspan=2>";
                                                        echo $row['pack_category_name'];
                                                        echo "</td>";

                                                        echo "<td data-label='Source' colspan=2>";
                                                        echo $row['package_source'];
                                                        echo "</td>";

                                                        echo "<td data-label='Destination' colspan=2>";
                                                        echo $row['package_destination'];
                                                        echo "</td>";

                                                        echo "<td data-label='Card Holder' colspan=2>";
                                                        echo $row['card_holder'];
                                                        echo "</td>";

                                                        echo "<td data-label='Total Person' colspan=2>";
                                                        echo $row['adults'] + $row['childrens'];
                                                        // $sum=$ad+$ch;
                                                        // echo $;
                                                        echo "</td>";

                                                        echo "<td data-label='Total Price' colspan=2>";
                                                        echo $row['total_price'];
                                                        echo "</td>";

                                                        echo "<td data-label='Arrival Date' colspan=2>";
                                                        echo $row['Arrival_DT'];
                                                        echo "</td>";

                                                        echo "<td data-label='Leaving Date' colspan=2>";
                                                        echo $row['Leaving_DT'];
                                                        echo "</td>";

                                                        echo "<td data-label='Book Date' colspan=2>";
                                                        echo $row['book_date'];
                                                        echo "</td>";

                                                        echo "<td data-label='Receipt'>";?>
                                                        <form action="pdf_maker.php" method="post">
                                                                    <input type="hidden" name="pack_id"
                                                                            value="<?php echo $row['package_id']; ?>">
                                                                    <input type="hidden" name="book_id"
                                                                            value="<?php echo $row['book_id']; ?>">
                                                                    <input type="submit" name="view" value="View" class="btn btn-primary"
                                                                            style=" font-size:5px;" class="material-symbols-outlined">

                                                            <?php
                                                                echo "</td>";
                                                                echo "<td data-label='Download Receipt' style='margin-right:10px;'colspan=2>";
                                                            ?>

                                                                    <input type="submit" name="Download" value="Download"
                                                                        class="btn btn-danger" style=" font-size:5px;">
                                                        </form>
                                                    <?php
                                                        echo "</td>";
                                                        echo "<td data-label='Status' colspan=2>";
                                                        if($row['cancel']==0){
                                                            echo "<p style='color: green; font-weight: bold;font-size:10px;'>Booked</p>";
                                                        }else{echo "<p style='color: red; font-weight: bold;font-size:10px;'>Cancelled</p>";}
                                                        echo "</td>";
                                                            echo "</tr>";
                                    }
                                                    ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="search_panel">
                                <form id="search_form_2" method="post"
                                    class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-around align-items-start  justify-content-lg-around justify-content-start">
                                    <div class="search_item">
                                        <?php
                                                $sql = "SELECT username from registration where user_id=$id";
                                                $result = mysqli_query($conn, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                        ?>
                                        <div>Enter the Username</div>
                                        <input type="text" class="Username search_input" placeholder="Enter Username" value="<?php echo $row['username']; ?>" name="username" required readonly>
                                        <div></div>
                                        <div>Enter Booking Reference id</div>
                                        <input type="number" class="Name search_input" name="bid" placeholder="Enter Booking Reference id"  required inputmode="numeric">
                                        <div></div>
                                        <!-- <div>Enter the Package Name</div> -->
                                        
                                    </div>
                                    <div class="extras search_panel_content d-flex  align-items-center align-items-center justify-content-center">
                                        <button type="submit" name="cb"
                                            class="button search_button " value="1">Cancel Booking<span></span><span></span><span></span></button>
                                    </div>
                                </form>
                                <?php
                                echo $alert_script;
                                ?>
                            </div>
                        </div>


                        <!-- Offers -->

                        <!-- Footer -->
                    </div>


                    <!-- footer -->

    <hr class="hr-or">
    <!-- <span class="span-or">or</span> -->
    <hr class="hr-or">
    <hr class="hr-or">

    <footer class="nb-footer" style="background-color: #034752;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="about">

                    <img src="img/logo-final-removebg-preview.png" style="color: aqua;height: 100px; width: 250px; float: left; margin-bottom: 20px;"
                alt="">
                        <div class="social-media" style="float: right; padding-left: 50px;">
                            <ul class="list-inline">
                                <li><a href="https://www.facebook.com/?sk=h_chr" title=""><i
                                            class="ri-facebook-fill"></i></a>
                                </li>
                                <li><a href="https://www.linkedin.com/groups/9354501" title=""><i
                                            class="ri-linkedin-fill"></i></a>
                                </li>
                                <li><a href="https://instagram.com/tours_4_real?igshid=ZGUzMzM3NWJiOQ==" title=""><i
                                            class="ri-instagram-fill"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-info-single">
                        <h2 class="title">Refund Policy</h2>
                       <p>At our tourism website, we want to ensure that our customers are completely satisfied with 
                        their experience. If for any reason you are not satisfied with the services provided, we offer
                         a refund policy of 80% cashback and charge a little amount of cancellation fee. We understand
                          that unforeseen circumstances can arise and plans can change, 
                         so we allow cancellations and refunds within a certain timeframe. We value our customers and want to ensure that you have the best
                           possible experience with us.</p>
                    </div>
                </div> 
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-info-single">
                        <h2 class="title">Help Center</h2>
                        <ul class="list-unstyled">
                        <li><a href="feedback.php" title=""><i
                                        class="fa fa-angle-double-right"></i>Feedback</a></li>
                        <li><a href="privacypolicy.html" title=""><i
                                        class="fa fa-angle-double-right"></i> Privacy Policy</a></li>   
                        </ul>
                    </div>
                </div>

               

                <div class="col-md-3 col-sm-6">
                    <div class="footer-info-single">
                        <h2 class="title">Customer information</h2>
                        <ul class="list-unstyled">
                            <li><a href="aboutus.html" title=""><i
                                        class="fa fa-angle-double-right"></i> About Us</a></li>
                            <li><a href="#" title=""><i
                                        class="fa fa-angle-double-right"></i>Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                

                <div class="col-md-3 col-sm-6">
                    <div class="footer-info-single">
                        <h2 class="title">Message From Developer</h2>
                        <p>Our site is solely designed to provide pure Tourism and Travelling content for our esteemed guests,
                            we beleive in development of the nation as well as its Tourism Industry. Share your valuable experience
                            and join with us in our journey of making Tours4Real a global organisation. 
                        </p>

                    </div>
                </div>
            </div>
        </div>

        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p>Copyright © 2022. Tours4Real.</p>
                    </div>
                    <div class="col-sm-6"></div>
                </div>
            </div>
        </section>
    </footer>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
                    </script>
                    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
                    <!-- <script type="text/javascript" src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
                    <!-- <script type="text/javascript" src="js/script.js"></script> -->
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
                        rel="stylesheet"
                        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
                        crossorigin="anonymous">
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
                        crossorigin="anonymous">
                    </script>
                    <!-- background -->
                    <script src="js/parallax.min.js"></script>
                    <!-- load more and category -->
                    <script src="js/offers_custom.js"></script>
                    <!-- <script type="text/javascript">
        function search() 
        {
                let filter = document.getElementById('search').value.toUpperCase();
                let item = document.querySelectorAll('h3');
                let l = document.getElementsByTagName('h3');
                for(var i = 0;i<=l.length;i++)
                {
                    let a=item[i].getElementsByTagName('h3')[0];
                    let value=a.innerHTML || a.innerText || a.textContent;
                    if(value.toUpperCase().indexOf(filter) > -1)
                    {
                        item[i].style.display="";
                    }
                    else
                    {
                        item[i].style.display="none";
                    }
                }
        }
    </script> -->

</body>

</html>