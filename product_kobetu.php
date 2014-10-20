<?php
	$id=$_GET['id'];
	$con = mysql_connect('localhost', 'root', 'admin') or die(mysql_error());
	mysql_select_db('the_stone') or die(mysql_error());
	$sql = "SELECT*FROM products where id='$id'";
	$result= mysql_query($sql, $con) or die(mysql_error());
	
	function img_tag($id){
		if(file_exists("images/{$id}.jpg")){
			$name = $id;
		}else{
			$name = 'noimge';
		}
		
		return "<img src=\"images/{$name}.jpg\" alt=\"製品画像\" />";
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

<?php
	while($data = mysql_fetch_array($result)){
?>
<title>THE STONE -<?php echo $data['name']; ?>-</title>
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
	<h2 class="shadow"><?php echo $data['name']; ?></h2>
	
	<div class="cycle-slideshow"
		data-cycle-fx="fade"
		data-cycle-timeout="0"
		data-cycle-pager="#adv-custom-pager"
		data-cycle-pager-template="<a href='#'><img class='tmb' src='{{src}}' width=18% /></a>"
	>
		<img src="images/<?php echo $data['id']; ?>.jpg" />
		<img src="images/<?php echo $data['id']; ?>_f.jpg" />
		<img src="images/<?php echo $data['id']; ?>_l.jpg" />
		<img src="images/<?php echo $data['id']; ?>_b.jpg" />
		<img src="images/<?php echo $data['id']; ?>_r.jpg" />
	</div>
	<!-- empty element for pager links -->
	<div id="adv-custom-pager" class="center external"></div>
	
	<table id="kobetu_table">
		<tr>
			<th>カラー</th><td><?php echo $data['color']; ?></td>
		</tr>
		<tr>
			<th>サイズ</th><td><?php echo $data['size_x']; ?>mm×<?php echo $data['size_y']; ?>mm×<?php echo $data['size_z']; ?>mm</td>
		</tr>
		<tr>
			<th>重量</th><td><?php echo $data['weight']; ?>g</td>
		</tr>
		<tr>
			<th>価格</th><td><?php echo $data['price']; ?> 円</td>
		</tr>
		<tr>
			<th>発売日</th><td><?php echo $data['release']; ?></td>
		</tr>
		<tr>
			<th>詳細</th><td><?php echo $data['detail']; ?></td>
		</tr>
	</table>
	<?php
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
