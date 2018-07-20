<h3 class="text-center font-prompt mt-4 mb-4 p-0 tcolor1"><?php echo $house_title;?></h3>
<hr>

<?php
$h_id = $_GET['h_id'];
$sql = " SELECT * FROM house_h WHERE h_id = '$h_id' ";
$rs = mysql_query($sql);
$house_h = mysql_fetch_assoc($rs);
?>

<h4 class="tcolor2 font-prompt">
	<a href="javascript:void(0)" onclick="window.history.go(-1)" class="tcolor2"><i class="fas fa-angle-left"></i></a>
	<?php echo $house_h['h_name_th'];?> [<?php echo $house_h['h_name_en'];?>]
</h4>

<div class="card font-prompt">
	<div class="card-body p-0">
		<table class="table table-striped table-sm m-0">
			<?php 
			$sql = " SELECT * FROM house_detail_h WHERE lang = '$lang'";
			$rs = mysql_query($sql);
			while( $s = mysql_fetch_assoc($rs) ){
			?>
			<tr>
				<td>
					<div class="row">
						<div class="col-auto tcolor1" style="font-weight: 600;"><?php echo $s['title'];?></div>
						<div class="col text-right">
							<?php 
							if( $s['field_name'] == 'h_price' ){
								echo number_format($house_h['h_price'],0);
							}else{
								echo $house_h[$s['field_name']];
							}

							echo ' '.$s['unit'];
							?>
						</div>
					</div>
				</td>
			</tr>
			<?php } ?>
			</tr>
		</table>
	</div>
</div>		


<br>

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

<br>

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

