<!DOCTYPE html>
<html lang="en">
    <?php
        ob_start();
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="/Tours4Real/img/logo.png">
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
            font-size: 16px;
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
            background: #342D7E;
            border-radius: 50%;
            margin: 0 7px;
            cursor: pointer;
        }

        section .contentBx .formBx .sci li:hover {
            background: black;

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
    <title>Admin Sign-in</title>
</head>

<body>
    <?php
    include("connection.php");
     if(isset($_POST['sub']))
     {
         $uname = $_POST['uname'];
         $pass = $_POST['pass'];
         if($uname=='admin')
         {
            $sql="SELECT user_id from registration where username='$uname' AND password='$pass' AND status=0";
            $result=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($result);
            if(mysqli_num_rows($result)==1)
            {
                $_SESSION['adminid']=$row['user_id'];
                header('location:dashboard.php'); 
            }
            else{
                echo '<script>alert("Administrator Username of Password is invalid")</script>';
            }
         }
         else{
            echo '<script>alert("Please enter administrator credentials")</script>';
        }
     }
    ?>
    <section>
        <div class="imgBx">
            <img src="/Tours4Real_Final/img/4.jpg" alt="">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2 style="color: #342D7E;">Admin Sign-in</h2>
                <form action="" method="POST">
                    <div class="inputBx">
                        <span>Username</span>
                        <input type="text" name="uname">
                    </div>
                    <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="pass">
                    </div>
                    <!-- <div class="remember">
                        <label><input type="checkbox"> Remember me</label>
                    </div> -->
                    <div class="inputBx">
                        <input type="submit" name="sub"value="Sign-in" style="background-color: #342D7E;">
                    </div>
                    <!-- <div class="inputBx">
                        <a href="index.php">
                            <input type="button" value="Back" title="Back" style="color: white; background-color: black; cursor: pointer;">
                        </a>
                    </div> -->
                    <!-- <div class="inputBx">
                        <p>Don't have an account? <a href="register_new.php">Register Now</a></p>
                    </div> -->
                </form>
                <!-- <h3>Sign-in with social media</h3>
                <ul class="sci">
                    <li><img src="img/google-fill.png" alt="" onclick="login()"></li>
                    <li><img src="img/facebook-fill.png" alt=""></li>
                    <li><img src="img/twitter-fill.png"></li>
                </ul> -->
            </div>
        </div>
    </section>
</body>

</html>