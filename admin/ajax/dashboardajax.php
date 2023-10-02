<?php
include('../requiredfiles/connectiondb.php');
session_start();
$type = $_POST["type"];
$response = array();
if($type == "updateuser"){
    $username = $_POST["email"];
    $password = $_POST["password"];
    $hasedpass = md5($password);
    $sql = "UPDATE adminlogin SET password = '{$hasedpass}' WHERE username = '{$username}'";
    $res = $con->query($sql);

    if($res){
        $_SESSION["password"] = $password;
        $response["status"] = "success";
    }else{
        $response["status"] = "failed";
    }
}else if($type == "removefood"){
    $foodid = $_POST["foodid"];
    $imagesql = "SELECT * FROM `food_menu` WHERE food_id='$foodid'";
    $imageres = $con->query($imagesql);
    if($imageres){
        foreach($imageres as $imagerow){
            $image = $imagerow["food_snaps"];
            $removeimage = '../../vendor/foodimages/'.$image;
            if(unlink($removeimage)){
                $sql = "DELETE FROM `food_menu` WHERE food_id='$foodid'";
                $res = $con->query($sql);
                if($res){
                    $response["status"] = "success";
                }else{
                    $response["status"] = "failed";
                }
            }
        }
    }    
}else if($type == "removevendor"){
    $vendorid = $_POST["vendorid"];
    $imagesql = "SELECT * FROM `vendorlogin` WHERE vendor_id='$vendorid'";
    $imageres = $con->query($imagesql);
    if($imageres){
        foreach($imageres as $imagerow){
            $image = $imagerow["image"];
            $removeimage = '../../vendor/images/'.$image;
            if(unlink($removeimage)){
                $sql = "DELETE FROM `vendorlogin` WHERE vendor_id='$vendorid'";
                $res = $con->query($sql);
                if($res){
                    $imagesql = "SELECT * FROM `food_menu` WHERE vendor_id='$vendorid'";
                    $imageres = $con->query($imagesql);
                    if($imageres){
                        foreach($imageres as $imagerow){
                            $image = $imagerow["food_snaps"];
                            $removeimage = '../../vendor/foodimages/'.$image;
                            unlink($removeimage);
                        }
                    }    
                    $detelesql = "DELETE FROM `food_menu` WHERE vendor_id='$vendorid'";
                    $deleteres = $con->query($detelesql);
                    if($deleteres){
                        $response["status"] = "success";
                    }else{
                        $response["status"] = "failed";
                    }                    
                }else{
                    $response["status"] = "failed";
                }
            }
        }
    }    
}

echo json_encode($response);
?>