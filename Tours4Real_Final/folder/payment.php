<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/payment.css">
</head>
<?php 
include('config.php');
    if(isset($_POST['book1'])){
        $name11=$_POST['pack_name'];
        $qu11="select * from package where package_name='$name11'";
        $res11=mysqli_query($conn,$qu11);
        while($row=mysqli_fetch_assoc($res11)){ ?>

<input type="hidden" name="source" value="">
<input type="hidden" name="dest" value="">
<input type="hidden" name="pack_img" value="">
<input type="hidden" name="pack_cat" value="">
<input type="hidden" name="pack_price" value="">
<input type="hidden" name="arr" value="">
<input type="hidden" name="leave" value="">

<body>

    <div class="card" style="border-radius: 2rem; border: solid black;">
        <div class="card-top " style="border: 1px solid;  border-radius: 2rem 2rem 1px 1px;">
            <a href="offers.php" class="text" style="color: blue;"> Back to booking</a>
            <h3 id="logo">Tour4Real</h3>
        </div>
        <div class="card-body" style="border-radius: 2rem; ">

            <div class="row">
                <div class="col-md-7">
                    <div class="left border">
                        <div class="row">
                            <span class="header">Payment</span>

                            <div class="icons">
                                <img src="https://img.icons8.com/color/48/000000/visa.png" />
                                <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" />
                                <img src="https://img.icons8.com/color/48/000000/maestro.png" />
                            </div>
                        </div>
                        <form method="post" action="">
                            <div class="row" style="margin-left: 8px; margin-right: 8px; ">
                                <span style="color: black;">Cardholder's name:</span>
                                <input type="text" placeholder="eg. Linda Williams" style="margin-bottom: 8px;"
                                    required>
                                <span style="color: black;">Card Number:</span>
                                <input type="text" placeholder="eg. 0125 6780 4567 9909" style="margin-bottom: 8px;"
                                    required>
                                <div class="col-4"><span>Expiry date:</span>
                                    <input type="text" placeholder="YY/MM" required> <br>
                                </div>
                                <div class="col-4"><span>CVV:</span>
                                    <input type="text" id="cvv" placeholder="eg. 444" required> <br>
                                </div>
                            </div><br>
                            <input type="checkbox" id="save_card" class="align-left" checked disabled>
                            <label for="save_card">Terms & condition Apply *</label>

                    </div>
                </div>
                <div class="col-md-5">
                    <div class="right border">
                        <div class="header">Booking Details</div>
                        <br>
                        <div class="row item">
                            <div class="col-6 align-self-center"><img
                                    style="height: 150px; width: auto; border-radius: 1rem;" class="img-fluid"
                                    src="<?php echo $row['package_img']; ?>"></div>
                            <div class="col-6">
                                <div class="row text-muted" style="font-size:larger;">
                                    <b><?php echo $_POST['pack_name']; ?></b>
                                </div>
                                <div class="row text-muted" style="font-size: 14px;"> <b>Source :
                                        &nbsp;</b><?php echo $row['package_source']; ?></div>
                                <div class="row text-muted" style="font-size: 14px;"> <b>Destination : &nbsp;</b><?php 
                                    $str= $row['package_destination']; 
                                    $len = strlen($str);
                                    $c=1;
                                    $in=$len;
                                    for($i=0;$i<$len;$i++){
                                        if($str[$i]==' '){
                                            $c--;
                                            if($c==0){
                                                $in=$i;
                                                break;
                                            }
                                        }
                                    }
                                echo substr($str,0,$in);?> </div>
                                <div class="row text-muted" style="font-size: 14px;">Package category :
                                    &nbsp;<b><?php echo $row['package_category']; ?></b></div>
                                <div class="row text-muted" style="font-size: 14px;"> Adult :
                                    &nbsp;<b><?php 
                                    if(isset($_POST['pay'])){
                                        $sql="insert into booking values()";
                                    }
                                        echo $_POST['adults'];?></b>&nbsp; Children :&nbsp;<b>


                                        <?php echo $_POST['children'];?></b> </div>
                                <div class="row text-muted" style="font-size: 14px;"> <?php echo $row['Arrival_dt']; ?>
                                    <b>
                                        &nbsp;To&nbsp;</b> <?php echo $row['Leaving_dt']; ?> </div>
                                <div class="row text-muted" style="font-size: 14px;"><b>Price :
                                        <?php echo $row['package_price']; ?>₹ </b></div>
                            </div>
                        </div>

                        <hr>
                        <div class="row lower">
                            <div class="col text-left">Subtotal</div>
                            <div class="col text-right" style="text-align: left;">Adult:
                                <?php $adult=  $row['package_price'] * $_POST['adults']; echo $adult; ?> ₹ <br>Children:
                                <?php $Children = $row['package_price']/2 * $_POST['children']; echo $Children; ?> ₹
                            </div>
                        </div>
                        <div class="row lower">
                            <div class="col text-left">Discount</div>
                            <div class="col text-right">
                                <?php 
                                    if($row['package_category']=='Specials'){
                                        $discount =50;
                                ?>50 ₹
                                <?php }else{ $discount =0;?>NA
                                <?php }?>
                            </div>
                        </div>
                        <div class="row lower">
                            <div class="col text-left"><b>Total to pay</b></div>
                            <div class="col text-right"><b><?php echo $adult +$Children-$discount; ?> ₹</b></div>
                        </div>

                        <button type="submit" class="pay">Make Payment</button>
                        </form>
                        <p class="text-muted " style="font-size: small; margin-left: 10px;">Not Refundable.</p>
                    </div>
                </div>
            </div>
        </div>

        <div>
        </div>
    </div>
</body>
<?php } ?>
<?php }  ?>


<?php
        if(isset($_POST['book'])){
    ?>

<body>

    <div class="card" style="border-radius: 2rem; border: solid black;">
        <div class="card-top " style="border: 1px solid;  border-radius: 2rem 2rem 1px 1px;">
            <a href="offers.php" class="text" style="color: blue;"> Back to booking</a>
            <h3 id="logo">Tour4Real</h3>
        </div>
        <div class="card-body" style="border-radius: 2rem; ">

            <div class="row">
                <div class="col-md-7">
                    <div class="left border">
                        <div class="row">
                            <span class="header">Payment</span>

                            <div class="icons">
                                <img src="https://img.icons8.com/color/48/000000/visa.png" />
                                <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" />
                                <img src="https://img.icons8.com/color/48/000000/maestro.png" />
                            </div>
                        </div>
                        <form method="post">
                            <div class="row" style="margin-left: 8px; margin-right: 8px; ">
                                <span style="color: black;">Cardholder's name:</span>
                                <input type="text" placeholder="eg. Linda Williams" style="margin-bottom: 8px;"
                                    required>
                                <span style="color: black;">Card Number:</span>
                                <input type="text" placeholder="eg. 0125 6780 4567 9909" style="margin-bottom: 8px;"
                                    required>
                                <div class="col-4"><span>Expiry date:</span>
                                    <input type="text" placeholder="YY/MM" required> <br>
                                </div>
                                <div class="col-4"><span>CVV:</span>
                                    <input type="text" id="cvv" placeholder="eg. 444" required> <br>
                                </div>
                            </div><br>
                            <input type="checkbox" id="save_card" class="align-left" checked disabled>
                            <label for="save_card">Terms & condition Apply *</label>

                    </div>
                </div>
                <div class="col-md-5">
                    <div class="right border">
                        <div class="header">Booking Details</div>
                        <br>
                        <div class="row item">
                            <div class="col-6 align-self-center"><img
                                    style="height: 150px; width: auto; border-radius: 1rem;" class="img-fluid"
                                    src="<?php echo $_POST['pack_img']; ?>"></div>
                            <div class="col-6">
                                <div class="row text-muted" style="font-size:larger;">
                                    <b><?php echo $_POST['pack_name']; ?></b>
                                </div>
                                <div class="row text-muted" style="font-size: 14px;"> <b>Source :
                                        &nbsp;</b><?php echo $_POST['source'];?> </div>
                                <div class="row text-muted" style="font-size: 14px;"> <b>Destination : &nbsp;</b><?php 
                                    $str=$_POST['dest'];
                                    $len = strlen($str);
                                    $c=1;
                                    $in=$len;
                                    for($i=0;$i<$len;$i++){
                                        if($str[$i]==' '){
                                            $c--;
                                            if($c==0){
                                                $in=$i;
                                                break;
                                            }
                                        }
                                    }
                                echo substr($str,0,$in);?> </div>
                                <div class="row text-muted" style="font-size: 14px;">Package category :
                                    &nbsp;<b><?php echo $_POST['pack_cat']; ?></b></div>
                                <div class="row text-muted" style="font-size: 14px;"> Adult :
                                    &nbsp;<b><?php echo $_POST['adults'];?></b>&nbsp; Children :&nbsp;<b>
                                        <?php echo $_POST['children'];?></b> </div>
                                <div class="row text-muted" style="font-size: 14px;"> <?php echo $_POST['arr'];?> <b>
                                        &nbsp;To&nbsp;</b> <?php echo $_POST['leave'];?> </div>
                                <div class="row text-muted" style="font-size: 14px;"><b>Price :
                                        <?php echo $_POST['pack_price'];?>₹ </b></div>
                            </div>
                        </div>

                        <hr>
                        <div class="row lower">
                            <div class="col text-left">Subtotal</div>
                            <div class="col text-right" style="text-align: left;">Adult:
                                <?php $adult= $_POST['pack_price'] * $_POST['adults']; echo $adult; ?> ₹ <br>Children:
                                <?php $Children = $_POST['pack_price']/2 * $_POST['children']; echo $Children; ?> ₹
                            </div>
                        </div>
                        <div class="row lower">
                            <div class="col text-left">Discount</div>
                            <div class="col text-right">
                                <?php 
                                    if($_POST['pack_cat']=='Specials'){
                                        $discount = 50;
                                ?>50 ₹
                                <?php }else{ $discount =0;?>NA
                                <?php }?>
                            </div>
                        </div>
                        <div class="row lower">
                            <div class="col text-left"><b>Total to pay</b></div>
                            <div class="col text-right"><b><?php echo $adult +$Children-$discount; ?> ₹</b></div>
                        </div>

                        <button type="submit" class="btn1">Make Payment</button>
                        </form>
                        <p class="text-muted text-center">Complimentary Shipping & Returns</p>
                    </div>
                </div>
            </div>
        </div>

        <div>
        </div>
    </div>
</body>
<?php } ?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</html>