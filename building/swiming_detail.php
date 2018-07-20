
<script type="text/javascript">
function ShowImage(s_id,img_key){
	document.getElementById('BG_Image').style.display = 'block';
	document.getElementsByTagName('body').item(0).style.overflow = 'hidden';
	AjaxShow('swimimg_Bpic.php','BG_Image','s_id='+s_id,'img_key='+img_key);
}

var stat_close = 1;

function CloseImage(){
	if( stat_close == 1 ){ 
		document.getElementById('BG_Image').style.display = 'none';
		document.getElementsByTagName('body').item(0).style.overflow = 'auto';
		document.getElementById('BG_Image').innerHTML = '';
	}
	stat_close = 1;
}

function GoImage(s_id,img_key){
	AjaxShow( 'swimimg_Bpic.php','BG_Image','s_id='+s_id,'img_key='+img_key );
}
</script>

<div id="BG_Image" class="GB" onclick="CloseImage();">xxxx</div>
<div class="col1">
	<h1 style="cursor:pointer;" onclick="window.location = '?action=building';"><img src="images/hh05.png" /></h1>
	<?php
	$s_id = $_GET['s_id'];
	CON_DB();
	$sql = " SELECT * FROM swiming_pool WHERE s_id = '$s_id' ";
	$rs = mysql_query($sql);
	$s = mysql_fetch_array($rs);
	?>
	
	<h2><?php echo $s['s_name_th'];?></h2>
	
	<table cellpadding="0" cellspacing="0" border="0" class="tb02">
		<tr>
			<th align="left">รูปแบบ</th>
			<td align="left"><?php echo $s['s_type_th']; ?></td>
		</tr>
		<tr>
			<th align="left">ขนาด</th>
			<td align="left"><?php echo $s['s_w']; ?></td>
		</tr>
		<tr>
			<th align="left">ลึก</th>
			<td align="left"><?php echo $s['s_t']; ?> ม.</td>
		</tr>
		<tr>
			<th align="left">พื้นที่รวม</th>
			<td align="left"><?php echo $s['s_area']; ?> ลบ.ม.</td>
		</tr>
		<tr>
			<th align="left">ราคา</th>
			<td align="left"><?php echo num_money($s['s_price']); ?> บาท</td>
		</tr>
		<tr>
			<th align="left">หมายเหตุ</th>
			<td align="left"><?php echo $s['s_remark']; ?></td>
		</tr>
	</table>
	
</div>

<?php
if( is_dir("swim_pic/$s_id") ){
	$objScan = scandir("swim_pic/$s_id");
}
//print_r($objScan);
?>
<div class="col4">
	<ul>
		<?php 
		$i = 0;
		unset($_SESSION['FILE_PIC']);
		foreach( $objScan as $s_pic ){ 
		if( $s_pic != '.' && $s_pic != '..' ){ 
		
		$_SESSION['FILE_PIC'][] = $s_pic;
		
		$size = getimagesize( "swim_pic/$s_id/$s_pic" );
		if( ($size[0] / $size[1]) >= 1.5 ){
			$show_size = 'height="155"';
		}else{
			$show_size = 'width="232"';
		}
		
		?>
			<li><img onclick="ShowImage('<?=$s_id?>','<?=$i++?>')" src="<?php echo "swim_pic/$s_id/$s_pic";?>" <?php echo $show_size;?> /></li>
		<?php }} ?>
		<br class="clear">
	</ul>
</div>