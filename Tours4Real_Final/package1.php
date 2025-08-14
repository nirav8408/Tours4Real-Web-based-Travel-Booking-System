<!DOCTYPE html>
<html lang="en">
<?php
include("config.php");
if(isset($_SESSION['ID']))
{
    
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
    <link rel="stylesheet" href="css/package1.css">
    <link rel="stylesheet" href="css/package.css">
    <link rel="stylesheet" href="css/privacy.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Tours4Real/Packages/Cities</title>


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
<?php
include("config.php");
?>

<body style="background: linear-gradient(to right, aqua, #4E4376);">
<header style=" background: #034752;  backdrop-filter: blur(4px);">
<a href="#" class="logo" style="margin-right: 60px;"><img src="img/logo-final-removebg-preview.png" style="color: aqua;height: 65px; width: 175px"
                alt="">
        </a>

        <ul class="n">
            <li><a href="index.php">Home</a></li>
            <li><a href="package.php" class="active">Package</a></li>
            <li><a href="offers.php">Booking</a></li>
            <li><a href="place.php">Places</a></li>
            <li><a href="feedback.php">Feedback</a></li>
        </ul>
        <div class="main-a">
            <div class="input-box-a">
                <input type="search" id="search" placeholder="Search here..." onkeyup="search()" />
                    <i class="ri-search-2-line"></i>
            </div>
                <!-- <button class="button">Search</button> -->
            
            <!-- <a href="#" class="search"><i class="ri-search-2-line"></i></a> -->
            <a href="login.php" id="signin" class="user-a"><i class="ri-user-fill"></i>Sign In</a>
            <!-- <a href="login.php" id="signin" class="user-a"><i class="ri-login-circle-fill"></i>Sign In</a> -->
            <!-- <a href="register_new.php" id="register" class="reg-a">Register</a> -->
            <a href="edit_info.php" id="update" class="reg-a">Profile</a>
            <a href="logout.php" id="logout" class="user-a"><i class="ri-logout-circle-fill"></i>Logout</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <?php
    if(isset($_REQUEST['pack_cat']))
    {
        $cat_id=$_REQUEST['pack_cat'];
        $sql = "SELECT pack_cat_id FROM package_category where pack_cat_id=$cat_id";
        $query = mysqli_query($conn, $sql);
    
    // if(mysqli_num_rows($query)>0)
    // {
    while ($results = mysqli_fetch_assoc($query)) 
    {
        $id=$results['pack_cat_id'];
        $s = "SELECT * from package_category where pack_cat_id=$id";
        $q = mysqli_query($conn, $s);
        $row1 = mysqli_fetch_assoc($q)
    ?>
        <div class="heading1">
            <h1><?php echo $row1["pack_cat_name"]; ?></h1>
            <p><?php echo $row1["pack_cat_desc"]; ?></p>
        </div>
        <section class="about-us">
            <img src="<?php echo $row1["pack_cat_img"]; ?>" alt="">
            <div class="content1">
                </h2>
                <p><?php echo $row1["pack_cat_info"]; ?> </p>
            </div>
        </section>
        <br><br><br><br><br><br>
    <?php
    }
    ?>

    <?php 
    $sql = "SELECT * FROM package where package.pack_category_id=$cat_id;";
    $query = mysqli_query($conn, $sql);
    // if(mysqli_num_rows($query)>0)
    // {
    while ($results = mysqli_fetch_assoc($query)) 
    {
        // setcookie("packid",$results['package_id'],time()+60,"/");
        $id=$results['package_id'];
        $s = "SELECT * from package where package_id=$id";
        $q = mysqli_query($conn, $s);
        $row1 = mysqli_fetch_assoc($q)
    ?>
        <div class="contain">
            <div class="list-contain">
                <div class='left-col'>
                    <div class="package">
                        <div class="package-img">
                                    <img src="<?php echo $row1["package_img"]; ?>">
                        </div>
                        <div class="package-info">

                            <h3>
                                <?php
                                    echo $row1["package_name"];
                                ?>
                            </h3>
                            <p>
                            <p>
                                <?php
                                    echo $row1["package_desc"];
                                ?>
                            </p>

                            Source :
                                <?php
                                    echo $row1["package_source"];
                                ?>
                            <br>
                            
                            Between Places :
                                <?php
                                    echo $row1["between_places"];
                                ?>
                            <br>
                                
                                <?php if ($row1['rate'] == 1) { ?>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                <?php } ?>
                                <?php if ($row1['rate'] == 2) { ?>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                <?php } ?>
                                <?php if ($row1['rate'] == 3) { ?>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                <?php } ?>
                                <?php if ($row1['rate'] == 4) { ?>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star"></i>
                                <?php } ?>
                                <?php if ($row1['rate'] == 5) { ?>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                <?php } ?>
                            <div class="pack-price">
                                <h3>
                                    ₹
                                    <?php
                                        echo $row1["package_price"];
                                    ?>
                                    <span>/ day</span>
                                </h3>
                            </div>
                            <form method="post" action="offers.php">
                                <!-- <a href="offers.php?package_destination="> -->
                                <input type="hidden" name="id" value="<?php echo $results['package_id'];?>">
                                <input type="hidden" name="source" value="<?php echo $results['package_source'];?>">
                                <input type="hidden" name="dest" value="<?php echo $results['package_destination'];?>">
                                <input type="hidden" name="img" value="<?php echo $results['package_img'];?>">
                                <input type="hidden" name="name" value="<?php echo $results['package_name'];?>">
                                <input type="hidden" name="cat" value="<?php echo $results['pack_category_name'];?>">
                                <input type="hidden" name="price" value="<?php echo $results['package_price'];?>">
                                <button style="background-color: black; color:white; padding: 15px 20px; border-radius: 12px; display: inline; text-align: center; margin: 20px 50px; text-decoration: none;cursor: pointer;" 
                                type="submit" name="Bpackage" value="<?php echo $row1['package_id'];?>">
                                    Book Now
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
    <?php
    }
    }
    else{
       header('location:package.php');
    }
    ?>
<script type="text/javascript">
        function search() 
        {
                let filter = document.getElementById('search').value.toUpperCase();
                let item = document.querySelectorAll('.package');
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
    </script>
</body>

</html>