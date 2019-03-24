<?php 
$sql_danhmuc="SELECT * FROM tb_danhmuc";
$result=mysql_query($sql_danhmuc);
?>
<?php 
$AloAlo123="SELECT * FROM tb_AloAlo123 LIMIT 1";
$result1=mysql_query($AloAlo123);
$row1=mysql_fetch_array($result1);
 ?>
<section id="slider"><!--slider-->
	<div class="container_slider">
		<div class="row row1">
			<div class="col-sm-12">
				<div class="carousel-inner hinhnen" style="background-image: url(<?php echo $row1["Hinh_nen"] ?>);">
					<h1  style="text-align: center; color: #fff; padding-top:  100px">Website đăng tin tức</h1>
					<h4 style="text-align: center; color: #fff; padding-top: 50px">Chính xác - Nhanh chóng - Tiết kiệm</h3>
						<div class="search-box-container" >
							<form action="danhsach.php" method="POST">
								<input id="Thanhtimkiem" type="text" name="tukhoa" placeholder="Tìm kiếm..."  autocomplete="off" >
								<select  id="chon" name="iddanhmuc" style="background-color: #fff; width: 25%">
									<option value="">Tất cả</option>
									<?php while ($row=mysql_fetch_array($result)) {
										?>
										<option value="<?php echo $row["Ma_danh_muc"] ?>"><?php echo $row["Ten_danh_muc"]?></option>
										<?php } ?>
									</select>
									<input id="Timkiem" type="submit" value="Tìm kiếm"  />
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



