<?php
include 'db.inc.php'; //database connection
session_start();

//gets the email address from the email
$email = $_GET["email"];

//query for updating information of the account
$sql = "UPDATE tbl_accounts set status = 'Verified' WHERE email = '".$email."'";
$result = $conn->query($sql);
echo '<script type="text/javascript">alert("Account Verified!");window.location = "../index.php";</script>';
$conn->close();
?>
