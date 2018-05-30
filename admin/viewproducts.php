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
        Products
        <small>View Products</small>
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
            <form class="form-horizontal">
              <div class="box-body">
                <table id="datatable1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Release Date</th>
                    <th>Dimension</th>
                    <th>Display Size</th>
                    <th>No of Stocks</th>
                    <th>Description</th>
                    <th>Editorial Review</th>
                    <th>Storage Location</th>
                    <th>Status</th>
                    <th>Condition</th>
                    <th>Min Stock</th>
                    <th>Max Stock</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    include 'php/db.inc.php';

                    $sql = "SELECT * FROM tbl_products ORDER BY id DESC";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()){
                      echo '
                      <tr>
                        <td>'.$row["prod_name"].'</td>
                        <td>'.$row["prod_category"].'</td>
                        <td>'.$row["prod_price"].'</td>
                        <td>'.$row["prod_brand"].'</td>
                        <td>'.$row["prod_model"].'</td>
                        <td>'.$row["prod_release"].'</td>
                        <td>'.$row["prod_dimension"].'</td>
                        <td>'.$row["prod_displaysize"].'</td>
                        <td>'.$row["current_stock"].'</td>
                        <td>'.$row["prod_description"].'</td>';

                      echo '<td>'.substr($row["editorial_review"],0,10).'...</td>';
                      echo '<td>'.$row["storage_locations"].'</td>';
                      echo '<td>'.$row["prod_condition"].'</td>';
                      echo '<td>'.$row["prod_status"].'</td>';
                      echo '<td>'.$row["min_stock"].'</td>';
                      echo '<td>'.$row["max_stock"].'</td>';


                      if($row["prod_image"]!=""){
                        echo '<td><a href="php/'.$row["prod_image"].'" target="_blank" class="btn btn-info">View Image</a></td>';
                      }else{
                        echo '<td><i>No Image</i></td>';
                      }

                      echo '<td>
                          <a href="editproduct.php?id='.$row["id"].'" class="btn btn-warning">Edit</a>
                          <a href="php/deleteproduct.php?id='.$row["id"].'" class="btn btn-danger">Delete</a>
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
        "ordering": false,
        "info": true,
        "autoWidth": false,
        responsive: true
      });
    });
  </script>
</body>
</html>
