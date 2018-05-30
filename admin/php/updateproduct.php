<?php
include 'db.inc.php';
session_start();

$id = $_POST["id"];
$prod_name = $_POST["prod_name"];
$prod_category = $_POST["prod_category"];
$prod_price = $_POST["prod_price"];
$prod_brand = $_POST["prod_brand"];
$prod_model = $_POST["prod_model"];
$prod_release = $_POST["prod_release"];
$prod_dimension = $_POST["prod_dimension"];
$prod_displaysize = $_POST["prod_displaysize"];
$editorial_review = $_POST["editorial_review"];
$prod_description = $_POST["prod_description"];
$storage_locations = $_POST["storage_locations"];
$prod_status = $_POST["prod_status"];
$prod_condition = $_POST["prod_condition"];
$min_stock = $_POST["min_stock"];
$max_stock = $_POST["max_stock"];

$sql = "UPDATE tbl_products SET prod_name = '".$prod_name."' ,".
	" prod_category = '".$prod_category.
	"', prod_price = '".$prod_price.
	"', prod_brand = '".$prod_brand.
	"', prod_model = '".$prod_model.
	"', prod_release = '".$prod_release.
	"', prod_dimension = '".$prod_dimension.
	"', prod_displaysize = '".$prod_displaysize.
  "', editorial_review = '".$editorial_review.
  "', storage_locations = '".$storage_locations.
  "', prod_status = '".$prod_status.
  "', prod_condition = '".$prod_condition.
  "', min_stock = '".$min_stock.
  "', max_stock = '".$max_stock.
  "', prod_description = '".$prod_description."'".
	" where id = ".$id;
$result = $conn->query($sql);

  if($_FILES["prod_image"]["name"] != ""){
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["prod_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["prod_image"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["prod_image"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["prod_image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["prod_image"]["name"]). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }

    $sql = "UPDATE tbl_products set prod_image = '".$target_file."' where prod_name = '".$_POST["prod_name"]."'";
    $_SESSION["success"] = 1;
    $result = $conn->query($sql);
  }

header("Location:../viewproducts.php");

?>
