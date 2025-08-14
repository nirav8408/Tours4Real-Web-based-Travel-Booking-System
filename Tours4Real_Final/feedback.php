<!DOCTYPE html>
<html>
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
    if(isset($_POST['submit']))
    {
        $f_name=$_POST['firstname'];
        $l_name=$_POST['lastname'];
        $email=$_POST['email'];
        $mob=$_POST['mob'];
        $message=$_POST['feedback'];
        $sql="INSERT INTO feedback(firstname,lastname,email,phone,message) values('$f_name', '$l_name', '$email', '$mob', '$message')";
        $result=mysqli_query($conn,$sql);
        echo '<script>alert("Your feedback has been sent")</script>';
    }   
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tours4Real/Feedback</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <!-- Fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap');

        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            line-height: 1.5;
        }
        .contact-section{
            padding:0;
            margin:0;
            margin-top:120px;
        
        }

        .contact-bg {
            height: 40vh;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url(img/contact-bg.jpg);
            background-position: 50% 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            text-align: center;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .contact-bg h3 {
            font-size: 1.3rem;
            font-weight: 400;
        }

        .contact-bg h2 {
            font-size: 3rem;
            text-transform: uppercase;
            padding: 0.4rem 0;
            letter-spacing: 4px;
        }

        .line div {
            margin: 0 0.2rem;
        }

        .line div:nth-child(1),
        .line div:nth-child(3) {
            height: 3px;
            width: 70px;
            background: #f7327a;
            border-radius: 5px;
        }

        .line {
            display: flex;
            align-items: center;
        }

        .line div:nth-child(2) {
            width: 10px;
            height: 10px;
            background: #f7327a;
            border-radius: 50%;
        }

        .text {
            font-weight: 300;
            opacity: 0.9;
        }

        .contact-bg .text {
            margin: 1.6rem 0;
        }

        .contact-body {
            max-width: 1320px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .contact-info {
            margin: 2rem 0;
            text-align: center;
            padding: 2rem 0;
        }

        .contact-info span {
            display: block;
        }

        .contact-info div {
            margin: 0.8rem 0;
            padding: 1rem;
        }

        .contact-info span .fas {
            font-size: 2rem;
            padding-bottom: 0.9rem;
            color: #f7327a;
        }

        .contact-info div span:nth-child(2) {
            font-weight: 500;
            font-size: 1.1rem;
        }

        .contact-info .text {
            padding-top: 0.4rem;
        }

        .contact-form {
            padding: 2rem 0;
            border-top: 1px solid #c7c7c7;
        }

        .contact-form form {
            padding-bottom: 1rem;
        }

        .form-control {
            width: 100%;
            border: 1.5px solid #c7c7c7;
            border-radius: 5px;
            padding: 0.7rem;
            margin: 0.6rem 0;
            font-family: 'Open Sans', sans-serif;
            font-size: 1rem;
            outline: 0;
        }

        .form-control:focus {
            box-shadow: 0 0 6px -3px rgba(48, 48, 48, 1);
        }

        .contact-form form div {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            column-gap: 0.6rem;
        }

        .send-btn {
            font-family: 'Open Sans', sans-serif;
            font-size: 1rem;
            text-transform: uppercase;
            color: #fff;
            background: #f7327a;
            border: none;
            border-radius: 5px;
            padding: 0.7rem 1.5rem;
            cursor: pointer;
            transition: all 0.4s ease;
        }

        .send-btn:hover {
            opacity: 0.8;
        }

        .contact-form>div img {
            width: 85%;
        }

        .contact-form>div {
            margin: 0 auto;
            text-align: center;
        }

        .contact-footer {
            padding: 2rem 0;
            background: #000;
        }

        .contact-footer h3 {
            font-size: 1.3rem;
            color: #fff;
            margin-bottom: 1rem;
            text-align: center;
        }

        .social-links {
            display: flex;
            justify-content: center;
        }

        .social-links a {
            text-decoration: none;
            width: 40px;
            height: 40px;
            color: #fff;
            border: 2px solid #fff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0.4rem;
            transition: all 0.4s ease;
        }

        .social-links a:hover {
            color: #f7327a;
            border-color: #f7327a;
        }

        @media screen and (min-width: 768px) {
            .contact-bg .text {
                width: 70%;
                margin-left: auto;
                margin-right: auto;
            }

            .contact-info {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media screen and (min-width: 992px) {
            .contact-bg .text {
                width: 50%;
            }

            .contact-form {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                align-items: center;
            }
        }

        @media screen and (min-width: 1200px) {
            .contact-info {
                grid-template-columns: repeat(4, 1fr);
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <header style=" background: #034752;  backdrop-filter: blur(4px);">
        <a href="#" class="logo" style="margin-right: 60px;"><img src="img/logo-final-removebg-preview.png" style="color: aqua;height: 65px; width: 175px"
                alt="">
        </a>

        <ul class="n">
            <li><a href="index.php" >Home</a></li>
            <li><a href="package.php">Package</a></li>
            <li><a href="offers.php">Booking</a></li>
            <li><a href="place.php">Places</a></li>
            <li><a href="feedback.php" class="active">Feedback</a></li>
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
            <!-- <a href="login.php" id="signin" class="user-a"><i class="ri-login-circle-fill"></i>Sign In</a> -->
            <!-- <a href="register_new.php" id="register" class="reg-a">Register</a> -->
            <a href="edit_info.php" id="update" class="reg-a">Profile</a>
            <a href="logout.php" id="logout" class="user-a"><i class="ri-logout-circle-fill"></i>Logout</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>


    <section class="contact-section">
        <div class="contact-bg">
            <h3>Get in Touch with Us</h3>
            <h2>contact us</h2>
            <div class="line">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <p class="text">If you have any questions or concerns, please don't hesitate to contact us.Our friendly
                customer support team is here to assist you.
                Reach out to us using the form below or send us an email at [insert email address].We would love to hear
                from you and will respond
                promptly to your inquiry.</p>
        </div>


        <div class="contact-body">
            <div class="contact-info">
                <div>
                    <span><i class="fas fa-mobile-alt"></i></span>
                    <span>Phone No.</span>
                    <span class="text">1-2392-23928-2</span>
                </div>
                <div>
                    <span><i class="fas fa-envelope-open"></i></span>
                    <span>E-mail</span>
                    <span class="text">mail@company.com</span>
                </div>
                <div>
                    <span><i class="fas fa-map-marker-alt"></i></span>
                    <span>Address</span>
                    <span class="text">2939 Patrick Street, Vicotria TX, United States</span>
                </div>
                <div>
                    <span><i class="fas fa-clock"></i></span>
                    <span>Opening Hours</span>
                    <span class="text">Monday - Friday (9:00 AM to 5:00 PM)</span>
                </div>
            </div>

            <div class="contact-form">
                <form method="POST">
                    <div>
                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                    </div>
                    <div>
                        <input type="email" class="form-control" name="email" placeholder="E-mail">
                        <input type="text" class="form-control" name="mob" placeholder="Phone">
                    </div>
                    <textarea rows="5" placeholder="Message" name="feedback" class="form-control"></textarea>
                    <input type="submit" class="send-btn" name="submit" value="Send Message">
                    <a href="index.php"><input type="button" class="send-btn" value="Go Back" href="index.php"></a>
                </form>

                <div>
                    <img src="img/contact-png.png" alt="">
                </div>
            </div>
        </div>

        <div class="map" style="margin-bottom: 10px;">
            
                

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.617034644275!2d72.509658!3d23.037829499999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b5a986f7dd7%3A0x2b9345c3f13c7158!2sNew%20L%20J%20Institute%20of%20Engineering%20%26%20Technology!5e0!3m2!1sen!2sin!4v1751118606744!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
            <br>
        </div>

    </section>



</body>

</html>