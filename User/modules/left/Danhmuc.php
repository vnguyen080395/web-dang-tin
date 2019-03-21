<?php
$sql_danhmuc="SELECT * FROM tb_danhmuc LIMIT 7";
$result=mysql_query($sql_danhmuc);
$sql_danhmuc1="SELECT * FROM tb_danhmuc";
$result1=mysql_query($sql_danhmuc1);
$a=mysql_num_rows($result1);
$b=$a-7;
$sql_danhmuc2="SELECT * FROM tb_danhmuc ORDER BY Ma_danh_muc DESC limit $b";
$result2=mysql_query($sql_danhmuc2);
?>
<div class="panel-group category-products" id="accordian" style="margin-top: 30px"><!--category-productsr-->
	<?php
	while ($row=mysql_fetch_array($result)) {
		$d=$row["Ma_danh_muc"];
		$sql_dem="SELECT * FROM tb_danhmuc dm, tb_tintuc tt where dm.Ma_danh_muc =tt.Ma_danh_muc And dm.Ma_danh_muc=$d And tt.Phe_duyet=1";
		$result3=mysql_query($sql_dem);
		$dem=mysql_num_rows($result3);
		?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"><a href="danhsach.php?idkhuvuc=&iddanhmuc=<?php echo $row["Ma_danh_muc"] ?>&idhinhthuc="><span class="pull-right">(<?php echo $dem ?>)</span><?php echo $row["Ten_danh_muc"]; ?></a></h4>
			</div>
		</div>
		<?php } ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordian" href="#womens">
						<span class="badge pull-right"><i class="fa fa-plus"></i></span>
						KHÁC
					</a>
				</h4>
			</div>
			<div id="womens" class="panel-collapse collapse">
				<div class="panel-body">

					<ul>
						<?php 
						while ($row2=mysql_fetch_array($result2)) {
							$d1=$row2["Ma_danh_muc"];
							$sql_dem1="SELECT * FROM tb_danhmuc dm, tb_tintuc tt where dm.Ma_danh_muc =tt.Ma_danh_muc And dm.Ma_danh_muc=$d1 And tt.Phe_duyet=1";
							$result4=mysql_query($sql_dem1);
							$dem1=mysql_num_rows($result4);
							?>
							<li><a href="danhsach.php?idkhuvuc=&iddanhmuc=<?php echo $row2["Ma_danh_muc"] ?>&idhinhthuc="><span class="pull-right">(<?php echo $dem1 ?>)</span><?php echo $row2["Ten_danh_muc"]; ?></a></li>
							<?php } ?>
						</ul>

					</div>
				</div>

			</div>
		</div>
