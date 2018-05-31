<?php
  class productfunctions{
    private $currentdb;

    function __construct(){
      $db = new Database();
      $this->currentdb = $db;
    }

    function printAllCategories(){
      $rows = $this->currentdb->getCategories();
      while($row = $rows->fetch_assoc()){
        $sql2 = "SELECT COUNT(*) FROM tbl_products where prod_category = '".$row["category_name"]."'";
        $result2 = $this->currentdb->conn->query($sql2);
        $row2 = $result2->fetch_array();
        $counter = $row2[0];
        echo '<li><a href="products.php?txtSearch=&category='.$row["category_name"].'">'.$row["category_name"].' ('.$counter.')</a></li>';
      }
    }

    function printAllCategoriesNoCount(){
      $rows = $this->currentdb->getCategories();
      $html = '<select class="srchTxt" name="category">';
      $html .= '<option>All</option>';
      while($row = $rows->fetch_assoc()){
        $html .= '<option>'.$row["category_name"].'</option>';
      }
      $html .= '</select>';
      echo $html;
    }

    function getProductsCount(){
      $sql = "SELECT * FROM tbl_products";
      $result = $this->currentdb->conn->query($sql);
      $count = $result->num_rows;
      return $count;
    }

    function getProductsByID($id){
      $sql = "SELECT * FROM tbl_products where id = ".$id;
      $result = $this->currentdb->conn->query($sql);
      $rows = $result->fetch_assoc();
      return $rows;
    }

    function getFeaturedProducts(){
      $sql = "SELECT * FROM tbl_products where isfeatured = 'Yes'";
      $result = $this->currentdb->conn->query($sql);
      //$rows = $result->fetch_assoc();
      return $result;
    }

    function printAllProducts(){
      echo '<h4>Latest Products <a href="products.php" class="btn btn-success">View More Products</a></h4>';
  	  echo '<ul class="thumbnails">';
      $counter = 0;
      $sql = "SELECT * FROM tbl_products ORDER BY id DESC LIMIT 9";
      $result = $this->currentdb->conn->query($sql);
      while($row = $result->fetch_assoc()){
        if(strlen($row["prod_description"]) > 20){
          $row["prod_description"] = substr($row["prod_description"],0,3)."...";
        }
        $counter++;
        echo '
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.php?id='.$row["id"].'"><img src="admin/php/'.$row["prod_image"].'" alt=""
          style="max-height:200px;"/></a>
					<div class="caption">
					  <h5>'.$row["prod_name"].'</h5>
					  <p>
						'.$row["prod_description"].'
					  </p>

					  <h4 style="text-align:center">
              <a class="btn" href="product_details.php?id='.$row["id"].'">
                <i class="icon-zoom-in"></i>
              </a>
              <a class="btn btn-primary" href="php/addtocart.php?id='.$row["id"].'">Add to
                <i class="icon-shopping-cart"></i>
              </a>
              <span class="btn btn-success">Php '.checkIfNumeric($row["prod_price"]).'</span>
            </h4>
					</div>
				  </div>
				</li>';
        if($counter == 3){
          echo '<div style="clear:both;"></di> <br/>';
          $counter = 0;
        }
      }
  	  echo '</ul>';
      echo '<h4 style="text-align:center;">
        <a href="products.php" class="btn btn-success btn-lg"><h4>View More Products</h4></a>
        </h4>';
    }

    function printAllFeatured(){
      $result = $this->getFeaturedProducts();
      while($row = $result->fetch_assoc()){
        echo '
        <li class="span3">
          <div class="thumbnail">
          <i class="tag"></i>
          <a href="product_details.php?id='.$row["id"].'"><img src="admin/php/'.$row["prod_image"].'" alt=""></a>
          <div class="caption">
            <h5>'.$row["prod_name"].'</h5>
            <h4><a class="btn" href="product_details.php?id='.$row["id"].'">VIEW</a> <span class="pull-right">'.
            formatAsPrice($row["prod_price"]).'</span></h4>
          </div>
          </div>
        </li>';
      }
    }


    function printAllProductsBlockView(){
      echo '<div class="tab-pane  active" id="blockView"><ul class="thumbnails">';
      $sql = "SELECT * FROM tbl_products ORDER BY id DESC";
      $result = $this->currentdb->conn->query($sql);
      $counter = 0;
      while($row = $result->fetch_assoc()){
        if(strlen($row["prod_description"]) > 20){
          $row["prod_description"] = substr($row["prod_description"],0,3)."...";
        }
        $counter++;
        echo '
        <li class="span3">
          <div class="thumbnail">
            <a href="product_details.php?id='.$row["id"].'"><img src="admin/php/'.$row["prod_image"].'" alt=""
            style="max-height:200px;"/></a>
            <div class="caption">
              <h5>'.$row["prod_name"].'</h5>
              <p>
              '.$row["prod_description"].'
              </p>
              <h4 style="text-align:center">
                <a class="btn" href="product_details.php?id='.$row["id"].'">
                  <i class="icon-zoom-in"></i>
                </a>
                <a class="btn btn-primary" href="php/addtocart.php?id='.$row["id"].'">
                  Add to <i class="icon-shopping-cart"></i>
                </a>
                <a class="btn btn-success" href="#">
                  Php '.checkIfNumeric($row["prod_price"]).'
                </a>
              </h4>
            </div>
          </div>
        </li>';

        if($counter == 3){
          echo '<div style="clear:both;"></di> <br/>';
          $counter = 0;
        }
      }
      echo '</ul><hr class="soft"/><div>';
    }

    function printAllProductsBlockViewSearch($search, $category){
      echo '<div class="tab-pane  active" id="blockView"><ul class="thumbnails">';
      if($category == "All"){
        $category = "";
      }
      if($search == ""){
        $sql = "SELECT * FROM tbl_products where prod_category like '%".$category."%' ORDER BY id DESC";
      }else{
        $sql = "SELECT * FROM tbl_products where prod_name like '%".$search."%' and prod_category like '%".$category."%' ORDER BY id DESC";
      }
      $result = $this->currentdb->conn->query($sql);
      while($row = $result->fetch_assoc()){
        if(strlen($row["prod_description"]) > 20){
          $row["prod_description"] = substr($row["prod_description"],0,3)."...";
        }
        echo '
        <li class="span3">
          <div class="thumbnail">
            <a href="product_details.html"><img src="admin/php/'.$row["prod_image"].'" alt=""/></a>
            <div class="caption">
              <h5>'.$row["prod_name"].'</h5>
              <p>
              '.$row["prod_description"].'
              </p>
              <h4 style="text-align:center">
                <a class="btn" href="product_details.php?id='.$row["id"].'">
                  <i class="icon-zoom-in"></i>
                </a>
                <a class="btn" href="php/addtocart.php?id='.$row["id"].'">
                  Add to <i class="icon-shopping-cart"></i>
                </a>
                <a class="btn btn-primary" href="#">
                  Php '.checkIfNumeric($row["prod_price"]).'
                </a>
              </h4>
            </div>
          </div>
        </li>';
      }
      echo '</ul><hr class="soft"/><div>';
    }

    function printAllProductsListView(){
      echo '<div class="tab-pane" id="listView">';
      $sql = "SELECT * FROM tbl_products ORDER BY id DESC";
      $result = $this->currentdb->conn->query($sql);
      while($row = $result->fetch_assoc()){
        if(strlen($row["prod_description"]) > 20){
          $row["prod_description"] = substr($row["prod_description"],0,3)."...";
        }
        echo '
    		<div class="row">
    			<div class="span2">
    				<img src="admin/php/'.$row["prod_image"].'" alt=""/>
    			</div>
    			<div class="span4">
    				<h5>'.$row["prod_name"].'</h5>
    				<p>
    				'.$row["prod_description"].'
    				</p>
    				<a class="btn btn-small pull-right" href="product_details.php?id='.$row["id"].'">View Details</a>
    				<br class="clr"/>
    			</div>
    			<div class="span3 alignR">
    			<form class="form-horizontal qtyFrm">
    			<h3> Php '.checkIfNumeric($row["prod_price"]).'</h3><br/>

    			  <a href="php/addtocart.php?id='.$row["id"].'" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
    			  <a href="product_details.php?id='.$row["id"].'" class="btn btn-large"><i class="icon-zoom-in"></i></a>

    				</form>
    			</div>
    		</div>
    		<hr class="soft"/>';
      }
    	echo '</div>';
    }

    function printAllProductsListView2(){
      echo '<div class="tab-pane" id="listView">';
      echo '<div id="prod-list">';
      echo '<ul class="list">';
      $sql = "SELECT * FROM tbl_products ORDER BY id DESC";
      $result = $this->currentdb->conn->query($sql);
      while($row = $result->fetch_assoc()){
        if(strlen($row["prod_description"]) > 20){
          $row["prod_description"] = substr($row["prod_description"],0,3)."...";
        }
        echo '
        <li><p class="name"></p>
    		<div class="row">
    			<div class="span2">
    				<img src="admin/php/'.$row["prod_image"].'" alt=""/>
    			</div>
    			<div class="span4">
    				<h5>'.$row["prod_name"].'</h5>
    				<p>
    				'.$row["prod_description"].'
    				</p>
    				<a class="btn btn-small pull-right" href="product_details.php?id='.$row["id"].'">View Details</a>
    				<br class="clr"/>
    			</div>
    			<div class="span3 alignR">
    			<form class="form-horizontal qtyFrm">
    			<h3> Php '.checkIfNumeric($row["prod_price"]).'</h3><br/>

    			  <a href="php/addtocart.php?id='.$row["id"].'" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
    			  <a href="product_details.php?id='.$row["id"].'" class="btn btn-large"><i class="icon-zoom-in"></i></a>

    				</form>
    			</div>
    		</div>
    		<hr class="soft"/>
        </li>';
      }
      echo '</ul>';
      echo '<ul class="pagination"></ul>';
      echo '</div>';
    	echo '</div>';
    }

    function printAllProductsListViewSearch($search, $category){
      echo '<div class="tab-pane" id="listView">';
      if($category == "All"){
        $category = "";
      }
      if($search == ""){
        $sql = "SELECT * FROM tbl_products where prod_category like '%".$category."%' ORDER BY id DESC";
      }else{
        $sql = "SELECT * FROM tbl_products where prod_name like '%".$search."%' and prod_category like '%".$category."%' ORDER BY id DESC";
      }
      $result = $this->currentdb->conn->query($sql);
      while($row = $result->fetch_assoc()){
        if(strlen($row["prod_description"]) > 20){
          $row["prod_description"] = substr($row["prod_description"],0,3)."...";
        }
        echo '
    		<div class="row">
    			<div class="span2">
    				<img src="admin/php/'.$row["prod_image"].'" alt=""/>
    			</div>
    			<div class="span4">
    				<h5>'.$row["prod_name"].'</h5>
    				<p>
    				'.$row["prod_description"].'
    				</p>
    				<a class="btn btn-small pull-right" href="product_details.php?id='.$row["id"].'">View Details</a>
    				<br class="clr"/>
    			</div>
    			<div class="span3 alignR">
    			<form class="form-horizontal qtyFrm">
    			<h3> Php '.checkIfNumeric($row["prod_price"]).'</h3><br/>

    			  <a href="php/addtocart.php?id='.$row["id"].'" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
    			  <a href="product_details.php?id='.$row["id"].'" class="btn btn-large"><i class="icon-zoom-in"></i></a>

    				</form>
    			</div>
    		</div>
    		<hr class="soft"/>';
      }
    	echo '</div>';
    }
  }
?>
