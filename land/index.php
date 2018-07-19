<div class="row">
	<h2 class="text-center">ที่ดิน บ้านเมลานี</h2>
	<hr><br>

	<?php
	$sql = " SELECT * FROM land_price order by land_order";
	$rs = mysql_query($sql);
	?>
	<table class="table table-bordered table-hover">
		<thead style="background:#f0f0f0;">
			<tr>
				<th class="text-center" rowspan="2">ตำแหน่ง</th>
				<th class="text-center" colspan="3">เนื้อที่</th>
				<th class="text-center" rowspan="2">ราคา/ตารางวา</th>
				<th class="text-center" rowspan="2">ราคารวม</th>
				<th class="text-center" rowspan="2">หมายเหตุ</th>
			</tr>		
			<tr>
				<th class="text-center" width="80">ไร่</th>
				<th class="text-center" width="80">งาน</th>
				<th class="text-center" width="80">ตารางวา</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			while( $s = mysql_fetch_array($rs) ){ 
			$area_sum = ($s['rai']*4*100) + ($s['ngan']*100) + $s['wah2'];
			$price_sum = $area_sum * $s['price_wah2'];
			$price_pro = $price_sum - $s['discount'];
			?>
			<tr>
				<td><?php echo $s['land_pot']; ?></td>
				<td align="center"><?php echo $s['rai']; ?></td>
				<td align="center"><?php echo $s['ngan']; ?></td>
				<td align="center"><?php echo $s['wah2']; ?></td>
				<td align="right"><?php if($s['price_wah2'] == 0) echo '-'; else echo number_format($s['price_wah2'],0); ?></td>
				<td align="right">
					<?php 
					if($s['price_sum'] > 0) 
						echo number_format($s['price_sum'],0); 
					else
						echo number_format( ( ($s['rai'] * 100 * 4) + ($s['ngan'] * 100) + $s['wah2'] ) * $s['price_wah2'] );
					?>
				</td>
				<td style="color:#F00;"><?php echo $s['remarks']; ?></td>
			</tr>
			<? } ?>
		</tbody>
	</table>
	
</div>

<br><br>

<div class="row">
	<div class="col-sm-6 col-md-3">
		<a href="/file/Land_Plan.pdf?<?=rand(0,9999)?>" target="_blank" class="btn btn-primary btn-lg btn-block"><i class="glyphicon glyphicon-map-marker"></i> แผนที่ตำแหน่งที่ดิน</a>
	</div>
</div>
<br>
<div class="row">
	<div class="col-sm-6 col-md-3">
		<a href="/file/House Price and Detail.JPG" target="_blank" class="btn btn-danger btn-lg btn-block"><i class="glyphicon glyphicon-home"></i> ตารางราคาบ้านเมลานี</a>
	</div>
</div>