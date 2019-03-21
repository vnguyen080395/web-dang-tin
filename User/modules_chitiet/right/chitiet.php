<?php 
$tam=$_GET["id"];
$sql_chitiet="SELECT tt.Ma_tin_tuc,tt.Tieu_de, tt.Mo_ta, tt.Gia_ca, tt.Ngay_dang,tt.Dia_chi, dm.Ten_danh_muc, kv.Ten_khu_vuc, tk.Ten_tai_khoan, tk.Ho_ten, tk.So_dien_thoai, tt.Anh_dai_dien, tt.Anh1,tt.Anh2,tt.Anh3,tt.Anh4,tt.Anh5,tt.Anh6,tt.Luot_xem 
FROM tb_tintuc tt, tb_danhmuc dm , tb_taikhoan tk, tb_khuvuc kv 
WHERE tt.Ma_tin_tuc=$tam and tt.Ma_danh_muc=dm.Ma_danh_muc and tt.Nguon=tk.Ma_tai_khoan and tt.Ma_khu_vuc=kv.Ma_khu_vuc and tt.Phe_duyet=1";

$result=mysql_query($sql_chitiet);

$row=mysql_fetch_array($result);
if($dem=mysql_num_rows($result)==1)
{
	$view=$row["Luot_xem"];
	$view++;
	$sql1="UPDATE tb_tintuc SET Luot_xem=$view WHERE Ma_tin_tuc=$tam";
	mysql_query($sql1);
}
?>
<?php  
function formatMoney($number, $fractional=false) {  
	if ($fractional) {  
		$number = sprintf('%.2f', $number);  
	}  
	while (true) {  
		$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);  
		if ($replaced != $number) {  
			$number = $replaced;  
		} else {  
			break;  
		}  
	}  
	return $number;  
}
?>
<div class="product-details"><!--product-details-->
	<div class="col-sm-5">
		<div class="view-product">
			<img src="<?php echo $row["Anh_dai_dien"] ?>" alt="" />
		</div>
		<div id="similar-product" class="carousel slide" data-ride="carousel">

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active " >
					<a href=""><img src="<?php echo $row["Anh1"] ?>" alt=""  ></a>
					<a href=""><img src="<?php echo $row["Anh2"] ?>" alt="" ></a>
					<a href=""><img src="<?php echo $row["Anh3"] ?>" alt="" ></a>
				</div>
				<div class="item  " >
					<a href=""><img src="<?php echo $row["Anh4"] ?>" alt=""  ></a>
					<a href=""><img src="<?php echo $row["Anh5"] ?>" alt="" ></a>
					<a href=""><img src="<?php echo $row["Anh6"] ?>" alt="" ></a>
				</div>
			</div>

			<!-- Controls -->
			<a class="left item-control" href="#similar-product" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="right item-control" href="#similar-product" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>

	</div>
	<div class="col-sm-7">
		<div class="product-information"><!--/product-information-->
			<h2><?php echo $row["Tieu_de"] ?>(<?php echo $row["Dia_chi"] ?>)</h2>
			<p><?php echo $row["Mo_ta"] ?></p>
			<?php 
			$number=$row["Gia_ca"];
			$money = formatMoney($number);
			?>
			<h2>Giá: <?php echo $money?> đồng</h2>
			<p><i>Nguồn: <?php echo $row["Ten_tai_khoan"] ?> (Phone: <?php echo $row["So_dien_thoai"] ?>)</i></p>
			<p><b><i>Ngày đăng: <?php  $t= date_create($row["Ngay_dang"]);  echo date_format($t,"d-m-Y");?></i></b></p>
			<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
		</div><!--/product-information-->
	</div>
</div><!--/product-details-->
<div class="fb-comments" data-href="http://localhost/DACS/User/chitiettintuc.php?id=<?php echo $row["Ma_tin_tuc"] ?>" data-width="900" data-numposts="5"></div>
