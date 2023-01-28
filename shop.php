<?php
if(isset($_POST['logout'])){
  
session_destroy();
header('location:login2.php');
}
 ?>
<?php

require_once('component.php');
session_start();
if (isset($_POST['add'])){
  try {
    $db=new mysqli('localhost' , 'root' , '', 'jasmine_store11');
   
    
    $str="select * from products where product_id=".$_POST['product_id']."";
    $result=$db->query($str);
    while ($row = mysqli_fetch_assoc($result)){
      $qryStr = "INSERT INTO `cart` (`user_id`,`price`, `product_name`, `product_id`, `quantity`,`product_picture`) VALUES ('".$_SESSION['Userid']."','". $row['price'] ."', '" . $row['product_name'] . "','".$row['Product_id']."','". 1 ."','". $row['product_picture'] ."' )";        
  $rs = $db->query($qryStr);
  if($rs==1){
    echo "<script>alert('Product has been added successfully...!')</script>";
    echo "<script>window.location = 'shop.php'</script>";
  }
    $db->commit();
    $db->close();
}
    unset($_POST['add']);

} catch (Exception $e) {
    echo "sth wrong";

}}

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
    <title>Jasmine Store - Shop</title>
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
<form action="shop.php" method="post">
<button class="bg-white btn btn-outline-none mx-3" type="submit" name="logout"><i class="fa fa-sign-out fs-5 bg-white " aria-hidden="true"></i></button>
        </form>
      </div>
    </div>
 
</nav>
</header>
  <!--end nav -->
    <section class="overview py-5" id="overview">
<div class="container">
  
<h2 class="py-5">product overview</h2>
<div class="row justify-content-between flex-row-reverse">
  <div class="col-lg-4">
    
    </div>
<div class="col-lg-6">






<nav>
   <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all" aria-selected="true">all products</button>
    <button class="nav-link" id="nav-women-tab" data-bs-toggle="tab" data-bs-target="#nav-women" type="button" role="tab" aria-controls="nav-women" aria-selected="false">women</button>
    <button class="nav-link " id="nav-men-tab" data-bs-toggle="tab" data-bs-target="#nav-men" type="button" role="tab" aria-controls="nav-men" aria-selected="false">men</button>
    <button class="nav-link" id="nav-accessories-tab" data-bs-toggle="tab" data-bs-target="#nav-accessories" type="button" role="tab" aria-controls="nav-accessories" aria-selected="false">accessories</button>
    <button class="nav-link" id="nav-shoes-tab" data-bs-toggle="tab" data-bs-target="#nav-shoes" type="button" role="tab" aria-controls="nav-shoes" aria-selected="false">shoes</button>
    <button class="nav-link" id="nav-watches-tab" data-bs-toggle="tab" data-bs-target="#nav-watches" type="button" role="tab" aria-controls="nav-watches" aria-selected="false">watches</button>
   </div>
</nav>

</div>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
  <div class="container">

    <div class="row">
 
    <?php

$sql="select *from products";
$db=new mysqli('localhost','root','','jasmine_store11');
$result=$db->query($sql);
if($result->num_rows>0){
  while($row=mysqli_fetch_assoc($result)){
    component($row['product_name'],$row['product_discription'],$row['price'],$row['product_picture'],$row['Product_id']);
  }
}
else{
  echo "there is no product to buy ";
}

?>
    </div>
  </div>  
  
  
  
  </div>
  <div class="tab-pane fade" id="nav-women" role="tabpanel" aria-labelledby="nav-women-tab">
    <div class="container">

      <div class="row">
      <?php

$sql="select *from products";
$db=new mysqli('localhost','root','','jasmine_store11');
$result=$db->query($sql);
if($result->num_rows>0){
  while($row=mysqli_fetch_assoc($result)){
    if($row['category_id']==2)
    component($row['product_name'],$row['product_discription'],$row['price'],$row['product_picture'],$row['Product_id']);
  }
}
else{
  echo "there is no product to buy ";
}

?>
      </div>
    </div>  
    
  </div>
  <div class="tab-pane fade" id="nav-men" role="tabpanel" aria-labelledby="nav-men-tab">

    <div class="container">

      <div class="row">
        
      <?php

$sql="select *from products";
$db=new mysqli('localhost','root','','jasmine_store11');
$result=$db->query($sql);
if($result->num_rows>0){
  while($row=mysqli_fetch_assoc($result)){
    if($row['category_id']==1)
    component($row['product_name'],$row['product_discription'],$row['price'],$row['product_picture'],$row['Product_id']);
  }
}
else{
  echo "there is no product to buy ";
}

?>
      </div>
    </div>  
    
  </div>
  <div class="tab-pane fade" id="nav-accessories" role="tabpanel" aria-labelledby="nav-accessories-tab">
    <div class="container">

      <div class="row">
      
      <?php

$sql="select *from products";
$db=new mysqli('localhost','root','','jasmine_store11');
$result=$db->query($sql);
if($result->num_rows>0){
  while($row=mysqli_fetch_assoc($result)){
    if($row['category_id']==3)
    component($row['product_name'],$row['product_discription'],$row['price'],$row['product_picture'],$row['Product_id']);
  }
}
else{
  echo "there is no product to buy ";
}

?>
      
      </div>
    </div>  
    
  </div>
  <div class="tab-pane fade" id="nav-shoes" role="tabpanel" aria-labelledby="nav-shoes-tab">

    <div class="container">

      <div class="row">
        
      <?php

$sql="select *from products";
$db=new mysqli('localhost','root','','jasmine_store11');
$result=$db->query($sql);
if($result->num_rows>0){
  while($row=mysqli_fetch_assoc($result)){
    if($row['category_id']==4)
    component($row['product_name'],$row['product_discription'],$row['price'],$row['product_picture'],$row['Product_id']);
  }
}
else{
  echo "there is no product to buy ";
}

?>
      </div>
    </div>  
    
  </div>
  <div class="tab-pane fade" id="nav-watches" role="tabpanel" aria-labelledby="nav-watches-tab">

    <div class="container">

      <div class="row">
      <?php

$sql="select *from products";
$db=new mysqli('localhost','root','','jasmine_store11');
$result=$db->query($sql);
if($result->num_rows>0){
  while($row=mysqli_fetch_assoc($result)){
    if($row['category_id']==5)
    component($row['product_name'],$row['product_discription'],$row['price'],$row['product_picture'],$row['Product_id']);
  }
}
else{
echo "there is no product to buy ";
}

?>
  
      </div>
    </div>  
    
  </div>

</div>
</div>
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
  Copyright &copy;2021 All rights reserved | This template is made with Baraa&hearts;Kenana
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