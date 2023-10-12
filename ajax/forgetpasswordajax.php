<?php

session_start();

include('../requiredfiles/connectiondb.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);

$way = $_POST["way"];

if($way == "sendotp"){
    $response = array();
    $email = $_POST["email"];

    $checksql = "SELECT * FROM customerlogin WHERE `customer_mail` = '{$email}'";
    $checkres = $con->query($checksql);
    if(mysqli_num_rows($checkres) == 1){
        $forgetotp = rand(100000, 999999);

        try {
            // Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'redana.food@gmail.com';
            $mail->Password   = 'zibwucwdyhhzmdan';
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;
            $mail->setFrom('redana.food@gmail.com', 'Redana Team');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'Forget Password Code for Customer';
            $mail->Body = '<html>
                <body align="center">
                    <div style="width: 90%;background-color: #white;padding-top: 20px;padding-bottom: 20px;border-radius: 10px;border: 3px solid red" align="center">
                    <div><img src="https://i.ibb.co/QC1KxRF/Redana-logo.png" style="border-radius: 50%;" height="100"></div>
                        <br>
                        <div>
                            <h1 style="color: red;">Activation Code</h1>
                        </div>
                        <div>
                            <h2 style="color: red;">Customer Code</h2>
                        </div>
                        <br>
                        <div>
                            <div style="width: 40%;background-color: red;border-radius: 5px;">
                                <h1 style="color: white;">'. $forgetotp .'</h1>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div align="center">
                        <p style="color:red">© 2023 Redana - All Rights Reserved.</p>
                        <p style="color:red;font-weight:800">Design & Developed by CragX</p>
                    </div>
                </body>
            </html>';
    
            if ($mail->send()) {
                $forgetsql = "UPDATE customerlogin SET customer_forgetpasswordcode = '{$forgetotp}',customer_forgetpasswordstatus ='true' WHERE customer_mail= '{$email}'";
                $forgetres = $con->query($forgetsql);
    
                if($forgetres){
                    $_SESSION["customer_forgetpasswordstatus"] = "true";
                    $_SESSION["customer_mail"] = $email;
                    $response["status"] = "success";
                    echo json_encode($response);
                }else{
                    $response["status"] = "failed";
                    echo json_encode($response);
                }
                
            }
        } catch (Exception $e) {
            $response["status"] = "failed";
            echo json_encode($response);
        }
    }else{
        $response["status"] = "checkmail";
        echo json_encode($response);
    }
}else if($way == "forgetpasswordotp"){
    $otp = $_POST["otp"];
    $password = $_POST["password"];

    $encrptpass = md5($password);

    $checkedotp = "";

    $checkotpsql = "SELECT * FROM customerlogin WHERE `customer_mail` = '{$_SESSION["customer_mail"]}'";
    $checkotpres = $con->query($checkotpsql);

    if($checkotpres){

        foreach($checkotpres as $checkotprow){
            $checkedotp = $checkotprow["customer_forgetpasswordcode"];
        }

        if($checkedotp == $otp){
            $updatesql = "UPDATE customerlogin SET 	customer_password= '{$encrptpass}', customer_forgetpasswordcode = 'novalue',customer_forgetpasswordstatus ='false' WHERE customer_mail= '{$_SESSION["customer_mail"]}'";
            $updateres = $con->query($updatesql);
    
            if($updateres){
                session_destroy();
                // echo "success";
                $response["status"] = "success";
                echo json_encode($response);
            }
        }else{
            // echo "inavlidotp";
            $response["status"] = "invalidotp";
            echo json_encode($response);
        }
        
    }else{
        // echo "failed";
        $response["status"] = "failed";
        echo json_encode($response);
    }
}
?>