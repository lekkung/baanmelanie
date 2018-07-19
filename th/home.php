
<h4 class="text-center font-prompt mt-3 mb-3 p-0">ยินดีต้อนรับสู่ บ้านเมลานี</h4>
<hr class="m-0">


<div class="row">
	<div class="col-sm-4 text-center">
		<a href="?page=map">
			<div class="rounded-circle text-white" style="width:60px; line-height:60px; background:#610061; font-size:20px;">
				
			</div>
			<div class="icon-main"><span class="glyphicon glyphicon-map-marker"></span></div>
		</a>
		<h4 class="font-prompt"><i class="fas fa-map-marked-alt"></i> สถานที่ตั้ง</h4>
		<p>
			ใกล้ตัวเมืองเพียง 10 นาที<br>
			ใกล้ห้างสรรพสินค้า<br>
			ใกล้ถนนสายหลัก เดินทางสะดวก<br>
			ที่ดินทุกแปลงมีโฉนด<br>
			ไม่มีน้ำท่วม และดินถล่ม<br>
		</p>
	</div>
	<div class="col-xs-4 text-center">
		<a href="?page=land">
			<div class="icon-main"><span class="glyphicon glyphicon-tree-deciduous"></span></div>
		</a>
		<h3>บรรยากาศ</h3>
		<p>
			เงียบ สงบ<br>
			ร่มรื่น เป็นธรรมชาติ<br>
			สภาพแวดล้อมสะอาด<br>
			ไม่มีมลพิษ
		</p>
	</div>
	<div class="col-xs-4 text-center">
		<a href="?page=house">
			<div class="icon-main"><span class="glyphicon glyphicon-home"></span></div>
		</a>
		<h3>บ้าน</h3>
		<p>
			หรูหรา ทันสมัย<br>
			มีวิศวกรและสถาปนิกผู้เชี่ยวชาญ<br>
			มีคุณภาพและราคาที่เป็นธรรม<br>
		</p>
	</div>
</div>

<div class="row">
	<hr>
</div>

<h2 class="text-center">แบบบ้านเมลานี</h2>
<div class="row img-home-main">
	<div class="col-md-3 col-xs-6" style="padding-bottom:10px;">
		<img src="images/house/360/baan_thai.jpg" class="img-responsive">
	</div>
	<div class="col-md-3 col-xs-6" style="padding-bottom:10px;">
		<img src="images/house/360/chai_dee.jpg" class="img-responsive">
	</div>
	<div class="col-md-3 col-xs-6" style="padding-bottom:10px;">
		<img src="images/house/360/chokdee.jpg" class="img-responsive">
	</div>
	<div class="col-md-3 col-xs-6" style="padding-bottom:10px;">
		<img src="images/house/360/chom_view.jpg" class="img-responsive">
	</div>
	<div class="col-md-3 col-xs-6" style="padding-bottom:10px;">
		<img src="images/house/360/karun.jpg" class="img-responsive">
	</div>
	<div class="col-md-3 col-xs-6" style="padding-bottom:10px;">
		<img src="images/house/360/meesuk.jpg" class="img-responsive">
	</div>
	<div class="col-md-3 col-xs-6" style="padding-bottom:10px;">
		<img src="images/house/360/Pools_14.JPG" class="img-responsive">
	</div>
	<div class="col-md-3 col-xs-6" style="padding-bottom:10px;">
		<img src="images/house/360/Pools_25.jpg" class="img-responsive">
	</div>
	<div class="col-xs-12 text-right" style="font-size:13px;">
		<h3><a href="?page=house">แบบบ้าานทั้งหมด &raquo;</a></h3>
	</div>
</div>

<div class="row">
	<hr>
</div>

<div class="row">
	
	<?php
	$list1 = array(
		'glyphicon-tree-deciduous' => array( 
			'อากาศดี ไม่มีมลภาวะเสีย',
			'ธรรมชาติที่น่าทึ่ง หลากหลายด้วยวัฒนธรรม และอาหารอร่อย',
			'สงบเงียบ และมีชีวิตที่สันติ',
			'สภาพแวดล้อมสะอาด ทำให้ร่างสมบูรณ์',
			),
		'glyphicon glyphicon-user' => array(
			'ผู้คนเป็นมิตรและพร้อมที่จะช่วยเหลือเสมอ'
			),
		'glyphicon-plane' => array(			
			'ถนน สาธารณูประโภค และการคมนาคมทางอากาศเยี่ยม',
			'ไป-มา สะดวกรถไม่ติด'
			),
		'glyphicon glyphicon-usd' => array(
			'ศูนย์กลางธุรกิจ 4 ประเทศ (ไทย จีน พม่า ลาว)',
			'เป็นพื้นที่ทีกำลังพัฒนาอย่างรวดเร็วของประเทศไทย',
			'ง่ายต่อการที่จะเป็นนักธุรกิจหรือหางานทำ'
			),
		'glyphicon-ban-circle' => array(
			'ไม่มีน้ำท่วม และดินถล่ม',
			'อัตราการเกิดอาชญากรรมและความรุนแรงต่ำ',
			),
		'glyphicon glyphicon-bookmark' => array(
			'ประวัติศาสตร์ที่น่าเคารพและประทับใจของแม่ฟ้าหลวง'
			)
	);
	?>
	<div class="col-md-6">
		<h3 class="text-center" style="margin-bottom:30px; color:#610061;">ทำไมต้องเลือกหาบ้านพักในเชียงราย ?</h3>
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
			'จากโครงการถึงในตัวเมืองขับรถเพียง 10 นาที',
			'ขับรถ 5 นาทีถึงสนามกอล์ฟสันติบุรี',
			'5 นาทีถึงเซ็นทรัล บิ๊กซี และโฮมโปร์',
			'อยู่ใกล้ทางหลวงหมายเลข 3 ไป จีน-ลาว',
			'ถนนสาธารณะใหม่ทั่วโครงการ'
			),
		'glyphicon glyphicon-home' => array(
			'บริการออกแบบ้านให้ฟรีตามที่ฝันไว้',
			'ไฟฟ้า 3 เฟสใหม่ของสาธารณะ',
			),
		'glyphicon glyphicon-map-marker' => array(			
			'ที่ดินทุกแปลงมีโฉนด',
			'มีที่ดินหลาขนาดให้เลือก',
			'พร้อมที่จะแบ่งขายตามที่ต้องการ'
			),
		'glyphicon-tree-deciduous' => array(
			'สงบเงียบมีทั้งคนไทยและต่างชาติอาศัยอยู่'
			),
		'glyphicon-volume-off' => array(
			'ไม่มีเสียงดังมลภาวะทางอากาศและรถติดตลอดจนปัญหาของเมือง'
			),
		'glyphicon-plus' => array(
			'ใกล้ โรงพยาบาลที่มีการบริการฉุกเฉิน ตลอด 24 ชั่วโมง'
			)
	);
	?>


	<div class="col-md-6">
		<h3 class="text-center" style="margin-bottom:30px; color:#610061;">จุดเด่นของบ้านเมลานี...</h3>
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