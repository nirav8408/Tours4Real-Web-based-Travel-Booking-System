<!DOCTYPE html>
<html lang="en"> 
<?php
        include("config.php");
        if(isset($_SESSION['ID']))
        {
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
            // echo '<script>alert("Login Successful")</script>';
            echo '<style>#signin,#register{display:none;}</style>';
            echo '<style>#logout,#update{display:block;}</style>';
        }
        else{
            // echo '<script>alert("You are logged in as a Guest")</script>';
            // echo $_SESSION['ID'];
            echo '<style>#signin,#register{display:block;}</style>';
            echo '<style>#logout,#update{display:none;}</style>';
        }
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tours4Real/Packages</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/package.css">
    <link rel="stylesheet" href="css/privacy.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />


    <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>

<body style="background: linear-gradient(to right, aqua, #4E4376);">
    <!-- Navbar -->
    <header style=" background: #034752;  backdrop-filter: blur(4px);">
    <a href="#" class="logo" style="margin-right: 60px;"><img src="img/logo-final-removebg-preview.png" style="color: aqua;height: 65px; width: 175px"
                alt="">
        </a>

        <ul class="n">
            <li><a href="index.php">Home</a></li>
            <li><a href="" class="active">Package</a></li>
            <li><a href="offers.php">Booking</a></li>
            <li><a href="place.php">Places</a></li>
            <li><a href="feedback.php">Feedback</a></li>
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
            <a href="login.php" id="signin" class="user-a"><i class="ri-user-fill"></i>Sign In</a>
            <!-- <a href="register_new.php" class="reg-a">Register</a> -->
            <a href="edit_info.php" id="update" class="reg-a">Profile</a>
            <a href="logout.php" id="logout" class="user-a"><i class="ri-logout-circle-fill"></i>Logout</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>
    <hr class="hr-or">
    <!-- <span class="span-or">or</span> -->
    <hr class="hr-or">
    <hr class="hr-or">



    <!-- <h1 class="heading">
        <span>P</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1> -->



    <!-- package slider -->
   
    <div class="main" style="background: linear-gradient(to right, aqua, #4E4376);">


        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <?php
                        $sql = "SELECT pack_cat_id FROM package_category;";
                        $query = mysqli_query($conn, $sql);
                        // if(mysqli_num_rows($query)>0)
                        // {
                        while ($results = mysqli_fetch_assoc($query)) 
                        {
                            // setcookie("packid",$results['package_id'],time()+60,"/");
                            $id=$results['pack_cat_id'];
                            $s = "SELECT * from package_category where pack_cat_id=$id;";
                            $q = mysqli_query($conn, $s);
                            $row1 = mysqli_fetch_assoc($q)
                    ?>
                        <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>

                                    <div class="card-image">
                                        <img src="<?php echo $row1["pack_cat_slider_img"]; ?>" alt="" class="card-img">
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h2 class="name"><?php echo $row1["pack_cat_name"]; ?></h2>
                                    <p class="description"><?php echo $row1["pack_cat_desc"]; ?></p>
                                    <form method="post" action="package1.php"> 
                                        <button type="sumbit" class="button" value="<?php echo $results['pack_cat_id'];?>" name="pack_cat">View Packages</button>
                                    </form>
                                <!-- <a href="package1.php"><button class="button">View Packages</button></a>  -->
                                </div>
                        </div>

                    <?php
                        }
                    ?>
                </div>
                </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
        </div>
    </div>
    <hr>
    <!-- package slider end -->

    <!-- package inclusions starts -->

    <section class="inclusions" id="inclusions" style="padding: 10px;">

        <h1 class="packhead" style="color: #034752;">
            INCLUSIONS
        </h1>
        <hr>

        <div class="pack-container" >

            <div class="pack" >
                <i class="ri-hotel-fill"></i>
                <h3>Affordable Hotels</h3>
                <p>If you're looking for an affordable and comfortable hotel stay during your travels, our package is the perfect choice for you. We understand the importance of finding quality accommodations without breaking the bank, which is why we've partnered with a range of hotels that offer great value for your money. From budget-friendly options to mid-range hotels, we've got you covered with our carefully curated selection. Rest assured that all of our partner hotels have been thoroughly vetted to ensure they meet our high standards of cleanliness, comfort, and service. </p>
            </div>

            <div class="pack">
                <i class="ri-cake-2-line"></i>
                <h3>Quality Food</h3>
                <p>Food is an essential part of any travel experience, offering a glimpse into the culture and history of a destination. At Savoring the World, we believe that food should be a highlight of your travels, which is why we make it a priority to include quality dining options in our travel packages. From street food vendors to Michelin-starred restaurants, we've scoured the globe to find the best and most authentic dining experiences for our travelers.</p>
            </div>

            <div class="pack">
                <i class="ri-user-follow-fill"></i>
                <h3>Tour Guide</h3>
                <p>A tour guide can be an invaluable asset on your travels, providing you with insights and knowledge that you may not have otherwise discovered. At Guiding You to Discovery, we understand the importance of having a knowledgeable and experienced guide to show you the ropes and bring your travels to life. Our tour guides are passionate about their destinations and have a wealth of local knowledge, from the best hidden gems to the fascinating stories behind each landmark. They are also skilled at managing logistics, ensuring that you can relax and enjoy your journey without worrying about the details. </p>
            </div>

            <div class="pack">
                <i class="ri-service-fill"></i>
                <h3>Quality Service</h3>
                <p>Paragraph: At Exceeding Expectations, we are committed to providing quality service that goes above and beyond your expectations. From the moment you book your trip to the day you return home, we strive to provide you with a seamless and stress-free travel experience. Our team of travel experts is dedicated to helping you create the perfect itinerary, with personalized recommendations and insider tips that cater to your interests and preferences. We partner with top-rated hotels, airlines, and local operators to ensure that you receive the highest quality service and accommodations during your travels.</p>
            </div>

            <div class="pack">
                <i class="ri-plane-line"></i>
                <h3>Fastest Travel</h3>
                <p>Paragraph: For busy travelers who are always on the go, time is of the essence. At Jet Set Go, we understand the importance of speed and efficiency when it comes to travel. That's why we offer a range of fast travel options to get you to your destination as quickly and conveniently as possible. From private jets and helicopters to high-speed trains and bullet trains, we have a variety of options to suit your needs and budget. Our travel experts are dedicated to finding the fastest and most efficient routes for your travels, so you can arrive at your destination feeling refreshed and ready to go.</p>
            </div>

            <div class="pack">
                <i class="ri-money-dollar-circle-fill"></i>
                <h3>Economic Travels</h3>
                <p>At Smart Travel, we believe that travel should be accessible to everyone, regardless of their budget. That's why we offer a range of economic travel options that allow you to see the world without breaking the bank. From budget-friendly accommodations to affordable transportation options, we have everything you need to create an unforgettable travel experience at a fraction of the cost. Our travel experts are skilled at finding the best deals on flights, hotels, and activities, so you can save money without compromising on quality.</p>
            </div>
        </div>
    </section>

    <!-- package inclusions starts -->
    <!-- packages start -->
    <!-- <section class="packages1" id="packages1">
        <h1 class="heading1">Our <span>Packages</span></h1>
        <div class="box-container1">
            <div class="box1">
                <div class="image1">
                    <img src="img/pack/1.jpg" alt="">
                    <h3><i class="fas fa-map-marker-alt"></i>Mumbai</h3>
                </div>
                <div class="content1">
                    <div class="price1">
                        290.99 <span>350.99</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="btn1">Book Now</a>
                </div>
            </div>
            
            <div class="box1">
                <div class="image1">
                    <img src="img/pack/1.jpg" alt="">
                    <h3><i class="fas fa-map-marker-alt"></i>Mumbai</h3>
                </div>
                <div class="content1">
                    <div class="price1">
                        290.99 <span>350.99</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="btn1">Book Now</a>
                </div>
            </div>
            <div class="box1">
                <div class="image1">
                    <img src="img/pack/1.jpg" alt="">
                    <h3><i class="fas fa-map-marker-alt"></i>Mumbai</h3>
                </div>
                <div class="content1">
                    <div class="price1">
                        290.99 <span>350.99</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="btn1">Book Now</a>
                </div>
            </div>
            <div class="box1">
                <div class="image1">
                    <img src="img/pack/1.jpg" alt="">
                    <h3><i class="fas fa-map-marker-alt"></i>Mumbai</h3>
                </div>
                <div class="content1">
                    <div class="price1">
                        290.99 <span>350.99</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="btn1">Book Now</a>
                </div>
            </div>


        </div>
    </section> -->




    <!-- footer -->
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- <script type="text/javascript" src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
    <!-- <script type="text/javascript" src="js/script.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>



<script src="js/swiper-bundle.min.js"></script>

<!-- JavaScript -->
<!--Uncomment this line-->
<script src="js/package.js"></script>

</html>