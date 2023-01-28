<?php
if(isset($_POST['logout'])){
  
session_destroy();
header('location:login2.php');
}
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css" >
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Jasmine Store - About</title>
  </head>
  <body>

  <header class="header">
   <div class="container-fluid">
   

  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <div id="navs" class="container">
    
      <a class="navbar-brand" href="#"><span class="logo">JASMINE</span><span class="logo1"> STORE</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="shop.php">shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php#feature">feature</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="about.php">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="contact.php">contact</a>
          </li>
          
        </ul> 
      

        
        </div>
<div class="icon">
<a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>   
     <?php
    
     if(isset($_SESSION['Userid'])){
      $sql="select *from cart";          
      $db=new mysqli('localhost','root','','jasmine_store11');
      $result=$db->query($sql);
      $count=0;
      while ($row = mysqli_fetch_assoc($result)){
        if($row['user_id']==$_SESSION['Userid'])
         $count  =$count+1;
      }
       
       echo "<span id=\"cart_count\">$count</span>";
     }
     else{
      echo "<span id=\"cart_count\">0</span>";
     }
     
     ?>
</div>
<form action="about.php" method="post">
<button class="bg-white btn btn-outline-none mx-3" type="submit" name="logout"><i class="fa fa-sign-out fs-5 bg-white " aria-hidden="true"></i></button>
        </form>
      </div>
    </div>
 
</nav>
</header>
  <!--end nav -->
<div class="about-img">

        <img class="img-fluid img1" src="assets/img/about/p1.png" alt="">

    
</div>

<div class="details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
<p  >
  <h3>Our Story</h3>
  We  made  an website which aims to create interactive medium  between  admin who offers products for women and men and users how wants to buy this products . This application saves your time since instead of going to the shop you can buy what you like from home also this website always offers discounts on some products.
When the user likes a product the product will moves to the user cart and to buy the product user should confirm the operation by completing a form for shipping which is for free .Our website provides the users products from many famous brands  like : Boss, adidas,  Nike, Mac, Zara , Gucci and more  .Also the products
Belongs to categories : Men , Women ,Accessories, shoes and watches.
</p>
            </div>
            <div class="col-lg-4">
              
                     <img  class="img-fluid border-bottom image1 border-start border-danger py-3 px-3 .hover-zoom" src="assets/img/about/about-01.webp" alt="">
                           
               
            </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
          <img  class=" bg-image img-fluid border-bottom image1 border-end border-danger py-3 px-3 .hover-zoom" src="assets/img/about/m3.webp" alt="">

          </div>
          <div class="col-lg-8">
            <p>
              <h3>Famous questions</h3>
              

1-	Where is the store location ?<br>
our store is online and we are in partnership with many international brands , and there is no specific location for us.
<br>2-	How much the shipping cost ?<br>
The shipping is free for all regions .
<br>3-	Can I replace the product after buying it ?<br>
Unfortunately this is not allowed because the shipping sometimes costs a lot . But if there is a mistake on the orders surely we will fix it  .
<br>4-How much time will you take to response our messages ?<br>
Maximum 1 hours and we will contact with you and answer your questions 
<br>5-Can you make discounts to the customers?<br>
We usually make discounts but not in every products . and we announce what the products that we make discounts  to it.            </p>
          </div>
        </div>
    </div>
</div>





<footer class="footer " id="footer">
<div class="container">
<div class="row">
  <div class="col-lg-3">
    <div class="cateories text-light my-5">
      <h4 class="mb-5">categories</h4>
      <ul>
      <li><a href="shop.php"><span>women</span> </a></li>
        <li><a href="shop.php"><span>men</span> </a></li>
        <li><a href="shop.php"><span>shoes</span> </a></li>
        <li><a href="shop.php"><span>watches</span> </a></li>
        <li><a href="shop.php"><span>accessories</span> </a></li>
      </ul>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="help text-light my-5">
      <h4 class="mb-5">help</h4>
      <ul>
      <li><a href="about.php"><span>track order</span> </a></li>
        <li><a href="about.php"><span>returns</span> </a></li>
        <li><a href="about.php"><span>shiping</span> </a></li>
        <li><a href="about.php"><span>fags</span></a></li>
      </ul>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="getintouch text-light my-5">
      <h4 class="mb-5">get in touch</h4>
      <p >
      Any questions? Let us know go tho the contact page, or call us on 0567067293      </p>
      <ul class=" d-flex">
      <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        <li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
      
      </ul>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="news text-light my-5">
      <h4 class="mb-5">newsletter</h4>
     <form action="">
       <input class=" bg-transparent" type="email" placeholder="email@example.com">
       <button>subscribe</button>
     </form>
    
    </div>
  </div>
</div>
<div class="payments">
  <img src="assets/img/footer/paypal.webp" alt="">
  <img src="assets/img/footer/visa.webp" alt="">
  <img src="assets/img/footer/p.webp" alt="">
  <img src="assets/img/footer/p1.webp" alt="">
  <img src="assets/img/footer/p2.webp" alt="">
</div>
<div class="copyright text-center text-light mt-3 pb-4">
  Copyright &copy;2021 All rights reserved | This template is made with Baraa&hearts;
</div>
</div>

</footer>

<script type="text/javascript">
 
var popupViews=document.querySelectorAll(".popup-view");
var popupBtns=document.querySelectorAll(".pop-btn");
var closeBtns=document.querySelectorAll(".close-btn");

var popup=function(popupClick){
  popupViews[popupClick].classList.add('active');
}
var cpopup=function(popupClick){
  popupViews[popupClick].classList.remove('active');
}
popupBtns.forEach((popupBtns,i) => {
popupBtns.addEventListener("click", () => {
  popup(i);
});
});
closeBtns.forEach((closeBtns,i) => {
closeBtns.addEventListener("click", () => {
  cpopup(i);
});
});



</script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  
  </body>
</html>