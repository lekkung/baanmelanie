<div class="row">
	<h2 class="text-center">Building</h2>
	<hr>
</div>


<div class="row">
	<div class="col-xs-12">
		<h3>Swimming Pool</h3>
	</div>
</div>

<?php
$sql = " SELECT * FROM swiming_pool ";
$rs = mysql_query($sql);
$i=1;
?>

<div class="row">
	<?php while( $s = mysql_fetch_array($rs) ){ ?>
		<div class="col-sm-6 col-md-4">

			<div class="panel panel-default">
				<div class="panel-body">
					<div class="list-pic">
						<a href="?page=building_detail&build=swiming_pool&s_id=<?php echo $s['s_id']; ?>">
							<img src="<?php echo "../building/swim_pic/".$s['s_id']."/".$s['s_pic_show']; ?>" class="img-responsive" />
						</a>
					</div>

					<table class="table table-condensed">
						<tbody>
							<tr>
								<td><h4>Type</h4></td>
								<td><h4><div class="text-right"> <?php echo $s['s_type_en'] ?></div></h4></td>
							</tr>
							<tr>
								<td><h4>Size</h4></td>
								<td><h4><div class="text-right"> <?php echo $s['s_w'] ?></div></h4></td>
							</tr>
							<tr>
								<td><h4>High</h4></td>
								<td><h4><div class="text-right"> <?php echo $s['s_t'] ?>  ม.</div></h4></td>
							</tr>
							<tr>
								<td><h4>Total Area</h4></td>
								<td><h4><div class="text-right"> <?php echo $s['s_area'] ?> ลบ.ม.</div></h4></td>
							</tr>
							<tr>
								<td><h4>Price</h4></td>
								<td><h4><div class="text-right"> <?php echo number_format($s['s_price'],0) ?> ฿</div></h4></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>	
			
		</div>
	<?php } ?>
</div>


<div class="row">
	<div class="col-xs-12">
		<h3>Garden shed & Service building</h3>
	</div>
</div>

<?php
$sql = " SELECT * FROM building ";
$rs = mysql_query($sql);
$i=1;
?>

<div class="row">
	<?php while( $s = mysql_fetch_array($rs) ){ ?>
		<div class="col-sm-6 col-md-4">

			<div class="panel panel-default">
				<div class="panel-body">
					<div class="list-pic">
						<a href="?page=building_detail&build=building&b_id=<?php echo $s['b_id']; ?>">
							<img src="<?php echo "../building/build_pic/".$s['b_id']."/".$s['b_pic_show']; ?>" class="img-responsive" />
						</a>
					</div>

					<table class="table table-condensed">
						<tbody>
							<tr>
								<td><h4>Building</h4></td>
								<td><h4><div class="text-right"> <?php echo $s['b_name_en'] ?></div></h4></td>
							</tr>
							<tr>
								<td><h4>Properties</h4></td>
								<td><h4><div class="text-right"> <?php echo $s['b_type_en'] ?></div></h4></td>
							</tr>
							<tr>
								<td><h4>Area</h4></td>
								<td><h4><div class="text-right"> <?php echo $s['b_area'] ?>  ตร.ม.</div></h4></td>
							</tr>
							<tr>
								<td><h4>Price</h4></td>
								<td><h4><div class="text-right"> <?php echo number_format($s['b_price'],0); ?> ฿</div></h4></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>	
			
		</div>
	<?php } ?>
</div>