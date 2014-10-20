<!DOCTYPE html>
<html lang="ja">
<head>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
<![endif]-->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta charset="UTF-8" />

<meta name="keywords" content="THE STONE,石,アート,デザイン">
<meta name="description" content="路傍の石を如何にカッコよく魅せるかをテーマに制作したサイト">
<meta name="author" content="Tomokazu Kawabata" />

<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<link rel="stylesheet" type="text/css" href="css/common.css" />
<link rel="stylesheet" type="text/css" href="css/responsive.css" />

<script type='text/javascript' src='js/jquery-1.11.0.min.js'></script>
<script type='text/javascript' src='js/jquery.cycle2.min.js'></script>
<script type='text/javascript' src='js/script.js'></script>
<script type='text/javascript' src='js/breakpoints.js'></script>

<meta name="mobile-web-app-capable" content="yes" />
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="apple-touch-icon.png" />
<link rel="apple-touch-icon" href="apple-touch-icon.png" />

<title>THE STONE -トップページ-</title>
</head>
<body>

<div id="welcome">
	<div id="welmoji"><!--上下センタリングの為-->
		<span id="w1">W</span>
		<span id="w2">E</span>
		<span id="w3">L</span>
		<span id="w4">C</span>
		<span id="w5">O</span>
		<span id="w6">M</span>
		<span id="w7">E</span>
	</div>
	<form action="x.php" method="post">
		<input type="button" id="skip" name="skip" value="SKIP：ENTER" />
	</form>
</div>

<div id="wrapper0"><!--welcome時にスクロールバー出さない為に。wrapper/bodyでは代用不可-->
<div id="wrapper">

<div id="header">
	<h1>
		<a href="index.php" title="トップページ"><img src="images/h1.jpg" alt="THE STONE"></a>
	</h1>
</div>

<div id="navi">
	<ul>
		<li><a href="products.php" title="製品一覧">PRODUCTS</a></li>
		<li><a href="campany.php" title="会社概要">CAMPANY</a></li>
		<li><a href="info.php" title="お問い合わせ">INFO</a></li>
	</ul>
</div>

<div id="slide">
	<div id="slide_sitaji" class=" shadow"><!--opcity(透過)でbodyのbgが見えないようにする為-->
		<div class="cycle-slideshow"
			data-cycle-fx="fade"
			data-cycle-pause-on-hover="true"
		>
			<div class="cycle-pager"></div>
			
			<img src="images/1.jpg" alt="目玉製品１のリンク画像" title="目玉製品１" onclick="location.href='product_kobetu.php?id=1'" onkeypress="return true" />
			<img src="images/2.jpg" alt="目玉製品２のリンク画像" title="目玉製品２" onclick="location.href='product_kobetu.php?id=2'" onkeypress="return true" />
			<img src="images/3.jpg" alt="目玉製品３のリンク画像" title="目玉製品３" onclick="location.href='product_kobetu.php?id=3'" onkeypress="return true" />
		</div><!--cycle-slideshow終了-->
	</div><!--slide_sitaji終了-->
</div><!--slide終了-->

<div>
	<a href="#"><img id="banner" class="sp-img shadow" data-img="images/banner_sp.jpg" /></a>
</div>

<div id="main" class="index shadow">
	<h2 class="shadow">本サイトについて</h2>
	<p>本サイトは当初、時計やスマートフォン等の工業製品を紹介するメーカーサイトを考えていたものの、著作権の問題で時計等が使いにくいので何か手はないかと考え、<br />
	「ではいっそのことそこらへんに落ちてる”石”を代わりに使うのはどうか」という発想の元、<br />
	<em>”路傍の石を如何にカッコよく魅せるか”</em><br />
	をテーマに職業訓練にて制作したサイトです。</p>
	<p>ご覧になる時は”石”を時計やスマートフォン等の工業製品に見立てて御覧ください。</p>
	<p>想定ターゲットは20代男性、グレースケールを基調にアクセントカラーに赤、皮革素材を使用しシンプルながらも高級感とスタイリッシュな雰囲気を演出してみました。</p>
	<p>見どころはCSS3とJavaScriptによるTOP読み込み時の｢WELCOME｣の文字とレスポンシブデザインです。</p>
	<p>｢WELCOME｣の文字はjQueryでフェイドアウトさせていますが、JavaScript非対応環境を考慮し最初は非表示状態(TOPを表示)から読み込みと同時に表示、その後時間経過か｢SKIP｣ボタンもしくはエンターキーで再び非表示となるようにしています。</p>
	<p>レスポンシブデザインは3種類用意。</p>
	<ul>
		<li>スマートフォン縦向き</li>
		<li>タブレット縦向き＆スマートフォン横向き</li>
		<li>PC＆タブレット横向き表示</li>
	</ul>
	<p>制作後ボタン式切替の方が良いと思い｢mihon_site2｣ではボタン式を採用しました。</p>
</div><!--main終了-->

<div id="footer">
	<address>Copyright &copy; 2014 Kawabata All Rights Reserved.</address>
</div>

</div><!--wrapper終了-->
</div><!--wrapper0終了-->

<!-- =============ここにjavascript===== -->
</body>
</html>
