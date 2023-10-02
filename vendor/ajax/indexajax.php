<?php
include('../requiredfiles/connectiondb.php');
session_start();
$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM vendorlogin WHERE `email` = '{$username}'";
$res = $con->query($sql);

if(mysqli_num_rows($res) == 1){
    foreach($res as $row){
        if(md5($password) == $row["password"]){
            $_SESSION["vendor_email"] = $row["email"];
            $_SESSION["vendor_id"] = $row["vendor_id"];
            $_SESSION["vendor_name"] = $row["name"];
            $_SESSION["vendor_mobile"] = $row["mobile_number"];
            $_SESSION["vendor_address"] = $row["address"];
            $_SESSION["vendor_password"] = $password;
            $_SESSION["vendor_image"] = $row["image"];
            echo "success";
        }else{
            echo "checkpass";
        }
    }
}else{
    echo "notexits";
}
?>