<?php
	$con = mysql_connect('localhost', 'root', 'admin') or die(mysql_error());
	mysql_select_db('the_stone') or die(mysql_error());
	$sql = 'SELECT*FROM products order by id';
	$result= mysql_query($sql, $con) or die(mysql_error());
	
	function img_tmb_tag($id){
		if(file_exists("images/{$id}_tmb.jpg")){
			$name = $id;
		}else{
			$name = 'noimge';
		}
		
		return "<img src=\"images/{$name}_tmb.jpg\" alt=\"製品画像\" width=\"80\" height=\"80\" />";
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

<title>THE STONE -製品一覧-</title>
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

<h2 class="shadow">製品一覧</h2>

<?php
	while($data = mysql_fetch_array($result)){
?>

<div><!--aのブロック化の為-->
<a href="product_kobetu.php?id=<?php echo $data['id'];?>" title="<?php echo $data['name']; ?>">
<div id="box">
	<div class="buhin">
		<?php echo img_tmb_tag($data['id']); ?>
	</div>
	
	<div class="buhin">
		<p>製品名<br /><?php echo $data['name']; ?></p>
	</div>
	
	<div class="buhin">
		<p>価格<br /><?php echo $data['price']; ?> 円</p>
	</div>
	
	<div class="buhin">
		<p>発売日<br /><?php echo $data['release']; ?></p>
	</div>
</div>
</a>
</div>

<?php
	}
	mysql_free_result($result);
	mysql_close($con);
?>

</div><!--main終了-->


<div id="footer">
<address>Copyright &copy; 2014 Kawabata All Rights Reserved.</address>
</div>


</div><!--wrapper終了-->

<!-- =============ここにjavascript===== -->
</body>
</html>
