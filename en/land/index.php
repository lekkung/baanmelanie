<div class="row">
	<h2 class="text-center">Land Baan Melanie</h2>
	<hr><br>

	<?php
	$sql = " SELECT * FROM land_price order by land_order";
	$rs = mysql_query($sql);
	?>
	<table class="table table-bordered table-hover">
		<thead style="background:#f0f0f0;">
			<tr>
				<th class="text-center" rowspan="2">Land plot</th>
				<th class="text-center" colspan="3">Area</th>
				<th class="text-center" rowspan="2">Price/Wah<sup>2</sup></th>
				<th class="text-center" rowspan="2">Price</th>
				<th class="text-center" rowspan="2">Remarks</th>
			</tr>		
			<tr>
				<th class="text-center" width="80">Rai</th>
				<th class="text-center" width="80">Ngan</th>
				<th class="text-center" width="80">Wah<sup>2</sup></th>
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
						// echo number_format( ( ($s['rai'] * 100 * 4) + ($s['ngan'] * 100) + $s['wah2'] ) * $s['price_wah2'] );
					if($s['price_sum'] > 0) 
						echo number_format($s['price_sum'],0); 
					else
						echo number_format( ( ($s['rai'] * 100 * 4) + ($s['ngan'] * 100) + $s['wah2'] ) * $s['price_wah2'] );
					?>
				<td style="color:#F00;"><?php echo $s['remarks_en']; ?></td>
			</tr>
			<? } ?>
		</tbody>
	</table>
	
</div>

<br><br>

<div class="row">
	<div class="col-sm-6 col-md-3">
		<a href="/file/Land_Plan.pdf?<?=rand(0,9999)?>" target="_blank" class="btn btn-primary btn-lg btn-block"><i class="glyphicon glyphicon-map-marker"></i> Location Map</a>
	</div>
</div>
<br>
<div class="row">
	<div class="col-sm-6 col-md-3">
		<a href="/file/House Price and Detail.JPG" target="_blank" class="btn btn-danger btn-lg btn-block"><i class="glyphicon glyphicon-home"></i> Houses Price List</a>
	</div>
</div>