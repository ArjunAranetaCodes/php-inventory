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
        Category
        <small>View Category</small>
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
              <h3 class="box-title">Category Information</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <table id="datatable1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Category ID</th>
                    <th>Category Name</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    include 'php/db.inc.php';

                    $sql = "SELECT * FROM tbl_category";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()){
                      echo '
                      <tr>
                        <td>'.$row["id"].'</td>
                        <td>'.$row["category_name"].'</td>
                        <td>
                          <a href="editcategory.php?id='.$row["id"].'" class="btn btn-warning">Edit</a>
                          <a href="php/deletecategory.php?id='.$row["id"].'" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                      ';
                    }
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
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
    $(function () {
      $('#datatable1').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
  </script>
</body>
</html>
