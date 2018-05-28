<div  id="footerSection">
<div class="container">
	<!--
	<div class="row">
		<div class="span3">
			<h5>ACCOUNT</h5>
			<a href="login.html">YOUR ACCOUNT</a>
			<a href="login.html">PERSONAL INFORMATION</a>
			<a href="login.html">ADDRESSES</a>
			<a href="login.html">DISCOUNT</a>
			<a href="login.html">ORDER HISTORY</a>
		 </div>
		<div class="span3">
			<h5>INFORMATION</h5>
			<a href="contact.html">CONTACT</a>
			<a href="register.html">REGISTRATION</a>
			<a href="legal_notice.html">LEGAL NOTICE</a>
			<a href="tac.html">TERMS AND CONDITIONS</a>
			<a href="faq.html">FAQ</a>
		 </div>
		<div class="span3">
			<h5>OUR OFFERS</h5>
			<a href="#">NEW PRODUCTS</a>
			<a href="#">TOP SELLERS</a>
			<a href="special_offer.html">SPECIAL OFFERS</a>
			<a href="#">MANUFACTURERS</a>
			<a href="#">SUPPLIERS</a>
		 </div>

	<div class="span3 pull-right">
		<img src="themes/images/payment_methods.png" title="Payment Methods" alt="Payments Methods">
		<div class="caption">
			<h5>Payment Methods</h5>
		</div>
	</div>
	 </div>
	<p class="pull-right">&copy; Lanz Furniture</p>
</div><!-- Container End -->
</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
<script src="themes/js/jquery.js" type="text/javascript"></script>
<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
<script src="themes/js/google-code-prettify/prettify.js"></script>

<script src="themes/js/bootshop.js"></script>
<script src="themes/js/jquery.lightbox-0.5.js"></script>
<script src="themes/js/list.min.js"></script>
<script type="text/javascript">
	/*
  $(document).ready(function(){
		var uri = window.location.toString();

		var parts = window.location.pathname.split( '/' );
		var query = parts[parts.length-1];
		if(query != "product_details.php"){
			if (uri.indexOf("?") > 0) {
			    var clean_uri = uri.substring(0, uri.indexOf("?"));
			    window.history.replaceState({}, document.title, clean_uri);
			}
		}
	});*/
	$(".alertbox").fadeOut(3500);

	var monkeyList = new List('prod-list', {
	  valueNames: ['name'],
	  page: 4,
	  pagination: true
	});

	$("#listView").show();
</script>
