<?php

    $errorMSG = "";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $interest = $_POST['interest'];
    // $interests = implode(' 、 ', $_POST['interest']);
    $experience = $_POST['experience'];
    $freeentry = nl2br($_POST['freeentry']);
    
    // 会社宛て
    $bodyContent  = "名前： $name" . '<br/>';
    $bodyContent .= "E-mail: $email" . '<br/>';
    $bodyContent .= "年齢: $age" . '<br/>';
    $bodyContent .= "電話番号: $phone" . '<br/>';
    $bodyContent .= "希望職種: $interest" . '<br/>';
    $bodyContent .= "経験年数: $experience" . '<br/>';
    $bodyContent .= "自由記入欄内容:" . '<br/>';
    $bodyContent .= "$freeentry" . '<br/>';

    // お客宛て
    $bodyContent1  = "$name 様" . '<br/><br/>';
    $bodyContent1 .= "この度は採用ページより応募いただき、誠にありがとうございます。" . '<br/>';
    $bodyContent1 .= "ご応募いただいた内容は次の通りです。" . '<br/><br/>';
    $bodyContent1 .= "======================【応募内容】======================" . '<br/><br/>';
    $bodyContent1 .= "[お名前]： $name" . "様" . '<br/>';
    $bodyContent1 .= "[E-mail]： $email" . '<br/>';
    $bodyContent1 .= "希望職種: $interest" . '<br/>';
    $bodyContent1 .= "============================================================" . '<br/><br/>';
    $bodyContent1 .= "担当者より改めてご連絡させていただきますので、" . '<br/>';
    $bodyContent1 .= "今しばらくお待ちください。" . '<br/><br/>';
    $bodyContent1 .= "以上、何卒よろしくお願い申し上げます。" . '<br/><br/>';
    $bodyContent1 .= "=☆=★=☆=★=☆=★=☆=★=☆=★=☆=★=☆=★=☆=★=☆=★=☆=★=☆" . '<br/><br/>';
    $bodyContent1 .= "株式会社さくらコミュニケーション" . '<br/>';
    $bodyContent1 .= "〒187-0011 東京都小平市鈴木町1-466-18" . '<br/>';
    $bodyContent1 .= "新小金井赤レンガ倉庫 2F-A" . '<br/>';
    $bodyContent1 .= "URL: http://www.sakura-communication.co.jp" . '<br/><br/>';
    $bodyContent1 .= "=☆=★=☆=★=☆=★=☆=★=☆=★=☆=★=☆=★=☆=★=☆=★=☆=★=☆";

     $admin_email = 'st-nakano@sakura-communication.co.jp';
    // $admin_email = 'jeet-khondker@sakura-communication.co.jp';

    require 'PHPMailer/PHPMailerAutoload.php';
    require_once 'PHPMailer/class.phpmailer.php';

    $mail = new PHPMailer;
    $mail->CharSet = 'UTF-8';
    $mail->isHTML(true);  // Set email format to HTML   
    $mail->isSMTP();                                   // Set mailer to use SMTP
    $mail->Host = 'sakura-communication.co.jp';        // Specify main and backup SMTP servers
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

    $mail->Subject = "さくらコミュニケーションHPから採用応募メール到着のお知らせ";
    $mail->Body    = $bodyContent;
    $mail->send();
    
    $mail->clearAddresses();
    
    $mail->addAddress($email);   // Add a recipient (Email To)
    $mail->Subject = "さくらコミュニケーションHPから採用応募メール送信完了のお知らせ";
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