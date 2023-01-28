<?php

if (isset($_POST['user_signUp_name']) && isset($_POST['user_signUp_email']) && isset($_POST['user_signUp_password'])) {

    $name2 = $_POST['user_signUp_name'];
    echo $name2;

    $email2 = $_POST['user_signUp_email'];
    echo $email2;
    $password2 = $_POST['user_signUp_password'];
    echo $password2;
    try {
        $db=new mysqli('localhost' , 'root' , '', 'jasmine_store11');
        $qryStr = "INSERT INTO `user` (`user_name`,`user_email`,`User_pass` ) VALUES ('" . $name2 . "','".$email2."', '".$password2."' )";
        $rs = $db->query($qryStr);
        $db->commit();
        $db->close();
        if($rs==1){
            header('Location:login2.php' );
        }else{
            echo "sth wrong";
        }
    } catch (Exception $e) {
        echo "sth wrong";

    }
}


?>