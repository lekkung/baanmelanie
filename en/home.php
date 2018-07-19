<div class="row">
	<h2 class="text-center">Welcome to Baan Melanie</h2>
	<hr>
</div>
<div class="row">
	<div class="col-xs-4 text-center">
		<a href="?page=map">
			<div class="icon-main"><span class="glyphicon glyphicon-map-marker"></span></div>
		</a>
		<h3>Location</h3>
		<p>
			Near city only 10 minutes<br>
			Near Mall<br>
			Near Main Street<br>
			All land plots have Chanote title-deeds<br>
			No flooding and no land slides<br>
		</p>
	</div>
	<div class="col-xs-4 text-center">
		<a href="?page=land">
			<div class="icon-main"><span class="glyphicon glyphicon-tree-deciduous"></span></div>
		</a>
		<h3>Environment</h3>
		<p>
			Tranquility<br>
			Naturally<br>
			Healthy and clean environment<br>
			No nuclear fall-out
		</p>
	</div>
	<div class="col-xs-4 text-center">
		<a href="?page=house">
			<div class="icon-main"><span class="glyphicon glyphicon-home"></span></div>
		</a>
		<h3>House</h3>
		<p>
			Modern and luxury<br>
			With expert engineers and architects<br>
			Quality and fair prices<br>
		</p>
	</div>
</div>

<div class="row">
	<hr>
</div>

<h2 class="text-center">แบบบ้านเมลานี</h2>
<div class="row img-home-main">
	<div class="col-md-3 col-xs-6" style="padding-bottom:10px;">
		<img src="../images/house/360/baan_thai.jpg" class="img-responsive">
	</div>
	<div class="col-md-3 col-xs-6" style="padding-bottom:10px;">
		<img src="../images/house/360/chai_dee.jpg" class="img-responsive">
	</div>
	<div class="col-md-3 col-xs-6" style="padding-bottom:10px;">
		<img src="../images/house/360/chokdee.jpg" class="img-responsive">
	</div>
	<div class="col-md-3 col-xs-6" style="padding-bottom:10px;">
		<img src="../images/house/360/chom_view.jpg" class="img-responsive">
	</div>
	<div class="col-md-3 col-xs-6" style="padding-bottom:10px;">
		<img src="../images/house/360/karun.jpg" class="img-responsive">
	</div>
	<div class="col-md-3 col-xs-6" style="padding-bottom:10px;">
		<img src="../images/house/360/meesuk.jpg" class="img-responsive">
	</div>
	<div class="col-md-3 col-xs-6" style="padding-bottom:10px;">
		<img src="../images/house/360/Pools_14.JPG" class="img-responsive">
	</div>
	<div class="col-md-3 col-xs-6" style="padding-bottom:10px;">
		<img src="../images/house/360/Pools_25.jpg" class="img-responsive">
	</div>
	<div class="col-xs-12 text-right" style="font-size:13px;">
		<h3><a href="?page=house">All house &raquo;</a></h3>
	</div>
</div>

<div class="row">
	<hr>
</div>

<div class="row">
	
	<?php
	$list1 = array(
		'glyphicon-tree-deciduous' => array( 
			'Fresh clean air, cool weather, no nuclear fall-out',
			'Amazing nature, rich Lanna culture, delicious food',
			'Tranquility and calm peaceful life',
			'Healthy and clean environment',
			),
		'glyphicon glyphicon-user' => array(
			'Friendly people whom still like to help you'
			),
		'glyphicon-plane' => array(			
			'Good roads, infrastructure, bus- and air links',
			'Easy to travel around and no traffic jams'
			),
		'glyphicon glyphicon-usd' => array(
			'Business quadrangle: Thai-China-Laos-Burma',
			'Most ‘booming’ development area of Thailand',
			'Easy to be an entrepreneur or to find work'
			),
		'glyphicon-ban-circle' => array(
			'No flooding and no land slides',
			'Low criminality and violence rates',
			),
		'glyphicon glyphicon-bookmark' => array(
			'Respectful impressive Mae Fah Luang history'
			)
	);
	?>
	<div class="col-md-6">
		<h3 class="text-center" style="margin-bottom:30px; color:#610061;">Why living in ChiangRai?</h3>
		<ul class="media-list media-list-index">
			<?php foreach( $list1 as $icon => $text_arr ){ ?>
			<li class="media">
				<div class="media-left">
					<div class="media-icon">
						<span class="glyphicon <?php echo $icon; ?>" aria-hidden="true"></span>
					</div>
				</div>
				<div class="media-body">
					<?php foreach( $text_arr as $text ){ ?>
					<p class="media-heading"><?php echo $text; ?></p>
					<?php } ?>
				</div>
			</li>
			<?php } ?>
		</ul>
	</div>



	<?php
	$list2 = array(
		'glyphicon-plane' => array( 
			'Residential community at 10 minutes drive from city and facilities',
			'Just 5 minutes drive to Santiburi Golf course',
			'Only 5 minutes to Central Plaza, Big C and HomePro',
			'Located along new Highway AH-3 to Laos-China',
			'New public road throughout whole community'
			),
		'glyphicon glyphicon-home' => array(
			'Free professional design of your dream house',
			'New powerful 3-Phase public electricity system',
			),
		'glyphicon glyphicon-map-marker' => array(			
			'All land plots have Chanote title-deeds',
			'Much choice of spacious or smaller land plots',
			'Possibility to sub-divide land lots up to your desire'
			),
		'glyphicon-tree-deciduous' => array(
			'Quiet residential area with mix of foreign and Thai residents'
			),
		'glyphicon-volume-off' => array(
			'No noise, pollution or typical city problems'
			),
		'glyphicon-plus' => array(
			'Nearly hospital with 24-7 emergency services'
			)
	);
	?>


	<div class="col-md-6">
		<h3 class="text-center" style="margin-bottom:30px; color:#610061;">Highlights...</h3>
		<ul class="media-list media-list-index">
			<?php foreach( $list2 as $icon => $text_arr ){ ?>
			<li class="media">
				<div class="media-left">
					<div class="media-icon">
						<span class="glyphicon <?php echo $icon; ?>" aria-hidden="true"></span>
					</div>
				</div>
				<div class="media-body">
					<?php foreach( $text_arr as $text ){ ?>
					<p class="media-heading"><?php echo $text; ?></p>
					<?php } ?>
				</div>
			</li>
			<?php } ?>
		</ul>
	</div>

</div>