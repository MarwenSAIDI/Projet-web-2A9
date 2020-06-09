<?php 
include'crud.php';
/*$coupon1 =new crud();
$coupon= $coupon1->coupon();
if($coupon=true)
{echo "found";}*/
?>
<?php
require_once "ShoppingCart.php";

$member_id = 2; // you can your integerate authentication module here to get logged in member

$shoppingCart = new ShoppingCart();

?>
<?php
$cartItem = $shoppingCart->getMemberCartItem($member_id);
global  $item_quantity;
global  $item_price;
    if (! empty($cartItem)) {
        foreach ($cartItem as $item) {
            $item_quantity = $item_quantity + $item["quantity"];
            $item_price = $item_price + ($item["prixproduit"] * $item["quantity"]);
        }
    }else {$item_quantity = 0;
    $item_price = 0;}
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/preview/theme/pharma/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Apr 2020 11:44:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

  <title>CarePoint </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'><link rel="stylesheet" href="./css/style.css">
<link rel="icon" href="admin/images/favicon.png" type="image/ico" />

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/main.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="assets/assets1/css/style.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/blog.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script type="text/javascript">

function verifMail(){
var a=document.getElementById("c_email_address").value;
var b=document.getElementById("c_phone").value;
testm = false ;

 for (var j=1 ; j<(a.length) ; j++) {

  if (a.charAt(j)=='@') {
   if (j<(a.length-4)){
    for (var k=j ; k<(a.length-2) ; k++) {
     if (a.charAt(k)=='.') testm = true;

    }
   }
  }
 }

if (testm==false) {alert('Votre adresse e-mail est incorrecte.');
return testm ;}

else{window.location='thankyou.html';}
}

</script>
</head>




<body>
<div class="site-wrap">
<div class="site-navbar py-2">
<div class="search-wrap">
<div class="container">
<a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
<form action="#" method="post">
<input type="text" class="form-control" placeholder="Search keyword and hit enter...">
</form>
</div>
</div>
<div class="container">
<div class="d-flex align-items-center justify-content-between">
<div class="logo">
<div class="site-logo">
<a href="index-2.html" class="js-logo-clone">CarePoint</a>
</div>
</div>
<div class="main-nav d-none d-lg-block">
<nav class="site-navigation text-right text-md-center" role="navigation">
<ul class="site-menu js-clone-nav d-none d-lg-block">
<li><a href="index-2.html">Home</a></li>
<li class="active"><a href="shop.html">Store</a></li>
<li class="has-children">
<a href="#">Dropdown</a>
<ul class="dropdown">
<li><a href="#">Supplements</a></li>
<li class="has-children">
<a href="#">Vitamins</a>
<ul class="dropdown">
<li><a href="#">Supplements</a></li>
<li><a href="#">Vitamins</a></li>
<li><a href="#">Diet &amp; Nutrition</a></li>
<li><a href="#">Tea &amp; Coffee</a></li>
</ul>
</li>
<li><a href="#">Diet &amp; Nutrition</a></li>
<li><a href="#">Tea &amp; Coffee</a></li>
</ul>
</li>
<li><a href="about.html">About</a></li>
<li><a href="contact.html">Contact</a></li>
</ul>
</nav>
</div>
<div class="icons">
<a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
<a href="cart.html" class="icons-btn d-inline-block bag">
<span class="icon-shopping-bag"></span>
<span class="number">2</span>
</a>
<a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
</div>
</div>
</div>
</div>
<div class="bg-light py-3">
<div class="container">
<div class="row">
<div class="col-md-12 mb-0">
<a href="index-2.html">Acceuil</a> <span class="mx-2 mb-0">/</span>

<strong class="text-black">Commande </strong>
</div>
</div>
</div>
</div>
<div class="site-section">
<div class="container">
<div class="row mb-5">
<div class="col-md-12">
<div class="bg-light rounded p-3">

</div>
</div>
</div>
<div class="row">
<div class="col-md-6 mb-5 mb-md-0">
<h2 class="h3 mb-3 text-black">Saisissez Vos informations</h2>
<div class="p-3 p-lg-5 border">

	<form method="POST" action="liaison.php">
<div class="form-group row">

<div class="col-md-6">
<label for="c_lname" class="text-black">CIN <span class="text-danger">*</span></label>
<input type="text" class="form-control" id="c_cin" name="c_cin" required="required">
</div>
</div>
<div class="form-group row mb-5">
<div class="col-md-6">
<label for="c_email_address" class="text-black"> Addresse Email <span class="text-danger">*</span></label>
<input type="text" class="form-control" id="c_email_address" name="c_email_address" required="required">
</div>


<div class="form-group">
<label for="c_region" class="text-black">Région <span class="text-danger">*</span></label>
<select id="c_region" class="form-control" name="c_region">
<option value="1">Choisir Votre Région</option>
<option value="2">Tunis</option>
<option value="3">Ariana</option>
<option value="4">Ben arous</option>
<option value="5">Bizerte</option>
<option value="6">Nabeul</option>
<option value="7">Kairouan</option>
<option value="8">Sfax</option>
<option value="9">Sousse</option>
<option value="10">Beja</option>
<option value="11">Gafsa</option>
<option value="12">Gabes</option>
<option value="13">Jendouba</option>
<option value="14">Kasserine</option>
<option value="15">Kebili</option>
<option value="16">Kef</option>
<option value="17">Medenine</option>
<option value="18">Mahdia</option>
<option value="19">Manouba</option>
<option value="20">Monastir</option>
<option value="21">Sidi Bouzid</option>
<option value="22">Siliana</option>
<option value="23">Tataouine</option>
<option value="24">Tozeur</option>
<option value="25">Zaguane</option>

</select>
</div>


<div class="form-group row">
<div class="col-md-12">
<label for="c_address" class="text-black">Addresse <span class="text-danger">*</span></label>
<input type="text" class="form-control" id="c_address" name="c_address" placeholder="" required="required">
</div>
</div>

<div class="form-group row">
<div class="col-md-6">
<label for="c_state_country" class="text-black">Ville <span class="text-danger">*</span></label>
<input type="text" class="form-control" id="c_ville" name="c_ville" required="required">
</div>
<div class="col-md-6">
<label for="c_postal_zip" class="text-black">Code Postal <span class="text-danger">*</span></label>
<input type="text" class="form-control" id="c_post" name="c_post" required="required">
</div>
</div>



</div>



<div class="form-group">
<label for="c_order_notes" class="text-black">Ajouter vos commentaires</label>
<textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="..."></textarea>
</div>
</div>
</div>
<div class="col-md-6">
<div class="row mb-5">
<div class="col-md-12">
<h2 class="h3 mb-3 text-black"></h2>

<div class="p-3 p-lg-5 border">

<div class="input-group w-75">
 

<div class="input-group-append">







</div>
</div>
</div>
</div>
</div>
<div class="row mb-5">
<div class="col-md-12">
<h2 class="h3 mb-3 text-black">Finaliser Votre Commande</h2>
<div class="p-3 p-lg-5 border">
<table class="table site-block-order-table mb-5">
<thead>
<th>Produits</th>
<th>Total</th>
</thead>
<tbody>

  <?php
    foreach ($cartItem as $item) {
        ?>
        <tr>
<td><?php echo  $item["nomproduit"]; ?> <strong class="mx-2">x</strong> <?php echo $item["quantity"]; ?></td> 
<td><?php echo  ($item["prixproduit"] * $item["quantity"]."dt");?></td> 
</tr><?php } ?>

<tr>
  <?php ?>
<td class="text-black font-weight-bold"><strong>Order Total</strong></td>

<?php  
foreach ($cartItem as $item) {

            $item_quantity = $item_quantity + $item["quantity"];
            $item_prices = $item_price + ($item["prixproduit"] * $item["quantity"]);
        }?>
<td class="text-black"><?php echo ($item_prices-48)."dt"; ?> </td>
</tr>
<tr>

</tr>
</tbody>
</table>

 <div class="form-group">
                        <label for="payement" class="text-black">Mode de payement</label>
                        <select id="payement" class="form-control" name="payement">
                          <option value="E.L">En ligne</option>
                          <option value="PP">Paypal</option>
                          <option value="A.L">A la livraison</option>
                        </select>
                      </div>
                      
<div>
<button class="btn btn-primary btn-lg btn-block" onclick= "verifMail()"data-cf-modified-92649fe8329f7603fdfc18f4-="" name="order">Place
Order</button>
</div>

</form>
<div class="col-md-12">
<h2 class="h3 mb-3 text-black">Coupon</h2>

<div class="p-3 p-lg-5 border">
<label for="c_code" class="text-black mb-3">Si vous avez un coupon saisissez le code ci dessous</label>
<div class="input-group w-75">
 
  <form method="POST" action="">
<input type="text" class="form-control" id="c_code" name="c_code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2">
<div class="input-group-append">
</form>
 <?php 

if (isset($_POST['c_code'])) {
  $code=$_POST['c_code'];
$coupon1 =new crud();
$coupon= $coupon1->coupon($code);
foreach($coupon as $row){
 if($row['code']=true){
?> <table class="table site-block-order-table mb-5">
<tbody>
<td class="text-black font-weight-bold"><strong>Prix Total après réduction</strong></td>
<td> <?php echo $prix= $item_prices-$row['remise']* $item_prices;  ?> </td> </tbody></table><?php  
}
 else{echo "failed";}
}

}
?>





</div>
</div>
</div>
</div>


<div class="border mb-3">
<h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>
<div class="collapse" id="collapsebank">
<div class="py-2 px-4">
<p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the
payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
</div>
</div>
</div>
<div class="border mb-3">
<h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>
<div class="collapse" id="collapsecheque">
<div class="py-2 px-4">
<p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the
payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
</div>
</div>
</div>
<div class="border mb-5">
<h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>
<div class="collapse" id="collapsepaypal">
<div class="py-2 px-4">
<p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the
payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>

</div>
</div>
<div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
<div class="container">
<div class="row align-items-stretch">
<div class="col-lg-6 mb-5 mb-lg-0">
<a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
<div class="banner-1-inner align-self-center">
<h2>Pharma Products</h2>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
</p>
</div>
</a>
</div>
<div class="col-lg-6 mb-5 mb-lg-0">
<a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
<div class="banner-1-inner ml-auto  align-self-center">
<h2>Rated by Experts</h2>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
</p>
</div>
</a>
</div>
</div>
</div>
</div>
<footer class="site-footer">
<div class="container">
<div class="row">
<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
<div class="block-7">
<h3 class="footer-heading mb-4">About Us</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio voluptates
sed dolorum excepturi iure eaque, aut unde.</p>
</div>
</div>
<div class="col-lg-3 mx-auto mb-5 mb-lg-0">
<h3 class="footer-heading mb-4">Quick Links</h3>
<ul class="list-unstyled">
<li><a href="#">Supplements</a></li>
<li><a href="#">Vitamins</a></li>
<li><a href="#">Diet &amp; Nutrition</a></li>
<li><a href="#">Tea &amp; Coffee</a></li>
</ul>
</div>
<div class="col-md-6 col-lg-3">
<div class="block-5 mb-5">
<h3 class="footer-heading mb-4">Contact Info</h3>
 <ul class="list-unstyled">
<li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
<li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
<li class="email"><a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="84e1e9e5ede8e5e0e0f6e1f7f7c4e0ebe9e5edeaaae7ebe9">[email&#160;protected]</a></li>
</ul>
</div>
</div>
</div>
<div class="row pt-5 mt-5 text-center">
<div class="col-md-12">
<p>

Copyright &copy;
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="92649fe8329f7603fdfc18f4-text/javascript">document.write(new Date().getFullYear());</script> All rights reserved | This template is made
with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank" class="text-primary">Colorlib</a>

</p>
</div>
</div>
</div>

</footer>
<?php
  
    $address = "Rue malaga Résidence Manar Garden, 2092 El Manar 1";
    $address = str_replace(" ", "+", $address);
    ?>

    <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>
<form method="POST">
  
</form>