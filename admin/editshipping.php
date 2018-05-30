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
        Shipping
        <small>Edit Shipping</small>
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
              <h3 class="box-title">Shipping Information</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
              $id = $_GET["id"];
              $sql = "SELECT * FROM tbl_shipping where id = ".$id;
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
            ?>
            <form class="form-horizontal" action="php/updateshipping.php" method="post">
              <div class="box-body">
                <input type="hidden" name="id" value="<?php echo $row["id"];?>"/>
                <div class="form-group">
                  <label for="place" class="col-sm-2 control-label">Place</label>

                  <div class="col-sm-10">
                    <input value="<?php echo $row["place"];?>" type="text" class="form-control" id="place" name="place" placeholder="Place">
                  </div>
                </div>
                <div class="form-group">
                  <label for="fee" class="col-sm-2 control-label">Shipping Fee</label>

                  <div class="col-sm-10">
                    <input value="<?php echo $row["fee"];?>" type="text" class="form-control" id="fee" name="fee" placeholder="Shipping Fee">
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
</body>
</html>
