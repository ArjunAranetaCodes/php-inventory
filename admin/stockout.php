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
        <small>Stock Out</small>
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
            <form class="form-horizontal" action="php/stockout.php" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <input type="hidden" name="id" value="<?php echo $row["id"];?>"/>
                <div class="form-group">
                  <label for="prod_name" class="col-sm-2 control-label">Product Name</label>

                  <div class="col-sm-10">
                    <input value="<?php echo $row["prod_name"];?>" type="text" class="form-control" id="prod_name" name="prod_name" placeholder="Product Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="stockout" class="col-sm-2 control-label">Quantity (to be subtracted)</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="stockout" name="stockout" placeholder="Quantity">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="pull-right">
                  <button type="submit" class="btn btn-success">Add Stock</button>
                  <a href="viewprodstocks.php" class="btn btn-danger">Cancel</a>
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
