<?php 
	$sql_tintuc="SELECT tt.Ma_tin_tuc,tt.Tieu_de, tt.Mo_ta, tt.Gia_ca, tt.Anh_dai_dien, tt.Ngay_dang, tt.Ma_hinh_thuc FROM tb_tintuc tt,  tb_hinhthuc ht WHERE tt.Ma_hinh_thuc=ht.Ma_hinh_thuc and ht.Ma_hinh_thuc='1' and tt.Phe_duyet ='1' Order by tt.Ngay_dang DESC LIMIT 9";
	$result=mysql_query($sql_tintuc);
 ?>
 <?php 
 while ($row=mysql_fetch_array($result)) {
 
  ?>
<div class="col-sm-4">
	<div class="product-image-wrapper" style="height: 500px">
		<div class="single-products" style="height: 500px">
			<div class="productinfo text-center">
				<img src="<?php echo $row["Anh_dai_dien"] ?>" alt=""  style="height: 250px" />
				<h2><?php echo $row["Tieu_de"] ?></h2>
				<p>GIÁ: <?php echo $row["Gia_ca"] ?> vnđ</p>
				<p>Ngày đăng: <?php  $t= date_create($row["Ngay_dang"]);  echo date_format($t,"d-m-Y"); ?></p>
				<a href="#" class="btn btn-default add-to-cart">Xem</a>
			</div>
			<div class="product-overlay">
				<div class="overlay-content">
					<h2>MÔ TẢ</h2>
					<p><?php echo $row["Mo_ta"] ?></p>
					<a href="chitiettintuc.php?id=<?php echo $row["Ma_tin_tuc"] ?>" class="btn btn-default add-to-cart"></i>Xem</a>
				</div>
				<img src="images/home/new.png" class="new" alt="" />
			</div>
		</div>
	</div>
</div>
<?php } ?>

