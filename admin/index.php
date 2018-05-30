<!DOCTYPE html>
<html>
<head>
  <?php include 'header.php';
  include "php/db.inc.php";

  $sql = "SELECT COUNT(*) FROM tbl_accounts";
  $result = $conn->query($sql);
  $row = $result->fetch_array();
  $userscount = $row[0];

  $sql = "SELECT COUNT(*) FROM tbl_cart where status = 'Approved'";
  $result = $conn->query($sql);
  $row = $result->fetch_array();
  $salescount = $row[0];

  $sql = "SELECT COUNT(*) FROM tbl_cart where status is null";
  $result = $conn->query($sql);
  $row = $result->fetch_array();
  $ordercount = $row[0];

  $sql = "SELECT COUNT(*) as count  FROM tbl_products";
  $result = $conn->query($sql);
  $row = $result->fetch_array();
  $prodcount = $row[0];
  ?>
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
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $salescount;?></h3>

              <p>Sales </p>
            </div>
            <div class="icon">
              <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
            </div>
            <!--
            <a href="#" class="small-box-footer">More info <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
            -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $ordercount;?></h3>

              <p>Orders</p>
            </div>
            <div class="icon">
              <span class="glyphicon glyphicon-signal" aria-hidden="true"></span>
            </div>
            <!--
            <a href="#" class="small-box-footer">More info <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
            -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $userscount;?></h3>

              <p>Users</p>
            </div>
            <div class="icon">
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            </div>
            <!--
            <a href="#" class="small-box-footer">More info <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
            -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $prodcount;?></h3>

              <p>Products</p>
            </div>
            <div class="icon">
              <span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
            </div>
            <!--
            <a href="#" class="small-box-footer">More info <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
            -->
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <section class="content" style="background-color:white;">
      <div class="row">
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
           <th>Mode of Payment</th>
           <th>Status</th>
          </tr>
         </thead>
         <tbody>
          <?php
          include 'php/db.inc.php';

          $sql = "SELECT * FROM tbl_cart ORDER BY id DESC";
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

           $sql3 = "SELECT * FROM tbl_accounts where username = '".$row["username"]."'";
           $result3 = $conn->query($sql3);
           $row3 = $result3->fetch_assoc();
           $phoneno = $row3["contactnum"];

           echo '<td>'.$row2["prod_name"].'</td>
           <td>'.$row2["prod_price"].'</td>';

           if($row2["prod_image"]!=""){
            echo '<td><a href="php/'.$row2["prod_image"].
            '" target="_blank" class="btn btn-info">View Image</a></td>';
           }else{
            echo '<td><i>No Image</i></td>';
           }

           echo '<td>'.$row["modeofpay"].'</td>';
           echo '<td>'.$row["status"].'</td>';

           echo '
           </tr>
           ';
          }
          ?>
         </tbody>
        </table>
       </div>
      </div>
     </div>
      <!--
      <div class="row">
        <section class="col-lg-7 connectedSortable">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
              <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
              <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
            </ul>
            <div class="tab-content no-padding">
              <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
              <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
            </div>
          </div>

        </section>
      </div>
      -->

    </section>
    <!-- /.content -->
  </div>
  <?php include 'footer.php'; ?>
</div>
<!-- ./wrapper -->

  <?php include 'footerjs.php';?>
</body>
</html>
