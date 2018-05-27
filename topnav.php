<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
  <?php
    if(checkIfLoggedIn()){
      echo '<div class="span6">Welcome!<strong> '.getLoggedInUser().'</strong></div>';
    }else{
      echo '<div class="span6">Welcome!<strong> Guest</strong></div>';
    }
  ?>
	<div class="span6">
	<div class="pull-right">
    <?php
    //$cart -> setCartTotal(10);
    ?>
		<span class="btn btn-mini">Php <?php echo $cart->getCartTotal(); ?></span>
		<a href="product_summary.php"><span class="btn btn-mini btn-primary">
      <i class="icon-shopping-cart icon-white"></i> [ <?php echo $cart->getCartCount();?> ] Items in your cart </span>
    </a>
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="index.php"><img src="themes/images/logo.png" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="get" action="products.php" >
		<input name="txtSearch" class="srchTxt" type="text" placeholder="Search"/>

    <?php $products->printAllCategoriesNoCount();?>

		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="products.php">Products</a></li>
	 <li class=""><a href="delivery.php">Delivery</a></li>
	 <li class=""><a href="contact.php">Contact</a></li>
	 <li class="">
   <?php
    if(checkIfLoggedIn()){
      echo '
      <a href="php/logout.php"  style="padding-right:0">
        <span class="btn btn-large btn-danger">Logout </span>
      </a>';
    }else{
      echo '
      <a href="#login" role="button" data-toggle="modal" style="padding-right:0">
        <span class="btn btn-large btn-success">Login</span>
      </a>';
    }
   ?>

  <div id="login"
  class="modal hide fade in"
  tabindex="-1" role="dialog"
  aria-labelledby="login"
  aria-hidden="false">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Login or Register</h3>
		  </div>
		  <div class="modal-body">
        <h4>Already have an account?</h4>
        <form class="form-horizontal loginFrm" method="post" action="php/login.php">
          <div class="control-group">
          <label for="username" class="control-label">Username</label>
          <div class="controls">
            <input type="text" id="username" name="username" placeholder="Username"/>
          </div>
          </div>

          <div class="control-group">
          <label for="password" class="control-label">Password</label>
          <div class="controls">
            <input type="password" id="password" name="password" placeholder="Password"/>
          </div>
          </div>

          <div class="control-group">
            <div class="controls">
              <button type="submit" class="btn btn-success">Sign in</button>
              <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
            </div>
          </div>
        </form>

        <hr />
        <h4>Create your account</h4>
        <form class="form-horizontal loginFrm" action="php/register.php" method="post">
          <div class="control-group">
          <label for="inputEmail" class="control-label">Username</label>
          <div class="controls">
            <input type="text" id="inputEmail" name="username" placeholder="Username" required/>
          </div>
          </div>

          <div class="control-group">
          <label for="inputPassword" class="control-label">Password</label>
          <div class="controls">
            <input type="password" id="inputPassword" name="password" placeholder="Password" required/>
          </div>
          </div>

          <div class="control-group">
          <label for="inputFName" class="control-label">First Name</label>
          <div class="controls">
            <input type="text" name="firstname" id="inputFName" placeholder="First Name" required/>
          </div>
          </div>

          <div class="control-group">
          <label for="inputLName" class="control-label">Last Name</label>
          <div class="controls">
            <input type="text" name="lastname" id="inputLName" placeholder="Last Name" required/>
          </div>
          </div>

          <div class="control-group">
          <label for="inputContact" class="control-label">Contact Number</label>
          <div class="controls">
            <input type="text" name="contactnum" id="inputContact" placeholder="Contact Number" required/>
          </div>
          </div>

          <div class="control-group">
          <label for="inputEmail" class="control-label">Email</label>
          <div class="controls">
            <input type="text" name="email" id="inputEmail" placeholder="Email" required/>
          </div>
          </div>

          <div class="control-group">
          <label for="inputAddress" class="control-label">Address</label>
          <div class="controls">
            <input type="text" name="address" id="inputAddress" placeholder="Address" required/>
          </div>
          </div>

          <div class="control-group">
            <div class="controls">
              <button type="submit" class="btn btn-success">Register</button>
              <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
            </div>
          </div>
        </form>

		  </div>
	</div>

	</li>
    </ul>
  </div>
</div>
</div>
</div>
