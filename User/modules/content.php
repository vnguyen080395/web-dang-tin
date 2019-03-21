<script src="http://sieuthiwebsitedep.com/templates/nicewebmarket/js/jquery.js" type="text/javascript"></script>

<script type="text/javascript">

	$(document).ready(function(){
		$('.timmoi').each(function() {
			var elem = $(this);
			setInterval(function() {
				if (elem.css('visibility') == 'hidden') {
					elem.css('visibility', 'visible');
				} else {
					elem.css('visibility', 'hidden');
				}    
			}, 300);
		});
	});

</script>
<?php 
$file="luottruycap.txt";
$mofile=fopen($file,'r');
$view=fread($mofile, filesize($file));
$view++;
$dongfile=fclose($mofile);

$mofile=fopen($file,'w');
$ghifile=fwrite($mofile, $view);
$dongfile=fclose($mofile);
?>
<?php 
$sql="SELECT * FROM tb_tintuc WHERE Phe_duyet=1";
$result=mysql_query($sql);
$demtin=mysql_num_rows($result);
?> 
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="left-sidebar">
					<h2  class="timmoi">Tin mới <img style="width: 15%" src="images/home/new1.png" alt=""></h2>
					<?php
					include("modules/left/tinmoi.php");
					?>	
					<h2>DANH MỤC</h2>
					<?php
					include("modules/left/Danhmuc.php");
					?>	
					<h2>KHU VỰC</h2>
					<?php 
					include("modules/left/Khuvuc.php");	
					include("modules/left/quangcao.php");	
					?>
				</div>
			</div>
			<div class="col-sm-9 padding-right">
				<div class="features_items"><!--features_items-->
					<h2 class="title text-center">THÔNG TIN MỚI NHẤT</h2>
				</div>
				<div class="category-tab"><!--category-tab-->
					<div class="col-sm-12">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#mua" data-toggle="tab">THÔNG TIN MUA</a></li>
							<li ><a href="#ban" data-toggle="tab">THÔNG TIN BÁN</a></li>	
							<li ><a href="#thongtin" data-toggle="tab">THÔNG TIN LIÊN QUAN</a></li>	
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane fade active in" id="mua" style="background-color: #ffffff" >
							<?php 
							include("modules/right/Danhsachmua.php");
							?>
						</div>
						<div class="tab-pane fade " id="ban"  style="background-color: #ffffff">
							<?php 
							include("modules/right/Danhsachban.php");
							?>
						</div>
						<div class="tab-pane fade " id="thongtin"  style="background-color: #ffffff">
							<?php 
							include("modules/right/thongtin.php");
							?>
						</div>
					</div>
				</div>
			</div>		
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div style=" text-align: center;padding-top: 20px;padding-bottom: 20px;">
					<marquee  direction="down">
						<div style=" display: block;font-size: 96px;line-height: 96px;margin-bottom: 10px;text-align: center;">
							<i class="glyphicon glyphicon-flag"></i>
						</div>
						<div>
							<span style="display: block;height: 64px;font-size: 64px;line-height: 64px;font-style: normal; text-align: center;"><?php echo $view ?></span>
						</div>
					</marquee>
					<label style="font-size: 17px;">Tổng số lượt truy cập</label>
				</div>
			</div>
			<div class="col-sm-6">
				<div  style=" text-align: center;padding-top: 20px;padding-bottom: 20px;">
					<marquee  direction="up">
						<div style=" display: block;font-size: 96px;line-height: 96px;margin-bottom: 10px;text-align: center;">
							<i class="glyphicon glyphicon-star"></i>
						</div>
						<div>
							<span style="display: block;height: 64px;font-size: 64px;line-height: 64px;font-style: normal; text-align: center;"><?php echo $demtin; ?></span>

						</div>
					</marquee>
					<label style="font-size: 17px;">Tổng số tin</label>

				</div>
			</div>
		</div>
	</div>			
</div>
</section>
