<?php

include('views/elements/header.php');?>
<div class="container contentWidth">
	<div class="page-header">
    <h1>Hello From the View</h1>
  </div>

	<style>
	.sidebarWidth {width: 20%; float: right; height: 100%; z-index: 1; top: 0;}
	.contentWidth {width: 50%; float; left;}
	</style>

</div>
	<div class="sidebarWidth">
	<?php
		foreach($feed_data as $item) {?>
		<h3><?php echo $item->title?></h3>
		<p><?php echo $item->description?></p>
		<p><?php echo $item->pubDate?></p>
		<a href="<?php echo $item->guid?>">Read More</a>
		<?php }?>
	</div>

	<br>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam volutpat ante massa, vel vestibulum enim molestie ut. Nam varius, sem at volutpat ultricies, tellus augue laoreet mi
	, eu sollicitudin tortor lorem pharetra nulla. Ut laoreet massa quis turpis placerat pellentesque ac vel mi. In dolor risus, pulvinar a lectus efficitur, vehicula porttitor nunc. Nullam
	lobortis ante ac nisi vulputate varius. Nulla blandit nec nisi eget aliquam. Ut venenatis aliquet eleifend. Fusce interdum, nibh et semper eleifend, metus ipsum aliquam augue, et semper
	diam risus ut velit. Mauris elit est, faucibus in viverra vel, finibus eu enim. Duis fermentum pulvinar nulla ut aliquam. In faucibus urna non est sodales vulputate. Phasellus quis purus sit
	amet magna faucibus ultrices eget tristique lectus. Phasellus lobortis dolor et tellus porttitor pharetra in et mauris. Donec a felis fringilla, porta neque sed, volutpat tortor. Suspendisse potenti.
	Mauris id nisi id enim pulvinar molestie. Nulla hendrerit nunc augue, vitae efficitur dui rutrum quis. Sed felis ipsum, elementum nec lobortis et, convallis vel risus. Nam eget aliquet ligula.
	Duis placerat, dolor id bibendum luctus, felis justo tristique leo, et venenatis sapien dolor nec libero.Fusce vitae leo eu lorem pharetra aliquam vitae et dolor. Mauris in risus sit
	e neque augue sit amet dui. Nullam rhoncus facilisis metus at maximus. Proin est lacus, cursus nec aliquet eu, rhoncus a augue. Nullam turpis diam, vulputate vel aliquam aliquam, cursus ut eros.
	Duis laoreet pharetra eros, tempus auctor neque. Vestibulum egestas enim ex, ac volutpat nulla eleifend eu. Morbi a magna at metus rhoncus pharetra non nec massa. Sed accumsan condimentum ligula
	quis porttitor. Suspendisse potenti.
</p>


<?php include('views/elements/footer.php');?>
