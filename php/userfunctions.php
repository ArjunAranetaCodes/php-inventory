<?php
  include "validationfunctions.php";
  include "Database.php";

  if(!isset($_SESSION["cartuser"])){
   $_SESSION["cartuser"] = null;
  }

  function loginUser($username, $password){
    if($username == ""){
      $_SESSION["error"] = 2; //no username
      header("Location:../index.php");
    }elseif($password == ""){
      $_SESSION["error"] = 3; //no password
      header("Location:../index.php");
    }else{
      $newDB = new Database();
      $sql = "SELECT * FROM tbl_accounts where username = '".$_POST["username"]."' and password = '".$_POST["password"]."' and status = 'Verified'";
      $result = $newDB->conn->query($sql);

      if ($result->num_rows > 0) {
      	$row = $result->fetch_assoc();
      	$_SESSION["cartuser"] = $row["username"];
      	$_SESSION["privilege"] = $row["privilege"];
        $_SESSION["success"] = 1;
      	header("Location:../index.php");
      } else {
      	$_SESSION["error"] = 1;
      	header("Location:../index.php");
      }
      $conn->close();
    }
  }

  function registerUser($username, $password, $firstname, $lastname, $contactnum, $email, $address){
    if($username == ""){
      $_SESSION["error"] = 2; //no username
      header("Location:../index.php");
    }elseif($password == ""){
      $_SESSION["error"] = 3; //no password
      header("Location:../index.php");
    }else{
      $newDB = new Database();
      $sql = "INSERT INTO tbl_accounts (username, password, firstname, lastname, contactnum, email, address) VALUES ('".
       $username."','".$password."','".$firstname."','".$lastname."','".$contactnum."','".$email."','".$address."')";
      $result = $newDB->conn->query($sql);

      $message = "Lanz Furniture Account Verification";

      $to = $email;
      $email_subject = "Lanz Furniture Email Verification";
      $email_body = "Please Copy and Paste link to verify: ".'"http://onlinedbfree.website/onlineinv/php/updateverification.php?email='.$email.'" \n\n';
      $email_body .= "You have received a verification email.\n\n"."Here are the details:\n\nUsername: ".$username."\n\nEmail: ".$email."\n\nMessage:\n".$message;
      $headers = "From: lanzfurniture@lanzfurniture.website" . "\r\n" .
      "CC: lanzfurniture@lanzfurniture.website";
      mail($to,$email_subject,$email_body,$headers);

      echo '<script type="text/javascript">alert("Please check email for verification!");window.location="../index.php";</script>';
      $newDB->conn->close();
      //header("Location:../index.php");
    }
  }

  function logOut(){
    $_SESSION["success"] = 2; //successful logOut
    $_SESSION["cartuser"] = null;
  	header("Location:../index.php");
  }

  function getLoggedInUser(){
    return $_SESSION["cartuser"];
  }

  function checkIfLoggedIn(){
    if(isset($_SESSION["cartuser"]) && !empty($_SESSION["cartuser"])){
      return true;
    }else{
      return false;
    }
  }

  function getDBnUser(){
    $newDB = new Database();
    return $newDB->getBDUsername();
  }
?>
