<!DOCTYPE html>
<html lang="en">
    <?php
        include("config.php");
        if(isset($_SESSION['ID']))
        {
            $id=$_SESSION['ID'];
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
                $f_name=$_POST['fname'];
                $u_name=$_POST['uname'];
                $mob=$_POST['mob'];
                $email=$_POST['email'];
                $pass=$_POST['pass'];
                $rpass=$_POST['repass'];
                if($pass==$rpass)
                {
                    $sql="UPDATE registration SET fullname='$f_name', username='$u_name', password='$pass', email='$email',mobile='$mob' where user_id=$id";
                    $result=mysqli_query($conn,$sql);
                    header('location:index.php');
                }
                else{
                    '<script>alert("Password did not match")</script>';
                }
            }
            if(isset($_POST['delete']))
            {
                $sql="UPDATE registration SET status=1 where user_id=$id";
                $result=mysqli_query($conn,$sql);
                header('location:logout.php');
            }
        }
        else{
            header('location:login.php');
        }
    ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/login.css"> -->



    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        section {
            position: relative;
            width: 100%;
            height: 100vh;
            display: flex;
        }

        section .imgBx {
            position: relative;
            width: 50%;
            height: 100%;
        }

        section .imgBx:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(225deg, #e92e63, #03a9f4);
            z-index: 1;
            mix-blend-mode: screen;
        }

        section .imgBx img {
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        section .contentBx {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50%;
            height: 100%;
        }

        section .contentBx .formBx {
            width: 50%;
        }

        section .contentBx .formBx h2 {
            color: #607d8b;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 20px;
            border-bottom: 4px solid #ff4584;
            display: inline-block;
            letter-spacing: 1px;
        }

        section .contentBx .formBx .inputBx {
            margin-bottom: 20px;
        }

        section .contentBx .formBx .inputBx span {
            font-size: 16px;
            margin-bottom: 5px;
            display: inline-block;
            color: #607d8b;
            font-weight: 300;
            font-size: 16px;
            letter-spacing: 1px;
        }

        section .contentBx .formBx .inputBx input {
            width: 100%;
            padding: 10px 20px;
            outline: none;
            font-weight: 400;
            border: 1px solid #607d8b;
            font-size: 10px;
            letter-spacing: 1px;
            color: #607d8b;
            background: transparent;
            border-radius: 30px;
        }

        section .contentBx .formBx .inputBx input[type="submit"] {
            background: #ff4584;
            color: #fff;
            overflow: none;
            border: none;
            font-weight: 500;
            cursor: pointer;
        }

        section .contentBx .formBx .inputBx input[type="submit"]:hover {
            background: #f53677;
        }

        section .contentBx .formBx .remember {
            margin-bottom: px;
            color: #607d8b;
            font-weight: 400;
            font-size: 14px;
        }

        section .contentBx .formBx .inputBx p {
            color: #607d8b;
        }

        section .contentBx .formBx .inputBx p a {
            color: #ff4584;
        }

        section .contentBx .formBx h3 {
            color: #607d8b;
            text-align: center;
            margin: 80px 0 10px;
            font-weight: 500;
        }

        section .contentBx .formBx .sci {
            display: flex;
            justify-content: center;
            align-items: center;

        }

        section .contentBx .formBx .sci li {
            list-style: none;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #607d8b;
            border-radius: 50%;
            margin: 0 7px;
            cursor: pointer;
        }

        section .contentBx .formBx .sci li:hover {
            background: #ff4584;

        }

        section .contentBx .formBx .sci li img {
            transform: scale(1);
            filter: invert(1);
        }

        @media(max-width:768px) {
            section .imgBx {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

            section .contentBx {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 100%;
                z-index: 1;
            }

            section .contentBx .formBx {
                width: 100%;
                padding: 40px;
                background: rgb(255 255 255 / 0.9);
                margin: 50px;
            }

            section .contentBx .formBx h3 {
                color: #607d8b;
                text-align: center;
                margin: 30px 0 10px;
                font-weight: 500;
            }
        }
    </style>
    <title>Update Info</title>
</head>

<body>
    <section>
        <div class="imgBx">
            <img src="img/2.jpg" alt="">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2 style="margin-top:20px;">Update Information</h2>
                <?php
                    $sql="SELECT * FROM registration where user_id=$id";
                    $result=mysqli_query($conn,$sql);
                    $row=mysqli_fetch_assoc($result);
                ?>
                <form action="" method="POST">
                    <div class="inputBx">
                        <span>Full Name</span>
                        <input type="text" name="fname" value="<?php echo $row['fullname'];?>" required>
                    </div>
                    <div class="inputBx">
                        <span>User Name</span>
                        <input type="text" name="uname" value="<?php echo $row['username'];?>" required>
                    </div>
                    <div class="inputBx">
                        <span>Phone no</span>
                        <input type="tel" name="mob" value="<?php echo $row['mobile'];?>" required>
                    </div>
                    <div class="inputBx">
                        <span>Email</span>
                        <input type="email" name="email" value="<?php echo $row['email'];?>" required>
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="pass" value="<?php echo $row['password'];?>" required>
                    </div>
                    <div class="inputBx">
                        <span>Repeat Password</span>
                        <input type="password" name="repass" value="<?php echo $row['password'];?>" required>
                    </div>
                    <!-- <div class="remember">
                        <label><input type="checkbox"> Remember me</label>
                    </div> -->
                    <div class="inputBx">
                        <input type="submit" name="submit" value="Update">
                    </div>
                    <div class="inputBx">
                        <input type="submit" name="delete" value="Delete Account">
                    </div>
                    <div class="inputBx">
                        <a href="index.php">
                            <input type="button" value="Back" title="Back" style="color: white; background-color: black; cursor: pointer;">
                        </a>
                    </div>
                </form>
                <!-- <h3>Sign-in with social media</h3> -->
                <!-- <ul class="sci">
                    <li><img src="img/google-fill.png" alt="" onclick="login()"></li>
                    <li><img src="img/facebook-fill.png" alt=""></li>
                    <li><img src="img/twitter-fill.png"></li>
                </ul> -->
            </div>
        </div>
    </section>
</body>

</html>