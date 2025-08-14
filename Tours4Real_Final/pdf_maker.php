<html>
    <head>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <body>

<?php
require 'config.php';
include_once 'TCPDF-main/tcpdf.php';
if((isset($_POST['payment']) || isset($_POST['d_pay'])) && isset($_SESSION['ID']))
{

if (isset($_POST['payment'])) {
    $id = $_SESSION['ID'];
    $user_id = $id;
    $pack_id = $_POST['pack_id'];
    $ad = $_POST['adults'];
    $ch = $_POST['children'];
    $c_holder = $_POST['cardholder'];
    $c_num = $_POST['cardnumber'];
    $total_price = $_POST['price'];
    $dis = $_POST['discount'];
    $arr=$_POST['arr'];
    $leave=$_POST['leave'];

    $sql = "INSERT INTO booking(user_id,package_id,adults,childrens,card_holder,card_no,total_price,discount,Arrival_DT,Leaving_DT) values($user_id,$pack_id,$ad,$ch,'$c_holder','$c_num','$total_price','$dis','$arr','$leave')";
    $query = mysqli_query($conn, $sql);
    if($query){
        // header('location:index.php');
        echo "<script>alert('Your package is booked..!')
        window.location.replace('offers.php');</script>";
    }
    else{
        echo "<script>alert('Your Payment has been Cancelled..!')
        window.location.replace('offers.php');</script>";
    }
    // $MST_ID=$_GET['MST_ID'];
        // header('location : offers.php');
        // echo "<script>alert('hello')</script>";

}
if (isset($_POST['d_pay'])) {
    $id = $_SESSION['ID'];
    $user_id = $id;
    $pack_id = $_POST['pack_id'];
    $ad = $_POST['adults'];
    $ch = $_POST['children'];
    $c_holder = $_POST['cardholder'];
    $c_num = $_POST['cardnumber'];
    $total_price = $_POST['price'];
    $dis = $_POST['discount'];
    $arr=$_POST['arr1'];
    $leave=$_POST['leave1'];

    $sql = "INSERT INTO booking(user_id,package_id,adults,childrens,card_holder,card_no,total_price,discount,Arrival_DT,Leaving_DT) values($user_id,$pack_id,$ad,$ch,'$c_holder','$c_num','$total_price','$dis','$arr','$leave')";
    $query = mysqli_query($conn, $sql);
    if($query){
        echo "<script>alert('Your package is booked..!')
        window.location.replace('offers.php');</script>";
    }
    else{
        echo "<script>alert('Your Payment has been Cancelled..!')
        window.location.replace('offers.php');</script>";
    }
// $MST_ID=$_GET['MST_ID'];
    

}

if (isset($_POST['view']) or isset($_POST['Download'])) 
{
    $id = $_SESSION['ID'];
    $user_id = $id;
    
    // if($query){
    //     echo '<script>alert("Your package is booked")</script>';
    //     header('location:index.php');
    // }
    // else{
    //     echo mysqli_error($conn);
    //     header('location:package.php');
    //     echo '<script>alert("Your package is not booked")</script>';
    // }
// $MST_ID=$_GET['MST_ID'];
    $packid = $_POST['pack_id'];
    echo $id;
    echo $packid;
    $bookid = $_POST['book_id'];
    echo $bookid;

    $inv_mst_query = "SELECT p1.package_name, p1.pack_category_name, p1.package_price, p1.package_source, p1.package_destination, r1.username, r1.email, b1.Adults, b1.childrens, b1.total_price, b1.discount, b1.book_date, b1.Arrival_DT, b1.Leaving_DT, b1.cancel FROM package p1, registration r1 , booking b1 WHERE b1.book_id=$bookid AND r1.user_id=$id AND p1.package_id=$packid";

    $inv_mst_results = mysqli_query($conn, $inv_mst_query);

    $count = mysqli_num_rows($inv_mst_results);
    echo "hello";
    if ($count > 0) {
        $inv_mst_data_row = mysqli_fetch_array($inv_mst_results, MYSQLI_ASSOC);

        //----- Code for generate pdf
        $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        //$pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");
        $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
        $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        $pdf->SetDefaultMonospacedFont('helvetica');
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        $pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->SetAutoPageBreak(true, 10);
        $pdf->SetFont('helvetica', '', 12);
        $pdf->AddPage(); //default A4
        //$pdf->AddPage('P','A5'); //when you require custome page size

        $content = '';

        $content .= '
	<style type="text/css">
	body{
	font-size:12px;
	line-height:24px;
	font-family:"Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
	color:#000;
	}
	</style>
	<table cellpadding="0" cellspacing="0" style="border:1px solid #ddc;width:100%;">
	<table style="width:100%;" >
	<tr><td colspan="2">&nbsp;</td></tr> 
	<tr><td align="left"><img src="img/logo-final-removebg-preview-removebg-preview.jpg" style="color: aqua;height: 45px; width: 105px"; 
    alt=""></td><td align="right" colspan="2"><img src="img/qrcode_localhost.jpg" style="color: aqua;height: 90px; width: 125px"
    alt=""></td></tr>
    
	<tr><td colspan="2" align="center"><b>Tours4Real PVT. LTD.</b></td></tr>
	<tr><td colspan="2" align="center"><b>CONTACT: +91 97979  97979</b></td></tr>
	<tr><td colspan="2"><b>Customer Name: ' . $inv_mst_data_row['username'] . ' </b></td></tr>
	<tr><td><b>Booking Date : ' . $inv_mst_data_row['book_date'] . '</b> </td> <td align="right"><b>Email Address : ' . $inv_mst_data_row['email'] . '</b></td> </tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td colspan="2" align="center"><b><br>INVOICE<br></b></td></tr>
	<tr class="heading" style="background:#eee;border-bottom:1px solid #ddd;font-weight:bold;">
		<td>
			Package Name : ' . $inv_mst_data_row['package_name'] . '
		</td>
		<td align="right">

		</td>
	</tr>

	<tr>
		<td class="heading" style="background:#eee;font-weight:bold;">
			Category : ' . $inv_mst_data_row['pack_category_name'] . '
		</td>
	</tr>

	<tr class="heading" style="background:#eee;border-bottom:1px solid #ddd;font-weight:bold;">
		<td>
		Total People : ' . $inv_mst_data_row['Adults'] . ' Adults + ' . $inv_mst_data_row['childrens'] . ' Children
		</td>
	</tr>

	<tr class="heading" style="background:#eee;border-bottom:1px solid #ddd;font-weight:bold;">
		<td>
		Starting Date : ' . $inv_mst_data_row['Arrival_DT'] . '
		</td>
	</tr>

	<tr class="heading" style="background:#eee;border-bottom:1px solid #ddd;font-weight:bold;">
		<td>
		Ending Date : ' . $inv_mst_data_row['Leaving_DT'] . '
		</td>
	</tr>

	<tr class="heading" style="background:#eee;border-bottom:1px solid #ddd;font-weight:bold;">
		<td>
		Source : ' . $inv_mst_data_row['package_source'] . '
		</td>
	</tr>

	<tr class="heading" style="background:#eee;border-bottom:1px solid #ddd;font-weight:bold;">
		<td>
		Destination : ' . $inv_mst_data_row['package_destination'] . '
		</td>
	</tr>

	';
        // $total=0;
        // $inv_det_query = "SELECT T2.PRODUCT_NAME, T2.AMOUNT FROM INVOICE_DET T2 WHERE T2.MST_ID='".$MST_ID."' ";
        // $inv_det_results = mysqli_query($con,$inv_det_query);
        // while($inv_det_data_row = mysqli_fetch_array($inv_det_results, MYSQLI_ASSOC))
        // {
        // $content .= '
        //   <tr class="itemrows">
        //       <td>
        //           <b>'.$inv_det_data_row['PRODUCT_NAME'].'</b>
        //           <br>
        //           <i>Write any remarks</i>
        //       </td>
        //       <td align="right"><b>
        //           '.$inv_det_data_row['AMOUNT'].'
        //       </b></td>
        //   </tr>';
        // $total=$total+$inv_det_data_row['AMOUNT'];
        // }
        $content .= '<tr class="total"><td colspan="2" align="right">------------------------</td></tr>
		<tr><td colspan="2" align="right"><b> Discount : Rs. ' . $inv_mst_data_row['discount'] . '</b></td></tr>
		<tr><td colspan="2" align="right"><b> AMOUNT : Rs. ' . $inv_mst_data_row['total_price'] . '</b></td></tr>
		<tr><td colspan="2" align="right">------------------------</td></tr>';
        if($inv_mst_data_row['cancel']==1){
            $content .= '<tr class="total">
		    <tr><td colspan="2" align="right"><b> Refundable Amount : Rs. ' . $inv_mst_data_row['total_price']-$inv_mst_data_row['total_price']*20/100 . '</b></td></tr>
		    <tr><td colspan="2" align="right">------------------------</td></tr>';
        }
        $content .='<tr><td colspan="2" align="right"><b>PAYMENT MODE: ONLINE </b></td></tr>
	<tr><td colspan="2">&nbsp;</td></tr>
	<tr><td colspan="2" align="center"><b>THANK YOU ! VISIT AGAIN</b></td></tr>
	<tr><td colspan="2">&nbsp;</td></tr>
	</table>
</table>';
        $pdf->writeHTML($content);

// $file_location = "/home/fbi1glfa0j7p/public_html/examples/generate_pdf/uploads/";
//add your full path of your server
        $file_location = "/opt/xampp/htdocs/examples/generate_pdf/uploads/"; //for local xampp server

        $datetime = date('dmY_hms');
        $file_name = "INV_" . $datetime . ".pdf";
        ob_end_clean();

        if (isset($_POST['view'])) {
            ob_end_clean();

            $pdf->Output($file_name, 'I'); // I means Inline view
        }
		if(isset($_POST['Download']))
		{
            ob_end_clean();
			$pdf->Output($file_name, 'D');
		}
// else if($_GET['ACTION']=='DOWNLOAD')
// {
//     $pdf->Output($file_name, 'D'); // D means download
// }
// else if($_GET['ACTION']=='UPLOAD')
// {
// $pdf->Output($file_location.$file_name, 'F'); // F means upload PDF file on some folder
// echo "Upload successfully!!";
// }

//----- End Code for generate pdf
    } else {
        echo 'Record not found for PDF.';
    }

}
}
else{
    header("location:index.php");
}
// admin reciept
?>

</body>
</html>
