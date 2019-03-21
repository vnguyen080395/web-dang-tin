<?php 
$dem=0;
$danhmuc="";
$khuvuc="";
$hinhthuc="";
if(isset($_POST["tukhoa"]) && isset($_POST["iddanhmuc"]))
{
	$k=$_POST["tukhoa"];
	$danhmuc=$_POST["iddanhmuc"];
	$tam=0;
	if ($k=="") {
		if ($danhmuc=="") {
			$sql="SELECT  Ma_tin_tuc, Tieu_de, Dia_chi, Gia_ca, Ngay_dang, Anh_dai_dien, Luot_xem FROM tb_tintuc WHERE  Phe_duyet='1' Order by Ngay_dang DESC";
		}else{
			$sql="SELECT Ma_tin_tuc, Tieu_de, Dia_chi, Gia_ca, Ngay_dang, Anh_dai_dien, Luot_xem FROM tb_tintuc  WHERE  Ma_danh_muc=$danhmuc and Phe_duyet=1 Order by Ngay_dang DESC";
		}
	}else
	{
		if ($danhmuc=="")
		{
			$sql="SELECT Ma_tin_tuc,Tieu_de, Dia_chi, Gia_ca, Ngay_dang, Anh_dai_dien, Luot_xem FROM tb_tintuc  WHERE  Phe_duyet=1 and Tieu_de LIKE '%$k%' Order by Ngay_dang DESC";
		}else{
			$sql="SELECT Ma_tin_tuc,Tieu_de, Dia_chi, Gia_ca, Ngay_dang, Anh_dai_dien, Luot_xem FROM tb_tintuc  WHERE  Ma_danh_muc=$danhmuc and Phe_duyet=1 and Tieu_de LIKE '%$k%' Order by Ngay_dang DESC";
		}	
	}
}
if(isset($_GET["tukhoa"]) && isset($_GET["iddanhmuc"]))
{
	$k=$_GET["tukhoa"];
	$danhmuc=$_GET["iddanhmuc"];
	$tam=0;
	if ($k=="") {
		if ($danhmuc=="") {
			$sql="SELECT  Ma_tin_tuc, Tieu_de, Dia_chi, Gia_ca, Ngay_dang, Anh_dai_dien, Luot_xem FROM tb_tintuc WHERE  Phe_duyet='1' Order by Ngay_dang DESC";
		}else{
			$sql="SELECT Ma_tin_tuc, Tieu_de, Dia_chi, Gia_ca, Ngay_dang, Anh_dai_dien, Luot_xem FROM tb_tintuc  WHERE  Ma_danh_muc=$danhmuc and Phe_duyet=1 Order by Ngay_dang DESC";
		}
	}else
	{
		if ($danhmuc=="")
		{
			$sql="SELECT Ma_tin_tuc,Tieu_de, Dia_chi, Gia_ca, Ngay_dang, Anh_dai_dien, Luot_xem FROM tb_tintuc  WHERE  Phe_duyet=1 and Tieu_de LIKE '%$k%' Order by Ngay_dang DESC";
		}else{
			$sql="SELECT Ma_tin_tuc,Tieu_de, Dia_chi, Gia_ca, Ngay_dang, Anh_dai_dien, Luot_xem FROM tb_tintuc  WHERE  Ma_danh_muc=$danhmuc and Phe_duyet=1 and Tieu_de LIKE '%$k%' Order by Ngay_dang DESC";
		}	
	}
}
if (isset($_GET["iddanhmuc"]) && isset($_GET["idkhuvuc"]) && isset($_GET["idhinhthuc"]) ) {
	$danhmuc=$_GET["iddanhmuc"];
	$khuvuc=$_GET["idkhuvuc"];
	$hinhthuc=$_GET["idhinhthuc"];
	$sql1="SELECT * FROM tb_danhmuc WHERE Ma_danh_muc=$danhmuc";
	$result1=mysql_query($sql1);
	if ($result1) {
		$row1=mysql_fetch_array($result1);
		$x=$row1["Ten_danh_muc"];
	}
	else
	{
		$x="Tất cả";
	}
	$sql2="SELECT * FROM tb_khuvuc WHERE Ma_khu_vuc=$khuvuc";
	$result2=mysql_query($sql2);
	if ($result2) {
		$row2=mysql_fetch_array($result2);
		$y=$row2["Ten_khu_vuc"];
	}
	else
	{
		$y="Tất cả";
	}
	$sql3="SELECT * FROM tb_hinhthuc WHERE Ma_hinh_thuc=$hinhthuc";
	$result3=mysql_query($sql3);
	if ($result3) {
		$row3=mysql_fetch_array($result3);
		$z=$row3["Ten_hinh_thuc"];
	}
	else
	{
		$z="Tất cả";
	}
	if($danhmuc=="" && $khuvuc !="" && $hinhthuc !="")
	{
		$sql="SELECT Ma_tin_tuc,Tieu_de, Dia_chi, Gia_ca, Ngay_dang, Anh_dai_dien, Luot_xem FROM tb_tintuc WHERE Ma_khu_vuc=$khuvuc and Ma_hinh_thuc =$hinhthuc and Phe_duyet=1 Order by Ngay_dang DESC";
	}
	if ($khuvuc=="" && $danhmuc!="" && $hinhthuc !="") {
		$sql="SELECT Ma_tin_tuc, Tieu_de, Dia_chi, Gia_ca, Ngay_dang, Anh_dai_dien, Luot_xem FROM tb_tintuc WHERE Ma_danh_muc=$danhmuc and Ma_hinh_thuc =$hinhthuc and Phe_duyet=1 Order by Ngay_dang DESC";
	}
	if ($hinhthuc=="" && $khuvuc !="" && $danhmuc !="") {
		$sql="SELECT Ma_tin_tuc,Tieu_de, Dia_chi, Gia_ca, Ngay_dang, Anh_dai_dien, Luot_xem FROM tb_tintuc WHERE Ma_khu_vuc=$khuvuc and Ma_danh_muc=$danhmuc and Phe_duyet=1 Order by Ngay_dang DESC";

	}
	if ($khuvuc=="" && $danhmuc=="" & $hinhthuc !="") {
		$sql="SELECT Ma_tin_tuc,Tieu_de, Dia_chi, Gia_ca, Ngay_dang, Anh_dai_dien, Luot_xem FROM tb_tintuc  WHERE Ma_hinh_thuc =$hinhthuc and Phe_duyet=1 Order by Ngay_dang DESC";


	}
	if ($khuvuc=="" && $hinhthuc=="" && $danhmuc!="") {
		$sql="SELECT Ma_tin_tuc,Tieu_de, Dia_chi, Gia_ca, Ngay_dang, Anh_dai_dien, Luot_xem FROM tb_tintuc  WHERE Ma_danh_muc=$danhmuc  and Phe_duyet=1 Order by Ngay_dang DESC";

	}
	if ($danhmuc=="" && $hinhthuc=="" && $khuvuc !="") {
		$sql="SELECT Ma_tin_tuc,Tieu_de, Dia_chi, Gia_ca, Ngay_dang, Anh_dai_dien, Luot_xem FROM tb_tintuc WHERE Ma_khu_vuc=$khuvuc and Phe_duyet=1 Order by Ngay_dang DESC";

	}
	if ($khuvuc=="" && $danhmuc=="" && $hinhthuc==""){
		$sql="SELECT Ma_tin_tuc,Tieu_de, Dia_chi, Gia_ca, Ngay_dang, Anh_dai_dien, Luot_xem FROM tb_tintuc  WHERE Phe_duyet=1 Order by Ngay_dang DESC";

	}
	if ($khuvuc!="" && $danhmuc!="" && $hinhthuc!="")
	{
		$sql="SELECT Ma_tin_tuc,Tieu_de, Dia_chi, Gia_ca, Ngay_dang, Anh_dai_dien, Luot_xem FROM tb_tintuc  WHERE Ma_khu_vuc=$khuvuc and Ma_danh_muc=$danhmuc and Ma_hinh_thuc =$hinhthuc and Phe_duyet=1 Order by Ngay_dang DESC";		
	}

}
if(!isset($_GET["iddanhmuc"]) && !isset($_GET["idkhuvuc"]) && !isset($_GET["idhinhthuc"]) && !isset($_POST["tukhoa"]) && !isset($_POST["iddanhmuc"]))
{
	$sql="SELECT Ma_tin_tuc,Tieu_de, Dia_chi, Gia_ca, Ngay_dang, Anh_dai_dien, Luot_xem FROM tb_tintuc  WHERE  Phe_duyet=1 Order by Ngay_dang DESC";		
}
$result=mysql_query($sql);
if($result)
{
	$dem=mysql_num_rows($result);
}

// BƯỚC 2: TÌM TỔNG SỐ RECORDS
$total_records = $dem;
	// BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 10;
	// BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
	// tổng số trang
$total_page = ceil($total_records / $limit);

	// Giới hạn current_page trong khoảng 1 đến total_page
if ($current_page > $total_page){
	$current_page = $total_page;
}
else if ($current_page < 1){
	$current_page = 1;
}

	// Tìm Start
$start = ($current_page - 1) * $limit;

$sqlall=$sql." "."LIMIT"." ".$start.",".$limit;
$resultall=mysql_query($sqlall);
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
<section id="cart_items">
	<div class="container">
		<a ><i style="color: #000000; font-size: 15px">Có <?php echo $dem ?> kết quả trả về.
			<?php 
			if (isset($_GET["iddanhmuc"]) && isset($_GET["idkhuvuc"]) && isset($_GET["idhinhthuc"])) 
				{ echo "(Danh muc: $x / Khu vưc: $y / Hình thức : $z). ";} 
			if(isset($tam)) 
				{echo "Với từ khóa: '$k'";}
			?>	
		</i></a>
		<div class="table-responsive cart_info">
			<table class="table table-condensed">
				<thead>
					<tr class="cart_menu">
						<td class="image">Thông tin</td>
						<td class="description"></td>
						<td class="quantity">Giá</td>
						<td class="total">Ngày đăng</td>
						<td class="quantity">Liên hệ</td>
					</tr>
				</thead>
				<tbody>
					<?php 
					if($dem!=0)
					{
						$a=$resultall;
					}
					else
					{
						$a=$result;
					}
					while ($row=mysql_fetch_array($a)) {
						?>
						<tr>
							<td class="cart_image">
								<a href="chitiettintuc.php?id=<?php echo $row["Ma_tin_tuc"] ?>"><img src="<?php echo $row["Anh_dai_dien"] ?>" alt="" style="height: 100px; width: 180px" ></a>
							</td>
							<td class="cart_product">

								<a href="chitiettintuc.php?id=<?php echo $row["Ma_tin_tuc"] ?>" style="font-size: 14px"><strong><?php echo $row["Tieu_de"]?></strong></a> 
								<p><i>Lượt xem: <?php echo $row["Luot_xem"] ?></i></p>

							</td>
							<td class="cart_product">
								<p >Địa chỉ: <?php echo $row["Dia_chi"]?></p>
							</td>
							<td class="cart_quantity">
								<?php 
								$number=$row["Gia_ca"];
								$money = formatMoney($number);
								?>
								<p ><?php echo $money ?> VNĐ</p>
							</td>
							<td class="cart_total">
								<p><?php  $t= date_create($row["Ngay_dang"]);  echo date_format($t,"d-m-Y");?></p>
							</td>
							<td class="cart_quantity">
								<p>0972342976</p>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>

			</div>
			<ul class="pagination">
				<?php 
				// Ham xóa biến trong url
				function removeParamUrl($url, $param_remove) {
					preg_replace('/([?&])'. $param_remove .'=[^&]+(&|$)/', '$1', $url);
					$url = rtrim($url, '&');
					$url = ltrim($url, '?');
					return $url;
				}
				// PHẦN HIỂN THỊ PHÂN TRANG
            	// BƯỚC 7: HIỂN THỊ PHÂN TRANG
				if(isset($tam)){
					if ($current_page > 1 && $total_page > 1)
					{
						echo '<li><a href="danhsach.php?tukhoa='.$k.'&iddanhmuc='.$danhmuc.'&page='.($current_page-1).'">&laquo;</a></li> ';
					}

					if($total_page >= 2) // trang lớn hơn hai mới hiện
					{

						for ($i = 1; $i <= $total_page; $i++)
						{
                			// Nếu là trang hiện tại thì hiển thị thẻ span
                			// ngược lại hiển thị thẻ a
							if ($i == $current_page)
							{
								echo '<li class="active"><a href="">'.$i.'</a></li>';
							}
							else
							{
								echo '<li><a href="danhsach.php?tukhoa='.$k.'&iddanhmuc='.$danhmuc.'&page='.$i.'">'.$i.'</a></li>';
							}
						}
					}
				 	// nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
					if ($current_page < $total_page && $total_page > 1)
					{
						echo '<li><a href="danhsach.php?tukhoa='.$k.'&iddanhmuc='.$danhmuc.'&page='.($current_page+1).'">&raquo;</a></li> ';
					}

				}
				else
				{
					// nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
					if ($current_page > 1 && $total_page > 1)
					{
						echo '<li><a href="danhsach.php?idkhuvuc='.$khuvuc.'&iddanhmuc='.$danhmuc.'&idhinhthuc='.$hinhthuc.'&page='.($current_page-1).'">&laquo;</a></li> ';
					}

					if($total_page >= 2) // trang lớn hơn hai mới hiện
					{

						for ($i = 1; $i <= $total_page; $i++)
						{
                			// Nếu là trang hiện tại thì hiển thị thẻ span
                			// ngược lại hiển thị thẻ a
							if ($i == $current_page)
							{
								echo '<li class="active"><a href="">'.$i.'</a></li>';
							}
							else
							{
								echo '<li><a href="danhsach.php?idkhuvuc='.$khuvuc.'&iddanhmuc='.$danhmuc.'&idhinhthuc='.$hinhthuc.'&page='.$i.'">'.$i.'</a></li>';
							}
						}
					}
				 	// nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
					if ($current_page < $total_page && $total_page > 1)
					{
						echo '<li><a href="danhsach.php?idkhuvuc='.$khuvuc.'&iddanhmuc='.$danhmuc.'&idhinhthuc='.$hinhthuc.'&page='.($current_page+1).'">&raquo;</a></li> ';
					}
				}
				?>
			</ul>
		</div>
	</div>
</section> <!--/#cart_items-->