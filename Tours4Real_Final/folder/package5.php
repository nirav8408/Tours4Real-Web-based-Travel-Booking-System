<!DOCTYPE html>
<html lang="en">
<?php
include("config.php");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/package1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>T4R - Holidays</title>
</head>

<body style="background: linear-gradient(to right, aqua, #4E4376);">
    <div class="heading1">
        <h1>Fun filled Holidays</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium est fuga animi quasi ut aliquid illo consequuntur, velit odit necessitatibus!</p>
    </div>
    <section class="about-us">
        <img src="img/pack/Holiday.jfif" alt="">
        <div class="content1">
            <h2>Lorem, ipsum dolor.
            </h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis pariatur voluptate inventore sint vero iste velit unde facere dolore provident.</p>
        </div>
    </section>
    <br><br><br><br><br><br>
    <?php

    $sql = "SELECT * FROM package where package_category='Holiday'";
    $query = mysqli_query($conn, $sql);
    // if(mysqli_num_rows($query)>0)
    // {
    while ($results = mysqli_fetch_assoc($query)) {
        $id = $results["package_id"];
    ?>
        <div class="contain">
            <div class="list-contain">
                <div class='left-col'>
                    <div class="package">
                        <div class="package-img">
                        <?php
                                $s = "SELECT package_img from package where package_id=$id";
                                $q = mysqli_query($conn, $s);
                                while ($row1 = mysqli_fetch_assoc($q)) {
                                        ?>
                                    <img src="<?php echo $row1["package_img"]; ?>">
                                <?php }

                                ?>
                        </div>
                        <div class=package-info>

                            <h3>
                                <?php
                                $s1 = "SELECT package_name from package where package_id=$id";
                                $q1 = mysqli_query($conn, $s1);
                                while ($row1 = mysqli_fetch_assoc($q1)) {
                                    echo $row1["package_name"];
                                }
                                ?>
                            </h3>
                            <p>
                            <p>
                                <?php
                                $s = "SELECT package_desc from package where package_id=$id";
                                $q = mysqli_query($conn, $s);
                                while ($row1 = mysqli_fetch_assoc($q)) {
                                    echo $row1["package_desc"];
                                }
                                ?>
                            </p>
                            Source :
                            <?php
                            $s2 = "SELECT package_source from package where package_id=$id";
                            $q2 = mysqli_query($conn, $s2);
                            while ($row1 = mysqli_fetch_assoc($q2)) {
                                echo $row1["package_source"];
                            }
                            ?><br>
                            Between Places :
                            <?php
                            $s3 = "SELECT * from package where package_id=$id";
                            $q3 = mysqli_query($conn, $s3);
                            while ($row1 = mysqli_fetch_assoc($q3)) {
                                echo $row1["between_places"];
                            ?>
                                <br>Arrival date <?php echo $row1["Arrival_dt"]; ?> to Leaving date <?php echo $row1["Leaving_dt"]; ?>
                            <?php } ?><br>
                            Destination :
                            <?php
                            $s3 = "SELECT * from package where package_id=$id";
                            $q3 = mysqli_query($conn, $s3);
                            while ($row1 = mysqli_fetch_assoc($q3)) {
                                echo $row1["package_destination"];

                            ?><br>
                                </p>
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
                            <?php }
                            } ?>
                            <div class="pack-price">
                                <h3>
                                    ₹
                                    <?php
                                    $s4 = "SELECT package_price from package where package_id=$id";
                                    $q4 = mysqli_query($conn, $s4);
                                    while ($row1 = mysqli_fetch_assoc($q4)) {
                                        echo $row1["package_price"];
                                    }
                                    ?>
                                    <span>/ day</span>
                                </h3>
                            </div>
                            <form method="post" action="offers.php">
                                <!-- <a href="offers.php?package_destination="> -->
                                <input type="hidden" name="source" value="<?php echo $results['package_source'] ?>">
                                <input type="hidden" name="dest" value="<?php echo $results['package_destination'] ?>">
                                <input type="hidden" name="arr" value="<?php echo $results['Arrival_dt'] ?>">
                                <input type="hidden" name="leave" value="<?php echo $results['Leaving_dt'] ?>">
                                <input type="hidden" name="img" value="<?php echo $results['package_img'] ?>">
                                <input type="hidden" name="name" value="<?php echo $results['package_name'] ?>">
                                <input type="hidden" name="cat" value="<?php echo $results['package_category'] ?>">
                                <input type="hidden" name="price" value="<?php echo $results['package_price'] ?>">
                                <button style="background-color: black; color:white; padding: 15px 20px; border-radius: 12px; display: inline; text-align: center; margin: 20px 50px; text-decoration: none;cursor: pointer;" type="submit" name="Bpackage">
                                    Book Now
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php
        }
        // }
            ?>


</body>

</html>