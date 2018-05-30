<?php
include 'db.inc.php';
session_start();

$sql = "INSERT INTO tbl_products (prod_name, prod_category,
	prod_price, prod_brand, prod_model, prod_release,
	prod_dimension, prod_displaysize, editorial_review,
	storage_locations, prod_status, prod_condition, current_stock,
	min_stock, max_stock,
	prod_description) VALUES ('".
	$_POST["prod_name"]."','".
	$_POST["prod_category"]."','".
	$_POST["prod_price"]."','".
	$_POST["prod_brand"]."','".
	$_POST["prod_model"]."','".
	$_POST["prod_release"]."','".
	$_POST["prod_dimension"]."','".
	$_POST["prod_displaysize"]."','".
	$_POST["editorial_review"]."','".
	$_POST["storage_locations"]."','".
	$_POST["prod_status"]."','".
	$_POST["prod_condition"]."','".
	$_POST["current_stock"]."','".
	$_POST["min_stock"]."','".
	$_POST["max_stock"]."','".
	$_POST["prod_description"]."')";
	$result = $conn->query($sql);

	$sql = "SELECT * FROM tbl_products ORDER BY id DESC LIMIT 1";
	$result = $conn->query($sql);
	$rows = $result->fetch_assoc();
	$lastid = $rows["id"];

	$target_dir = "images/";

	$target_file = $target_dir . basename($_FILES["prod_image"]["name"]);

	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["prod_image"]["tmp_name"]);
		if($check !== false) {$uploadOk = 1;} else {$uploadOk = 0;}
	}
	// Check if file already exists
	if (file_exists($target_file)) {$uploadOk = 0;}
	// Check file size
	if ($_FILES["prod_image"]["size"] > 500000) {$uploadOk = 0;}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {$uploadOk = 0;}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		//echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
	} else {
		$target_file = $target_dir.md5($current_date.$target_file).".".$imageFileType;
		if (move_uploaded_file($_FILES["prod_image"]["tmp_name"], $target_file)) {
			//echo "The file ". basename( $_FILES["prod_image"]["name"]). " has been uploaded.";
		} else {
			//echo "Sorry, there was an error uploading your file.";
		}
	}

	$sql = "UPDATE tbl_products set prod_image = '".$target_file."' where id = ".$lastid;
	$_SESSION["success"] = 1;
	$result = $conn->query($sql);
	header("Location:../viewproducts.php");
	$conn->close();


	?>
