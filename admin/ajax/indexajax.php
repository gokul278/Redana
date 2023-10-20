<?php
include('../requiredfiles/connectiondb.php');
session_start();
$username = $_POST["username"];
$password = $_POST["password"];
$type = $_POST["type"];

$sql = "SELECT * FROM adminlogin WHERE `username` = '{$username}' && `type` = '{$type}'";
$res = $con->query($sql);
$response = array();
if(mysqli_num_rows($res) == 1){
    foreach($res as $row){
        if(md5($password) == $row["password"]){
            $_SESSION["admin_id"] = $row["admin_id"];
            $_SESSION["admin_username"] = $row["username"];
            $_SESSION["admin_password"] = $password;
            $response["status"] = "success";
        }else{
            $response["status"] = "checkpass";
        }
    }
}else{
    $response["status"] = "notexits";
}

echo json_encode($response);
?>