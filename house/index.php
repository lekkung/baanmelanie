<div class="row">
	<h2 class="text-center">แบบบ้านเมลานี</h2>
	<hr>
	<div class="col-md-12" style="color:red;">
		* ราคาบ้านรวมค่าระบบไฟฟ้า กระเบื้อง เครื่องสุขภัณฑ์ และเครื่องครัวเรียบร้อยแล้ว แต่ไม่รวมค่ารั้วบ้าน ระบบน้ำประปาหรือบ่อน้ำ 
		ผู้ซื้อสามารถเลือกรูปแบบของรั้วบ้านและระบบน้ำตามที่ต้องการได้ ซึ้งราคาเหล่านี้จะแตกต่างกันไปตามรูปแบบที่ผู้ซื้อต้องการ
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
							<img src="house/house_pic/<?php echo $s['h_id']; ?>/<?php echo $s['h_pic_show']; ?>" class="img-responsive" />
						</a>
					</div>

					<table class="table table-condensed">
						<tbody>
							<tr>
								<td><h4><a href="?page=house_detail&h_id=<?php echo $s['h_id']; ?>"><?php echo $s['h_name_th']; ?></a></h4></td>
								<td><h4><div class="text-right"> <?php echo number_format($s['h_price'],0);?> ฿</div></h4></td>
							</tr>
							<tr>
								<td><h4>แบบบ้าน</h4></td>
								<td><h4><div class="text-right"> <?php echo $s['h_style_th'] ?></div></h4></td>
							</tr>
							<tr>
								<td><h4>ห้องนอน</h4></td>
								<td><h4><div class="text-right"> <?php echo $s['h_bed'] ?></div></h4></td>
							</tr>
							<tr>
								<td><h4>ห้องน้ำ</h4></td>
								<td><h4><div class="text-right"> <?php echo $s['h_bath'] ?></div></h4></td>
							</tr>
							<tr>
								<td><h4>ที่จอดรถ</h4></td>
								<td><h4><div class="text-right"> <?php echo $s['h_parking'] ?></div></h4></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>	
			
		</div>
	<?php } ?>
</div>