<?php
	session_start();
	
//value部分の初期設定
	$simei = '';
	$meado = '';
	$naiyou = '';

//エラーメッセージの初期設定
	$simei_err = '';
	$meado_err = '';
	$naiyou_err = '';
	$err_flag = 0; //フラグ0:なし 1:あり

//--------------------------------------
//確認ボタンが押されたとき
//--------------------------------------
	if(isset($_POST['kakunin'])){
		$simei = $_POST['simei'];
	}
	
	if(isset($_POST['meado'])){
		$meado = $_POST['meado'];
	}
	
	if(isset($_POST['naiyou'])){
		$naiyou = $_POST['naiyou'];
	}
	
//入力チェック
	if(strlen($naiyou) == 0){
		$naiyou_err = '<span class="error">お問い合わせ内容を入力してください。</span>';
		$input_name='naiyou';
		$err_flag = 1;
	}
	
	if(strlen($meado) == 0){
		$meado_err = '<span class="error">メールアドレスを入力してください。</span>';
		$input_name='meado';
		$err_flag = 1;
	}else if(!preg_match('/^[^@]+@([-a-z0-9]+\.)+[a-z]{2,}$/',$meado)){
		$meado_err = '<span class="error">メールアドレスに誤りがあります。</span>';
		$input_name='meado';
		$err_flag = 1;
	}
	//P.181
	
	if(strlen($simei) == 0){
		$simei_err = '<span class="error">お名前を入力してください。</span>';
		$input_name='simei';
		$err_flag = 1;
	}
	

//エラーがなければセッションに保存
	if($err_flag == 0){
		$_SESSION['simei'] = $_POST['simei'];
		$_SESSION['meado'] = $_POST['meado'];
		$_SESSION['naiyou'] = $_POST['naiyou'];
		header('location:kakunin.php');
		exit;
	}
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
<body onload="document.form1.<?php echo $input_name; ?>.focus();">


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

<form name="form1" action="check.php" method="post">
	<p>お名前<br />
		<input type="text" name="simei" id="simei" size="35" value="<?php echo $simei; ?>" /><br />
		<em><?php echo $simei_err; ?></em>
	</p>
	
	<p>メールアドレス<br />
		<input type="text" name="meado" id="meado" size="35" value="<?php echo $meado; ?>" /><br />
		<em><?php echo $meado_err; ?></em>
	</p>
	
	<p>お問い合わせ内容<br />
		<textarea name="naiyou" id="naiyou" rows="15"><?php echo $naiyou; ?></textarea><br />
		<em><?php echo $naiyou_err; ?></em>
	</p>
	
	<p><input type="submit" value="確認画面へ" name="kakunin" /></p>
	
</form>

</div><!--main終了-->

<div id="footer">
	<address>Copyright &copy; 2014 Kawabata All Rights Reserved.</address>
</div>

</div><!--wrapper終了-->

<!-- =============ここにjavascript===== -->
</body>
</html>
