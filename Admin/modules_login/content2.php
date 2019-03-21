 <?php 
if (isset($_POST["submit"])) {
	if (isset($_POST["taikhoan"]) && isset($_POST["matkhaucu"]) && isset($_POST["matkhaumoi"]) && isset($_POST["matkhaumoi2"])) {
		$username=$_POST["taikhoan"];
		$password=$_POST["matkhaucu"];
		$matkhaumoi=$_POST["matkhaumoi"];
		$matkhaumoi2=$_POST["matkhaumoi2"];
		if($username=="")
		{
			$Loi1="Chưa nhập thông tin tài khoản!";
		}
		if ($password=="") {
			$Loi2="Chưa nhập thông tin mật khẩu!";
		}
		if ($matkhaumoi=="") {
			$Loi3="Chưa nhập mật khẩu mới!";
		}
		if ($matkhaumoi2=="") {
			$Loi4="Nhập lại mật khẩu mới!";
		}
		if ($matkhaumoi!=$matkhaumoi2) {
			$Loi5="Thông tin mật khẩu không trùng khớp!";
		}
		else{

			$sql="SELECT * FROM tb_taikhoan WHERE Ten_tai_khoan='$username' and Mat_khau='$password' LIMIT 1";
			$result=mysql_query($sql);
			$row=mysql_num_rows($result);
			$kq=mysql_fetch_array($result);
			$ma=$kq["Ma_tai_khoan"];
			if ($row==1) {
				if ($kq["Ma_chuc_nang"]==1) {
					$sql1="UPDATE tb_taikhoan SET Mat_khau=$matkhaumoi2 WHERE Ma_tai_khoan=$ma";
					if(mysql_query($sql1))
					{
						$tb="Đổi mật khẩu thành công!";
					}
					header("Location: login.php");
					
				}
				if($kq["Ma_chuc_nang"]==2)
				{
					$Loi7="Thông tin đăng nhập không chính xác!";
				}
			}
			else
			{
				$Loi7="Thông tin đăng nhập không chính xác!";
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
 					<h3 class="panel-title">Đổi mật khẩu</h3>
 				</div>
 				<div class="panel-body">
 					<form role="form" action="" method="POST" accept-charset="utf-8">
 						<fieldset>
 							<div class="form-group">
 								<input class="form-control" placeholder="Tài khoản" name="taikhoan" type="text" autofocus>
 								<span style="color: #FF0000"><?php echo (isset($Loi1)) ? $Loi1 : "" ?></span>
 							</div>
 							<div class="form-group">
 								<input class="form-control" placeholder="Mật khẩu cũ" name="matkhaucu" type="password" value="">
 								<span style="color: #FF0000"><?php echo (isset($Loi2)) ? $Loi2 : "" ?></span>
 								<span style="color: #FF0000"><?php echo (isset($Loi7)) ? $Loi7 : "" ?></span>
 							</div>
 							<div class="form-group">
 								<input class="form-control" placeholder="Mật khẩu mới" name="matkhaumoi" type="password" value=""
 								><span style="color: #FF0000"><?php echo (isset($Loi3)) ? $Loi3 : "" ?></span>
 							</div>
 							<div class="form-group">
 								<input class="form-control" placeholder="Nhập lại mật khẩu mới" name="matkhaumoi2" type="password" value=""><span style="color: #FF0000"><?php echo (isset($Loi4)) ? $Loi4 : "" ?></span>
 								<span style="color: #FF0000"><?php echo (isset($Loi5)) ? $Loi5 : "" ?></span>
 							</div>
 							<!-- Change this to a button or input when using this as a form -->
 							<input type="submit" name="submit"  value="Thay đổi" class="btn btn-lg btn-success btn-block">
 							<span style="color: #00CC00"><?php echo (isset($tb)) ? $tb : "" ?></span>
 						</fieldset>
 					</form>
 					<a href="Home.php"><i class=" fa fa-home fa-fw"></i> Trang chủ admin</span></a>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>