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
if(isset($_SESSION['ID']))
{

    $id=$_SESSION['ID'];
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
                        <form method="post" action="pdf_maker.php">
                            <div class="row" style="margin-left: 8px; margin-right: 8px; ">
                                <span style="color: black;">Cardholder's name:</span>
                                <input type="text" placeholder="eg. Linda Williams" style="margin-bottom: 8px;"
                                name="cardholder" required>
                                <span style="color: black;">Card Number:</span>
                                <input type="text" placeholder="eg. 0125-6780-4567-9909" pattern="([0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4})" style="margin-bottom: 8px;"
                                name="cardnumber" required>
                                <div class="col-4"><span>Expiry date:</span>
                                    <input type="date" placeholder="MM/YY" pattern="([0-9]{2}/[0-9]{2})" min="<?php echo date("Y-m-d");?>" required> <br>
                                </div>
                                <div class="col-4"><span>CVV:</span>
                                    <input type="text" id="cvv" placeholder="eg. 444" maxlength="3" minlength="3" required> <br>
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
                        <input type="hidden" name="pack_id" value="<?php  echo $row['package_id'];  ?>">
                            <div class="col-6 align-self-center"><img
                                    style="height: 150px; width: auto; border-radius: 1rem;" class="img-fluid"
                                    src="<?php echo $row['package_img']; ?>"></div>
                            <div class="col-6">
                                <div class="row text-muted" style="font-size:larger;">
                                    <b><?php echo $_POST['pack_name']; ?></b></div>
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
                                    &nbsp;<b><?php echo $row['pack_category_name']; ?></b></div>
                                <div class="row text-muted" style="font-size: 14px;"> Adult :
                                    &nbsp;<b><?php echo $_POST['adults'];?></b>&nbsp; Children :&nbsp;<b>
                                        <?php echo $_POST['children'];?></b> </div>
                                        <input type="hidden" name='adults' value="<?php echo $_POST['adults'];?>">
                                        <input type="hidden" name='children' value="<?php echo $_POST['children'];?>">
                                <div class="row text-muted" style="font-size: 14px;"> Arrival Date : 
                                    &nbsp;<b><?php echo $_POST['arr1'];?></b>Leaving Date :&nbsp;<b>
                                       <?php echo $_POST['leave1'];?></b>

                                    <div class="row text-muted" style="font-size: 14px;">
                                    <input type="hidden" name="arr1" value="<?php echo $_POST['arr1'];?>">
                                    <input type="hidden" name="leave1" value="<?php echo $_POST['leave1'];?>"> 
                                </div> </div>
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
                                    if($row['pack_category_name']=='Specials'){
                                        $discount =50;
                                        ?>50 ₹
                                <?php }else{ $discount =0;?>NA
                                    <?php }?>
                                </div>
                            </div>
                            <div class="row lower">
                                <div class="col text-left"><b>Total to pay</b></div>
                                <div class="col text-right"><b><?php echo $price=$adult +$Children-$discount; ?> ₹</b></div>
                                <input type="hidden" name='price' value="<?php echo $price;?>">
                                <input type="hidden" name="discount" value="<?php echo $discount;?>">
                        </div>

                        <button type="submit" class="btn1" name="d_pay" >Make Payment</button>
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
<?php }}else{
    header('location:index.php');
} ?>

<?php 
if(isset($_SESSION['ID']))
{
    // include("config.php");
    $id=$_SESSION['ID'];
    // $pack_id=$_COOKIE['packid'];
    if(isset($_POST['book']))
    {
        // $name11=$_POST['pack_name'];
        // $adults=$_POST['adults'];
        // $children=$_POST['children'];
        // setcookie("adults",$adults,time()+3600,"/");
        // setcookie("children",$children,time()+3600,"/");
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
                        <form method="post" action="pdf_maker.php">
                            <div class="row" style="margin-left: 8px; margin-right: 8px; ">
                                <span style="color: black;">Cardholder's name:</span>
                                <input type="text" placeholder="eg. Linda Williams" style="margin-bottom: 8px;"
                                    name="cardholder" required>
                                <span style="color: black;">Card Number:</span>
                                <input type="text" placeholder="eg. 0125 6780 4567 9909" style="margin-bottom: 8px;"
                                    name="cardnumber" required>
                                <div class="col-4"><span>Expiry date:</span>
                                    <input type="date" placeholder="YY/MM" required> <br>
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
                        <input type="hidden" name="pack_id" value="<?php  echo $row['package_id'];  ?>">
                            <div class="col-6 align-self-center"><img
                                    style="height: 150px; width: auto; border-radius: 1rem;" class="img-fluid"
                                    src="<?php echo $_POST['pack_img']; ?>"></div>
                            <div class="col-6">
                            <input type="hidden" name="pack_id" value="<?php  echo $_POST['pack_id'];  ?>">
                                <div class="row text-muted" style="font-size:larger;">
                                    <b><?php echo $_POST['pack_name']; ?></b>
                                </div>
                                <div class="row text-muted" style="font-size: 14px;"><b>Source : &nbsp;</b><?php 
                                    $str= $_POST['source']; 
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
                                    &nbsp;<b><?php $adults=$_POST['adults']; echo $_POST['adults'];?></b>&nbsp; Children :&nbsp;<b>
                                        <?php $children=$_POST['children']; echo $_POST['children'];?></b> </div>
                                        <input type="hidden" name='adults' value="<?php echo $_POST['adults'];?>">
                                        <input type="hidden" name='children' value="<?php echo $_POST['children'];?>">
                                <div class="row text-muted" style="font-size: 14px;"> Arrival Date : 
                                    &nbsp;<b><?php echo $_POST['arr'];?></b>Leaving Date :&nbsp;<b>
                                       <?php echo $_POST['leave'];?></b>
                                    <div class="row text-muted" style="font-size: 14px;">
                                    <input type="hidden" name="arr" value="<?php echo $_POST['arr'];?>">
                                    <input type="hidden" name="leave" value="<?php echo $_POST['leave'];?>">  
                                </div></div>
                                <div class="row text-muted" style="font-size: 14px;"><b>Price :
                                        <?php echo $_POST['pack_price'];?>₹ </b></div>
                            </div>
                        </div>

                        <hr>
                        <div class="row lower">
                            <div class="col text-left">Subtotal</div>
                            <div class="col text-right" style="text-align: left;">Adult:
                                <?php $adult_price= $_POST['pack_price'] * $adults; echo $adult_price; ?> ₹ <br>Children:
                                <?php $children_price = $_POST['pack_price']/2 * $children; echo $children_price; ?> ₹
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
                            <div class="col text-right"><b><?php echo $price=$adult_price +$children_price-$discount; ?> ₹</b>
                            <input type="hidden" name="price" value="<?php echo $price;?>">
                            <input type="hidden" name="discount" value="<?php echo $discount;?>">
                        </div>
                        </div>

                        <button type="submit" class="btn1" name="payment">Make Payment</button>
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
<?php } }else{
    header('location:index.php');
}?>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</html>