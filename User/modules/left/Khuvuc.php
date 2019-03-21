<?php
$sql_khuvuc="SELECT * FROM tb_khuvuc LIMIT 10" ;
$result=mysql_query($sql_khuvuc);
?>
<div class="brands_products" style="margin-top: 30px"><!--brands_products-->
	<div class="brands-name">
		<ul class="nav nav-pills nav-stacked">
			<?php while ($row=mysql_fetch_array($result)) {

				$d=$row["Ma_khu_vuc"];
				$sql_dem="SELECT * FROM tb_khuvuc kv, tb_tintuc tt where kv.Ma_khu_vuc =tt.Ma_khu_vuc And kv.Ma_khu_vuc=$d And tt.Phe_duyet=1";
				$result1=mysql_query($sql_dem);
				$dem=mysql_num_rows($result1);
				?>
				<li><a href="danhsach.php?idkhuvuc=<?php echo $row["Ma_khu_vuc"] ?>&iddanhmuc=&idhinhthuc="> <span class="pull-right">(<?php echo $dem ?>)</span><?php echo $row["Ten_khu_vuc"]; ?></a></li>
				<?php 
			}
			?>
		</ul>
	</div>
</div><!--/brands_products-->	
				