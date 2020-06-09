<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/preview/theme/pharma/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Apr 2020 11:44:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Pharma &mdash; Colorlib Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
<link rel="stylesheet" href="fonts/icomoon/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/style.css">
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
<strong class="text-black">Commande</strong>
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
<h2 class="h3 mb-3 text-black">Liste des Commandes</h2>
<div class="p-3 p-lg-5 border">
</div>
</div>
<div class="form-group">
	 <table id="datatable" class="table table-striped table-bordered" style="width:100%">
	 	<?PHP
include "crud.php";
$id_client=123455;
$aff_command =new crud();
$req= $aff_command->affiche_front($id_client);
?>

                                                        <thead>
                                                            <tr>
                                                                <th class="column-title">ID Commande </th>
                                                                <th class="column-title">CIN </th>
                                                                
                                                                
                                                                <th class="column-title">Addresse Email</th>
                                                                <th class="column-title">Ville</th>
                                                                <th class="column-title">Région</th>
                                                                <th class="column-title">Code Postal</th>
                                                               <th class="column-title">Prix</th>
                                                                <th class="column-title">Commentaire</th>
                                                               


                                                            </tr>
                                                        </thead>


                                                        <tbody>
                                                        <?php
                                                       foreach($req as $row){
	                                                   ?>
	                                                      <tr>
	                                                             <td><?php echo $row['id']; ?></td>
                                                               <td><?php echo $row['cin']; ?></td>
                                                           
                                                               <td><?php echo $row['mail_address']; ?></td>
                                                               <td><?php echo $row['ville']; ?></td>
                                                               <td><?php echo $row['region']; ?></td>
                                                               <td><?php echo $row['postal']; ?></td>
                                                               <td><?php echo $row['prix']; ?></td>
                                                               <td><?php echo $row['comment'];?></td>
                                                               

                                                                

                                                                
                                                        </tr>
	                                                    <?PHP
                                                          }
                                                        ?>
                                                     
 
                                                        </tbody>
                                                    </table>

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
</div>
<script src="js/jquery-3.3.1.min.js" type="92649fe8329f7603fdfc18f4-text/javascript"></script>
<script src="js/jquery-ui.js" type="92649fe8329f7603fdfc18f4-text/javascript"></script>
<script src="js/popper.min.js" type="92649fe8329f7603fdfc18f4-text/javascript"></script>
<script src="js/bootstrap.min.js" type="92649fe8329f7603fdfc18f4-text/javascript"></script>
<script src="js/owl.carousel.min.js" type="92649fe8329f7603fdfc18f4-text/javascript"></script>
<script src="js/jquery.magnific-popup.min.js" type="92649fe8329f7603fdfc18f4-text/javascript"></script>
<script src="js/aos.js" type="92649fe8329f7603fdfc18f4-text/javascript"></script>
<script src="js/main.js" type="92649fe8329f7603fdfc18f4-text/javascript"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="92649fe8329f7603fdfc18f4-text/javascript"></script>
<script type="92649fe8329f7603fdfc18f4-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="../../../../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="92649fe8329f7603fdfc18f4-|49" defer=""></script></body>

<!-- Mirrored from colorlib.com/preview/theme/pharma/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Apr 2020 11:44:24 GMT -->
</html>