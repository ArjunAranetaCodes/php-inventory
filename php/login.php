<?php
session_start();
include "userfunctions.php";

if($_POST){
	$username = $_POST["username"];
	$password = $_POST["password"];
	if(!empty($_POST["username"]) && !empty($_POST["password"])){
    //function inside userfunctions
		loginUser($username, $password);
	}else{
		loginUser($username, $password);
	}
}else{
	header("Location:../index.php");
}
?>
