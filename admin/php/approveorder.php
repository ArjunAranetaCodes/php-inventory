<?php
include 'db.inc.php';
session_start();

$id = $_GET["id"];
$quantity = $_GET["quantity"];

$sql = "SELECT * FROM tbl_products where id = ".$_GET["prodid"];
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$oldquantity = $row["current_stock"];

$newquantity = $oldquantity - $quantity;

$sql = "UPDATE tbl_products SET current_stock = '".$newquantity."' ".
	" where id = ".$_GET["prodid"];
$result = $conn->query($sql);

$sql = "UPDATE tbl_cart SET status = 'Approved' ".
	" where id = ".$id;
$result = $conn->query($sql);

$prod_name = $_GET["prodname"];
$digits = rand(100,999);
$arr_post_body = array(
 "message_type" => "SEND",
 "mobile_number" => $_GET["phoneno"],
 "shortcode" => "29290201861",
 "message_id" => $digits."5678901234567890123456789abe",
 "message" => urlencode("Your order (".$prod_name.") has been approved."),
 "client_id" => "bc6860fb334f36aaff68897d0c28ab46cf78c750037066ab905b0a6aa04d51e8",
 "secret_key" => "3e7389038cce488f5c94c145bd9708df4a1443d39bae03f6397f655169bc0914"
);

$query_string = "";
foreach($arr_post_body as $key => $frow)
{
 $query_string .= '&'.$key.'='.$frow;
}

$URL = "https://post.chikka.com/smsapi/request";

$curl_handler = curl_init();
/**
* Create a new file
*/
$fp = fopen('rss.xml', 'w');
/**
* Ask cURL to write the contents to a file
*/

curl_setopt($curl_handler, CURLOPT_URL, $URL);
curl_setopt($curl_handler, CURLOPT_POST, count($arr_post_body));
curl_setopt($curl_handler, CURLOPT_POSTFIELDS, $query_string);
curl_setopt($curl_handler, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl_handler, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

curl_setopt($curl_handler, CURLOPT_FILE, $fp);

$response = curl_exec($curl_handler);
curl_close($curl_handler);

//echo $response;
//exit(0);

header("Location:../vieworders.php");

?>
