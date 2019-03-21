
<?php 
if (isset($_POST["submit"])) {
	if (isset($_POST["taikhoan"]) && isset($_POST["matkhau"]) && isset($_POST["matkhau1"]) && isset($_POST["hoten"]) && isset($_POST["sdt"]) && isset($_POST["diachi"]))
	{
		$hoten=$_POST["hoten"];
		$taikhoan=$_POST["taikhoan"];
		$matkhau1=$_POST["matkhau"];
		$matkhau2=$_POST["matkhau1"];
		$sdt=$_POST["sdt"];
		$diachi=$_POST["diachi"];
		if( $hoten=="" ||  $taikhoan=="" || $matkhau1=="" || $matkhau2=="" || $matkhau1 != $matkhau2 || $sdt=="" || $diachi=="")
		{
			if($hoten=="")
			{
				$Loi1="Chưa nhập thông tin họ tên!";
			}
			if($taikhoan=="")
			{
				$Loi2="Chưa nhập thông tin tài khoản đăng kí!";
			}
			if($matkhau1=="")
			{
				$Loi3="Chưa nhập thông tin mật khẩu!";
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
				$Loi7="Chưa nhập thông tin địa chỉ!";
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
					$Loi8="Tài khoản đã tồn tại";
				}
				else
				{
					$sql="INSERT INTO tb_taikhoan (Ma_tai_khoan, Ten_tai_khoan, Mat_khau, Ho_ten, So_dien_thoai, Dia_chi, Ma_chuc_nang) VALUES (NULL, '$taikhoan', '$matkhau2', '$hoten', '$sdt', '$diachi', '1')";
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
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Đăng kí tài khoản</h3>
				</div>
				<div class="panel-body">
					<form role="form" action="" method="POST" accept-charset="utf-8">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Tài khoản" name="taikhoan" type="text"  maxlength="20" pattern="[a-z-0-9]{1,20}"  title="Không gõ tiếng việt, chữ in hoa và không chứa dấu cách!" autofocus>
								<span style="color: #FF0000"><?php echo (isset($Loi2)) ? $Loi2 : "" ?></span>
								<span style="color: #FF0000"><?php echo (isset($Loi8)) ? $Loi8 : "" ?></span>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Nhập mật khẩu" name="matkhau" type="password" value=""  maxlength="20" pattern="[a-z-0-9]{1,20}"  title="Không gõ tiếng việt, chữ in hoa và không chứa dấu cách!"/>
								<span style="color: #FF0000"><?php echo (isset($Loi3)) ? $Loi3 : "" ?></span>
								<span style="color: #FF0000"><?php echo (isset($Loi5)) ? $Loi5 : "" ?></span>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Nhập lại mật khẩu" name="matkhau1" type="password" value="" maxlength="20" pattern="[a-z-0-9]{1,20}"  title="Không gõ tiếng việt, chữ in hoa và không chứa dấu cách!"/ >
								<span style="color: #FF0000"><?php echo (isset($Loi4)) ? $Loi4 : "" ?></span>
								<span style="color: #FF0000"><?php echo (isset($Loi5)) ? $Loi5 : "" ?></span>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Họ tên" name="hoten" type="text" value=""
								maxlength="50" pattern="[^\\p{L}\\s]{1,50}" title="Không vượt quá 20 kí tự!" /><span style="color: #FF0000"><?php echo (isset($Loi1)) ? $Loi1 : "" ?></span>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Số điện thoại" name="sdt" type="texts" value="" maxlength="11" pattern="[0-9]{10,11}" title="Số điện thoại không đúng!" /><span style="color: #FF0000"><?php echo (isset($Loi6)) ? $Loi6 : "" ?></span>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Địa chỉ" type="text" value="" name="diachi" maxlength="200"  title="Không vượt quá 200 kí tự!" / ><span style="color: #FF0000"><?php echo (isset($Loi7)) ? $Loi7 : "" ?></span>
							</div>
							<!-- Change this to a button or input when using this as a form -->
							<input type="submit" name="submit"  value="Đăng kí" class="btn btn-lg btn-success btn-block">
							<span style="color: #006400"><?php echo (isset($tb)) ? $tb : "" ?></span>
							<span style="color: #FF0000"><?php echo (isset($tb1)) ? $tb1 : "" ?></span>
						</fieldset>
					</form>
					<a href="Home.php"><i class=" fa fa-home fa-fw"></i> Trang chủ admin</span></a>
				</div>
			</div>
		</div>
	</div>
</div>