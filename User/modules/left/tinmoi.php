<?php 
$sql="SELECT * FROM tb_tintuc WHERE Phe_duyet='1' ORDER BY Ngay_dang DESC LIMIT 10";
$result=mysql_query($sql);
?>
<div class="panel-group category-products" id="accordian" ><!--category-productsr-->
	<marquee direction="left" behavior="scroll" scrollamount="2" vspace="4"   scrolldelay="0">
		<?php while ($row=mysql_fetch_array($result)) {
			?> 
			<div class="panel panel-default" >
				<div class="panel-heading" style="text-transform: none">
					<h1   class="panel-title"><a style=" text-transform: none" href="chitiettintuc.php?id=<?php echo $row["Ma_tin_tuc"] ?>"><?php echo $row["Tieu_de"] ?></a></h1>
				</div>
			</div>
			<?php } ?>
		</marquee>
	</div><!--/category-products-->
