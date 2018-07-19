<div class="row">
	<h2 class="text-center">Houses Baan Melanie</h2>
	<hr>
	<div class="col-md-12" style="color:red;">
		* House prices are including electricity system, tiles, sanitary and kitchen ware. But don't include land border wall, public water or well.
	</div>
	<br><br><br>
</div>

<?php
$sql = " SELECT * FROM house_h WHERE h_show = '1' ORDER BY h_order ";
$rs = mysql_query($sql);
$i=1;
?>

<div class="row">
	<?php while( $s = mysql_fetch_array($rs) ){ ?>
		<div class="col-sm-6 col-md-4">

			<div class="panel panel-default">
				<div class="panel-body">
					<div class="list-pic">
						<a href="?page=house_detail&h_id=<?php echo $s['h_id']; ?>">
						<img src="../house/house_pic/<?php echo $s['h_id']; ?>/<?php echo $s['h_pic_show']; ?>?rand=<?=rand(0,99)?>" class="img-responsive" />
					</a>
					</div>

					<table class="table table-condensed">
						<tbody>
							<tr>
								<td><h4><a href="?page=house_detail&h_id=<?php echo $s['h_id']; ?>"><?php echo $s['h_name_en']; ?></a></h4></td>
								<td><h4><div class="text-right"> <?php echo number_format($s['h_price'],0);?> ฿</div></h4></td>
							</tr>
							<tr>
								<td><h4>Style</h4></td>
								<td><h4><div class="text-right"> <?php echo $s['h_style_en'] ?></div></h4></td>
							</tr>
							<tr>
								<td><h4>Bedrooms</h4></td>
								<td><h4><div class="text-right"> <?php echo $s['h_bed'] ?></div></h4></td>
							</tr>
							<tr>
								<td><h4>Bathrooms</h4></td>
								<td><h4><div class="text-right"> <?php echo $s['h_bath'] ?></div></h4></td>
							</tr>
							<tr>
								<td><h4>Parking</h4></td>
								<td><h4><div class="text-right"> <?php echo $s['h_parking'] ?></div></h4></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>	
			
		</div>
	<?php } ?>
</div>