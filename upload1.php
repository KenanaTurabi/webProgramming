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
            $str="select * from products where product_name='".$Product_Name."'";
            $res=$conn->query($str);
            $p_id=0;
            while($row=mysqli_fetch_assoc($res)){
             $sql = "INSERT into feature(feature_name,post_price,feature_discription,feature_picture,product_id) VALUES ('".$Product_Name."','".$Product_Price."','".$description."','".$path."','".$row['Product_id']."')";
             
            $conn->query($sql);
            $st="update products set price='".$Product_Price."'";
            $conn->query($st);

            }
           
            $conn->commit();
            $conn->close();
                echo "<script>alert('Feature added successfully')</script>";

            } else {
                echo "Errors";
            }
        }
    }

header("location:addFeature.php");
    ?>