<?php
session_start();
include "userfunctions.php";

if($_POST){
	$username = $_POST["username"];
	$password = $_POST["password"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$contactnum = $_POST["contactnum"];
	$email = $_POST["email"];
	$address = $_POST["address"];

	if(!empty($_POST["username"]) && !empty($_POST["password"])){
		registerUser($username, $password, $firstname, $lastname, $contactnum, $email, $address);
	}else{
		registerUser($username, $password, $firstname, $lastname, $contactnum, $email, $address);
	}
}else{
	header("Location:../index.php");
}
?>
