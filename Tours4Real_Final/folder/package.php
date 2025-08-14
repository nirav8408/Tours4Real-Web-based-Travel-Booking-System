<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T4R-Packages</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/package.css">
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
        <a href="index.html" class="logo" style="margin-right: 60px;"><img src="img/logo.png" style="color: aqua;"
                alt="" ><span style="color: aqua;">Tours4Real</span>
        </a>

        <ul class="n">
            <li><a href="index.html">Home</a></li>
            <li><a href="" class="active">Package</a></li>
            <li><a href="offers.html">Booking</a></li>
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
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="img/pack/slider_cities_1.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Popular Cities</h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <input type="button" class="button" value="View Packages" onclick="location.href='package1.php'";>
                           <!-- <a href="package1.php"><button class="button">View Packages</button></a>  -->
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="img/pack/heritage.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Heritage</h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                                <input type="button" class="button" value="View Packages" onclick="location.href='package2.php'";>
                                <!-- <a href="package2.php"><button class="button">View Packages</button></a>  -->
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="img/pack/package3.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Famous Religious Places</h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                                <input type="button" class="button" value="View Packages" onclick="location.href='package3.php'";>
                                <!-- <a href="package3.php"><button class="button">View Packages</button></a>  -->
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="img/pack/special2.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Tours4Real Special</h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                                <input type="button" class="button" value="View Packages" onclick="location.href='package4.php'";>
                                <!-- <a href="package4.php"><button class="button">View Packages</button></a>  -->
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="img/pack/special3.jpg" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Fun filled Holiday</h2>
                            <p class="description">The lorem text the section that contains header with having open
                                functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                                <input type="button" class="button" value="View Packages" onclick="location.href='package5.php'";>
                                <!-- <a href="package5.php"><button class="button">View Packages</button></a>  -->
                        </div>
                    </div>
                    

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

    <section class="inclusions" id="inclusions">

        <h1 class="packhead" style="color: #034752;">
            INCLUSIONS
        </h1>
        <hr>

        <div class="pack-container" >

            <div class="pack" >
                <i class="ri-hotel-fill"></i>
                <h3>Affordable Hotels</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laudantium provident ea sint, quasi
                    quis, odit, sit quas obcaecati debitis nam explicabo. Provident maxime modi aliquid atque recusandae
                    praesentium cupiditate.</p>
            </div>

            <div class="pack">
                <i class="ri-cake-2-line"></i>
                <h3>Quality Food</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laudantium provident ea sint, quasi
                    quis, odit, sit quas obcaecati debitis nam explicabo. Provident maxime modi aliquid atque recusandae
                    praesentium cupiditate.</p>
            </div>

            <div class="pack">
                <i class="ri-user-follow-fill"></i>
                <h3>Tour Guide</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laudantium provident ea sint, quasi
                    quis, odit, sit quas obcaecati debitis nam explicabo. Provident maxime modi aliquid atque recusandae
                    praesentium cupiditate.</p>
            </div>

            <div class="pack">
                <i class="ri-service-fill"></i>
                <h3>Quality Service</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laudantium provident ea sint, quasi
                    quis, odit, sit quas obcaecati debitis nam explicabo. Provident maxime modi aliquid atque recusandae
                    praesentium cupiditate.</p>
            </div>

            <div class="pack">
                <i class="ri-plane-line"></i>
                <h3>Fastest Travel</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laudantium provident ea sint, quasi
                    quis, odit, sit quas obcaecati debitis nam explicabo. Provident maxime modi aliquid atque recusandae
                    praesentium cupiditate.</p>
            </div>

            <div class="pack">
                <i class="ri-money-dollar-circle-fill"></i>
                <h3>Economic Travels</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum laudantium provident ea sint, quasi
                    quis, odit, sit quas obcaecati debitis nam explicabo. Provident maxime modi aliquid atque recusandae
                    praesentium cupiditate.</p>
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
    <footer class="nb-footer" style="background-color: #034752;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="about">

                        <p><i class="ri-map-pin-range-line"></i>
                            &nbsp;Tours4Real</p>

                        <div class="social-media">
                            <ul class="list-inline" style="text-decoration: none;">
                                <li><a href="http://www.nextbootstrap.com/" title=""><i
                                            class="ri-facebook-fill"></i></a>
                                </li>
                                <li><a href="http://www.nextbootstrap.com/" title=""><i class="ri-google-fill"></i></a>
                                </li>
                                <li><a href="http://www.nextbootstrap.com/" title=""><i
                                            class="ri-linkedin-fill"></i></a></li>
                                <li><a href="http://www.nextbootstrap.com/" title=""><i
                                            class="ri-instagram-fill"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-info-single">
                        <h2 class="title">Help Center</h2>
                        <ul class="list-unstyled">
                            <li><a href="http://www.nextbootstrap.com/" title=""><i
                                        class="fa fa-angle-double-right"></i> How to Pay</a></li>
                            <li><a href="http://www.nextbootstrap.com/" title=""><i
                                        class="fa fa-angle-double-right"></i> FAQ's</a></li>
                            <li><a href="http://www.nextbootstrap.com/" title=""><i
                                        class="fa fa-angle-double-right"></i> Sitemap</a></li>
                            <li><a href="http://www.nextbootstrap.com/" title=""><i
                                        class="fa fa-angle-double-right"></i> Delivery Info</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-info-single">
                        <h2 class="title">Customer information</h2>
                        <ul class="list-unstyled">
                            <li><a href="http://www.nextbootstrap.com/" title=""><i
                                        class="fa fa-angle-double-right"></i> About Us</a></li>
                            <li><a href="http://www.nextbootstrap.com/" title=""><i
                                        class="fa fa-angle-double-right"></i> FAQ's</a></li>
                            <li><a href="http://www.nextbootstrap.com/" title=""><i
                                        class="fa fa-angle-double-right"></i> Sell Your Items</a></li>
                            <li><a href="http://www.nextbootstrap.com/" title=""><i
                                        class="fa fa-angle-double-right"></i> Contact Us</a></li>
                            <li><a href="http://www.nextbootstrap.com/" title=""><i
                                        class="fa fa-angle-double-right"></i> RSS</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-info-single">
                        <h2 class="title">Security & privacy</h2>
                        <ul class="list-unstyled">
                            <li><a href="http://www.nextbootstrap.com/" title=""><i
                                        class="fa fa-angle-double-right"></i> Terms Of Use</a></li>
                            <li><a href="http://www.nextbootstrap.com/" title=""><i
                                        class="fa fa-angle-double-right"></i> Privacy Policy</a></li>
                            <li><a href="http://www.nextbootstrap.com/" title=""><i
                                        class="fa fa-angle-double-right"></i> Return / Refund Policy</a></li>
                            <li><a href="http://www.nextbootstrap.com/" title=""><i
                                        class="fa fa-angle-double-right"></i> Store Locations</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-info-single">
                        <h2 class="title">Payment</h2>
                        <p>Sample HTML page with Twitter's Bootstrap. Code example of Easy Sticky Footer using HTML,
                            Javascript, jQuery, and CSS. This bootstrap tutorial covers all the major elements of
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