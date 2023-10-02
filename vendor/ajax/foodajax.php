<?php
include('../requiredfiles/connectiondb.php');
session_start();
$way = $_POST["way"];
if($way == "accountsetting"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $mobile = $_POST["mobile"];
    $password = $_POST["pwsd"];
    $hasedpass = md5($password);
    $sql = "UPDATE vendorlogin SET name='{$name}',address='{$address}',mobile_number='{$mobile}',password='{$hasedpass}' WHERE email='{$email}'";
    $res = $con->query($sql);
    if($res){
        $_SESSION["vendor_name"] = $name;
        $_SESSION["vendor_mobile"] = $mobile;
        $_SESSION["vendor_address"] = $address;
        $_SESSION["vendor_password"] = $password;
        echo "success";
    }else{
        echo "failed";
    }
}else if($way == "updatelogo"){
    $image = $_FILES["logopic"]["name"];
    $timestamp = date("YmdHis");
    $newImageName = $timestamp . '_' . $image;
    $oldImageName = $_SESSION["vendor_image"];
    if (unlink("../images/" . $oldImageName)) {
        if (move_uploaded_file($_FILES["logopic"]["tmp_name"], "../images/" . $newImageName)) {
            $sql = "UPDATE vendorlogin SET image='{$newImageName}' WHERE email='" . $_SESSION['vendor_email'] . "'";
            $_SESSION["vendor_image"] = $newImageName;
            $res = $con->query($sql);
            if ($res) {
                echo "success";
            }
        } else {
            echo "Error uploading the new image.";
        }
    } else {
        echo "Error deleting the old image.";
    }
}else if($way == "foodname"){
    $foodname =  $_POST["food_name"];
    $cost = $_POST["cost"];
    $cuisines = $_POST["cuisines"];
    $COD = "false";
    $OP = "false";
    if (isset($_POST["chk"])) {
        foreach ($_POST["chk"] as $value) {
            if ($value == "COD") {
                $COD = "true";
            }
            if ($value == "OP") {
                $OP = "true";
            }
        }
    }
    $foodsnap = $_FILES["foodsnap"]["name"];
    $timestamp = date("YmdHis");
    $newImageName = $timestamp . '_' . $foodsnap;
    if(move_uploaded_file($_FILES["foodsnap"]["tmp_name"],"../foodimages/". $newImageName)){
        $sql = "INSERT INTO food_menu (vendor_id,food_name,food_cost,
        cuisines,cashondelivery,onlinepayment,food_snaps) VALUES ('".$_SESSION["vendor_id"]."','{$foodname}',
        '{$cost}','{$cuisines}','{$COD}','{$OP}','{$newImageName}') ";
        $res = $con->query($sql);
        if($res){
            $response = array();
            $response["status"] = "success";
            $response["imagename"] = $newImageName;
            $response["cod"] = $COD;
            $response["op"] = $OP;
            $response["foodname"] = $foodname;
            $response["cost"] = $cost;
            $response["cuisines"] = $cuisines;
            $checkid = "SELECT MAX(food_id) AS max_food_id FROM food_menu;";
            $rescheck = $con->query($checkid);
            $row = $rescheck->fetch_assoc();
            $response["foodid"] = $row['max_food_id'];
            echo json_encode($response);
        }else{
            echo "failed";
        }
    }else{
        echo "filefailed";
    }
}else if($way == "editfood"){
    if (unlink("../foodimages/" . $_POST["imagename"])) {
        $sql = "DELETE FROM food_menu WHERE food_id = " . $_POST["foodid"];
        $res = $con->query($sql);
        if ($res) {
            echo "success";
        } else {
            echo "failed";
        }
    }  
}else if ($way == "updatefood") {
    $foodid = $_POST["foodid"];
    $foodname = $_POST["food_name"];
    $cost = $_POST["cost"];
    $cuisines = $_POST["cuisines"];
    $COD = "false";
    $OP = "false";
    if (isset($_POST["chk"])) {
        foreach ($_POST["chk"] as $value) {
            if ($value == "COD") {
                $COD = "true";
            }
            if ($value == "OP") {
                $OP = "true";
            }
        }
    }
    $foodsnap = $_FILES["foodsnap"]["name"];
    $timestamp = date("YmdHis");
    $newImageName = $timestamp . '_' . $foodsnap;
    if ($foodsnap == "") {
        $sql = "UPDATE food_menu SET food_name='{$foodname}', food_cost='{$cost}', cuisines='{$cuisines}', cashondelivery='{$COD}', onlinepayment='{$OP}' WHERE food_id='{$foodid}'";
        $res = $con->query($sql);
        if ($res) {
            $response = array(
                "foodname" => $foodname,
                "foodcost" => $cost,
                "cuisines" => $cuisines,
                "cod" => $COD,
                "op" => $OP,
                "status" => "success",
                "type" => "noimage"
            );
            echo json_encode($response);
        } else {
            $response = array("status" => "failed");
            echo json_encode($response);
        }
    } else {
        $checkimage = "SELECT * FROM food_menu WHERE food_id = $foodid";
        $checkres = $con->query($checkimage);
        $row = $checkres->fetch_assoc();
        $oldimage = $row['food_snaps'];
        if (unlink("../foodimages/" . $oldimage)) {
            if (move_uploaded_file($_FILES["foodsnap"]["tmp_name"], "../foodimages/" . $newImageName)) {
                $sql = "UPDATE food_menu SET food_name='{$foodname}', food_cost='{$cost}', cuisines='{$cuisines}', cashondelivery='{$COD}', onlinepayment='{$OP}', food_snaps='{$newImageName}' WHERE food_id='{$foodid}'";
                $res = $con->query($sql);
                if ($res) {
                    $response = array(
                        "foodname" => $foodname,
                        "foodcost" => $cost,
                        "cuisines" => $cuisines,
                        "cod" => $COD,
                        "op" => $OP,
                        "status" => "success",
                        "type" => "image",
                        "foodsnap" => $newImageName
                    );
                    echo json_encode($response);
                } else {
                    $response = array("status" => "failed");
                    echo json_encode($response);
                }
            } else {
                $response = array("status" => "failed");
                echo json_encode($response);
            }
        }
    }
}else if($way == "activation"){
    $code = $_POST["code"];
    $checkcodesql = "SELECT * FROM vendorlogin WHERE vendor_id ='".$_SESSION['vendor_id']."'";
    $checkcoderes = $con->query($checkcodesql);
    if($checkcoderes){
        foreach($checkcoderes as $checkcoderow){
            if($checkcoderow["activation_code"] == $code){
                $activationsql = "UPDATE vendorlogin SET activation_status='true' WHERE vendor_id ='".$_SESSION['vendor_id']."'";
                $activationres = $con->query($activationsql);
                if($activationres){
                    $response = array("status" => "success");
                    echo json_encode($response);
                }else{
                    $response = array("status" => "error");
                    echo json_encode($response);
                }                
            }else{
                $response = array("status" => "invalid");
                echo json_encode($response);
            }
        }
    }
}
?>