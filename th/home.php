
<h4 class="text-center font-prompt mt-4 mb-4 p-0 tcolor1">ยินดีต้อนรับสู่ บ้านเมลานี</h4>
<!-- <hr class="m-0 mb-4"> -->

<div class="card">
	<div class="card-body p-3">
		<div class="row pt-2">
			<div class="col-sm-4 text-center font-prompt">
				<h4>
					<a href="?page=map" class="tcolor2"><i class="fas fa-map-marked-alt"></i> สถานที่ตั้ง</a>
				</h4>
				<p>
					ใกล้ตัวเมืองเพียง 10 นาที<br>
					ใกล้ห้างสรรพสินค้า<br>
					ใกล้ถนนสายหลัก เดินทางสะดวก<br>
					ที่ดินทุกแปลงมีโฉนด<br>
					ไม่มีน้ำท่วม และดินถล่ม<br>
				</p>
			</div>

			<div class="col-sm-4 text-center font-prompt">
				<a href="?page=land" class="tcolor2">
					<h4><i class="fab fa-pagelines"></i> บรรยากาศ</h4>
				</a>
				<p>
					เงียบ สงบ<br>
					ร่มรื่น เป็นธรรมชาติ<br>
					สภาพแวดล้อมสะอาด<br>
					ไม่มีมลพิษ
				</p>
			</div>

			<div class="col-sm-4 text-center font-prompt">
				<a href="?page=house" class="tcolor2">
					<h3><i class="fas fa-home"></i> บ้าน</h3>
				</a>
				<p>
					หรูหรา ทันสมัย<br>
					มีวิศวกรและสถาปนิกผู้เชี่ยวชาญ<br>
					มีคุณภาพและราคาที่เป็นธรรม<br>
				</p>
			</div>
		</div>
	</div>
</div>


<h4 class="text-center font-prompt mt-4 mb-4 p-0 tcolor1">แบบบ้านเมลานี</h4>

<div class="row">
	<div class="col-md-3 col-6" style="padding-bottom:10px;">
		<img src="images/house/360/baan_thai.jpg" class="img-fluid rounded">
	</div>
	<div class="col-md-3 col-6" style="padding-bottom:10px;">
		<img src="images/house/360/chai_dee.jpg" class="img-fluid rounded">
	</div>
	<div class="col-md-3 col-6" style="padding-bottom:10px;">
		<img src="images/house/360/chokdee.jpg" class="img-fluid rounded">
	</div>
	<div class="col-md-3 col-6" style="padding-bottom:10px;">
		<img src="images/house/360/chom_view.jpg" class="img-fluid rounded">
	</div>
	<div class="col-md-3 col-6" style="padding-bottom:10px;">
		<img src="images/house/360/karun.jpg" class="img-fluid rounded">
	</div>
	<div class="col-md-3 col-6" style="padding-bottom:10px;">
		<img src="images/house/360/meesuk.jpg" class="img-fluid rounded">
	</div>
	<div class="col-md-3 col-6" style="padding-bottom:10px;">
		<img src="images/house/360/Pools_14.JPG" class="img-fluid rounded">
	</div>
	<div class="col-md-3 col-6" style="padding-bottom:10px;">
		<img src="images/house/360/Pools_25.jpg" class="img-fluid rounded">
	</div>
	<div class="col-12 text-right font-prompt">
		<a href="?page=house" class="tcolor3">แบบบ้านทั้งหมด.....</a>
	</div>
</div>



<div class="row mb-3">
	
	<?php 
	$sql = "SELECT * FROM home_list WHERE list_group = '1'";
	$rs = mysql_query($sql);
	?>

	<div class="col-md-6 font-prompt mb-2">
		<div class="card">
			<div class="card-body">
				<h4 class="text-center mb-3 font-prompt tcolor1">ทำไมต้องเลือกหาบ้านพักในเชียงราย ?</h4>

				<?php while( $s = mysql_fetch_assoc($rs) ){ ?>
				<div class="media mb-2">
					<div class="media-icon mr-2">
						<i class="<?php echo $s['icon']; ?>"></i>
					</div>
					<div class="media-body">
						<?php echo nl2br($s["detail_".$_SESSION['lang']]); ?>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>



	<?php 
	$sql = "SELECT * FROM home_list WHERE list_group = '2'";
	$rs = mysql_query($sql);
	?>

	<div class="col-md-6 font-prompt mb-2">
		<div class="card">
			<div class="card-body">
				<h4 class="text-center mb-3 font-prompt tcolor1">จุดเด่นของบ้านเมลานี...</h4>

				<?php while( $s = mysql_fetch_assoc($rs) ){ ?>
				<div class="media mb-2">
					<div class="media-icon mr-2">
						<i class="<?php echo $s['icon']; ?>"></i>
					</div>
					<div class="media-body">
						<?php echo nl2br($s["detail_".$_SESSION['lang']]); ?>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>

</div>