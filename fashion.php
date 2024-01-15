<?php
   $con = mysqli_connect('localhost', 'root');
   mysqli_select_db($con, 'smartrolly');
   $sql = "SELECT * FROM products WHERE featured=1";
   $featured = $con->query($sql);

?>


<!DOCTYPE php>
<php lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Fashion</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->
         <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        <ul>
                           <li><a href="#">Best Sellers</a></li>
                           <li><a href="#">Gift Ideas</a></li>
                           <li><a href="#">New Releases</a></li>
                           <li><a href="#">Today's Deals</a></li>
                           <li><a href="#">Customer Service</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- logo section end -->
         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="index.php">Home</a>
                     <a href="fashion.php">Fashion</a>
                     <a href="electronic.php">Electronic</a>
                     <a href="jewellery.php">Jewellery</a>
                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category 
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="fashion.php">Fashion</a>
                        <a class="dropdown-item" href="electronic.php">Electronic</a>
                        <a class="dropdown-item" href="jewellery.php">Jewellery</a>
                     </div>
                  </div>
                  <div class="main">
                     <!-- Another variation with a button -->
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search this blog">
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                           <i class="fa fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="header_box">
                     <div class="lang_box ">
                        <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                        <img src="images/flag-uk.png" alt="flag" class="mr-2 " title="United Kingdom"> English <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu ">
                           <a href="#" class="dropdown-item">
                           <img src="images/flag-france.png" class="mr-2" alt="flag">
                           French
                           </a>
                        </div>
                     </div>
                     <div class="login_menu">
                        <ul>
                           <li><a href="cart.php">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <span class="padding_10">Cart</span></a>
                           </li>
                           <li><a href="login.php">
                              <i class="fa fa-user" aria-hidden="true"></i>
                              <span class="padding_10">Login</span></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header section end -->
         
   <!-- buttons -->
   <div class="navigation-buttons">
      <button class="btn btn-outline-secondary"><a href="kids.php">Kids</a></button>
      <button class="btn btn-outline-secondary"><a href="fashion.php">Men</a></button>
      <button class="btn btn-outline-secondary"><a href="women.php">Women</a></button>
  </div>

      <!-- fashion section start -->
      <div class="fashion_section">
         <div class="container"><br><br>
               <h1 class="fashion_taital">Men</h1>
               <div class="fashion_section_2">
                  <div class="row">
                  <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <?php
                                 while($product = mysqli_fetch_assoc($featured)):
                                 ?>
                                 <h4 class="shirt_text"><?= $product['name'];?></h4>
                                 <p class="price_text">Price <span style="color: #262626;">LKR. <?= $product['price'];?></span></p>
                                 
                                 <div class="tshirt_img"><img src="<?= $product['image'];?>" alt="<?= $product['name'];?>"/></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="buy.php">Buy Now</a></div>
                                    
                                 </div>
                              </div>
                           </div>
                           <?php endwhile; ?>
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           
                           <h4 class="shirt_text">Men </h4>
                           <p class="price_text">Price  <span style="color: #262626;">LKR. 3459</span></p>
                           <div class="tshirt_img"><img src="images/dress-shirt-img.png"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="buy.php">Buy Now</a></div>
                              
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Men 3</h4>
                           <p class="price_text">Price  <span style="color: #262626;">LKR. 4400</span></p>
                           <div class="tshirt_img"><img src="images/hollowshirt.jpg"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="buy.php">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               
               <div class="fashion_section_2">
                  <div class="row">
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Men 4</h4>
                           <p class="price_text">Price  <span style="color: #262626;">LKR. 3200</span></p>
                           <div class="tshirt_img"><img src="images/90sshirt.jpg"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="buy.php">Buy Now</a></div>
                              
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Men 5</h4>
                           <p class="price_text">Price  <span style="color: #262626;">LKR. 4000</span></p>
                           <div class="tshirt_img"><img src="images/shortshirt.jpg"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="buy.php">Buy Now</a></div>
                             
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Men 6</h4>
                           <p class="price_text">Price  <span style="color: #262626;">LKR. 3999</span></p>
                           <div class="tshirt_img"><img src="images/frontshirt.jpg"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="buy.php">Buy Now</a></div>
                            
                           </div>
                        </div>
                     </div>
                  </div>

                  
               <div class="fashion_section_2">
                  <div class="row">
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Men 7</h4>
                           <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                           <div class="tshirt_img"><img src="images/corduroy.jpg"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="buy.php">Buy Now</a></div>
                            
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Men 8</h4>
                           <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                           <div class="tshirt_img"><img src="images/trouser1.jpg"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="buy.php">Buy Now</a></div>
                              
                        </div>
                     </div>
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Men 9</h4>
                           <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                           <div class="tshirt_img"><img src="images/trouser2.jpg"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="buy.php">Buy Now</a></div>
                            
                           </div>
                        </div>
                     </div>
                  </div>

                 
               <div class="fashion_section_2">
                  <div class="row">
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Men 10</h4>
                           <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                           <div class="tshirt_img"><img src="images/trouser3.jpg"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="buy.php">Buy Now</a></div>
                           
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Men 11</h4>
                           <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                           <div class="tshirt_img"><img src="images/short1.jpg"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="buy.php">Buy Now</a></div>
                              
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-4">
                        <div class="box_main">
                           <h4 class="shirt_text">Men 12</h4>
                           <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                           <div class="tshirt_img"><img src="images/short2.jpg"></div>
                           <div class="btn_main">
                              <div class="buy_bt"><a href="buy.php">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                  </div>


               </div>
            </div>
       
   <div class="loader_main">
      <div class="loader"></div>
   </div>
   
</div>
<!-- jewellery  section end -->
 <!-- footer section start -->
 <div class="footer_section layout_padding">
   <div class="container">
       <div class="footer_logo"><a href="index.php"><img src="images/logo.png"></a></div>
      <div class="input_bt">
         <input type="text" class="mail_bt" placeholder="Your Email" name="Your Email">
         <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
      </div>
      <div class="footer_menu">
         <ul>
            <li><a href="#">Best Sellers</a></li>
            <li><a href="#">Gift Ideas</a></li>
            <li><a href="#">New Releases</a></li>
            <li><a href="#">Today's Deals</a></li>
            <li><a href="#">Customer Service</a></li>
         </ul>
      </div>
      <div class="location_main">Help Line  Number : <a href="#">+1 1800 1200 1200</a></div>
   </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
   <div class="container">
       <p class="copyright_text">© 2020 All Rights Reserved. Smartrolly</p>
   </div>
</div>
<!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         function openNav() {
         document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
         document.getElementById("mySidenav").style.width = "0";
         }
      </script>
  
   </body>
</html>