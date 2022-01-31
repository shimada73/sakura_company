<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PowerManager｜顧客管理サービス</title>
  <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./vendor/font/css/font-awesome.css" rel="stylesheet">
  <link href="./css/style.css?rand=<?=rand()?>" rel="stylesheet">
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-7 middle">
        <a href="./"><img src="./img/logo.png" alt="顧客管理システム"></a>
      </div><!--col-md-4-->
      <div class="col-md-3 middle">
        <span class="fa fa-phone-square" aria-hidden="true"></span> ０４２-３００-５０００
        <br />
        <span class="small-chara">09:00〜18:00 土日祝日除く</span>
      </div>
      <div class="col-md-2 middle">
        <a href="#mail-form">
          <button type="button" class="btn btn-primary"><span class="fa fa-envelope-o" aria-hidden="true">お問い合わせ・ご相談</button></a>
          </div><!--col-md-4-->
        </div><!--row-->
        <div class="contents">
          <div class="main-image">
            <img src="./img/main2.jpg?rand=<?=rand()?>" width="100%">
            <p><img src="./img/char_.png"></p>
            <a href="#mail-form">
              <button type="button" class="btn btn-primary"><span class="fa fa-envelope-o" aria-hidden="true"> お問い合わせ・ご相談</button>
              </a>
            </div><!--main-image-->
            <?php if($_GET['next'] == "complete" && $_POST['email']): ?>

              <?php
                mb_language("Japanese");
                mb_internal_encoding("UTF-8");

                $to = 'ys-ichikawa@sakura-communication.co.jp';
                $subject = "お問合せ【PowerManager】";

                $message = 'お問合せ

                会社名
                '.$_POST['company'].'

                担当者様名
                '.$_POST['name'].'

                E-mail
                '.$_POST['email'].'

                電話番号
                '.$_POST['tell'].'

                メッセージ
                '.$_POST['msg'].'';

                $headers = 'From: ys-ichikawa@sakura-communication.co.jp';

                mb_send_mail($to, $subject, $message, $headers);

               ?>
              <h3>お問合せありがとうございます。48時間以内にご返信致します。</h3>
            <?php elseif($_GET['next'] == "confirm"): ?>
              <div class="row">
                <p class="col-md-4">
                  <form id="member_form" name="member_form" method="post" action="./?next=complete">
                    <table class="table">
                      <tr>
                        <td>会社名</td>
                        <td><?=$_POST['company']?></td>
                      </tr>
                      <tr>
                        <td>担当者様名</td>
                        <td><?=$_POST['name']?></td>
                      </tr>
                      <tr>
                        <td>E-MAIL</td>
                        <td><?=$_POST['email']?></td>
                      </tr>
                      <tr>
                        <td>電話番号</td>
                        <td><?=$_POST['tell']?></td>
                      </tr>
                      <tr>
                        <td>内容</td>
                        <td><?=nl2br($_POST['msg'])?></td>
                      </tr>
                      <tr>
                        <td>
                          <input type="hidden" name="company" value="<?=$_POST['company']?>" />
                          <input type="hidden" name="name" value="<?=$_POST['name']?>" />
                          <input type="hidden" name="email" value="<?=$_POST['email']?>" />
                          <input type="hidden" name="tell" value="<?=$_POST['tell']?>" />
                          <input type="hidden" name="msg" value="<?=$_POST['msg']?>" />
                          <input class="btn btn-primary" type="submit" name="button" id="button" value="送信" />
                        </td>
                        <td></td>
                      </tr>
                    </table>
                  </form>

                  <form id="member_form" name="member_form" method="post" action="./">
                    <input type="hidden" name="company" value="<?=$_POST['company']?>" />
                    <input type="hidden" name="name" value="<?=$_POST['name']?>" />
                    <input type="hidden" name="email" value="<?=$_POST['email']?>" />
                    <input type="hidden" name="tell" value="<?=$_POST['tell']?>" />
                    <input type="hidden" name="msg" value="<?=$_POST['msg']?>" />
                    <input class="btn btn-primary" type="submit" name="button" id="button" value="修正" />
                  </form>
                </p>
              </div>
            <?php else: ?>
              <div class="row abouts">
                <p class="col-md-4"><img src="./img/intro.png" alt="PowerManagerディスプレイ"></p>
                <p class="col-md-8">
                  <h2>Power Managerとは?</h2>
                  <h3>Microsoft製品のPowerAppsを利用した顧客管理システムです。</h3>
                  <h3>PC,スマホ、タブレットなどマルチデバイスに対応</h3>
                </p>
              </div><!--row abouts-->
              <div class="row introduce">
                <h2>Power Managerの機能紹介</h2>
                <div class="space-box">
                  <div class="col-md-4 left">
                    <h2><span class="fa fa-user-circle-o" aria-hidden="true">顧客管理</h2>
                      <h3>顧客の支払い状況、見積もり、関連する情報を紐づけて管理することができ、オリジナルの項目をお客様のほうで追加する事が可能です。</h3>
                    </div><!--space-box left-->
                    <div class="col-md-4 center">
                      <h2><span class="fa fa-file-text-o" aria-hidden="true"></span>案件管理</h2>
                      <h3>案件の詳細を事細かく設定する事ができ、車内チームのスケジュールの管理を行えます</h3>
                    </div><!--space-box center-->
                    <div class="col-md-4 right">
                      <h2><span class="fa fa-columns" aria-hidden="true">スケジュール管理</h2>
                        <h3>案件事にスケジュールを細かく設定する事ができ、車内のスケジュールを共有する事ができます。</h3>
                      </div><!--space-box right-->
                    </div><!--space-box-->
                  </div><!--row introduce-->
                  <div class="row screen-image">
                    <h2>Power Managerの画面イメージ</h2>
                    <div class="col-md-6">
                      <img style="width:100%" src="./img/contents.png">
                      <p>キャンペーン作成画面</p>
                    </div>
                    <div class="col-md-6" style="text-align:left;">
                      <ul style="list-style-type:none;">
                        <li>コンテンツ一体型のPowerManager</li>
                        <li>複数のキャンペーンで顧客を囲みこみ</li>
                        <li>キャンペーンの作成はワンボタンで簡単</li>
                        <li>自社の製品を効果的にアピール</li>
                        <li>キャンペーン毎に顧客を管理</li>
                      </ul>
                    </div>
                    <br clear="all">
                    <div class="col-md-6">
                      <img style="width:100%" src="./img/screen_image_start.png">
                      <p>メイン画面</p>
                    </div>
                    <div class="col-md-6">
                      <img style="width:100%" src="./img/screen_image_manag.png?rand=<?=rand()?>">
                      <p>顧客管理画面</p>
                    </div>
                    <div class="col-md-6">
                      <img style="width:100%" src="./img/screen_image_project.png">
                      <p>案件管理画面</p>
                    </div>
                    <div class="col-md-6">
                      <img style="width:100%" src="./img/screen_image_schedule.png">
                      <p>スケジュール管理画面</p>
                    </div>
                  </div>
                  <div class="row trial">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                      <h2>Power Managerを試したい！</h2>
                      <h3>デモ版をご用意しております。<br />ご希望の際は下記よりお問合せ下さい</h3>
                      <div class="trial-button">
                        <a href="#mail-form">
                          <button type="button" class="btn btn-primary"><span class="fa fa-envelope-o" aria-hidden="true">お問い合わせ・ご相談</button>
                          </a>
                        </div>
                      </div>
                      <div class="col-md-3"></div>
                    </div><!--row trial-->
                    <div class="row flow">
                      <h2>Power Managerの導入検討からご利用までの流れ</h2>
                      <div class="col-md-4 left">
                        <p class="step">STEP 1</p>
                        <p class="title">お問合せ</p>
                        <p class="comment">お客様の要望をヒアリングします。</p>
                      </div>
                      <div class="col-md-4 center">
                        <p class="step">STEP 2</p>
                        <p class="title">デモ・見積り</p>
                        <p class="comment">実際にでもを仕様していただきお見積もりを出します。</p>
                      </div>
                      <div class="col-md-4 right">
                        <p class="step">STEP 3</p>
                        <p class="title">導入サポート</p>
                        <p class="comment">導入から運用までサポートさせていただきます。</p>
                      </div>
                    </div><!--row flow-->
                    <div class="row support" id="mail-form">
                      <h2>お問合せ・ご相談</h2>
                      <form id="member_form" name="member_form" method="post" action="./?next=confirm">

                        <div class="form-group">
                          <label>会社名(個人でお問合せの方はは個人名を記入して下さい)</label>
                          <input class="form-control" type="text" name="company" id="name" value="<?=$_POST['company']?>" placeholder="会社名を入力してください。" />
                        </div>
                        <div class="form-group">
                          <label>担当者様名(個人でお問合せの方は記入の必要がありません)</label>
                          <input class="form-control" type="text" name="name" id="name" value="<?=$_POST['name']?>" placeholder="担当者名を入力してください。" />
                        </div>
                        <div class="form-group">
                          <label>E-MAIL</label>
                          <input class="form-control"　type="text" name="email" id="email" value="<?=$_POST['email']?>" placeholder="E-MAILを入力してください。" />
                        </div>
                        <div class="form-group">
                          <label>電話番号</label>
                          <input class="form-control"　type="tel" name="tell" id="tell" value="<?=$_POST['tell']?>" placeholder="電話番号を入力してください。" />
                        </div>
                        <div class="form-group">
                          <label>内容</label>
                          <textarea class="form-control" name="msg" id="msg" cols="45" rows="5"><?=$_POST['msg']?></textarea>
                        </div>
                        <input class="btn btn-primary" type="submit" name="button" id="button" value="確認" />
                      </form>
                    </div><!--row support-->
                  </div><!--contents-->
                <?php endif; ?>
                <div class="row footer">
                  <p>Copyright@Sakura Communication Co.Ltd 2018</p>
                </div><!--footer-->
              </div><!--container-->
              <script src="./vendor/jquery/jquery-1.12.4.min.js"></script>
              <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
              <script src="https://cdn.fawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js"
            </body>
            </html>
