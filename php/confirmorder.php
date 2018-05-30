<?php
include 'db.inc.php';
session_start();

$sql = "SELECT * FROM tbl_vouchers ORDER BY id DESC";
$result = $conn->query($sql);
$row = $result->fetch_array();
$newvoucher = $row[0] + 1;
$voucher = "LANZ".$newvoucher;

$sql = "INSERT INTO tbl_vouchers (voucher) VALUES ('".$voucher."')";
$result = $conn->query($sql);

$sql = "UPDATE tbl_cart SET modeofpay = '".$_POST["modeofpay"]."', ".
" timestamp = '".$current_date2."', ".
" municipality = '".$_POST["municipality"]."', ".
" address = '".$_POST["address"]."', ".
" voucher = '".$voucher."' ".
	" where username = '".$_SESSION["cartuser"]."' and status is null";
$result = $conn->query($sql);

$sql = "SELECT * FROM tbl_accounts where username = '".$_SESSION["cartuser"]."'";
$result = $conn->query($sql);
$row = $result->fetch_array();
$email = $row["email"];

$_SESSION["success"] = "";

if($_POST["modeofpay"] == "Paypal"){
	$to = $email;
	$email_subject = "Lanz Furniture Email Verification";
	$email_body = "Please Copy and Paste link to verify: ".'"http://onlinedbfree.website/onlineinv/mycart.php?voucher='.$voucher.'"';
	$email_body .= " \n\nYou have received a link for paypal payment. Click the link.\n\n";
	$headers = "From: lanzfurniture@lanzfurniture.website" . "\r\n" .
	"CC: lanzfurniture@lanzfurniture.website";
	mail($to,$email_subject,$email_body,$headers);
  echo '<script type="text/javascript">alert("Order has been sent! Please check your email.");window.location="../index.php";</script>';
}else{
  echo '<script type="text/javascript">alert("Order has been sent! Please wait for admin SMS confirmation.");window.location="../index.php";</script>';
}
//end of email send

//header("Location:../index.php");

?>
