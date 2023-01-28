<?php
$localhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "jasmine_store11";
$conn=mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
if(isset($_POST['insert'])) {
    $Product_Name = $_POST["Product_Name"];
    $Product_Price = $_POST["Product_Price"];
    $Category = $_POST["Category"];
    $description = $_POST["description"];
    $name=$_FILES['file']['name'];
    $temp_name=$_FILES['file']['tmp_name'];
    if(isset($name)and !empty($name)){
        $location='./assets/img/products/';
        if(move_uploaded_file($temp_name,$location.$name)){
            $path=$location.$name;
            $sql = "INSERT into products(product_name,price,product_discription,product_picture,category_id) VALUES ('".$Product_Name."','".$Product_Price."','".$description."','".$path."','". $Category ."')";
            $conn->query($sql);
            $conn->commit();
            $conn->close();
            echo"<script>alert('your order have been confirmed we will call u soon !')</script>";       

            } else {
                echo "Errors";
            }
        }
    }

header("location:addProduct.php");

    ?>