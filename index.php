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

//echo chkBrowser('MSIE');

//echo $_SERVER['HTTP_USER_AGENT'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>บ้านเมลานี เชียงราย - Baan Melanie Chiang Rai - บ้านและที่ดินเชียงราย - Home and Land Chiang Rai</title>

  <link href="https://fonts.googleapis.com/css?family=Prompt:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="fontawesome/css/all.min.css">

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
		<div class="container text-right font-prompt">
			<a href="http://baanmelanie.com">Thai</a> | 
			<a href="http://baanmelanie.com/en">English</a> | 
			<a href="http://baanmelanie.com/cn">中国语文</a>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<div class="col-8 col-sm-auto p-0">
				<a class="navbar-brand" href="./" class="p-0">
					<img src="images/logo.png" class="img-fluid" alt="Baanmelanie บ้านเมลานี บ้าน ที่ดิน เชียงราย">
				</a>
			</div>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navMenu">
					<ul class="navbar-nav ml-auto">
						<li class="nab-item"><a class="nav-link font-prompt active" href="./">หน้าหลัก</a></li>
						<li class="nab-item"><a class="nav-link font-prompt" href="?page=house">แบบบ้าน</a></li>
						<li class="nab-item"><a class="nav-link font-prompt" href="?page=land">ที่ดิน</a></li>
						<li class="nab-item"><a class="nav-link font-prompt" href="?page=building">สิ่งปลูกสร้าง</a></li>
						<li class="nab-item"><a class="nav-link font-prompt" href="?page=promotion">โปรโมชั่น</a></li>
						<li class="nab-item"><a class="nav-link font-prompt" href="?page=contact">ติดต่อเรา</a></li>
					</ul>
			</div>
		</div>
	</nav>


	<script type="text/javascript">
		active_menu('<?php echo $_GET["page"]; ?>');
	</script>


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
			default: require_once('th/home.php'); break;
		}

		?>
	</div>

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<h3 class="text-center">สนใจติดต่อ</h3>
					<ul class="media-list media-list-footer">
						<li class="media">
							<div class="media-left">
								<div class="media-icon">
									<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
								</div>
							</div>
							<div class="media-body">
								<p class="media-heading">
									<!-- 08-2381-7488 - Sales ( Thai, EN ) <br> -->
									<!-- 08-1289-0505 - Sales ( Thai, EN ) <br> -->
									08-7156-1000 - Sales (ไทย) <br>
									08-1884-77641 - Sales (อังกฤษ) <br>
									0-5370-1466 - Design&Construction (อังกฤษ) <br>
									0-5370-1467 - Fax
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
									<a href="mailto:melanie@loxinfo.co.th">melanie@loxinfo.co.th</a> <br>
								</p>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-sm-4">
					<h3 class="text-center">แผนที่บ้านเมลานี</h3>
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
				<div class="col-sm-4">
					<br>
					<p class="text-center">
						<a href="?page=promotion"><img src="images/promotion-icon.gif"></a>
					</p>
				</div>
			</div>

			<hr>

			<div class="row">

				<div class="col-xs-4">
					<h3 class="text-center">Partner</h3>
					<div class="text-center">
						<div style="background:#FFF; display:inline-block; padding:0 20px; margin:5px;">
							<a href="http://www.udomrak.com/">
								<img src="images/Udomrak logo.jpg">
							</a>
						</div>

						<!-- <div style="background:#FFF; display:inline-block; padding:18px 5px; margin:5px;">
							<a href="http://www.crpropertyservice.com/">
									<img src="http://www.crpropertyservice.com/images/logo.png">
							</a>
						</div> -->
					</div>
				</div>

				<div class="col-xs-4">
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
									บ้านเมลานี เชียงราย - Baan Melanie Chiang Rai <br>
	    							266 หมู่ 5 ต. ท่าสาย อ. เมือง จ. เชียงราย <br>
	    							<span style="font-size:11px; color:#ddd;">- รูปภาพภายในเว็บไซต์เป็นรูปภาพลิขสิทธิ์ของบ้านเมลานี -</span>
								</p>
							</div>
						</li>
					</ul>
				</div>

				<div class="col-xs-4 text-center">
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