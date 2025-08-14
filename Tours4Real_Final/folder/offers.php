<!DOCTYPE html>
<html lang="en">
<?php include('config.php');?>

<head>
    <title>Offers</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Travelix Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script defer type="text/javascript" src="js/boking_script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/offers_styles.css">
    <link rel="stylesheet" type="text/css" href="css/offers_responsive.css">
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header style=" background: #034752;  backdrop-filter: blur(4px);">
            <a href="index.html" class="logo" style="margin-right: 60px;"><img src="img/logo.png" style="color: aqua;"
                    alt=""><span style="color: aqua;">Tours4Real</span>
            </a>

            <ul class="n">
                <li><a href="index.html">Home</a></li>
                <li><a href="package.html">Package</a></li>
                <li><a href="#" class="active">Booking</a></li>
                <li><a href="tourplace.html">Places</a></li>
                <li><a href="Contact_Us.html">Feedback</a></li>
            </ul>
            <div class="main-a">
                <div class="input-box-a">
                    <input type="search" placeholder="Search here..." />
                    <a href="">
                        <i class="ri-search-2-line"></i>
                    </a>
                    <!-- <button class="button">Search</button> -->
                </div>
                <!-- <a href="#" class="search"><i class="ri-search-2-line"></i></a> -->
                <a href="login.php" class="user-a"><i class="ri-user-fill"></i>Sign In</a>
                <a href="register_new.html" class="reg-a">Register</a>
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
                                    <!-- <div class="search_tabs d-flex  flex-column  align-items-start justify-content-lg-start "> -->
                                    <!-- <div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="img/bus.png" alt=""><span>Trips</span></div> -->
                                    <!-- <div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="img/suitcase.png" alt="">Package</div> -->
                                </div>
                            </div>

                            <!-- Search Panel -->
                            <center>
                                <h3 style="margin-top: 30px; color: aliceblue; font-weight: bold;">Book Your Trip</h3>
                                <hr style="color: aliceblue;">
                            </center>
                            <div class="search_panel active">
                                <?php if (isset($_POST['Bpackage'])) {?>
                                <form action="payment.php" id="search_form_1" method="post"
                                    class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                                    <div class="search_item">
                                        <div>Name</div>
                                        <input type="text" class="Name search_input" placeholder="Enter Name"
                                            required="required">
                                        <div></div>
                                        <div>Email</div>
                                        <input type="email" class="Email search_input" placeholder="Enter Email"
                                            required="required">
                                        <div></div>
                                        <div>Source</div>
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
                                        <input type="date" name="arr" class="check_in search_input"
                                            value="<?php echo $_POST['arr']; ?>" class="destination search_input"
                                            required readonly>
                                        <div></div>
                                        <div>Leaving</div>
                                        <input type="date" name="leave" class="check_in search_input"
                                            value="<?php echo $_POST['leave']; ?>" class="destination search_input"
                                            required readonly>
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
                                        <button type="submit" name="book"
                                            class="button search_button">Book<span></span><span></span><span></span></button>
                                    </div>
                                </form>
                                <?php } else { ?>
                                <form action="payment.php" id="search_form_2" method="post"
                                    class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-around align-items-start  justify-content-lg-around justify-content-start">
                                    <div class="search_item">
                                        <div>Name</div>
                                        <input type="text" class="Name search_input" placeholder="Enter Name"
                                            required="required">
                                        <div></div>
                                        <div>Email</div>
                                        <input type="email" class="Email search_input" placeholder="Enter Email"
                                            required="required">
                                        <div></div>
                                        <div>Package Name</div>
                                        <select name="pack_name" class="dropdown_item_select search_input">
                                            <?php 
                                                                                $q="select distinct(package_name) from package";
                                                                                $re=mysqli_query($conn,$q);
                                                                                while($r=mysqli_fetch_assoc($re)){ ?>
                                            <option value="<?php echo $r['package_name'];?>">
                                                <?php echo $r['package_name']; ?></option>
                                            <?php }?>
                                        </select>


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
                                    
                                    <div class="extras search_panel_content d-flex  align-items-lg-center align-items-end justify-content-sm-center"
                                        style="margin-right: 830px;">
                                        <button type="submit" name="book1"
                                            class="button search_button ">Book<span></span><span></span><span></span></button>
                                    </div>
                                </form>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Offers -->

                <!-- Footer -->
            </div>


            <footer class="nb-footer" style="background-color: #034752;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="about">

                                <p><i class="ri-map-pin-range-line"></i>
                                    &nbsp;Tours4Real</p>

                                <div class="social-media">
                                    <ul class="list-inline" style="text-decoration: none;">
                                        <li><a href="#" title=""><i class="ri-facebook-fill"></i></a>
                                        </li>
                                        <li><a href="#" title=""><i class="ri-google-fill"></i></a>
                                        </li>
                                        <li><a href="#" title=""><i class="ri-linkedin-fill"></i></a></li>
                                        <li><a href="#" title=""><i class="ri-instagram-fill"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="footer-info-single">
                                <h2 class="title">Help Center</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> How to Pay</a>
                                    </li>
                                    <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> FAQ's</a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Sitemap</a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Delivery Info</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="footer-info-single">
                                <h2 class="title">Customer information</h2>
                                <ul class="list-unstyled">
                                    <li><a href="aboutus.html" title=""><i class="fa fa-angle-double-right"></i> About
                                            Us</a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> FAQ's</a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Sell Your
                                            Items</a>
                                    </li>
                                    <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Contact Us</a>
                                    </li>
                                    <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> RSS</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="footer-info-single">
                                <h2 class="title">Security & privacy</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Terms Of Use</a>
                                    </li>
                                    <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Privacy Policy</a>
                                    </li>
                                    <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Return / Refund
                                            Policy</a></li>
                                    <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Store
                                            Locations</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="footer-info-single">
                                <h2 class="title">Payment</h2>
                                <p>Sample HTML page with Twitter's Bootstrap. Code example of Easy Sticky Footer using
                                    HTML,
                                    Javascript, jQuery, and CSS. This bootstrap tutorial covers all the major elements
                                    of
                                    responsive</p>

                            </div>
                        </div>
                    </div>
                </div>

                <section class="copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Copyright © 2017. Your Company.</p>
                            </div>
                            <div class="col-sm-6"></div>
                        </div>
                    </div>
                </section>
            </footer>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
            <!-- <script type="text/javascript" src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
            <!-- <script type="text/javascript" src="js/script.js"></script> -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
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

</body>

</html>