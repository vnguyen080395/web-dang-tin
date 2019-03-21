<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-3" style="margin-top: 50px">
				<div class="left-sidebar">
					<h2 >DANH MỤC</h2>
					<?php 
					include("modules_chitiet/left/Danhmuc.php");
					?>
				</div><!--/category-products-->

				<div class="brands_products"><!--brands_products-->
					<h2>KHU VỰC</h2>
					<?php 
					include("modules_chitiet/left/Khuvuc.php");
					?>
				</div><!--/brands_products-->						
			</div>
		</div>

		<div class="col-sm-9 padding-right" style="margin-top: 50px">
			<div class="features_items"><!--features_items-->
				<h2 class="title text-center">THÔNG TIN CHI TIẾT</h2>
			</div>
			<?php
			include("modules_chitiet/right/chitiet.php"); 
			?>
		</div>
	</div><!--/category-tab-->	
</section>
