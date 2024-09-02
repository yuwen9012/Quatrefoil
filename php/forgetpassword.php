<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require dirname(__FILE__) . '/mailer/Exception.php';
require dirname(__FILE__) . '/mailer/PHPMailer.php';
require dirname(__FILE__) . '/mailer/SMTP.php';


include("connect.php");

$select_db = mysqli_select_db($db_link, "quatrefoil");
$email = $_POST["email"];

if (isset($email)){
    $newPwd= generateRandomPassword(8);

    $sql_update = $db_link->prepare("UPDATE users SET userpwd=? WHERE email=?");
    $sql_update->bind_param("ss", $newPwd, $email);

    if($sql_update->execute()){
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';  // 指定SMTP伺服器
            $mail->SMTPAuth   = true;
            $mail->Username = "quatrefoil4season@gmail.com"; // SMTP帳號
            $mail->Password = "dqqistulltvnpiuu"; // SMTP密碼
            $mail->SMTPSecure = 'tls'; // 啟用TLS加密
            $mail->Port       = 587; // 設置連接埠

            $mail->CharSet = 'UTF-8';

            $mail->setFrom("quatrefoil4season@gmail.com");
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = '四季更褶 忘記密碼';
            $mail->Body    = "您的新密碼是：{$newPwd}  為了您的帳戶安全，建議您登入後進行修改密碼。";

            $mail->send();

            $response= "新密碼已寄送至信箱。";

        } catch (Exception $e) {
            $response= "郵件發送失敗: {$mail->ErrorInfo}";
        }

    } else{
        $response= "發生錯誤，請稍後再試";
    }

} else{
    $response= "發生錯誤，請稍後再試";
}

function generateRandomPassword($length = 8) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $randomPassword = '';

    for ($i = 0; $i < $length; $i++) {
        $randomPassword .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomPassword;
}

echo "<script type='text/javascript'>alert('$response'); location.href = '../login.php';</script>";
?>

