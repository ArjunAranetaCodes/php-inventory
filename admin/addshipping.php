<!DOCTYPE html>
<html>
<head>
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
        <small>Add Shipping Fee</small>
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
            <form class="form-horizontal" action="php/addshipping.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="place" class="col-sm-2 control-label">Shipping Place</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="place" name="place" placeholder="Place">
                  </div>
                </div>
              </div>
               <div class="box-body">
                 <div class="form-group">
                   <label for="fee" class="col-sm-2 control-label">Shipping Fee</label>

                   <div class="col-sm-10">
                     <input type="text" class="form-control" id="fee" name="fee" placeholder="Shipping Fee">
                   </div>
                 </div>
               </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="pull-right">
                  <button type="submit" class="btn btn-success">Add Shipping Fee</button>
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
