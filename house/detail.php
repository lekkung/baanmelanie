<div class="row">
	<h2 class="text-center">แบบบ้านเมลานี</h2>
	<hr>
</div>

<div class="row">
	<div class="col-md-12">
		<?php
		$h_id = $_GET['h_id'];
		$sql = " SELECT * FROM house_h WHERE h_id = '$h_id' ";
		$rs = mysql_query($sql);
		$s = mysql_fetch_array($rs);
		?>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h2 style="color:#610061;"><?php echo $s['h_name_th'];?> [<?php echo $s['h_name_en'];?>]</h2>
			</div>
			<div class="panel-body" style="padding:10px 0 0 0;">
				<table class="table table-striped">
					<tr>
						<th align="left">แบบบ้าน</th><td align="right"><?php echo $s['h_style_th'];?></td>
					</tr>
					<tr>
						<th align="left">ระดับ</th><td align="right"><?php echo $s['h_group'];?></td>
					</tr>
					<tr>
						<th align="left">ห้องนอน</th><td align="right"><?php echo $s['h_bed'];?></td>
					</tr>
					<tr>
						<th align="left">ห้องน้ำ</th><td align="right"><?php echo $s['h_bath'];?></td>
					</tr>
					<tr>
						<th align="left">ที่จอดรถ</th><td align="right"><?php echo $s['h_parking'];?></td>
					</tr>
					<tr>
						<th align="left">พื้นที่ภายใน</th><td align="right"><?php echo $s['h_area_in'];?> ตร.ม.</td>
					</tr>
					<tr>
						<th align="left">พื้นที่ภายนอก</th><td align="right"><?php echo $s['h_area_out'];?> ตร.ม.</td>
					</tr>
					<tr>
						<th align="left">บริเวณที่จอดรถ</th><td align="right"><?php echo $s['h_area_park'];?> ตร.ม.</td>
					</tr>
					<tr>
						<th align="left">พื้นที่ทั้งหมด</th><td align="right"><?php echo $s['h_area_all'];?> ตร.ม.</td>
					</tr>
					<tr>
						<th align="left">ราคา</th><td align="right"><?php echo number_format($s['h_price'],0);?> บาท</td>
					</tr>
					<tr>
						<th align="left">หมายเหตุ</th><td align="right"><?php echo $s['h_remarks_th'];?></td>
					</tr>
				</table>
			</div>
		</div>		
	</div>
</div>

<br><br>

<?php
if( is_dir("house/house_pic/$h_id") ){
	$objScan = scandir("house/house_pic/$h_id");
}
//print_r($objScan);

//$img_size = getimagesize("house/house_pic/11/ChomPhu Thai View.jpg");
//print_r($img_size);
?>

<div class="row">

	<script>
	var items = [];
	</script>
	
	<div class="col-md-12 thumbnail-photo demo-gallery">
		<?php 
		$i=0;
		foreach( $objScan as $h_pic ){ 
		if( $h_pic != '.' && $h_pic != '..' ){
		$img_size = getimagesize("house/house_pic/$h_id/$h_pic");

		?>
		<script>
		var item_img = {
				src: '<?php echo "house/house_pic/$h_id/$h_pic";?>',
				w: <?php echo $img_size[0]?>,
				h: <?php echo $img_size[1]?>
		}
		items.push(item_img);
		</script>
		<a href="javascript:void(0)" onclick="openPhotoSwipe(<?=$i?>)">
			<img src="<?php echo "house/house_pic/$h_id/$h_pic";?>" />
		</a>
		<?php $i++;}} ?>
	</div>

</div>

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

	<!-- Background of PhotoSwipe. 
			 It's a separate element, as animating opacity is faster than rgba(). -->
	<div class="pswp__bg"></div>

	<!-- Slides wrapper with overflow:hidden. -->
	<div class="pswp__scroll-wrap">

			<!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
			<div class="pswp__container">
					<!-- don't modify these 3 pswp__item elements, data is added later on -->
					<div class="pswp__item"></div>
					<div class="pswp__item"></div>
					<div class="pswp__item"></div>
			</div>

			<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
			<div class="pswp__ui pswp__ui--hidden">

					<div class="pswp__top-bar">

							<!--  Controls are self-explanatory. Order can be changed. -->

							<div class="pswp__counter"></div>

							<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

							<button class="pswp__button pswp__button--share" title="Share"></button>

							<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

							<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

							<!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
							<!-- element will get class pswp__preloader--active when preloader is running -->
							<div class="pswp__preloader">
									<div class="pswp__preloader__icn">
										<div class="pswp__preloader__cut">
											<div class="pswp__preloader__donut"></div>
										</div>
									</div>
							</div>
					</div>

					<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
							<div class="pswp__share-tooltip"></div> 
					</div>

					<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
					</button>

					<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
					</button>

					<div class="pswp__caption">
							<div class="pswp__caption__center"></div>
					</div>

				</div>

			</div>

</div>

<script>
var openPhotoSwipe = function(index) {
	var pswpElement = document.querySelectorAll('.pswp')[0];

	// build items array
	// var items = [
	// 		{
	// 				src: 'https://farm2.staticflickr.com/1043/5186867718_06b2e9e551_b.jpg',
	// 				w: 964,
	// 				h: 1024
	// 		},
	// 		{
	// 				src: 'https://farm7.staticflickr.com/6175/6176698785_7dee72237e_b.jpg',
	// 				w: 1024,
	// 				h: 683
	// 		}
	// ];
	// console.log(items);
	
	// define options (if needed)
	var options = {
		 // history & focus options are disabled on CodePen        
			history: false,
			focus: false,
			index:index,

			showAnimationDuration: 0,
			hideAnimationDuration: 0
			
	};
	
	var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
	gallery.init();
};

// document.getElementById('btn').onclick = openPhotoSwipe;
</script>