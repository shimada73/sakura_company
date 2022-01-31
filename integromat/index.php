<?php
	$ua=$_SERVER['HTTP_USER_AGENT'];
	$browser = ((strpos($ua,'iPhone')!==false)||(strpos($ua,'iPod')!==false)||(strpos($ua,'Android')!==false));
		if ($browser == true){
		$browser = 'sp';
	}

?>
<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <title>integromat|さくらコミュニケーション</title>
	<meta name="description" content="integromatは、現在手動で処理しているプロセスを自動化し,アプリを接続できるだけでなくデータの転送や変換も可能なツール">
</head>
<body>
  <header>
    <div class="company-info" />
      <p class="company-name">
        <a href="https://www.sakura-communication.co.jp/">株式会社さくらコミュニケーション</a>
      </p><!--company-name-->
      <?php if($browser != "sp"): ?>
      <p class="company-detail">
        <a href="https://www.sakura-communication.co.jp/contact.html">お問い合わせ</a>
      </p><!--company-detail-->
    <?php endif; ?>
    </div><!--company-info-->
    <br style="clear:both;" />
    <div class="images">
      <img class="logo" src="./img/white_transparent.png" >
      <img class="logo-title" src="./img/white_typeface.png">
      <p class="logo-company">Distributors Sakura Communication</p>
    </div>
    <div class="contact">
      <?php if($browser != "sp"): ?>
        <!--
      <form action="https://www.sakura-communication.co.jp/contact.html" method="post" />
        <input type="text" name="name" value="" placeholder="お名前" />
        <input type="email" name="email" value="" placeholder="E-MAIL" />
        <input type="text" name="tell" value="" placeholder="電話番号" />
        <textarea name="message" placeholder="お問い合わせ内容"></textarea>
        <br />
        <input type="Submit" class="btn btn-primary" style="" value="お問い合わせ" />
      </form>-->
      <p id="regist2">
        こちらからお申し込み頂くと初月利用容量大幅アップ</p>
        <br /><br />
        <a href="https://intm.at/sakura" class="btn btn-primary" id="regist">
          お申し込みはこちらから</a>
    <?php endif; ?>
    </div><!--contact-->
    <br style="clear:both;" />
</header>
<div class="container-fluid" >
  <div class="row">
    <div class="col-sm-12">
      <div class="abouts">
        <div class="abouts-mask">
        <p class="abouts-title">integromatとは？</p>
        <p class="abouts-details">integromatは、現在手動で処理しているプロセスを自動化します。<br />
アプリを接続できるだけでなくデータの転送や変換も可能です。</p>
        <span class="abouts-midashi">視覚的に操作可能なノンプログラミングツール</span>
        <br /><br />

        <button type="button" class="btn btn-primary btn-lg video" data-video="https://www.youtube.com/embed/61HQ_DWoFr8" data-toggle="modal" data-target="#videoModal">
    解説動画を見る
  </button>

          <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="100%" height="500" src="" frameborder="0" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>


      </div><!--abouts-mask-->
      </div><!--abouts-->
      <div class="apply-connect">
        <p class="apply-connect-title">豊富なアプリ連携</p>
        <p><img class="" src="./img/integromat1.png"></p>
        <p><img class="apply-connect-image" src="./img/integromat2.png"></p>
        <span class="apply-connect-strong">その他100種類以上のアプリ連携が可能</span>
      </div>
    </div>
  </div><!--row-->
  <div class="apply-used">
    <p class="apply-used-title">integromatはこうやって使う</p>
    <div class="row">
      <div class="col-sm-4">
        <div class="apply-used-area">
          <img class="apply-used-image" src="./img/integromat3.png" />
          <p class="apply-used-sub">instagram投稿で自動E-MAIL</p>
          <p class="apply-used-detail">最新の投稿をメールで<br />お知らせできます。</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="apply-used-area">
          <img class="apply-used-image" src="./img/integromat4.png" />
          <p class="apply-used-sub">お問い合わせフォームだって簡単</p>
          <p class="apply-used-detail">サーバいらず、知識いらずで<br />アンケートフォームが作れます。</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="apply-used-area">
          <img class="apply-used-image" src="./img/integromat5.png" />
          <p class="apply-used-sub">メールでタスク管理</p>
          <p class="apply-used-detail">メールでタスクが確認<br />管理ができます。</p>
        </div>
      </div>
    </div>
  </div><!--apply-used-->
  <div class="apply-plan">
    <p class="apply-plan-title">料金プラン</p>
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <table id="table" class="table">
          <tr>
            <th>FREE<br />$0 / month</th>
            <th>BASIC<br />$9 / month</th>
            <th>STANDARD<br />$29 / month</th>
            <th>BUSINESS<br />$99 / month</th>
            <th>PLATINUM<br />$299 / month</th>
          </tr>
          <tr>
            <td>1,000<br />Operations</td>
            <td>10,000<br />Operations</td>
            <td>40,000<br />Operations</td>
            <td>150,000<br />Operations</td>
            <td>800,000<br />Operations</td>
          </tr>
          <tr>
            <td>100MB<br />Data transfer</td>
            <td>1GB<br />Data transfer</td>
            <td>20GB<br />Data transfe</td>
            <td>70GB<br />Data transfer</td>
            <td>220GB<br />Data transfer</td>
          </tr>
          <tr>
            <td>15 miniutes<br />Minimum interval</td>
            <td>5 miniutes<br />Minimum interval</td>
            <td>1 miniutes<br />Minimum interval</td>
            <td>1 miniutes<br />Minimum interval</td>
            <td>1 miniutes<br />Minimum interval</td>
          </tr>
        </table>
      </div>
      <div class="col-sm-2"></div>
    </div>
  </div>
  <div class="apply-buy">
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
    <a href="https://intm.at/sakura" class="btn btn-primary">お申し込みはこちらから</a>
    </div>
    <div class="col-sm-2"></div>
    </div>
  </div>
</div><!--container-fluid-->
<footer>Copyright © Sakura Communication Co., Ltd. 2017</footer>
<!-- ここに本文を記述します -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
$(function() {
  $(".video").click(function () {
    var theModal = $(this).data("target"),
    videoSRC = $(this).attr("data-video"),
    videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
    $(theModal + ' iframe').attr('src', videoSRCauto);
    $(theModal + ' button.close').click(function () {
      $(theModal + ' iframe').attr('src', '');
    });
  });
});
</script>
</body>
</html>
