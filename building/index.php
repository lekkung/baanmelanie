<h3 class="text-center font-prompt mt-4 mb-4 p-0 tcolor1"><?php echo $building_title;?></h3>
<hr>

<h4 class="font-prompt tcolor2"><?php echo $building_title1;?></h4>

<?php
$sql = " SELECT * FROM swiming_pool ";
$rs = mysql_query($sql);
$i=1;
?>
<div class="row">
	<?php while( $s = mysql_fetch_array($rs) ){ ?>
		<div class="col-sm-6 col-md-4">

			<div class="card mb-3">
				<div class="card-body font-prompt p-2">
					<div class="list-pic">
						<a href="?page=building_detail&build=swiming_pool&s_id=<?php echo $s['s_id']; ?>">
							<?php
							$imageURL = "building/swim_pic/".$s['s_id']."/".$s['s_pic_show'];
							
							if (file_exists($imageURL) !== false) {
								echo '<img src="'.$imageURL.'" class="img-fluid" />';
							}else{
								echo '<img src="./images/not_images.jpg" class="img-fluid" />';
							}
							?>
						</a>
					</div>

					<table class="table table-condensed table-sm">
						<tbody>
							<tr>
								<td>รูปแบบ</td>
								<td><div class="text-right"> <?php echo $s['s_type_th'] ?></div></td>
							</tr>
							<tr>
								<td>ขนาด</td>
								<td><div class="text-right"> <?php echo $s['s_w'] ?></div></td>
							</tr>
							<tr>
								<td>ลึก</td>
								<td><div class="text-right"> <?php echo $s['s_t'] ?>  ม.</div></td>
							</tr>
							<tr>
								<td>พื้นที่รวม</td>
								<td><div class="text-right"> <?php echo $s['s_area'] ?> ลบ.ม.</div></td>
							</tr>
							<tr>
								<td>ราคา</td>
								<td><div class="text-right"> <?php echo number_format($s['s_price'],0) ?> ฿</div></td>
							</tr>
						</tbody>
					</table>
					<div class="text-right">
						<a href="?page=building_detail&build=swiming_pool&s_id=<?php echo $s['s_id']; ?>">
							<button class="btn btn-primary btn-sm">รายละเอียด <i class="fas fa-angle-double-right"></i></button>
						</a>
					</div>
				</div>
			</div>	
			
		</div>
	<?php } ?>
</div>

<hr>

<h4 class="font-prompt tcolor2"><?php echo $building_title2;?></h4>


<?php
$sql = " SELECT * FROM building ";
$rs = mysql_query($sql);
$i=1;
?>

<div class="row">
	<?php while( $s = mysql_fetch_array($rs) ){ ?>
		<div class="col-sm-6 col-md-4">

			<div class="card mb-3">
				<div class="card-body font-prompt p-2">
					<div class="list-pic">
						<a href="?page=building_detail&build=building&b_id=<?php echo $s['b_id']; ?>">
							<img src="<?php echo "building/build_pic/".$s['b_id']."/".$s['b_pic_show']; ?>" class="img-fluid" />
						</a>
					</div>

					<table class="table table-condensed table-sm">
						<tbody>
							<tr>
								<td>สิ่งปลูกสร้าง</td>
								<td><div class="text-right"> <?php echo $s['b_name_th'] ?></div></td>
							</tr>
							<tr>
								<td>รูปแบบ</td>
								<td><div class="text-right"> <?php echo $s['b_type_th'] ?></div></td>
							</tr>
							<tr>
								<td>ขนาด</td>
								<td><div class="text-right"> <?php echo $s['b_area'] ?>  ตร.ม.</div></td>
							</tr>
							<tr>
								<td>ราคา</td>
								<td><div class="text-right"> <?php echo number_format($s['b_price'],0); ?> ฿</div></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>	
			
		</div>
	<?php } ?>
</div>