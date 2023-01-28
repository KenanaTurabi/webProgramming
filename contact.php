<?php
if(isset($_POST['logout'])){
  
session_destroy();
header('location:login2.php');
}
 ?>
<?php
session_start();
$flag=" ";
$var=0;
use PHPMailer\PHPMailer\PHPMailer;
require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once'phpmailer/SMTP.php';
$mail = new PHPMailer(true);
if(isset($_POST['Submit'])){
    $var=1;
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Email=$_POST['Email'];
    $Phone=$_POST['Phone'];
    $Msg=$_POST['Msg'];
    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth =true;
        $mail->Username='jasminestore2001@gmail.com';
        $mail->Password='Jasmine2001#';
        $mail->SMTPSecure= PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port ='587';
        $mail->setFrom('jasminestore2001@gmail.com');
        $mail->addAddress('jasminestore2001@gmail.com');
        $mail->isHTML(true);
        $mail->Subject='Message Received (Contact Page)';
        $mail->Body="<h3> Name : $First_Name $Last_Name <br> Email: $Email <br>Message : $Msg </h3>";
        $mail->send();
        $flag="Message sent! Thank you for contacting us";

    }catch(Exception $e){
        ;
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
    <link rel="stylesheet" href="assets/css/contact-style.css">
    <link rel="stylesheet" href="ContactUs.css">
    <title>Jasmine Store - Contact</title>
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
<form action="contact.php" method="post">
<button class="bg-white btn btn-outline-none mx-3" type="submit" name="logout"><i class="fa fa-sign-out fs-5 bg-white " aria-hidden="true"></i></button>
        </form>
      </div>
    </div>
 
</nav>
</header>
  <!--end nav -->
<div class="" >

</div>
<!--contact form-->




<!--contact form-->

<section class="sec_cont py-5">
    <div class="container">
        <div class="contactInfo">
            <div>
                <h2>Contact Us</h2>
                <ul class="info">
                    <li>
                        <span><img src="imges/location.png" alt=""></span>
                        <span>2912 Meadowbrook Road <br>
                       Los Angeles, CA <br>
                       90017</span>
                    </li>
                    <li>
                        <span><img src="imges/mail.png" alt=""></span>
                        <span>jasminestore2001@gmail.com</span>
                    </li>
                    <li>
                        <span><img src="imges/call.png" alt=""></span>
                        <span>310-286-1623</span>
                    </li>
                </ul>
            </div>
            <ul class="sci">
                <li><a href="https://ar-ar.facebook.com/"><img src="imges/facebook.png" alt=""></a></li>
                <li><a href="https://twitter.com/i/flow/login"><img src="imges/twitter.png" alt=""></a></li>
                <li><a href="https://www.instagram.com/"><img src="imges/insta.png" alt=""></a></li>
                <li><a href="https://www.linkedin.com"><img src="imges/linkedin.png" alt=""></a></li>
                <li><a href="https://www.whatsapp.com/"><img src="imges/whatsapp.png" alt=""></a></li>
            </ul>
        </div>


        <div class="contactForm">
            <h2>Send a Message</h2>
            <div class="formBox">
                <form action="contact.php" method="post" name="form" class="formBox">
                <div class="inputBox w50">

                    <input type="text" required name="First_Name">
                    <span>First Name</span>
                </div>
                <div class="inputBox w50">
                    <input type="text" required name="Last_Name">
                    <span>Last Name</span>
                </div>
                <div class="inputBox w50">
                    <input type="email" required name="Email">
                    <span>Email Address</span>
                </div>
                <div class="inputBox w50">
                    <input type="text" required name="Phone">
                    <span>Mobile Number</span>
                </div>
                <div class="inputBox w100">
                    <textarea required name="Msg"></textarea>
                    <span>Write your message here ...</span>
                </div>
                <div class="inputBox w100">
                    <input type="submit" value="Send" name="Submit">
                </div>


        </form>
        </div>
        </div>
        <span>
          <?php
          if($var==1){echo "<script>alert('$flag')</script>";
$flag=" ";}
?>
        </span>
    </div>
</section>








<!--end of contact form -->








<!--end of contact form -->




<!--footer -->
<footer class="footer " id="footer">
<div class="container">
<div class="row">
  <div class="col-lg-3">
    <div class="cateories text-light my-5">
      <h4 class="mb-5">categories</h4>
      <ul>
        <li><a href="#"><span>women</span> </a></li>
        <li><a href="#"><span>men</span> </a></li>
        <li><a href="#"><span>shoes</span> </a></li>
        <li><a href="#"><span>watches</span> </a></li>
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