<?php
include('../requiredfiles/connectiondb.php');
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$mobilenumber = $_POST["mobilenumber"];
$password = $_POST["password"];
$name = $firstname.' '.$lastname;
$encrptpass = md5($password);
$customer_id = '';

$mail = new PHPMailer(true);

$response = array();


$sqlcheck = "SELECT * from customerlogin where `customer_mail` = '{$email}'";

$rescheck = $con->query($sqlcheck);
$count = 0;
foreach ($rescheck as $rowcheck) {
    if ($rowcheck["customer_mail"]) {
        $count++;
    }
}

if ($count == 1) {
    $response["status"] = "already";
    echo json_encode($response);
}else{
    $createdotp = rand(100000, 999999);
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
        $mail->addAddress($email, $name);
        $mail->isHTML(true);
        $mail->Subject = 'Activation Code for Customer';
        $mail->Body = '<html>
            <body align="center">
                <div style="width: 90%;background-color: #white;padding-top: 20px;padding-bottom: 20px;border-radius: 10px;border: 3px solid red" align="center">
                <div><img src="https://i.ibb.co/QC1KxRF/Redana-logo.png" style="border-radius: 50%;" height="100"></div>
                    <br>
                    <div>
                        <h1 style="color: red;">Activation Code</h1>
                    </div>
                    <div>
                        <h2 style="color: red;">Customer Login</h2>
                    </div>
                    <br>
                    <div>
                        <div style="width: 40%;background-color: red;border-radius: 5px;">
                            <h1 style="color: white;">'. $createdotp .'</h1>
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
            $sql = "INSERT INTO customerlogin (customer_firstname,customer_lastname,customer_mail,customer_mobileno,customer_password,customer_activatiioncode,customer_activationstatus)
            VALUES ('{$firstname}','{$lastname}','{$email}','{$mobilenumber}','{$encrptpass}','{$createdotp}','false')";
            $res = $con->query($sql);

            if($res){
                $sqlid = "SELECT * FROM customerlogin where `customer_mail` = '{$email}'";
                $resid = $con->query($sqlid);
                foreach ($resid as $rowid) {
                    if ($rowid["customer_id"]) {
                        $customer_id = $rowid["customer_id"];
                    }
                }
                $_SESSION["customer_id"] = $customer_id;
                $_SESSION["customer_firstname"] = $firstname;
                $_SESSION["customer_lastname"] = $lastname;
                $_SESSION["customer_email"] = $email;
                $_SESSION["customer_mobilenumber"] = $mobilenumber;
                $_SESSION["customer_password"] = $password;
                $_SESSION["customer_activation"] = "false";
                $response["status"] = "success";
                echo json_encode($response);
            }else{
                $response["status"] = "failed";
                echo json_encode($response);
            }
            
        }
    } catch (Exception $e) {
        // $response["status"] = "error";
        $response["status"] = "failed";
        echo json_encode($response);
    }
}


?>