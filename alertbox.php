<?php
if(!isset($_SESSION["error"])){
  $_SESSION["error"] = "";
}

if(!isset($_SESSION["success"])){
  $_SESSION["success"] = "";
}

if($_SESSION["error"] == 1){
  echo '
  <div class="alertbox" style="position:absolute;top:0px;left:0px;width:100%;text-align:center;
  font-size:20px;">
    <div class="alert alert-error" stlyle="text-align:center;">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>Error!</strong> Wrong Combination of username and password.
    </div>
  </div>';
}
if($_SESSION["error"] == 2){
  echo '
  <div class="alertbox" style="position:absolute;top:0px;left:0px;width:100%;text-align:center;
  font-size:20px;">
    <div class="alert alert-error" stlyle="text-align:center;">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>Error!</strong> Please fill in username.
    </div>
  </div>';
}
if($_SESSION["error"] == 3){
  echo '
  <div class="alertbox" style="position:absolute;top:0px;left:0px;width:100%;text-align:center;
  font-size:20px;">
    <div class="alert alert-error" stlyle="text-align:center;">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>Error!</strong> Please fill in password.
    </div>
  </div>';
}
if($_SESSION["error"] == 5){
  echo '
  <div class="alertbox" style="position:absolute;top:0px;left:0px;width:100%;text-align:center;
  font-size:20px;">
    <div class="alert alert-error" stlyle="text-align:center;">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>Error!</strong> You need to be logged in.
    </div>
  </div>';
}

if($_SESSION["success"] == 1){
  echo '
  <div class="alertbox" style="position:absolute;top:0px;left:0px;width:100%;text-align:center;
  font-size:20px;">
    <div class="alert alert-success" stlyle="text-align:center;">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>Success!</strong> Login Successful.
    </div>
  </div>';
}

if($_SESSION["success"] == 2){
  echo '
  <div class="alertbox" style="position:absolute;top:0px;left:0px;width:100%;text-align:center;
  font-size:20px;">
    <div class="alert alert-success" stlyle="text-align:center;">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>Success!</strong> Logout Successful.
    </div>
  </div>';
}

$_SESSION["error"] = "";
$_SESSION["success"] = "";
?>
