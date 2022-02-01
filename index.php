<!DOCTYPE html>
<html lang="ja">

<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-THNM365');</script>
	<!-- End Google Tag Manager -->
	
	<link rel="canonical" href="https://www.sakura-communication.co.jp/">
	<meta charset="utf-8">
	<meta http-equiv="content-language" content="ja">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sakura Communication">
    <meta name="author" content="Jeet ZH Khondker">

    <link rel="icon" href="img/saku-logo.png">

    <title>株式会社さくらコミュニケーション</title>

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- CSS Scripts -->
	<link href="css/reset.css" rel="stylesheet">
	<link href="css/common.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    

</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-THNM365"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php
	ini_set("display_errors", "Off");
//URL
$url = "http://localhost/sakurahome/home/work/wordpress/feed/"; //記事一覧を持ってきたいサイトのfeedURLを記載
$context = stream_context_create(array('http' => array('method' => 'POST', 'header' => 'Content-Type: application/json'), 'ssl' => array('verify_peer' => false, 'verify_peer_name' => false,),));
$getTXT = file_get_contents($url, false, $context);
$getRss = simplexml_load_string($getTXT);
 
foreach ($getRss->channel->item as $item) {
  $i++;
  if ($i == 6) break;//何件まで表示するか
  $date = date("Y年 n月 j日", strtotime($item->pubDate));//投稿日
  $link = $item->link; //記事のリンク
  $title = $item->title; //記事のタイトル
  $category = $item->category; //記事のカテゴリー
  $e_content     = $item->children("content", true);
  $e_encoded     = (string) $e_content->encoded;
  $output = preg_match('/<img[^>]+src=[\'"]([^\'"]+)[\'"][^>]+\>/i', $e_encoded, $matches);
  $first_img = $matches[1]; //記事中の最初の画像
?>

		<div class="wrapper">
			
			<header class="header">
				<div class="navbar-brand">
					<a href="index.html"><img class="logo" src="img/LogoHeader.png" alt="Sakura Communication"></a>
				</div>

				<nav class="global-nav" role="navigation">
					<ul>
						<li class="nav-border"><a href="work/wordpress/index.php"><p>制作実績</p><span>ACHIEVEMENT</span></a></li>
						<li class="nav-border"><a href="company.html"><p>会社情報</p><span>COMPANY</span></a></li>
			          	<li class="nav-border"><a href="services.html"><p>事業内容</p><span>SERVICES</span></a></li>
			          	<li class="nav-border"><a href="recruit.html"><p>採用情報</p><span>RECRUITMENT</span></a></li>
			          	<li class="nav-border"><a href="contact.html"><p>お問い合わせ</p><span>CONTACT</span></a></li>
			          	<li><a href="link.html"><p>リンク</p><span>LINK</span></a></li>
					</ul>
				</nav>

				<div id="js-mobile-nav_open" class="mobile-nav_trigger">
		    		<a href="#js-mobile-nav"></a>
		  		</div>
	  		</header>

	  		<main class="main">
	  			<div class="top">
	  				<div class="container">
						<div class="achivement"><a href="work/wordpress/index.php"><img src="<?= $first_img ?>"><h2><?= $title ?></h2></a></div>
	  					<div class="row">
	  						<div class="col-md-8 col-md-offset-2">
		  						<h1 class="slogan">CONTRIBUTING TO THE DEVELOPMENT OF A <br /> GLOBAL INFORMATION SOCIETY<br />
		  						<span class="translation">グローバル情報社会の発展に貢献する</span></h1>
		  					</div>
	  					</div>
	  				</div>
	  			</div>	
	  		</main>
	      
		</div>
		<nav class="mobile-nav">
			<header>
				<h3><a href="index.html"><img src="img/saku-logo.png" alt="Sakura Communication" style="width: 14.75px">&nbsp;TOP</a></h3>
				<a href="#0" id="js-mobile-nav_close" class="mobile-nav_close"></a>
			</header>
			<ul>
				<li><a href="work/wordpress/index.php"><p>ACHIEVEMENT</p><span>制作実績</span></a></li>
				<li><a href="company.html"><p>COMPANY</p><span>会社情報</span></a></li>
				<li><a href="services.html"><p>SERVICES</p><span>事業内容</span></a></li>
				<li><a href="recruit.html"><p>RECRUITMENT</p><span>採用情報</span></a></li>
				<li><a href="contact.html"><p>CONTACT</p><span>お問い合わせ</span></a></li>
				<li><a href="link.html"><p>LINK</p><span>リンク</span></a></li>
			</ul>
		</nav>
		
		<div class="mobile-nav_overlay"></div>
		<?php } ?>
		<footer class="footer">
  			<div class="inner">
  				<p class="copyright">
  					Copyright &copy; Sakura Communication Co., Ltd. 2017 - 
  					<script type="text/javascript">
						document.write(new Date().getFullYear());
					</script>
				</p>
			</div>
		</footer>
	
	<!-- Application Custom Effect -->
	<script src="js/app.js" type="text/javascript"></script>
</body>
</html>