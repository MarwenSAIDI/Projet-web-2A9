<!DOCTYPE html>
<html lang="en">

<head>
  <title>CarePoint </title>
  
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">

<link rel="icon" href="admin/images/favicon.png" type="image/ico" />
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="./css/comment.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="assets/assets1/css/style.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="pop.css" >
  <link href="popp.css" rel="stylesheet">


</head>

<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript"> mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}</script>

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
              <a href="index.php" class="js-logo-clone">CarePoint</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.html">Store</a></li>
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
                <li class="active"><a href="blog.php">Blogs </a></li>
                <li><a href="event.php">Events</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="cart.html" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">2</span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover inner-page" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto align-self-center">
            <div class=" text-center">
              <h1>Nos Blogs </h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum obcaecati natus iure voluptatum eveniet harum recusandae ducimus saepe.</p>ˀ
            </div>
          </div>
        </div>
      </div>
    </div>

    

    
  <?php
                        require_once"connexion.php";
                        $conn=se_connecter();
                        $query="select * from blog";
                        $result=$conn->query($query);
                        $data=$result->fetchAll();
                        for($i =0;$i<count($data);$i++)
                        {
                          $id=$data[$i]["id"];
                          $nom=$data[$i]["nom"];
                          $description=$data[$i]["description"];  
                          $image=$data[$i]["image"];
  ?>
                          
    <div class="site-section bg-light custom-border-bottom" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 order-md-2">
            <div class="block-16">
              <figure>

                <?php
                echo"<img src='admin/".$image."' alt='Image placeholder' class='img-fluid rounded'>";
                ?>
    
              </figure>
            </div>
          </div>
          <div class="col-md-5 mr-auto">
    
    
            <div class="site-section-heading pt-3 mb-4">
              <?php
              echo "<h2 class='text-black'>".$nom."</h2>";
              ?>
            </div>
            <?php
            echo "<p class='text-black'>".$description."</p>";
            ?>
          </div>
        </div>
      </div>
    
    <?php 
  }
     ?>





<?php

echo "<form method='POST' action='comments.php'>";

?>
  <div class="row mt-5">
          <div class="col-12 text-center">
  <input type="hidden" name="uid" value="Client">
  <?php 
   date_default_timezone_set('Africa/Tunis');

  echo "<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>" ;


  ?>
   <?php
          require_once"connexion.php";
                        $conn=se_connecter();
                        $query="select * from comments";
                        $result=$conn->query($query);
                        $data=$result->fetchAll(); 
                        for($i =0;$i<count($data);$i++)
                        {
                          $uid=$data[$i]["uid"]; 
                          $date=$data[$i]["date"];
                          $message=$data[$i]["message"];
                          ?>
  <div class="comment_block">
     <div class="new_comment">
      <ul class="user_comment">
        <div class="user_avatar">
          <img src="./images/user.png">
        </div><div class="comment_body">
          <?php

                          echo "<p>".$message."<p>";
         
          ?>
        </div>
        <div class="comment_toolbar">
          <div class="comment_details">
            <ul>
              <?php
              echo"<li><i class='fa fa-calendar'></i> ".$date."</li>"
              ?>
            </ul>
          </div><div class="comment_tools">
            <ul>
              <li><i class="fa fa-heart love"></i></li>
            </ul>
          </div>
        </div>     
      </ul>
     </div>
    </div>
  <?php } ?>
       <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="contact-form">
            <div class="col-md-12">
              <div class="single-form form-group">
                <textarea placeholder="Your Comment" name="message" data-error="Please,leave us a message." required="required"></textarea>
                <div class="help-block with-errors"></div>
              </div> 
            </div>
          </div>
        </div>
      </div> </br>
  
                            
   <button class="btn btn-primary px-4 py-3" type="submit" name="commentSubmit"> Commenter </button>
 </div>
</div>
</form>





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
                <li class="email">emailaddress@domain.com</li>
                <a href="./admin/login.php">Admin interface</a>
              </ul>
            </div>


          </div>
        </div>
        
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>

</html>