<?php
session_start();
$flag=" ";
if (isset($_POST['user_login_name'])&&isset($_POST['user_login_pass'])){
    $user_name=$_POST['user_login_name'];
    $user_pass=$_POST['user_login_pass'];
    try{
        $db=new mysqli('localhost' ,'root','','jasmine_store11');  
        $qryStr="select * from admin";
        $result=$db->query($qryStr);
        $f=0;
        while($row = mysqli_fetch_assoc($result)){

            if($row['admin_email']==$user_name && $user_pass==$row['admin_pass']){
             $f=1;   
                header('location:admin.php');
            }
        }
            
                $qryStr1="select * from user"; $result=$db->query($qryStr1);
                while($row = mysqli_fetch_assoc($result)){
               
                if($row['user_email']==$user_name && $user_pass==$row['user_pass']){
                    $_SESSION['Userid']=$row['user_id'];
                    $_SESSION['ismember']=1;
                    header('location:index.php');              
            } else {
                $flag="incorrect User_pass or / and User_Name";
            }}
        
        
      
        $db->close();}
        
    catch(Exception $e){
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jasmine Store- Login</title>
</head>
<link rel="stylesheet" href="login2Style.css">
<script type="text/javascript "src="login2js.js"></script>

<body>

<div class="container">
    <!--Data or Content-->
    <div class="box-1">
        <div class="content-holder">
            <h2>Hello!</h2>
            <p>welcome to Jasmine Online Store  </p>
            <button class="button-1"  onclick="signup()">Sign up</button>
            <button class="button-2" onclick="login()">Login</button>

        </div>
    </div>


    <!--Forms-->
    <div class="box-2">
        <div class="login-form-container">
            <h1>Login Form</h1>
            <form action="login2.php" method="post">
                <input type="text" placeholder="UserEmail" class="input-field"name="user_login_name">
                <br><br>
                <input type="password" placeholder="Password" class="input-field" name="user_login_pass">
                <br><br>
                <button class="login-button" name="log" type="submit">Login</button>
                <br><br>


            </form>
            <center>
           <span style="color: red " >
            <?php
            echo "<span>$flag</span> ";
            $flag=" ";
            ?>
        </span>
            </center>
        </div>


        <!--Create Container for Signup form-->
        <div class="signup-form-container">
            <h1>Sign Up Form</h1>
            <form action="signUp2.php" method="post">
                <input type="text" placeholder="Username" name= "user_signUp_name" class="input-field">
                <br><br>
                <input type="email" placeholder="Email" name= "user_signUp_email" class="input-field">
                <br><br>
                <input type="password" placeholder="Password"name= "user_signUp_password" class="input-field">
                <br><br>
                <button class="signup-button" type="submit">Sign Up</button>
                <br><br>
            </form>
        </div>



    </div>
</div>
</body>
</html>