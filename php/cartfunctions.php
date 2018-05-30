<?php
  class cartfunctions{
    private $currentdb;
    private $carttotal = 0;
    private $cartcount = 0;

    function __construct(){
      $db = new Database();
      $this->currentdb = $db;
      $this->getCart();
    }

    function getCart(){
      $newcarttotal = 0;
      if(checkIfLoggedIn()){
        $sql = "SELECT SUM(quantity) FROM tbl_cart where username = '".$_SESSION["cartuser"]."' and modeofpay is null";
        $result = $this->currentdb->conn->query($sql);
        $row = $result->fetch_array();
        $cartcounter = 0;
        if($row[0] == "" || $row[0] == null){
         $cartcounter = 0;
        }else{
         $cartcounter = $row[0];
        }
        $this->setCartCount($cartcounter);

        $sql = "SELECT * FROM tbl_cart where username = '".$_SESSION["cartuser"]."' and modeofpay is null";
        $result = $this->currentdb->conn->query($sql);
        while($row = $result->fetch_array()){
          $quantity = $row["quantity"];
          $sql2 = "SELECT * FROM tbl_products where id = ".$row["item_id"];
          $result2 = $this->currentdb->conn->query($sql2);
          $row2 = $result2->fetch_assoc();
          $price = $row2["prod_price"];
          $newcarttotal = $newcarttotal + ($price * $quantity);
          $this->setCartTotal($newcarttotal);
        }
      }
    }

    function getCartByUser(){
      $totalprice = 0;
      $totaldiscount = 0;
      $totaltax = 0;
      echo '
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Product</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Update Quantity</th>
            <th>Price</th>
            <!--
            <th>Discount</th>
            <th>Tax</th>
            -->
            <th>Total</th>
          </tr>
        </thead>
        <tbody>';

        $sql = "SELECT * FROM tbl_cart where username = '".$_SESSION["cartuser"]."' and modeofpay is null";
        $result = $this->currentdb->conn->query($sql);
        while($row = $result->fetch_array()){
          $quantity = $row["quantity"];

          $sql2 = "SELECT * FROM tbl_products where id = ".$row["item_id"];
          $result2 = $this->currentdb->conn->query($sql2);
          $row2 = $result2->fetch_array();
          $price = $row2["prod_price"];
          $itemtotal = $quantity * $price;
          //$totalprice += $price;
          $totalprice += $itemtotal;
          echo '
          <tr>
            <td> <img width="60" src="admin/php/'.$row2["prod_image"].'" alt=""/></td>
            <td>'.$row2["prod_name"].'<br/>Brand : '.$row2["prod_brand"].', Model : '.$row2["prod_model"].'</td>
            <td>'.$quantity.'</td>
            <td>
              <div class="input-append">
               <!--
                <input class="span1" style="max-width:34px"
                placeholder="1" id="appendedInputButtons" size="16" type="text">
               -->
                <a class="btn btn-warning" href="php/modifycart.php?action=minus&id='.$row["id"].'"><i class="icon-minus"></i></a>
                <a class="btn btn-success" href="php/modifycart.php?action=add&id='.$row["id"].'"><i class="icon-plus"></i></a>
                <a class="btn btn-danger" href="php/modifycart.php?action=delete&id='.$row["id"].'">
                 <i class="icon-remove icon-white"></i>
                </a>
              </div>
            </td>
            <td>Php '.checkIfNumeric($row2["prod_price"]).'</td>
            <!--
            <td>Php 0.00</td>
            <td>Php 0.00</td>
            -->
            <td>Php '.checkIfNumeric($itemtotal).'</td>
          </tr>';
        }

        $totalcart = "Php ".(number_format($totalprice - ($totaldiscount + $totaltax),2));
        $totalprice = "Php ".number_format($totalprice, 2);
        //$totaldiscount = "Php ".number_format($totaldiscount, 2);
        $totaltax = "Php ".number_format($totaltax, 2);
        echo '
          <tr>
            <td colspan="5" style="text-align:right">Total Price:	</td>
            <td id="subtotal"> '.$totalprice.'</td>
          </tr>
          <!--
          <tr>
            <td colspan="5" style="text-align:right">Total Discount:	</td>
            <td> '.$totaldiscount.'</td>
          </tr>
          <tr>
            <td colspan="5" style="text-align:right">Total Tax:	</td>
            <td> '.$totaltax.'</td>
          </tr>
          -->
          <tr>
            <td colspan="5" style="text-align:right"><strong id="totallabel">TOTAL + Shipping ('.$totalprice.' + 0) </strong></td>
            <td class="label label-important" style="display:block"> <strong id="totalprice"> '.$totalcart.'</strong></td>
          </tr>
        </tbody>
      </table>';
    }

    function deleteById($id, $table){
     $sql = "DELETE FROM ".$table." where id = ".$id;
     $this->currentdb->conn->query($sql);
    }

    function addCart($id){
     $sql = "SELECT * FROM tbl_cart where id= ".$id;
     $result = $this->currentdb->conn->query($sql);
     $row = $result->fetch_array();
     $quantity = $row["quantity"] + 1;

     $sql = "UPDATE tbl_cart SET quantity = '".$quantity."' where id = ".$id;
     $this->currentdb->conn->query($sql);
    }

    function minusCart($id){
     $sql = "SELECT * FROM tbl_cart where id= ".$id;
     $result = $this->currentdb->conn->query($sql);
     $row = $result->fetch_array();
     $quantity = $row["quantity"] - 1;

     if($quantity < 1){
      $quantity = 1;
     }

     $sql = "UPDATE tbl_cart SET quantity = '".$quantity."' where id = ".$id;
     $this->currentdb->conn->query($sql);
    }

    function setCartCount($count){
      $this->cartcount = $count;
    }

    function getCartCount(){
      return $this->cartcount;
    }

    function setCartTotal($total){
      $this->carttotal = $total;
    }

    function getCartTotal(){
      return number_format($this->carttotal, 2);
    }

    function getMunicipalities(){
      $sql = "SELECT * FROM tbl_shipping";
      $result = $this->currentdb->conn->query($sql);
      while($row = $result->fetch_assoc()){
        echo '<option>'.$row["place"].' - Php '.$row["fee"].'</option>';
      }
    }

    function getProvinces(){
     $strProv = array("Metro Manila", "Abra", "Agusan del Norte", "Agusan del Sur",
     "Aklan", "Albay", "Antique","Apayao", "Aurora", "Basilan", "Bataan", "Batanes", "Batangas",
     "Benguet", "Biliran", "Bohol", "Bukidnon", "Bulacan", "Cagayan", "Camarines Norte",
     "Camarines Sur", "Camiguin", "Capiz", "Catanduanes", "Cavite", "Cebu", "Compostella Valley",
     "Cotabato", "Davao del Norte", "Davao del Sur", "Davao Oriental", "Dinagat Islands",
     "Eastern Samar", "Guimaras", "Ifugao", "Ilocos Norte", "Ilocos Sur", "Iloilo",
     "Isabela", "Kalinga", "La Union", "Laguna", "Lanao del Norte", "Lanao del Sur",
     "Leyte", "Maguindanao", "Marinduque", "Masbate", "Misamis Occidental", "Misamis Oriental",
     "Mountain Province", "Negros Occidental", "Negros Oriental", "Northern Samar", "Nueva Ecija",
     "Nueva Vizcaya", "Occidental Mindoro", "Oriental Mindoro", "Palawan", "Pampanga", "Pangasinan",
     "Quezon", "Quirino", "Rizal", "Romblon", "Samar", "Sarangani", "Siquijor", "Sorsogon",
     "South Cotabato", "Southern Leyte", "Sultan Kudarat", "Sulu", "Surigao del Norte",
     "Surigao del Sur", "Tarlac", "Tawi-Tawi", "Zambales", "Zamboanga del Norte", "Zamboanga del Sur",
     "Zamboanga Sibugay");
     return $strProv;
    }

  }
?>
