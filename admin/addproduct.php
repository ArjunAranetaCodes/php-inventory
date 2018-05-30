<!DOCTYPE html>
<html>
<head>
 <?php include 'header.php';?>
</head>
<body class="hold-transition skin-red sidebar-mini">
 <div class="wrapper">
  <?php include 'navbar.php';?>
  <?php include 'sidebar.php';?>
  <?php include 'php/db.inc.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
    <h1>
     Product
     <small>Add Product</small>
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
        <h3 class="box-title">Product Information</h3>
       </div>
       <!-- /.box-header -->
       <!-- form start -->
       <form class="form-horizontal" action="php/addproduct.php" method="post" enctype="multipart/form-data">
        <div class="box-body">
         <div class="form-group">
          <label for="prod_name" class="col-sm-2 control-label">Product Name</label>

          <div class="col-sm-10">
           <input type="text" class="form-control" id="prod_name" name="prod_name" placeholder="Product Name">
          </div>
         </div>
         <div class="form-group">
          <label for="prod_category" class="col-sm-2 control-label">Product Category</label>

          <div class="col-sm-10">
           <select id="prod_category" name="prod_category" class="form-control">
            <?php
            $sql = "SELECT * FROM tbl_category";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
             echo "<option>".$row["category_name"]."</option>";
            }
            ?>
           </select>
          </div>
         </div>
         <div class="form-group">
          <label for="prod_price" class="col-sm-2 control-label">Product Price</label>

          <div class="col-sm-10">
           <input type="text" class="form-control" id="prod_price" name="prod_price" placeholder="Product Price">
          </div>
         </div>
         <div class="form-group">
          <label for="prod_brand" class="col-sm-2 control-label">Product Brand</label>

          <div class="col-sm-10">
           <input type="text" class="form-control" id="prod_brand" name="prod_brand" placeholder="Product Brand">
          </div>
         </div>
         <div class="form-group">
          <label for="prod_model" class="col-sm-2 control-label">Product Model</label>

          <div class="col-sm-10">
           <input type="text" class="form-control" id="prod_model" name="prod_model" placeholder="Product Model">
          </div>
         </div>
         <div class="form-group">
          <label for="prod_release" class="col-sm-2 control-label">Release Date</label>

          <div class="col-sm-10">
           <input type="text" class="form-control" id="prod_release" name="prod_release" placeholder="Release Date">
          </div>
         </div>
         <div class="form-group">
          <label for="prod_dimension" class="col-sm-2 control-label">Product Dimension</label>

          <div class="col-sm-10">
           <input type="text" class="form-control" id="prod_dimension" name="prod_dimension" placeholder="Product Dimension">
          </div>
         </div>
         <div class="form-group">
          <label for="prod_displaysize" class="col-sm-2 control-label">Display Size</label>

          <div class="col-sm-10">
           <input type="text" class="form-control" id="prod_displaysize" name="prod_displaysize" placeholder="Display Size">
          </div>
         </div>
         <div class="form-group">
          <label for="prod_description" class="col-sm-2 control-label">Product Description</label>

          <div class="col-sm-10">
           <input type="text" class="form-control" id="prod_description" name="prod_description" placeholder="Product Description">
          </div>
         </div>
         <div class="form-group">
          <label for="editorial_review" class="col-sm-2 control-label">Editorial Review</label>

          <div class="col-sm-10">
           <textarea id="editorial_review" name="editorial_review" class="form-control" rows="5"></textarea>
          </div>
         </div>
         <div class="form-group">
          <label for="storage_locations" class="col-sm-2 control-label">Storage Location</label>

          <div class="col-sm-10">
           <textarea id="storage_locations" name="storage_locations" class="form-control" rows="5"></textarea>
          </div>
         </div>
         <div class="form-group">
          <label for="prod_status" class="col-sm-2 control-label">Status</label>

          <div class="col-sm-10">
           <textarea id="prod_status" name="prod_status" class="form-control" rows="5"></textarea>
          </div>
         </div>
         <div class="form-group">
          <label for="prod_condition" class="col-sm-2 control-label">Condition</label>

          <div class="col-sm-10">
           <textarea id="prod_condition" name="prod_condition" class="form-control" rows="5"></textarea>
          </div>
         </div>
         <div class="form-group">
          <label for="current_stock" class="col-sm-2 control-label">No. of Stock</label>

          <div class="col-sm-10">
           <input type="text" name="current_stock" class="form-control" value="0">
          </div>
         </div>
         <div class="form-group">
          <label for="min_stock" class="col-sm-2 control-label">Min Stock</label>

          <div class="col-sm-10">
           <input type="text" name="min_stock" class="form-control">
          </div>
         </div>
         <div class="form-group">
          <label for="max_stock" class="col-sm-2 control-label">Max Stock</label>

          <div class="col-sm-10">
           <input type="text" name="max_stock" class="form-control">
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
           <img id="output" class="col-sm-6"/>
          </div>
         </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
         <div class="pull-right">
          <button type="submit" class="btn btn-success">Add Product</button>
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
