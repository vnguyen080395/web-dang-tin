<?php 
if (isset($_POST["submit"])) {
	if (isset($_POST["hoten"]) && isset($_POST["taikhoan"]) && isset($_POST["matkhau1"]) && isset($_POST["matkhau2"]) && isset($_POST["sdt"]) && isset($_POST["diachi"]) ) {
		$hoten=$_POST["hoten"];
		$taikhoan=$_POST["taikhoan"];
		$matkhau1=$_POST["matkhau1"];
		$matkhau2=$_POST["matkhau2"];
		$sdt=$_POST["sdt"];
		$diachi=$_POST["diachi"];
		if( $hoten=="" ||  $taikhoan=="" || $matkhau1=="" || $matkhau2=="" || $matkhau1 != $matkhau2 || $sdt=="" || $diachi=="")
		{
			if($hoten=="")
			{
				$Loi10="Chưa nhập thông tin họ tên!";
			}
			if($taikhoan=="")
			{
				$Loi9="Chưa nhập thông tin tài khoản đăng kí!";
			}
			if($matkhau1=="")
			{
				$Loi11="Chưa nhập thông tin mật khẩu!";
			}
			if($matkhau2=="")
			{
				$Loi4="Chưa nhập lại thông tin mật khẩu!";
			}
			if($matkhau1 != $matkhau2)
			{
				$Loi5="Thông tin mật khẩu không trùng khớp!";
			}
			if($sdt=="")
			{
				$Loi6="Chưa nhập thông tin số điện thoại!";
			}
			if($diachi=="")
			{
				$Loi8="Chưa nhập thông tin địa chỉ!";
			}
		}
		else
		{
			$b='/^[a-z-0-9]{1,20}$/';
			if(preg_match($b,$taikhoan) && preg_match($b,$matkhau1) && preg_match($b,$matkhau2))
			{

				$test="SELECT * FROM tb_taikhoan WHERE Ten_tai_khoan='$taikhoan'";
				$result=mysql_query($test);
				if(mysql_num_rows($result)>0)
				{
					$Loi7="Tài khoản đã tồn tại";
				}
				else
				{
					$sql="INSERT INTO tb_taikhoan (Ma_tai_khoan, Ten_tai_khoan, Mat_khau, Ho_ten, So_dien_thoai, Dia_chi, Ma_chuc_nang) VALUES (NULL, '$taikhoan', '$matkhau2', '$hoten', '$sdt', '$diachi', '2')";
					if(mysql_query($sql))
					{
						$tb="Đăng kí tài khoản thành công!";
					}
				}		
			}
			else
			{
				$tb1="Đăng kí tài khoản mới thất bại!";
			}
		}
	}
}
?>
<div class="col-sm-4">
	<div class="signup-form"><!--sign up form-->
		<h2>Đăng kí tài khoản</h2>
		<form action="" method="POST">
			<input type="text" placeholder="Họ tên" name="hoten" maxlength="50" pattern="[^\\p{L}\\s]{1,50}" title="Không vượt quá 20 kí tự!" />
			<span style="color: #FF0000"><?php echo (isset($Loi10)) ? $Loi10 : "" ?></span>
			<input type="text" placeholder="Tên tài khoản" name="taikhoan" maxlength="20" pattern="[a-z-0-9]{1,20}"  title="Không gõ tiếng việt, chữ in hoa và không chứa dấu cách!"/>
			<span style="color: #FF0000"><?php echo (isset($Loi9)) ? $Loi9 : "" ?></span>
			<span style="color: #FF0000"><?php echo (isset($Loi7)) ? $Loi7 : "" ?></span>
			<input type="password" placeholder="Mật khẩu" name="matkhau1"   maxlength="20" pattern="[a-z-0-9]{1,20}"  title="Không gõ tiếng việt, chữ in hoa và không chứa dấu cách!"/>
			<span style="color: #FF0000"><?php echo (isset($Loi11)) ? $Loi11 : "" ?></span>
			<input type="password" placeholder="Nhập lại mật khẩu" name="matkhau2" maxlength="20" pattern="[a-z-0-9]{1,20}"  title="Không gõ tiếng việt, chữ in hoa và không chứa dấu cách!"/>
			<span style="color: #FF0000"><?php echo (isset($Loi4)) ? $Loi4 : "" ?></span>
			<span style="color: #FF0000"><?php echo (isset($Loi5)) ? $Loi5 : "" ?></span>
			<input type="text" placeholder="Số điện thoại" name="sdt"  maxlength="11" pattern="[0-9]{10,11}" title="Số điện thoại không đúng!" />
			<span style="color: #FF0000"><?php echo (isset($Loi6)) ? $Loi6 : "" ?></span>
			<input type="text" placeholder="Địa chỉ" name="diachi" maxlength="200"  title="Không vượt quá 200 kí tự!" />
			<span style="color: #FF0000"><?php echo (isset($Loi8)) ? $Loi8 : "" ?></span>
			<span style="color: #006400"><?php echo (isset($tb)) ? $tb : "" ?></span>
			<span style="color: #FF0000"><?php echo (isset($tb1)) ? $tb1 : "" ?></span>
			<button type="submit" class="btn btn-default" name="submit">Đăng kí</button>
		</form>
	</div><!--/sign up form-->
</div>
