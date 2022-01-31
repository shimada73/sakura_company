<?php

use PHPMailer\PHPMailer\PHPMailer;

$recaptcha_response = $_POST['recaptcha_response'];
$recaptcha_secret = '6LeePwgdAAAAAJacRpYjk6auWpfP7jp4e27j9TPK';
 
$recaptch_url = 'https://www.google.com/recaptcha/api/siteverify?secret=';
$recaptcha = file_get_contents( 
  $recaptch_url.$recaptcha_secret. '&response='.$recaptcha_response
);
$recaptcha = json_decode($recaptcha);
 
print_r('$recaptcha->score : '.var_export($recaptcha->score,true));
if ($recaptcha->score >= 0.5) {
  // reCAPTCHA合格
} else {
  // reCAPTCH不合格。ボットの可能性があるので、送信しない
}

function h($s) { //スクリプトをエスケープ（XSS対策）
  return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}

$errorMSG = "";

if( empty(h($_POST['name']))  || empty(h($_POST['email'])) || 
	empty(h($_POST['phone'])) || empty(h($_POST['message'])) ){
	$errorMSG = "必須項目が空欄。";
	echo $errorMSG;
	exit('必須項目が空欄のため、処理を停止します。');
}

$name = h($_POST['name']);
$email = h($_POST['email']);
$company = h($_POST['company']);
$address = h($_POST['address']);
$phone = h($_POST['phone']);
$message = nl2br(h($_POST['message']));

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
$bodyContent1 .= "$message" . '<br/><br/>';
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

$admin_email = 'webtoiawase@sakura-communication.co.jp';
// $admin_email = 'jeet-khondker@sakura-communication.co.jp';

require 'PHPMailer/PHPMailerAutoload.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';


    $mail = new PHPMailer;
    $mail->CharSet = 'UTF-8';
    $mail->isHTML(true);  // Set email format to HTML   
    $mail->isSMTP();                                   // Set mailer to use SMTP
    $mail->Host = 'sakura-communication.co.jp';                    // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                            // Enable SMTP authentication

    // $mail->Username = 'jeet-khondker@sakura-communication.co.jp';          // SMTP username
    // $mail->Password = 'jeetjavajapan'; // SMTP password

    $mail->Username = 'sales@sakura-communication.co.jp';          // SMTP username
    $mail->Password = '##sAleS653Q4U'; // SMTP password
    
    $mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
    
    //SSL証明書関連のエラー回避
    $mail->SMTPOptions = [
		  'ssl' => [
		    'verify_peer' => false,
		    'verify_peer_name' => false,
		    'allow_self_signed' => true
		  ],
		];
    
    $mail->Port = 587;                                 // TCP port to connect to

    $mail->setFrom('web@sakura-communication.co.jp', 'Sakura Communication - Web');
    //$mail->addReplyTo('jeet.sakuracom@gmail.com', 'Sakura Communication - Sales Department');
    $mail->addAddress($admin_email);   // Add a recipient (Email To)
    //$mail->addCC('jeet.sakuracom@gmail.com');
	$mail->addBCC('soumu@sakura-communication.co.jp');
	
	$today = date("Y/m/d_H:i");
    $mail->Subject = "さくらコミュニケーションHPから新規問い合わせ到着のお知らせ(".$today.")";
    $mail->Body    = $bodyContent;
    $mail->send();
    
    $mail->clearAddresses();
    $mail->ClearBCCs();
    
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