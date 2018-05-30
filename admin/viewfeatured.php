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
        Featured Products
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
                    <th>Dimension</th>
                    <th>Description</th>
                    <th>Is Featured</th>
                    <th>Image</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    include 'php/db.inc.php';

                    $sql = "SELECT * FROM tbl_products";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()){
                      echo '
                      <tr>
                        <td>'.$row["prod_name"].'</td>
                        <td>'.$row["prod_category"].'</td>
                        <td>'.$row["prod_price"].'</td>
                        <td>'.$row["prod_brand"].'</td>
                        <td>'.$row["prod_model"].'</td>
                        <td>'.$row["prod_dimension"].'</td>
                        <td>'.$row["prod_description"].'</td>';

                      if($row["isfeatured"]=="" || $row["isfeatured"] == "No"){
                        echo '<td class="text-center"><a href="php/setasfeatured.php?id='.$row["id"].'" class="btn btn-success">Set As Featured</a></td>';
                      }else{
                        echo '<td class="text-center">'.$row["isfeatured"].' <br/>';
                        echo '<a href="php/setasnotfeatured.php?id='.$row["id"].'" class="btn btn-danger">Set As Not Featured</a></td>';
                      }

                      if($row["prod_image"]!=""){
                        echo '<td><a href="php/'.$row["prod_image"].'" target="_blank" class="btn btn-info">View Image</a></td>';
                      }else{
                        echo '<td><i>No Image</i></td>';
                      }
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
