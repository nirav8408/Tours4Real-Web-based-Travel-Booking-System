<?php
include "config.php";
if (isset($_SESSION['ID'])) {
    // echo '<script>alert("Login Successful")</script>';
    echo '<style>#signin,#register{display:none;}</style>';
    echo '<style>#logout,#update{display:block;}</style>';
} else {
    // echo '<script>alert("You are logged in as a Guest")</script>';
    // echo $_SESSION['ID'];
    echo '<style>#signin,#register{display:block;}</style>';
    echo '<style>#logout,#update{display:none;}</style>';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tours4Real/Places</title>
    <link rel="stylesheet" href="css/tourplacestyle.css">
    <!-- <link rel="stylesheet" href="css/privacy.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"> -->
</head>

<body>
    <!-- Navbar -->
    <header style=" background: #034752;  backdrop-filter: blur(4px);">
        <a href="#" class="logo" style="margin-right: 60px;"><img src="img/logo-final-removebg-preview.png" style="color: aqua;height: 65px; width: 175px"
                alt="">
        </a>

        <ul class="n">
            <li><a href="index.php">Home</a></li>
            <li><a href="package.php">Package</a></li>
            <li><a href="offers.php">Booking</a></li>
            <li><a href="#" class="active">Places</a></li>
            <li><a href="feedback.php">Feedback</a></li>
        </ul>
        <div class="main-a">
            <div class="input-box-a">
                <input type="text" id="search" placeholder="Search here..." onkeyup="search()" />
                    <i class="ri-search-2-line"></i>
            </div>

            <!-- <a href="#" class="search"><i class="ri-search-2-line"></i></a> -->
            <a href="login.php" id="signin" class="user-a"><i class="ri-user-fill"></i>Sign In</a>
            <!-- <a href="login.php" id="signin" class="user-a"><i class="ri-login-circle-fill"></i>Sign In</a> -->
            <!-- <a href="register_new.php" id="register" class="reg-a">Register</a> -->
            <a href="edit_info.php" id="update" class="reg-a">Profile</a>
            <a href="logout.php" id="logout" class="user-a"><i class="ri-logout-circle-fill"></i>Logout</a>
            <div class="bx bx-menu" id="menu-icon"></div>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <section>
        <br> <br> <br> <br> <br>
        <div class="main1" >

            <h1 style="font-size: 50px;
            color: #034752;
            margin: 30px 0 30px 0;">360 view</h1>
            <hr style="color:  #fff; font-weight: bolder;">
            <br>

            <!-- Tabs Button -->
            <div id="BtnContainer" >
                <button style="color: #fff;" class="btn ac" id="all"> Show all</button>
                <button style="color: #fff;" class="btn" id="Trending"> Trending</button>
                <button style="color: #fff;" class="btn" id="Historical"> Historical</button>
                <button style="color: #fff;" class="btn" id="Temples"> Temples</button>
                <!-- <button class="btn" onclick="filterSelection('Centuries')"> Centuries</button> -->
            </div>
            <!-- Tabs Button -->

            <!-- Portfolio Gallery Grid -->
            <div class="row1"  >

                <!-- Historical column -->
                <?php
$sql = "select * from place_360";
$count = "select count('place_id') from place_360 where place_cat='Historical'";
$query1 = mysqli_query($conn, $sql);
$query2 = mysqli_query($conn, $count);
$row = mysqli_fetch_array($query2, MYSQLI_ASSOC);
$c = $row["count('place_id')"];
for ($i = 1; $i <= $c; $i++) {
    ?>
                    <?php
while ($row = mysqli_fetch_array($query1, MYSQLI_ASSOC)) {
        ?>
                        <div class="column <?php echo $row['place_cat']; ?> all" >
                            <div class="content" style="height:350px;background-image:linear-gradient(to right,#fff, #fff)">
                                <img src="<?php echo $row['place_img']?>" alt="image can't load refresh now" height="200px" />
                                <h4 style="color: #000;  margin: 3px 0 3px 20px;"> <?php echo $row['place_title'] ?></h4>
                                <a href="#pop-click <?php echo $row['place_id']; ?>" style="color: rgb(21, 21, 21); ">
                                    <h6 style="color: rgb(21, 21, 21);padding-top:20px">Read More >></h6>
                                </a>
                            </div>
                            <div id="pop-click <?php echo $row['place_id'];?>" class="popup">
                                <div class="popup-con" style="height: 514px">
                                    <iframe width="100%" alt="image can't load refresh now" height="300px" src="<?php echo $row['popup_img'];?>" style="border-radius: 1rem;"> </iframe>
                                    <a href="#" class="close">&times;</a>
                                    <div class="con-text">
                                        <h4><?php echo $row['place_title'];?></h4>
                                        <p class="sub-text"> <?php echo $row['popup_desc'];?></p>
                                        <!-- <button>Book</button>
                                        <a href="">
                                            <button>Cancel</button>
                                        </a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php }
}?>
                <!-- <div></div> -->
            </div>
            <div class="loadmore">
                <a href="#" id="LoadMore">Load More</a>
            </div>
        </div>

        <br> <br> <br> <br> <br>
        <div class="main2">

            <h1 style="font-size: 50px;
            color: #034752;
            margin: 30px 0 30px 0;">Photo gallery</h1>
            <hr style="color:  #fff; font-weight: bolder;">
            <br>
        </div>
        <div class="container">

            <input type="text" placeholder="search cities" id="search-box">
            <div class="image-container">

                <?php
$sql = "select * from photogallery";
$count = "select count('PhotoG_id') from photogallery";
$query1 = mysqli_query($conn, $sql);
$query2 = mysqli_query($conn, $count);
$row = mysqli_fetch_array($query2, MYSQLI_ASSOC);
$c = $row["count('PhotoG_id')"];
for ($i = 1; $i <= $c; $i++) {
    ?>
                    <?php
while ($row = mysqli_fetch_array($query1, MYSQLI_ASSOC)) {?>
                        <div class="image" data-title="<?php echo $row['PhotoG_dt'] ?>" style="border: #034752; border-radius: 20px;">
                            <img src="<?php echo $row['PhotoG_img'] ?>" alt="image can't load refresh now">
                            <h3>
                                <?php
echo $row['PhotoG_name'];
        ?>
                            </h3>
                        </div>
                <?php
}
}
?>
            </div>
            <br>
            <div class="Show">
                <a href="#" id="show" style="text-decoration: none;">Show More</a>
            </div>
        </div>

    </section>
   <!-- footer -->
    
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
    <script type="text/javascript" src="js/tourplacescript.js">


    </script>

<script type="text/javascript">
        function search()
        {
                let filter = document.getElementById('search').value.toUpperCase();
                let item = document.querySelectorAll('.content');
                let l = document.getElementsByTagName('h4');
                for(var i = 0;i<=l.length;i++)
                {
                    let a=item[i].getElementsByTagName('h4')[0];
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
    </script>
</body>

</html>