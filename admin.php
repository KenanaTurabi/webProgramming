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
    <title>Jasmine Store - Admin</title>
  </head>
  <body>
  <header class="header">
   <div class="container-fluid ">
    
  <nav class="navbar changec  navbar-expand-lg navbar-light  fixed-top ">

    <div id="navs" class="container changec">
    
      <a class="navbar-brand" href="#"><span class="logo">JASMINE</span><span class="logo1"> STORE ADMIN</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="admin.php">home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#feature">feature</a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="about.php">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="contact.php">contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-slink active px-2 text-info" aria-current="page" href="addProduct.php">add products</a>
          </li>
          <li class="nav-item">
            <a class="nav-slink active px-2 text-info" aria-current="page" href="shipping.php">shipping products</a>
          </li>
          <li class="nav-item">
            <a class="nav-slink active px-2 text-info" aria-current="page" href="addFeature.php">Add Feature</a>
          </li>
          
        </ul> 
      

        
        </div>

<form action="index.php" method="post">
<button class="bg-white btn btn-outline-none mx-3" type="submit" name="logout"><i class="fa fa-sign-out fs-5 " aria-hidden="true"></i></button>
        </form>
        
      </div>
    
 
</nav>
</div>

   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/slider/i1.webp" class="d-block w-100"   alt="...">
        <div class="overlay"></div>
        <div class="carousel-caption d-none d-md-block">
          <h5>Women products</h5>
          <p>Brands : From ZARA , MAC and GUCCI</p>
        </div>
      </div>
      <div class="carousel-item" hieght="100vh">
        <img src="assets/img/slider/i2.webp" class="d-block w-100"    alt="...">
        <div class="overlay"></div>
        <div class="carousel-caption d-none d-md-block">
          <h5>Men products</h5>
          <p>Brands : From NIKE , ADDIDAS and BOSS </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/img/slider/i3.webp" class="d-block w-100"  alt="...">
        <div class="overlay"></div>
        <div class="carousel-caption d-none d-md-block">
          <h5>Men products</h5>
          <p>Brands : From NIKE , ADDIDAS and BOSS </p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>





   <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 id="offcanvasRightLabel">Offcanvas right</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      ...
    </div>
    </header>
<!--category-->
<section class="category" id="category">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ">
        <div class="overl">
          <h2 class="category-headding">women</h2>
          <p>new trend</p>
          <a class="aa" href="">shop now</a>
        </div>
        <div class="category-data position-relative">
<img src="assets/img/category/women.webp" class="img-fluid" alt="this is women photo">

<div class="category-info position-absolute">
  <h2 class="category-headding">women</h2>
  <p>new trend</p>
</div>

        </div>
      </div>
      <div class="col-md-6  ">
        <div class="overl1">
          <h2>men</h2>
          <p>new trend</p>
          <a href="" >shop now</a>
        </div>
        <div class="category-data position-relative">
        <img src="assets/img/category/men.webp" class="img-fluid" alt="this is women photo">
        <div class="category-info position-absolute">
  <h2>men</h2>
<p>new trend</p>
      </div>
    </div>
  </div>
    <div class="row">
       
      <div class="col-md-4 ">
     <div class="over">
      <h2>watches</h2>
      <p>new trend</p>
      <a href="#" >shop now</a>
     </div>
        <div class="category-data position-relative">

          <img src="assets/img/category/watches1.webp" class="img-fluid img-cat" alt="this is women photo">
          <div class="category-info position-absolute">
            <h2>watches</h2>
          <p>new trend</p>
          </div>
          
                  </div>
      </div>
      <div class="col-md-4 ">
        <div class="over1">
          <h2 class="h21">accessories</h2>
        <p class="p1">new trend</p>
        <a href="" >shop now</a>
        </div>
       <div class="category-data position-relative">
        <img src="assets/img/category/acc.webp" class="img-fluid img-cat" alt="this is women photo">
        <div class="category-info position-absolute">
          <h2>accessories</h2>
        <p>new trend</p>
      
        </div>
        
                </div>
      </div>
      <div class="col-md-4 ">
        <div class="over2">
          <h2>Shoes</h2>
          <p>new trend</p>
          <a href="" >shop now</a>
        </div>
        <div class="category-data position-relative ">
          <img src="assets/img/category/sho1.jpg" class="img-fluid img-cat" alt="this is women photo">
          <div class="category-info position-absolute">
            <h2>Shoes</h2>
          <p>new trend</p>
          
          </div>
          
                  </div>
      </div>
    </div>
  

  </section>





 <!--feature section-->
 <section class="feature" id="feature">
<div class="container">
<h2 class="feature-heading">Feature Products</h2>
<div class="row">
  <?php
  require_once("component.php");
  $db=new mysqli('localhost' , 'root' , '', 'jasmine_store11');
  $str="select * from feature";
  $res=$db->query($str);
  while($row=mysqli_fetch_assoc($res)){
    featureProduct($row['feature_picture'],$row['feature_name'],$row['post_price'],$row['feature_discription'],$row['product_id']);
  }
 
  
  ?>

</div>
 

</div>

  </section>





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
  Copyright &copy;2021 All rights reserved | This template is made with Baraa &hearts; Kenana;
</div>
</div>



</footer>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

    <script type="text/javascript">
var nav=document.getElementById('navs');
 console.log(nav);

 
$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll >500) {
	    $(".changec").css("background-color" , "#222222");
  
	  }

	  else{
		  $(".changec").css("background-color" , "transparent");  	
	  }
  })
})
</script>


  </body>
</html>
</body>
</html>

<?php
  


