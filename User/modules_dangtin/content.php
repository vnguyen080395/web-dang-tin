<?php 
if(isset($_SESSION["name"]))
{
	$ten=$_SESSION["name"];
	$sql3="SELECT * FROM tb_taikhoan WHERE Ten_tai_khoan='$ten' LIMIT 1";
	$result3=mysql_query($sql3);
	$row3=mysql_fetch_array($result3);
	$nguon=$row3["Ma_tai_khoan"];
}
else
{
	$nguon="null";
}
date_default_timezone_set("Asia/Ho_Chi_Minh");
$ngay=date('Y-m-d H:i:s');
?>
<?php
if(isset($_POST["submit"]))
{
	if($nguon=="null")
	{
		header("Location: taikhoan.php");
	}
	else
	{
	
//kiem tra xem nguoi xu dung da bam vao nut "tai len" hay chua
	$path = 'images/home/'; // vào thu mục images
	if(isset($_FILES['Anhdaidien']["name"]))
	{
		if($_FILES['Anhdaidien']["name"]!=NULL)
		{

			if($_FILES['Anhdaidien']["type"]=="image/jpeg"||$_FILES['Anhdaidien']["type"]=="image/png"||$_FILES['Anhdaidien']["type"]=="image/gif")
			{
				if($_FILES['Anhdaidien']["size"]>1048576890)
				{
					$Thongbao="File của bạn quá nặng!Vui lòng chọn lại file ảnh.";
				}

				else{
					$tmp_name = $_FILES['Anhdaidien']['tmp_name'];
					$name = $_FILES['Anhdaidien']['name'];
					$type = $_FILES['Anhdaidien']['type']; 
					$size = $_FILES['Anhdaidien']['size']; 
// Upload file
					move_uploaded_file($tmp_name,$path.$name);
					$Anhdaidien=$path.$name;
				}
			}
			else {
				$Thongbao="File bạn chọn không hợp lệ! Vui lòng chọn lại file.";
			}
		}
		else 
		{
			$Thongbao="Bạn chưa chọn file.";
		}
	}

// anh1
	if(isset($_FILES['Anh1']["name"]))
	{
		if($_FILES['Anh1']["name"]!=NULL)
		{

			if($_FILES['Anh1']["type"]=="image/jpeg"||$_FILES['Anh1']["type"]=="image/png"||$_FILES['Anh1']["type"]=="image/gif")
			{
				if($_FILES['Anh1']["size"]>1048576890)
				{
					$Thongbao1="File của bạn quá nặng!Vui lòng chọn lại file ảnh.";
				}

				else{
					$tmp_name = $_FILES['Anh1']['tmp_name'];
					$name = $_FILES['Anh1']['name'];
					$type = $_FILES['Anh1']['type']; 
					$size = $_FILES['Anh1']['size']; 
// Upload file
					move_uploaded_file($tmp_name,$path.$name);
					$Anh1=$path.$name;
				}
			}
			else {
				$Thongbao1="File bạn chọn không hợp lệ! Vui lòng chọn lại file.";
			}
		}
		else 
		{
			$Thongbao1="Bạn chưa chọn file.";
		}
	}
// anh2
	if(isset($_FILES['Anh2']["name"]))
	{
		if($_FILES['Anh2']["name"]!=NULL)
		{

			if($_FILES['Anh2']["type"]=="image/jpeg"||$_FILES['Anh2']["type"]=="image/png"||$_FILES['Anh2']["type"]=="image/gif")
			{
				if($_FILES['Anh2']["size"]>1048576890)
				{
					$Thongbao2="File của bạn quá nặng!Vui lòng chọn lại file ảnh.";
				}

				else{
					$tmp_name = $_FILES['Anh2']['tmp_name'];
					$name = $_FILES['Anh2']['name'];
					$type = $_FILES['Anh2']['type']; 
					$size = $_FILES['Anh2']['size']; 
// Upload file
					move_uploaded_file($tmp_name,$path.$name);
					$Anh2=$path.$name;
				}
			}
			else {
				$Thongbao2="File bạn chọn không hợp lệ! Vui lòng chọn lại file.";
			}
		}
		else 
		{
			$Thongbao2="Bạn chưa chọn file.";
		}
	}
// anh3
	if(isset($_FILES['Anh3']["name"]))
	{
		if($_FILES['Anh3']["name"]!=NULL)
		{

			if($_FILES['Anh3']["type"]=="image/jpeg"||$_FILES['Anh3']["type"]=="image/png"||$_FILES['Anh3']["type"]=="image/gif")
			{
				if($_FILES['Anh3']["size"]>1048576890)
				{
					$Thongbao3="File của bạn quá nặng!Vui lòng chọn lại file ảnh.";
				}

				else{
					$tmp_name = $_FILES['Anh3']['tmp_name'];
					$name = $_FILES['Anh3']['name'];
					$type = $_FILES['Anh3']['type']; 
					$size = $_FILES['Anh3']['size']; 
// Upload file
					move_uploaded_file($tmp_name,$path.$name);
					$Anh3=$path.$name;
				}
			}
			else {
				$Thongbao3="File bạn chọn không hợp lệ! Vui lòng chọn lại file.";
			}
		}
		else 
		{
			$Thongbao3="Bạn chưa chọn file.";
		}
	}
// anh4
	if(isset($_FILES['Anh4']["name"]))
	{
		if($_FILES['Anh4']["name"]!=NULL)
		{

			if($_FILES['Anh4']["type"]=="image/jpeg"||$_FILES['Anh4']["type"]=="image/png"||$_FILES['Anh4']["type"]=="image/gif")
			{
				if($_FILES['Anh4']["size"]>1048576890)
				{
					$Thongbao4="File của bạn quá nặng!Vui lòng chọn lại file ảnh.";
				}


				else{
					$tmp_name = $_FILES['Anh4']['tmp_name'];
					$name = $_FILES['Anh4']['name'];
					$type = $_FILES['Anh4']['type']; 
					$size = $_FILES['Anh4']['size']; 
// Upload file
					move_uploaded_file($tmp_name,$path.$name);
					$Anh4=$path.$name;
				}
			}
			else {
				$Thongbao4="File bạn chọn không hợp lệ! Vui lòng chọn lại file.";
			}
		}
		else 
		{
			$Thongbao4="Bạn chưa chọn file.";
		}
	}
// anh5
	if(isset($_FILES['Anh5']["name"]))
	{
		if($_FILES['Anh5']["name"]!=NULL)
		{

			if($_FILES['Anh5']["type"]=="image/jpeg"||$_FILES['Anh5']["type"]=="image/png"||$_FILES['Anh5']["type"]=="image/gif")
			{
				if($_FILES['Anh5']["size"]>1048576890)
				{
					$Thongbao5="File của bạn quá nặng!Vui lòng chọn lại file ảnh.";
				}


				else{
					$tmp_name = $_FILES['Anh5']['tmp_name'];
					$name = $_FILES['Anh5']['name'];
					$type = $_FILES['Anh5']['type']; 
					$size = $_FILES['Anh5']['size']; 
// Upload file
					move_uploaded_file($tmp_name,$path.$name);
					$Anh5=$path.$name;
				}
			}
			else {
				$Thongbao5="File bạn chọn không hợp lệ! Vui lòng chọn lại file.";
			}
		}
		else 
		{
			$Thongbao5="Bạn chưa chọn file.";
		}
	}
// anh6
	if(isset($_FILES['Anh6']["name"]))
	{
		if($_FILES['Anh6']["name"]!=NULL)
		{

			if($_FILES['Anh6']["type"]=="image/jpeg"||$_FILES['Anh6']["type"]=="image/png"||$_FILES['Anh6']["type"]=="image/gif")
			{
				if($_FILES['Anh6']["size"]>1048576890)
				{
					$Thongbao6="File của bạn quá nặng!Vui lòng chọn lại file ảnh.";
				}

				else{
					$tmp_name = $_FILES['Anh6']['tmp_name'];
					$name = $_FILES['Anh6']['name'];
					$type = $_FILES['Anh6']['type']; 
					$size = $_FILES['Anh6']['size']; 
// Upload file
					move_uploaded_file($tmp_name,$path.$name);
					$Anh6=$path.$name;
				}
			}
			else {
				$Thongbao6="File bạn chọn không hợp lệ! Vui lòng chọn lại file.";
			}
		}
		else 
		{
			$Thongbao6="Bạn chưa chọn file.";
		}
	}
	if(isset($_POST["tieude"]) && isset($_POST["noidung"]) && isset($_POST["diachi"]) && isset($Anhdaidien) && (isset($_POST["ban"]) || isset($_POST["mua"])) && isset($_POST["gia"]) && isset($Anh1)  && isset($Anh2)  && isset($Anh3)  && isset($Anh4)  && isset($Anh5)  && isset($Anh6))
	{
		$Tieude=$_POST["tieude"];
		$Danhmuc=$_POST["danhmuc"];
		$Khuvuc=$_POST["khuvuc"];
		$Noidung=$_POST["noidung"];
		$Diachi=$_POST["diachi"];
		$Gia=$_POST["gia"];
		if( $Tieude=="" ||  $Noidung=="" ||  $Diachi=="" || (isset($_POST["ban"]) && isset($_POST["mua"])) && $Gia=="")
		{
			
			if($Tieude=="")
			{
				$Loi1="Chưa nhập tiêu đề!";
			}
			if ($Noidung=="") {
				$Loi2="Chưa nhập thông tin nội dung!";
			}
			if ($Diachi=="") {
				$Loi3="Chưa nhập địa chỉ";
			}
			if(isset($_POST["ban"]) && isset($_POST["mua"]))
			{
				$Loi4="Không thể chọn hai hình thức một lần đăng tin!";
			}
			if ($Gia=="") {
				$Loi7="Chưa nhập giá!";
			}
		}
		else
		{
			if(isset($_POST["ban"]))
			{
				$Hinhthuc=$_POST["ban"];
			}

			if(isset($_POST["mua"]))
			{
				$Hinhthuc=$_POST["mua"];
			}
			$sql2=" INSERT INTO tb_tintuc (Ma_tin_tuc, Tieu_de, Ma_danh_muc, Ma_khu_vuc, Mo_ta, Dia_chi, Phe_duyet, Gia_ca, Ngay_dang,Nguon, Ma_hinh_thuc,Luot_xem, Anh_dai_dien, Anh1, Anh2, Anh3, Anh4, Anh5, Anh6) VALUES (NULL, '$Tieude', '$Danhmuc', '$Khuvuc', '$Noidung', '$Diachi', '0', '$Gia', '$ngay', '$nguon', '$Hinhthuc','0','$Anhdaidien', '$Anh1', '$Anh2', '$Anh3', '$Anh4', '$Anh5', '$Anh6')";
			if(mysql_query($sql2))
			{
				$Tc="Bạn đã đăng tin thành công. Hãy chờ được phê duyệt.";
			}
			else
			{
				$Tc="Đăng tin thất bại. Vui lòng thử lại!";
			}
		}
	}
	else
	{
		$Loi6="Đăng tin thất bại. Vui lòng thử lại!";
	}
	}
}

?>
<?php 
$sql="SELECT * FROM tb_danhmuc";
$result=mysql_query($sql);
$sql1="SELECT * FROM tb_khuvuc";
$result1=mysql_query($sql1);
?>
<session>
	<div id="contact-page" class="container" style="margin-top: 20px">
		<div class="bg">
			<div class="row">    		
				<div class="col-sm-12">    			   			
					<h2 class="title text-center">Đăng tin </h2>  	
					<section id="do_action">
						<div class="container">
							<div class="heading">
								<h3>Trang quản lý đăng tin.</h3>
								<p>Thông tin bạn đăng cần có sự chính xác, tài khoản của bạn có thể bị khóa nếu thông tin cung cấp không đúng sự thất.</p>
							</div>
							<form  action="" method="POST" enctype="multipart/form-data" >
								<div class="row col-sm-6">
									<div >									
										<div class="chose_area">
											<p style="text-align: center; font-size: 24px; color: #428bca"><b>THÔNG TIN</b></p>
											<ul class="user_info">
												<div class="order-message">
													<li class="single_field zip-field">
														<p>Tiêu đề:</p>
														<input type="text" style="width: 320%" name="tieude" maxlength="100"  title="Không vượt quá 100 kí tự!">
														<span style="color: #FF0000"><?php echo (isset($Loi1)) ? $Loi1 : "" ?></span>
													</li>
												</div>
											</ul>
											<ul>
												<li class="single_field">
													<label>Danh muc:</label>
													<select name="danhmuc">
														<?php while ($row=mysql_fetch_array($result)) {
															?>
															<option value="<?php echo $row["Ma_danh_muc"] ?>"><?php echo $row["Ten_danh_muc"] ?></option>
															<?php } ?>
														</select>

													</li>
												</ul>
												<ul>
													<li class="single_field">
														<label>Khu vực:</label>
														<select name="khuvuc">
															<?php while ($row1=mysql_fetch_array($result1)) {
																?>
																<option value="<?php echo $row1["Ma_khu_vuc"] ?>"><?php echo $row1["Ten_khu_vuc"] ?></option>
																<?php } ?>
															</select>

														</li>
													</ul>
													<ul>
														<div class="order-message">
															<p>Mô tả :</p>
															<textarea name="noidung" rows="16" id="cknoidung" style="font-size: 18px" maxlength="500"  title="Không vượt quá 500 kí tự!"></textarea>
															<script type="text/javascript" >
																CKEDITOR.replace("cknoidung");
															</script>
															<span style="color: #FF0000"><?php echo (isset($Loi2)) ? $Loi2 : "" ?></span>
														</div>	
													</ul>
													<ul>
														<div class="order-message">
															<p>Địa chỉ :</p>
															<textarea name="diachi" id="dichimap"  class="form-control" rows="16" placeholder="Nhập địa chỉ" maxlength="500"  title="Không vượt quá 500 kí tự!"></textarea>
															<span style="color: #FF0000"><?php echo (isset($Loi3)) ? $Loi3 : "" ?></span>
														</div>    
													</ul>
													<ul class="user_info">
														<div class="order-message">
															<li class="single_field zip-field">
																<p>Giá(VNĐ):</p>
																<input type="text" style="width: 200%" name="gia" 
																pattern="[0-9]{4,15}" title="Chỉ được giá tiền!" >
																<span style="color: #FF0000"><?php echo (isset($Loi7)) ? $Loi7 : "" ?></span>
															</li>
														</div>											
													</ul>
													<ul class="user_option">
														<div class="order-message">
															<p>Hình thức:</p>
															<li>
																<input type="checkbox" name="mua" value="1">
																<label style="font-size: 20px">Mua</label>
															</li>
															<li>
																<input type="checkbox" name="ban" value="2">
																<label style="font-size: 20px">Bán</label>
															</li>
															<span style="color: #FF0000"><?php echo (isset($Loi4)) ? $Loi4 : "" ?></span>
															<span style="color: #FF0000"><?php echo (isset($Loi5)) ? $Loi5 : "" ?></span>
														</div>
													</ul>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="total_area ">
												<p style="text-align:center; font-size: 24px; color: #428bca"><b>HÌNH ẢNH</b></p>
												<ul>
													<?php 
													if(isset($Thongbao))
													{
														echo '<li style="color: #FF0000">'.$Thongbao.'</li>';
													}
													if(isset($Anhdaidien))
													{
														echo '<li style="color: #00CC00">'.$Anhdaidien.'</li>';
													}
													if(!isset($Thongbao) && !isset($Anhdaidien))
													{
														echo '<li style="color: #000000">Ảnh đại diện</li>';
													}
													?>
												</ul>
												<ul>
													<input type="file" name="Anhdaidien"/>
												</ul>
												<ul>
													<?php 
													if(isset($Thongbao1))
													{
														echo '<li style="color: #FF0000">'.$Thongbao1.'</li>';
													}
													if(isset($Anh1))
													{
														echo '<li style="color: #00CC00">'.$Anh1.'</li>';
													}
													if(!isset($Thongbao1) && !isset($Anh1))
													{
														echo '<li style="color: #000000">Ảnh 1</li>';
													}
													?>
												</ul>
												<ul>
													<input type="file" name="Anh1"/>
												</ul>
												<ul>
													<?php 
													if(isset($Thongbao2))
													{
														echo '<li style="color: #FF0000">'.$Thongbao2.'</li>';
													}
													if(isset($Anh2))
													{
														echo '<li style="color: #00CC00">'.$Anh2.'</li>';
													}
													if(!isset($Thongbao2) && !isset($Anh2))
													{
														echo '<li style="color: #000000">Ảnh 2</li>';
													}
													?>
												</ul>
												<ul>
													<input type="file" name="Anh2"/>
												</ul>
												<ul>
													<?php 
													if(isset($Thongbao3))
													{
														echo '<li style="color: #FF0000">'.$Thongbao3.'</li>';
													}
													if(isset($Anh3))
													{
														echo '<li style="color: #00CC00">'.$Anh3.'</li>';
													}
													if(!isset($Thongbao3) && !isset($Anh3))
													{
														echo '<li style="color: #000000">Ảnh 3</li>';
													}
													?>
												</ul>
												<ul>
													<input type="file" name="Anh3"/>
												</ul>
												<ul>
													<?php 
													if(isset($Thongbao4))
													{
														echo '<li style="color: #FF0000">'.$Thongbao4.'</li>';
													}
													if(isset($Anh4))
													{
														echo '<li style="color: #00CC00">'.$Anh4.'</li>';
													}
													if(!isset($Thongbao4) && !isset($Anh4))
													{
														echo '<li style="color: #000000">Ảnh 4</li>';
													}
													?>
												</ul>
												<ul>
													<input type="file" name="Anh4"/>
												</ul>
												<ul>
													<?php 
													if(isset($Thongbao5))
													{
														echo '<li style="color: #FF0000">'.$Thongbao5.'</li>';
													}
													if(isset($Anh5))
													{
														echo '<li style="color: #00CC00">'.$Anh5.'</li>';
													}
													if(!isset($Thongbao5) && !isset($Anh5))
													{
														echo '<li style="color: #000000">Ảnh 5</li>';
													}
													?>
												</ul>
												<ul>
													<input type="file" name="Anh5"/>
												</ul>
												<ul>
													<?php 
													if(isset($Thongbao6))
													{
														echo '<li style="color: #FF0000">'.$Thongbao6.'</li>';
													}
													if(isset($Anh6))
													{
														echo '<li style="color: #00CC00">'.$Anh6.'</li>';
													}
													if(!isset($Thongbao6) && !isset($Anh6))
													{
														echo '<li style="color: #000000">Ảnh 6</li>';
													}
													?>
												</ul>
												<ul>
													<input type="file" name="Anh6"/>
												</ul>
												<ul>
													<li style="color: #FF0000; background: #FFFFFF">Lưu ý: Bạn phải up đầy đủ 7 hình ảnh. Cảm ơn bạn đã thực hiện đầy đủ.</li>
												</ul>
												
											</div>
										</div>	
										<a style="font-size: 20px; text-align: center; color: #FF0000 " class="col-sm-12"><b><?php if(isset($Loi6)) echo $Loi6; ?></b></a>		
										<a style="font-size: 20px; text-align: center; color:  #00CC00" class="col-sm-12"><b><?php if(isset($Tc)) echo $Tc; ?></b></a>				
										<input class=" col-sm-12 btn btn-default check_out " href="" style=" width: 100% ; margin-left: 0px;  margin-right: 50px; height: 40px; font-size: 20px; -moz-border-radius-topleft:10px;-webkit-border-top-left-radius:10px; -moz-border-radius-bottomleft:10px;-webkit-border-bottom-left-radius:10px;-moz-border-radius-topright:10px;-webkit-border-top-right-radius:10px;-moz-border-radius-bottomright:10px;-webkit-border-bottom-right-radius:10px;" name="submit" type="submit"  value="Nhấp vào đây để hoàn thành đăng tin.">						
									</div>
								</div>
							</form>
						</div>
					</div>						
				</section>
			</div>    	
		</div>  
	</div>		
</session>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFfVRp3D1D8Wveh8B2f_6eZHcuNRDUPY4&libraries=places"></script>

<script>		function init() {
		    var input = document.getElementById('dichimap');
		    var autocomplete = new google.maps.places.Autocomplete(input);
		}
    google.maps.event.addDomListener(window, 'load', init);</script>

