<?php
include('../requiredfiles/connectiondb.php');
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["pswd"];
$mobile = $_POST["mob"];
$address = $_POST["address"];
$image = $_FILES["logo"]["name"];
$type = $_POST["type"];
$hasedPass = md5($password);
$response = array();
$sqlcheck = "SELECT * from vendorlogin where `email` = '{$email}'";

$rescheck = $con->query($sqlcheck);
$count = 0;
foreach ($rescheck as $rowcheck) {
    if ($rowcheck["email"]) {
        $count++;
    }
}

if ($count == 1) {
    $response["status"] = "already";
    echo json_encode($response);
} else {
    $timestamp = date("YmdHis");
    $newImageName = $timestamp . '_' . $image;
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
        $mail->Subject = 'Activation Code for Vendor';
        $mail->Body = '<html>
            <body align="center">
                <div style="width: 90%;background-color: #white;padding-top: 20px;padding-bottom: 20px;border-radius: 10px;border: 3px solid red" align="center">
                <div><img src="https://i.ibb.co/QC1KxRF/Redana-logo.png" style="border-radius: 50%;" height="100"></div>
                    <br>
                    <div>
                        <h1 style="color: red;">Activation Code</h1>
                    </div>
                    <div>
                        <h2 style="color: red;">Vendor Login</h2>
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
            if (move_uploaded_file($_FILES["logo"]["tmp_name"], "../images/" . $newImageName)) {
                $sql = "INSERT INTO vendorlogin (name,email,password,
                mobile_number,address,image,activation_code,activation_status,type) VALUES ('{$name}','{$email}',
                '{$hasedPass}','{$mobile}','{$address}','{$newImageName}','{$createdotp}','false','{$type}') ";
                $res = $con->query($sql);
                if ($res) {
                    $vendor_id = 0;
                    $sqlcheck = "SELECT * from vendorlogin where `email` = '{$email}'";
                    $rescheck = $con->query($sqlcheck);
                    $count = 0;
                    foreach ($rescheck as $rowcheck) {
                        if ($rowcheck["vendor_id"]) {
                            $vendor_id = $rowcheck["vendor_id"];
                        }
                    }
                    $_SESSION["vendor_email"] = $email;
                    $_SESSION["vendor_id"] = $vendor_id;
                    $_SESSION["vendor_name"] = $name;
                    $_SESSION["vendor_mobile"] = $mobile;
                    $_SESSION["vendor_address"] = $address;
                    $_SESSION["vendor_password"] = $password;
                    $_SESSION["vendor_image"] = $newImageName;
                    $response["status"] = "success";
                    echo json_encode($response);
                } else {
                    $response["status"] = "failed";
                    echo json_encode($response);
                }
            } else {
                $response["status"] = "failed";
                echo json_encode($response);
            }
        }
    } catch (Exception $e) {
        $response["status"] = "error";
        echo json_encode($response);
    }
}
?>
