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
        <h3 class="box-title">Order Information</h3>
       </div>
       <!-- /.box-header -->
       <!-- form start -->
       <form class="form-horizontal">
        <div class="box-body">
         <table id="datatable1" class="table table-bordered table-striped">
          <thead>
           <tr>
            <th>Item ID</th>
            <th>Order by</th>
            <th>Quantity</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Image</th>
           </tr>
          </thead>
          <tbody>
           <?php
           include 'php/db.inc.php';

           $sql = "SELECT * FROM tbl_cart where status='Approved' ORDER BY id DESC";
           $result = $conn->query($sql);
           while($row = $result->fetch_assoc()){
            echo '
            <tr>
            <td>'.$row["item_id"].'</td>
            <td>'.$row["username"].'</td>
            <td>'.$row["quantity"].'</td>';

            $sql = "SELECT * FROM tbl_products where id = ".$row["item_id"];
            $result2 = $conn->query($sql);
            $row2 = $result2->fetch_assoc();

            echo '<td>'.$row2["prod_name"].'</td>
            <td>'.$row2["prod_price"].'</td>';

            if($row2["prod_image"]!=""){
             echo '<td><a href="php/'.$row2["prod_image"].
             '" target="_blank" class="btn btn-info">View Image</a></td>';
            }else{
             echo '<td><i>No Image</i></td>';
            }
            echo'</tr>';
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
