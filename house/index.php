<h3 class="text-center font-prompt mt-4 mb-4 p-0 tcolor1"><?php echo $house_title;?></h3>
<hr>

<p class="font-prompt tcolor2 small">
	<?php echo $house_subtitle; ?>
</p>

<?php
$sql = " SELECT * FROM house_h WHERE h_show = '1' ORDER BY h_order ";
$rs = mysql_query($sql);
$i=1;
?>

<div class="row">
	<?php while( $s = mysql_fetch_array($rs) ){ ?>
		<div class="col-sm-6 col-md-4">

			<div class="card mb-3 card-list">
				<div class="card-body font-prompt p-2">
					<div class="list-pic">
						<a href="?page=house_detail&h_id=<?php echo $s['h_id']; ?>">
							<img src="house/house_pic/<?php echo $s['h_id']; ?>/<?php echo $s['h_pic_show']; ?>" class="img-fluid" />
						</a>
					</div>

					<table class="table table-condensed table-sm border-bottom">
						<tbody>
							<tr>
								<td><a href="?page=house_detail&h_id=<?php echo $s['h_id']; ?>"><?php echo $s['h_name_'.$_SESSION["lang"]]; ?></a></td>
								<td><div class="text-right"> <?php echo number_format($s['h_price'],0);?> ฿</div></td>
							</tr>
							<tr>
								<td>แบบบ้าน</td>
								<td><div class="text-right"> <?php echo $s['h_style_'.$_SESSION["lang"]] ?></div></td>
							</tr>
							<tr>
								<td>ห้องนอน</td>
								<td><div class="text-right"> <?php echo $s['h_bed'] ?></div></td>
							</tr>
							<tr>
								<td>ห้องน้ำ</td>
								<td><div class="text-right"> <?php echo $s['h_bath'] ?></div></td>
							</tr>
							<tr>
								<td>ที่จอดรถ</td>
								<td><div class="text-right"> <?php echo $s['h_parking'] ?></div></td>
							</tr>
						</tbody>
					</table>
					<div class="text-right">
						<a href="?page=house_detail&h_id=<?php echo $s['h_id']; ?>">
							<button class="btn btn-primary btn-sm">รายละเอียด <i class="fas fa-angle-double-right"></i></button>
						</a>
					</div>
				</div>
			</div>	
			
		</div>
	<?php } ?>
</div>