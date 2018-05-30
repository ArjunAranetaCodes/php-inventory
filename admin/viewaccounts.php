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
     Accounts
     <small>View Accounts</small>
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
        <h3 class="box-title">Account Information</h3>
       </div>
       <!-- /.box-header -->
       <!-- form start -->
       <form class="form-horizontal">
        <div class="box-body">
         <table id="datatable1" class="table table-bordered table-striped">
          <thead>
           <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Privilege</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Contact Number</th>
            <th>Email</th>
            <th>Address</th>
            <th>Status</th>
            <th width="100px">Action</th>
           </tr>
          </thead>
          <tbody>
           <?php
           include 'php/db.inc.php';

           $sql = "SELECT * FROM tbl_accounts";
           $result = $conn->query($sql);
           while($row = $result->fetch_assoc()){
            echo '
            <tr>
            <td>'.$row["username"].'</td>
            <td>'.$row["password"].'</td>
            <!--<td>'.str_repeat("*", strlen($row["password"])).'</td>-->
            <td>'.$row["privilege"].'</td>
            <td>'.$row["firstname"].'</td>
            <td>'.$row["lastname"].'</td>
            <td>'.$row["contactnum"].'</td>
            <td>'.$row["email"].'</td>
            <td>'.$row["address"].'</td>
            <td>'.$row["status"].'</td>
            <td>
            <a href="php/setasverified.php?id='.$row["id"].'" class="btn btn-block btn-success" width="100px">Set As Verified</a>
            <a href="editaccount.php?id='.$row["id"].'" class="btn btn-block  btn-warning">Edit</a>
            <a href="php/deleteaccount.php?id='.$row["id"].'" class="btn btn-block btn-danger">Delete</a>
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
