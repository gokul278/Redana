<?php

session_start();

include('../requiredfiles/connectiondb.php');


$way = $_POST["way"];

$response = array();

if($way == "loginaccount"){
    $username = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM customerlogin WHERE `customer_mail` = '{$username}'";
    $res = $con->query($sql);

    if(mysqli_num_rows($res) == 1){
        foreach($res as $row){
            if(md5($password) == $row["customer_password"]){
                $_SESSION["customer_id"] = $row["customer_id"];
                $_SESSION["customer_firstname"] = $row["customer_firstname"];
                $_SESSION["customer_lastname"] = $row["customer_lastname"];
                $_SESSION["customer_email"] = $row["customer_mail"];
                $_SESSION["customer_mobilenumber"] = $row["customer_mobileno"];
                $_SESSION["customer_password"] = $password;
                $_SESSION["customer_activation"] = $row["customer_activationstatus"];
                $_SESSION["customer_forgetpasswordcode"] = $row["customer_forgetpasswordcode"];
                $_SESSION["customer_forgetpasswordstatus"] = $row["customer_forgetpasswordstatus"];
                $response["status"] = "success";
                if($row["customer_activationstatus"] == "false"){
                    $response["activationstatus"] = "false";
                }else{
                    $response["activationstatus"] = "true";
                }
                echo json_encode($response);
            }else{
                $response["status"] = "checkpass";
                echo json_encode($response);
            }
        }
    }else{
        $response["status"] = "notexits";
        echo json_encode($response);
    }
}else if($way == "activationcode"){
    $activationcode = $_POST["activationcode"];

    $sql = "SELECT * FROM customerlogin WHERE `customer_mail` = '{$_SESSION["customer_email"]}'";
    $res = $con->query($sql);
    $activationcheckcode = "";
    foreach($res as $row){
        $activationcheckcode = $row["customer_activatiioncode"];
    }

    if($activationcheckcode == $activationcode){
        $updatestatussql = "UPDATE customerlogin SET customer_activationstatus='true' WHERE customer_mail ='".$_SESSION['customer_email']."'";
        $resstatus = $con->query($updatestatussql);

        if($resstatus){
            $_SESSION["customer_activation"] = "true";
            $response["status"] = "success";
            echo json_encode($response);
        }else{
            $response["status"] = "failed";
            echo json_encode($response);
        }
    }else{
        $response["status"] = "invalid";
        echo json_encode($response);
    }
}
?>