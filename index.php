<?php
session_start();
ob_start();

require_once('function.php');
require_once('config.php');

if( $_COOKIE['counter_user']=='' ){ 
	$sql=" UPDATE counter SET counter = counter + '1' " ; 
	mysql_query($sql); 
	setcookie( 'counter_user',1,time()+(15*60)); 
}

if( empty($_SESSION["lang"]) ){
	$_SESSION["lang"] = 'th';
}

$page = $_GET['page'];
$lang = $_SESSION['lang'];

if( $lang == 'th' ){
	require_once('lang_th.php');
}else if( $lang == 'en' ){
	require_once('lang_en.php');
}else if( $lang == 'cn' ){
	require_once('lang_cn.php');
}

// echo $_SESSION["lang"];

//echo chkBrowser('MSIE');

//echo $_SERVER['HTTP_USER_AGENT'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="logo.ico">

	<title>บ้านเมลานี เชียงราย - Baan Melanie Chiang Rai - บ้านและที่ดินเชียงราย บ้าน ที่ดิน เชียงราย - Home and Land Chiang Rai</title>

  <link href="https://fonts.googleapis.com/css?family=Prompt:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->

	<script type="text/javascript" src="js/js.js"></script>

	<link href="dist/photoswipe.css?v=4.1.0-1.0.4" rel="stylesheet" />
	<link href="dist/default-skin/default-skin.css?v=4.1.0-1.0.4" rel="stylesheet" />
	<script src="dist/photoswipe.min.js?v=4.1.0-1.0.4"></script>
	<script src="dist/photoswipe-ui-default.min.js?v=4.1.0-1.0.4"></script>
	<script type="text/javascript" src="js/jssor.slider.mini.js"></script>

</head>
<body>

	<div class="top-bar">
		<div class="container text-right font-prompt lang">
			<a href="change_lang.php?lang=th" <?php if( $_SESSION["lang"] == 'th' ){ echo 'class="active"'; } ?>>Thai</a> | 
			<a href="change_lang.php?lang=en" <?php if( $_SESSION["lang"] == 'en' ){ echo 'class="active"'; } ?>>English</a> | 
			<a href="change_lang.php?lang=cn" <?php if( $_SESSION["lang"] == 'cn' ){ echo 'class="active"'; } ?>>中文</a>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
		<div class="container">
			<div class="col-8 col-sm-auto p-0">
				<a class="navbar-brand" href="./" class="p-0">
					<img src="images/logo.png" class="img-fluid" alt="Baanmelanie บ้านเมลานี บ้าน ที่ดิน เชียงราย">
				</a>
			</div>

			<button class="btn btn-toggler btn-sm d-lg-none" data-toggle="collapse" data-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
				Menu
			</button>

			<!-- 
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
			</button>
			-->

			<div class="collapse navbar-collapse" id="navMenu">
					<ul class="navbar-nav ml-auto">
						<?php foreach( $menus as $menu ){ ?>
							<li class="nab-item"><a class="nav-link font-prompt <?php if( $page==$menu['name'] ) echo 'active';?>" href="<?php echo $menu['link'];?>"><?php echo $menu['title'];?></a>
						<?php } ?>
					</ul>
			</div>
		</div>
	</nav>


	<script type="text/javascript">
		active_menu('<?php echo $_GET["page"]; ?>');
	</script>

	<?php if( $page == '' ){ ?>

	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<?php for($i=1;$i<=7;$i++){ ?>
			<div class="carousel-item <?php if($i==1) echo 'active'; ?>">
				<img class="d-block w-100" src="images/slide/P0<?php echo $i; ?>.jpg">
			</div>
			<?php } ?>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<?php } ?>


	<div class="container">
		<?php
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

	<div class="footer bg-secondary">
		<div class="container">
			<div class="row pt-3">
				<div class="col-sm-6 font-prompt text-white">

					<h4 class="text-center"><?php echo $contact_title; ?></h4>

					<div class="media mb-2">
						<div class="media-icon mr-2">
							<i class="fas fa-phone"></i>
						</div>
						<div class="media-body">
							<?php echo $contact_detail1; ?>
						</div>
					</div>

					<div class="media mb-2">
						<div class="media-icon mr-2">
							<i class="far fa-envelope"></i>
						</div>
						<div class="media-body">
							<?php echo $contact_detail2; ?>							
						</div>
					</div>

				</div>

				<div class="col-sm-6">
					<br>
					<p class="text-center">
						<a href="?page=promotion"><img src="images/promotion-icon.gif"></a>
					</p>
				</div>

			</div>

			<hr>

			<div class="row">

				<div class="col-sm-6 font-prompt text-white">
					<h3 class="text-center"><?php echo $map_title; ?></h3>
					<p class="text-center">
						<a href="?page=map">
							<img src="images/1426343296_Application-Map-128.png">
						</a>
					</p>
					<p class="text-center">
						GPS Location : 
						<a href="https://www.google.co.th/maps/place/19%C2%B050'57.9%22N+99%C2%B050'59.0%22E/@19.849406,99.849728,1069m/data=!3m2!1e3!4b1!4m2!3m1!1s0x0:0x0?hl=th" target="_blank" style="color:#FFF; text-decoration:underline;">19.849406 , 99.849728</a>
					</p>
				</div>

				<div class="col-sm-6 font-prompt text-white">
					<h3 class="text-center">Partner</h3>
					<div class="text-center">
						<div style="background:#FFF; display:inline-block; padding:0 20px; margin:5px;">
							<a href="http://www.udomrak.com/">
								<img src="images/Udomrak logo.jpg">
							</a>
						</div>

						<div><a href="http://www.udomrak.com/" class="text-white">www.udomrak.com</a></div>

						<!-- <div style="background:#FFF; display:inline-block; padding:18px 5px; margin:5px;">
							<a href="http://www.crpropertyservice.com/">
									<img src="http://www.crpropertyservice.com/images/logo.png">
							</a>
						</div> -->
					</div>
				</div>

			</div>

			<hr>
			
			<div class="row">

				<div class="col-sm-6 font-prompt text-white">
					<p style="font-size:13px;">
						<?php echo $copy_right1; ?>
						<span style="font-size:11px; color:#ddd;">- <?php echo $copy_right2; ?> -</span>
					</p>

				</div>

				<div class="col-sm-6 text-center font-prompt text-white">
					<?php echo $visitor; ?> : 
					<strong class="tcolor3">
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

		</div>
	</div>
</body>
</html>