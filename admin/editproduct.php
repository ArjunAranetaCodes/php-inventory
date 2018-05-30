<!DOCTYPE html>
<html>
<head>
  <?php include 'php/db.inc.php';?>
  <?php include 'header.php';?>
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
  <?php include 'navbar.php';?>
  <?php include 'sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Products
        <small>Add Products</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Products Information</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
              $id = $_GET["id"];
              $sql = "SELECT * FROM tbl_products where id = ".$id;
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
            ?>
            <form class="form-horizontal" action="php/updateproduct.php" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <input type="hidden" name="id" value="<?php echo $row["id"];?>"/>
                <div class="form-group">
                  <label for="prod_name" class="col-sm-2 control-label">Product Name</label>

                  <div class="col-sm-10">
                    <input value="<?php echo $row["prod_name"];?>" type="text" class="form-control" id="prod_name" name="prod_name" placeholder="Product Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="prod_category" class="col-sm-2 control-label">Product Category</label>

                  <div class="col-sm-10">
                    <select id="prod_category" name="prod_category" class="form-control">
                    <option><?php echo $row["prod_category"];?></option>
                    <?php
                      $sql2 = "SELECT * FROM tbl_category";
                      $result2 = $conn->query($sql2);
                      while($row2 = $result2->fetch_assoc()){
                        echo "<option>".$row2["category_name"]."</option>";
                      }
                    ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="prod_price" class="col-sm-2 control-label">Product Price</label>

                  <div class="col-sm-10">
                    <input value="<?php echo $row["prod_price"];?>" type="text" class="form-control" id="prod_price" name="prod_price" placeholder="Product Price">
                  </div>
                </div>
                <div class="form-group">
                  <label for="prod_brand" class="col-sm-2 control-label">Product Brand</label>

                  <div class="col-sm-10">
                    <input value="<?php echo $row["prod_brand"];?>" type="text" class="form-control" id="prod_brand" name="prod_brand" placeholder="Product Brand">
                  </div>
                </div>
                <div class="form-group">
                  <label for="prod_model" class="col-sm-2 control-label">Product Model</label>

                  <div class="col-sm-10">
                    <input value="<?php echo $row["prod_model"];?>" type="text" class="form-control" id="prod_model" name="prod_model" placeholder="Product Model">
                  </div>
                </div>
                <div class="form-group">
                  <label for="prod_release" class="col-sm-2 control-label">Release Date</label>

                  <div class="col-sm-10">
                    <input value="<?php echo $row["prod_release"];?>" type="text" class="form-control" id="prod_release" name="prod_release" placeholder="Release Date">
                  </div>
                </div>
                <div class="form-group">
                  <label for="prod_dimension" class="col-sm-2 control-label">Product Dimension</label>

                  <div class="col-sm-10">
                    <input value="<?php echo $row["prod_dimension"];?>" type="text" class="form-control" id="prod_dimension" name="prod_dimension" placeholder="Product Dimension">
                  </div>
                </div>
                <div class="form-group">
                  <label for="prod_displaysize" class="col-sm-2 control-label">Display Size</label>

                  <div class="col-sm-10">
                    <input value="<?php echo $row["prod_displaysize"];?>" type="text" class="form-control" id="prod_displaysize" name="prod_displaysize" placeholder="Display Size">
                  </div>
                </div>
                <div class="form-group">
                  <label for="prod_description" class="col-sm-2 control-label">Product Description</label>

                  <div class="col-sm-10">
                    <input value="<?php echo $row["prod_description"];?>" type="text" class="form-control" id="prod_description" name="prod_description" placeholder="Product Description">
                  </div>
                </div>
                <div class="form-group">
                  <label for="editorial_review" class="col-sm-2 control-label">Editorial Review</label>

                  <div class="col-sm-10">
                    <textarea id="editorial_review" name="editorial_review" class="form-control" rows="5"><?php echo $row["editorial_review"];?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="storage_locations" class="col-sm-2 control-label">Storage Location</label>

                  <div class="col-sm-10">
                    <textarea id="storage_locations" name="storage_locations" class="form-control" rows="5"><?php echo $row["storage_locations"];?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="prod_status" class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10">
                    <textarea id="prod_status" name="prod_status" class="form-control" rows="5"><?php echo $row["prod_status"];?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="$prod_condition" class="col-sm-2 control-label">Condition</label>

                  <div class="col-sm-10">
                    <textarea id="$prod_condition" name="$prod_condition" class="form-control" rows="5"><?php echo $row["prod_condition"];?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="min_stock" class="col-sm-2 control-label">Min Stock</label>

                  <div class="col-sm-10">
                    <input value="<?php echo $row["min_stock"];?>" type="text" class="form-control" id="min_stock" name="min_stock" placeholder="Min Stock">
                  </div>
                </div>
                <div class="form-group">
                  <label for="max_stock" class="col-sm-2 control-label">Max Stock</label>

                  <div class="col-sm-10">
                    <input value="<?php echo $row["max_stock"];?>" type="text" class="form-control" id="max_stock" name="max_stock" placeholder="Max Stock">
                  </div>
                </div>
                <div class="form-group">
                  <label for="prod_description" class="col-sm-2 control-label">Product Image</label>

                  <div class="col-sm-10">
                    <input type="file" name="prod_image" onchange="loadFile(event)" class="btn btn-warning"/>
                    <span class='label label-info' id="upload-file-info"></span>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-10">
                    <label for="output" class="col-sm-2 control-label"></label>
                    <img id="output" class="col-sm-6" src="<?php echo "php/".$row["prod_image"];?>"/>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="pull-right">
                  <button type="submit" class="btn btn-success">Update Category</button>
                  <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
      </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'footer.php';?>
</div>
<!-- ./wrapper -->

  <?php include 'footerjs.php';?>

  <script>
    var loadFile = function(event) {
      var output = document.getElementById('output');
      output.src = URL.createObjectURL(event.target.files[0]);
    };
  </script>
</body>
</html>
