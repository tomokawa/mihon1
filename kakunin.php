<?php
session_start();
/*
	$naiyou = $_SESSION['naiyou'];
*/
?>
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

<title>THE STONE -お問い合わせ-</title>
</head>
<body>


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

<div id="main" class="shadow">

<h2 class="shadow">お問い合わせ</h2>
<p>※一週間を目安にご連絡させて頂きます。</p>

<form action="registor.php" method="post">
	<p>お名前<br />
		<?php echo htmlspecialchars($_SESSION['simei']) ?>
	</p>
	
	<p>メールアドレス<br />
		<?php echo htmlspecialchars($_SESSION['meado']) ?>
	</p>
	
	<p>お問い合わせ内容<br />
		<?php echo htmlspecialchars($_SESSION['naiyou'],ENT_QUOTES) ?>
	</p>
	
	<p>
		<input type="submit" value="送信" name="ok" />
		<input type="submit" value="入力情報を保持して入力画面に戻る" name="return" />
		<input type="submit" value="キャンセル" name="ng" />
	</p>
</form>

</div><!--main終了-->

<div id="footer">
	<address>Copyright &copy; 2014 Kawabata All Rights Reserved.</address>
</div>

</div><!--wrapper終了-->

<!-- =============ここにjavascript===== -->
</body>
</html>
