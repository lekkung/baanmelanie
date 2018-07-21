<h3 class="text-center font-prompt mt-4 mb-4 p-0 tcolor1"><?php echo $land_title;?></h3>


<?php
$sql = " SELECT * FROM land_price order by land_order";
$rs = mysql_query($sql);
?>
<table class="table table-bordered table-hover table-responsive-sm font-prompt">
	<thead style="background:#f0f0f0;">
		<tr>
			<th class="text-center" rowspan="2"><?php echo $land_th[0];?></th>
			<th class="text-center" colspan="3"><?php echo $land_th[1];?></th>
			<th class="text-center" rowspan="2"><?php echo $land_th[2];?></th>
			<th class="text-center" rowspan="2"><?php echo $land_th[3];?></th>
			<th class="text-center" rowspan="2"><?php echo $land_th[4];?></th>
		</tr>		
		<tr>
			<th class="text-center" width="80"><?php echo $land_th[5];?></th>
			<th class="text-center" width="80"><?php echo $land_th[6];?></th>
			<th class="text-center" width="80"><?php echo $land_th[7];?></th>
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
			<td style="color:#F00;"><?php echo $s['remarks_'.$lang]; ?></td>
		</tr>
		<? } ?>
	</tbody>
</table>

<div class="row mt-5 mb-5">
	<div class="col-sm-6">
		<a href="/file/Land_Plan.pdf?<?=rand(0,9999)?>" target="_blank" class="btn btn-primary btn-lg btn-block"><i class="fas fa-map-marker-alt"></i> แผนที่ตำแหน่งที่ดิน</a>
	</div>
	<div class="col-sm-6">
		<a href="/file/House Price and Detail.JPG" target="_blank" class="btn btn-danger btn-lg btn-block"><i class="fas fa-home"></i> ตารางราคาบ้านเมลานี</a>
	</div>
</div>