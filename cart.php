
<?php
 session_start();
if(isset($_POST['confirm'])){
  $db=new mysqli('localhost' , 'root' , '', 'jasmine_store11');
  $sql = "INSERT into shipping(user_id,cart_id,address,phone_number) VALUES ('". $_SESSION['Userid'] ."','".$_POST['cart_id']."','".$_POST['address']."','".$_POST['pnum']."')"; 
   $db->query($sql);
  $db->commit();
  $db->close(); 
   echo"<script>alert('your order have been confirmed we will call u soon !')</script>";       
}

?>


<?php
if(isset($_POST['logout'])){
  
session_destroy();
header('location:login2.php');
}
 ?>
 <?php
 session_start();
require_once('component.php');
 if(isset($_POST['remove'])){
  try {
    $db=new mysqli('localhost' , 'root' , '', 'jasmine_store11');
    $str="delete from cart where product_id='".$_POST['p-id']."' and user_id='".$_SESSION['Userid']."'";
    $db->query($str);
    $db->commit();
    $db->close();
    echo "<script>alert('Product has been Removed...!')</script>";
    echo "<script>window.location = 'cart.php'</script>";
} catch (Exception $e) {
    echo "sth wrong";

}

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

    <title>Jasmine Store - Cart</title>
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
    <a href="cart.php"></a> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
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







<div class="container-fluid">
    <div class="row px-5 py-5" >
        <div class="col-md-7">
            <div class="shopping-cart py-5 ">
                <h6 class="pt-5">My Cart</h6>
                <hr>

                <?php

                $total = 0;
                    
                      $sql="select *from cart";
                       // $product_id = array_column($_SESSION['cart'], 'product_id');
                        $db=new mysqli('localhost','root','','jasmine_store11');
                        $result=$db->query($sql);
                        while ($row = mysqli_fetch_assoc($result)){
                          if($row['user_id']==$_SESSION['Userid']){
                                    cartElement($row['product_picture'], $row['product_name'],$row['price'], $row['product_id'],$row['cart_id']);
                                    $total = $total + (int)$row['price'];
                          }
                          
                            }
                        
                   

                ?>

            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

            <div class="pt-5">
                <h6 class="pt-4"> PRICE DETAILS</h6>
                <hr>
                <div class="row price-details">
                    <div class="col-md-5">
                        <?php
                            if (isset($_SESSION['cart'])){
                              $sql="select *from cart";
                             
                              $db=new mysqli('localhost','root','','jasmine_store1');
                              $result=$db->query($sql);
                              $count=0;
                              while ($row = mysqli_fetch_assoc($result)){
                                if($row['user_id']==$_SESSION['Userid'])
                                 $count  =$count+1;
                              }
                               
                                echo "<h6>Price ($count items)</h6>";
                            }else{
                                echo "<h6>Price (0 items)</h6>";
                            }
                        ?>
                        <h6>Delivery Charges</h6>
                        <hr>
                        <h6>Amount Payable</h6>
                    </div>
                    <div class="col-md-5">
                        <h6>$<?php echo $total; ?></h6>
                        <h6 class="text-success">FREE</h6>
                        <hr>
                        <h6>$<?php
                            echo $total;
                            ?></h6>
                    </div>
                </div>
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