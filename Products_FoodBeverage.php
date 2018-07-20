<!DOCTYPE html>
<html>
<head>
	<title>Food & Beverages</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body >
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">Compa-Pro</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.html">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Products<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Products_FoodBeverage.php">Food and Beverages</a></li>
          <li><a href="Products_Clothing.php">Clothing</a></li>
          <li><a href="Products_HomeAppliance.php">Home Appliance</a></li>
        </ul>
      </li>
      <li><a href="Offers.html">Offers</a></li>
      <li><a href="contact.html">Contact Us</a></li>
    </ul>
  </div>
</nav>
<?php		require '../entities/produit.php';
    require '../core/produitC.php';
	$pro = new produitC;
	$tab = $pro->afficherproduitfood($pro);
	?>

<div class="container">
	<div class="row">
		<?php
		foreach ($tab as $row)
		{
	?>
        <div class="col-md-4">
            <article class="col-item">
            	<div class="photo">
        			<div class="options-cart-round">
        				<button class="btn btn-default"  title="Add to cart">
        					<span class="fa fa-shopping-cart"></span>
        				</button>
        			</div>
        			<a href="#"> <img src=<?php echo 'upload/'.$row['Image'].''; ?> width= class="img-responsive" alt="Product Image" /> </a>
        		</div>
        		<div class="info">
        			<div class="row">
        				<div class="price-details col-md-6">
        					<p class="details" style="font-size: 28px;">
        						<?php echo $row['Nom'] ;?>
        					</p>
        					<span class="price-new" style="margin-left: 20px; margin-right: 20px;"> PRIX CARREFOUR:<?php echo $row['Prix_C']; ?>DT</span><br>
        					<span class="price-new" style="margin-left: 20px; margin-right: 20px;"> PRIX GEANT:<?php echo $row['Prix_G']; ?>DT</span><br>
        					<span class="price-new" style="margin-left: 100px; margin-right: 20px;"> PRIX MG:<?php echo $row['Prix_MG']; ?>DT</span><br>

     				</div>
        			</div>
        		</div>
        	</article>
        </div>
       <?php } ?>   
	</div>
</div>



<section id="footer">
    <div class="container">
      <div class="row text-center text-xs-center text-sm-left text-md-left">
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>About Us</h5>
           <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>  Nowadays people are suffering from the inflation. The prices are getting higher and higher and it seems that people can’t find a good product for a price they’re willing to pay for it. Our website will help middle class and upper-middle class consumers familiar with technologies to save money and find the optimal product suitable for their budget. It also comes with multiple other options such as the commanding and the delivery of the chosen products, in order to make the whole grocery shopping experience easier, more fun and less costly.</a></li></ul></div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Our Services</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Comparing Prices</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Shopping For You</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Delivering</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Advertising</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Our Deals</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Our Partners</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Company A</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Company B</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Company C</a></li>
            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Company D</a></li>
            <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Company E</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
          </ul>
        </div>
        </hr>
      </div>  
    </div>
  </section>


</body>
<script src="rel/jQuery.js"> </script>
     <script type="text/javascript" src="js/FoodB.js"></script>
</html>