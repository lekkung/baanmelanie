<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>บ้านเมลานี เชียงราย - Baan Melanie Chiang Rai - บ้านและที่ดินเชียงราย - Home and Land Chiang Rai</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/js.js"></script>

	<link href="../dist/photoswipe.css?v=4.1.0-1.0.4" rel="stylesheet" />
	<link href="../dist/default-skin/default-skin.css?v=4.1.0-1.0.4" rel="stylesheet" />
	<script src="../dist/photoswipe.min.js?v=4.1.0-1.0.4"></script>
	<script src="../dist/photoswipe-ui-default.min.js?v=4.1.0-1.0.4"></script>

	<script type="text/javascript" src="../js/jssor.slider.mini.js"></script>

</head>
<body>
	<div class="top-bar">
		<div class="container text-right">
			<a href="http://baanmelanie.com">Thai</a> | 
			<a href="http://baanmelanie.com/en">English</a>
		</div>
	</div>
	<nav class="nav navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-menu">
					<span class="sr-only">Toggle navigation</span>
					<!-- <span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> -->
					<span style="color:#FFF;">Menu</span>
				</button>
				<a class="navbar-brand page-scroll" href="/"><img src="../images/logo.png"></a>
			</div>
			<div class="collapse navbar-collapse" id="header-menu">
				<ul class="nav navbar-nav navbar-right melanie_menu">
					<li class="home"><a href="./">Home</a></li>
					<li class="house house_detail"><a href="?page=house">Houses</a></li>
					<li class="land"><a href="?page=land">Land</a></li>
					<li class="building building_detail"><a href="?page=building">Building</a></li>
					<li class="promotion"><a href="?page=promotion">Promotion</a></li>
					<li class="contact"><a href="?page=contact">Contact</a></li>
				</ul>
				<script type="text/javascript">
				active_menu('<?php echo $_GET["page"]; ?>');
				</script>
			</div>
		</div>
	</nav>

	<div id="carousel-index" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<!--
		<ol class="carousel-indicators">
			<li data-target="#carousel-index" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-index" data-slide-to="1"></li>
			<li data-target="#carousel-index" data-slide-to="2"></li>
		</ol>
		-->

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<?php for($i=1;$i<=7;$i++){ ?>
			<div class="item <?php if($i==1) echo 'active'; ?>">
				<img src="../images/slide/P0<?php echo $i; ?>.jpg" width="100%" alt="">
			</div>
			<?php } ?>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-index" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-index" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div class="container">
		<?php
		require_once('../function.php');
		require_once('../config.php');

		if( $_COOKIE['counter_user']=='' ){ 
			$sql=" UPDATE counter SET counter = counter + '1' " ; 
			mysql_query($sql); 
			setcookie( 'counter_user',1,time()+(15*60)); 
		}

		switch ($_GET['page']) {
			case 'house' : require_once('house/index.php'); break;
			case 'house_detail' : require_once('house/detail.php'); break;
			case 'land' : require_once('land/index.php'); break;
			case 'building' : require_once('building/index.php'); break;
			case 'building_detail' : require_once('building/detail.php'); break;
			case 'promotion': require_once('promotion/index.php'); break;
			case 'contact': require_once('contact/index.php'); break;
			case 'map': require_once('map.php'); break;
			default: require_once('home.php'); break;
		}

		?>
	</div>

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<h3 class="text-center">Contact</h3>
					<ul class="media-list media-list-footer">
						<li class="media">
							<div class="media-left">
								<div class="media-icon">
									<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
								</div>
							</div>
							<div class="media-body">
								<p class="media-heading">
									<!-- 08-2381-7488 - Sales ( Thai, EN ) <br>
									08-1289-0505 - Sales ( Thai, EN ) <br> -->
									08-7156-1000 - Sales (Thai) <br>
									08-1884-7761 - Sales (EN) <br>
									0-5370-1466 - Design&Construction (EN)
								</p>
							</div>
						</li>
						<li class="media">
							<div class="media-left">
								<div class="media-icon">
									<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
								</div>
							</div>
							<div class="media-body">
								<p class="media-heading">
									<!-- <a href="mailto:praewtong@yahoo.com">praewtong@yahoo.com</a> <br> -->
									<a href="mailto:wim@baanmelanie.com">wim@baanmelanie.com</a> <br>
									<a href="mailto:melanie@loxinfo.co.th">melanie@loxinfo.co.th</a>
								</p>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-sm-4">
					<h3 class="text-center">Map Baan Melanie</h3>
					<p class="text-center">
						<a href="?page=map">
							<img src="../images/1426343296_Application-Map-128.png">
						</a>
					</p>
					<p class="text-center">
						GPS Location : 
						<a href="https://www.google.co.th/maps/place/19%C2%B050'57.9%22N+99%C2%B050'59.0%22E/@19.849406,99.849728,1069m/data=!3m2!1e3!4b1!4m2!3m1!1s0x0:0x0?hl=th" target="_blank" style="color:#FFF; text-decoration:underline;">19.849406 , 99.849728</a>
					</p>
				</div>
				<div class="col-sm-4">
					<br>
					<p class="text-center">
						<a href="?page=promotion"><img src="../images/promotion-icon.gif"></a>
					</p>
				</div>
			</div>
			<hr>

			<div class="row">

				<div class="col-sm-4">
					<h3 class="text-center">Partner</h3>
					<div class="text-center">
						<div style="background:#FFF; display:inline-block; padding:0 20px; margin:5px;">
							<a href="http://www.udomrak.com/">
								<img src="../images/Udomrak logo.jpg">
							</a>
						</div>

						<!-- <div style="background:#FFF; display:inline-block; padding:18px 5px; margin:5px;">
							<a href="http://www.crpropertyservice.com/">
									<img src="http://www.crpropertyservice.com/images/logo.png">
							</a>
						</div> -->
					</div>
				</div>

				<div class="col-sm-4">
					<h3 class="text-center">&nbsp;</h3>
					<ul class="media-list media-list-footer">
						<li class="media">
							<div class="media-left">
								<div class="media-icon">
									&copy;
								</div>
							</div>
							<div class="media-body">
								<p class="media-heading" style="font-size:13px;">
									Baan Melanie Chiang Rai <br>
	    							369 Moo 5, Mae-Lao Thasaai, Chiang Rai, 57000<br>
	    							<span style="font-size:11px; color:#ddd;">- Images on the site are copyright Baan Melanie -</span>
								</p>
							</div>
						</li>
					</ul>
				</div>

				<div class="col-sm-4 text-center">
					<h3 class="text-center">&nbsp;</h3>
					<strong>จำนวนผู้เข้าชมเว็บไซต์ : 
						<span>
							<? 
							$sql = " SELECT * FROM counter ";
							$rs = mysql_query($sql);
							$s = mysql_fetch_array($rs);
							echo number_format($s['counter'],0,"",",");
							?>
						</span>
					</strong>
				</div>

			</div>
			<br>

		</div>
	</div>
</body>
</html>