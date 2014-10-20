<?php
session_start();
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


<?php
//------------------------------------
//キャンセルの場合
//------------------------------------
	if(isset($_POST['ng'])){
		echo "
		<p class='text_center'>取り消されました。</p>
		<p class='text_center'><a href='index.php'>トップに戻る</a></p>";
	}

//------------------------------------
//入力画面の戻る場合
//------------------------------------
	if(isset($_POST['return'])){
		header('location:return.php');
	}

//------------------------------------
//登録の場合
//------------------------------------
	if(isset($_POST['ok'])){
		//変数にセッションを代入
		$simei = $_SESSION['simei'];
		$meado = $_SESSION['meado'];
		$naiyou = $_SESSION['naiyou'];
	
		//登録日
		$hiduke = date('Y/m/d H:i:s');
	
		//保存データ作成
		$data = "{$hiduke},";
		$data .= "{$simei},";
		$data .= "{$meado},";
		$data .= "{$naiyou},\n";
	
		//ファイル操作
		$fh = @fopen('otoiawase.csv','a');
		if(!$fh){
			exit('ファイルのオープンに失敗しました。');
		}else{
			flock($fh, LOCK_EX);
			fputs($fh, $data);
			flock($fh, LOCK_UN);
			fclose($fh);
			echo "<p class='text_center'>送信されました。<br />
				※一週間を目安にご連絡させて頂きます。</p>";
		}
	}

?>

</div><!--main終了-->

<div id="footer">
	<address>Copyright &copy; 2014 Kawabata All Rights Reserved.</address>
</div>

</div><!--wrapper終了-->

<!-- =============ここにjavascript===== -->
</body>
</html>
