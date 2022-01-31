<?php

$errorMSG = "";

$name = $_POST['name'];
$email = $_POST['email'];
$company = $_POST['company'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$message = nl2br($_POST['message']);

// 会社宛て
$bodyContent  = "名前： $name" . '<br/>';
$bodyContent .= "E-mail: $email" . '<br/>';
$bodyContent .= "会社名: $company" . '<br/>';
$bodyContent .= "住所: $address" . '<br/>';
$bodyContent .= "電話番号: $phone" . '<br/>';
$bodyContent .= "お問い合わせ内容:" . '<br/>';

$bodyContent .= "$message" . '<br/>';

// お客宛て
$bodyContent1  = "$name 様" . '<br/><br/>';
$bodyContent1 .= "この度はお問い合わせをいただき、誠にありがとうございます。" . '<br/>';
$bodyContent1 .= "お問い合わせいただいた内容は次の通りです。" . '<br/><br/>';
$bodyContent1 .= "====================【お問い合わせ内容】====================" . '<br/><br/>';
$bodyContent1 .= "[お名前]： $name" . "様" . '<br/>';
$bodyContent1 .= "[E-mail]： $email" . '<br/>';
$bodyContent1 .= "[お問い合わせ]：" . '<br/>';
$bodyContent1 .= "$message" . '<br/>';
$bodyContent1 .= "============================================================" . '<br/><br/>';
$bodyContent1 .= "担当者より改めてご連絡させていただきますので、" . '<br/>';
$bodyContent1 .= "今しばらくお待ちください。" . '<br/><br/>';
$bodyContent1 .= "以上、何卒よろしくお願い申し上げます。" . '<br/><br/>';
$bodyContent1 .= "=☆=★=☆=★=☆=★=☆=★=☆=★=☆=★=☆=★=☆=★=☆=★=☆=★=☆" . '<br/><br/>';
$bodyContent1 .= "株式会社さくらコミュニケーション" . '<br/>';
$bodyContent1 .= "〒187-0011 東京都小平市鈴木町1-466-18" . '<br/>';
$bodyContent1 .= "新小金井赤レンガ倉庫 2F-A" . '<br/>';
$bodyContent1 .= "URL: https://www.sakura-communication.co.jp" . '<br/><br/>';
$bodyContent1 .= "=☆=★=☆=★=☆=★=☆=★=☆=★=☆=★=☆=★=☆=★=☆=★=☆=★=☆";

$admin_email = 'st-nakano@sakura-communication.co.jp';
// $admin_email = 'jeet-khondker@sakura-communication.co.jp';

require 'PHPMailer/PHPMailerAutoload.php';
require_once 'PHPMailer/class.phpmailer.php';



    $mail = new PHPMailer;
    $mail->CharSet = 'UTF-8';
    $mail->isHTML(true);  // Set email format to HTML   
    $mail->isSMTP();                                   // Set mailer to use SMTP
    $mail->Host = 'sakura-communication.co.jp';                    // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                            // Enable SMTP authentication

    // $mail->Username = 'jeet-khondker@sakura-communication.co.jp';          // SMTP username
    // $mail->Password = 'jeetjavajapan'; // SMTP password

    $mail->Username = 'st-nakano@sakura-communication.co.jp';          // SMTP username
    $mail->Password = 'st19960419'; // SMTP password
    
    $mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                 // TCP port to connect to

    $mail->setFrom('st-nakano@sakura-communication.co.jp', 'Sakura Communication - Web');
    //$mail->addReplyTo('jeet.sakuracom@gmail.com', 'Sakura Communication - Sales Department');
    $mail->addAddress($admin_email);   // Add a recipient (Email To)
    //$mail->addCC('jeet.sakuracom@gmail.com');
    //$mail->addBCC('bcc@example.com');
	
	$today = date("Y/m/d_H:i");
    $mail->Subject = "さくらコミュニケーションHPから新規問い合わせ到着のお知らせ(".$today.")";
    $mail->Body    = $bodyContent;
    $mail->send();
    
    $mail->clearAddresses();
    
    $mail->addAddress($email);   // Add a recipient (Email To)
    $mail->Subject = "さくらコミュニケーションHPから新規問い合わせ送信完了のお知らせ";
    $mail->Body    = $bodyContent1;
    $mail->send();

    $success=true;

    if ($success && $errorMSG == ""){
       echo "success";
    }else{
        if($errorMSG == ""){
            echo "Something went wrong :(";
        } else {
            echo $errorMSG;
        }
    }

?>