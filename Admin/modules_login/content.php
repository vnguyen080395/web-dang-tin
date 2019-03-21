 
<?php 
if (isset($_POST["submit"])) {
	if (isset($_POST["taikhoan"]) && isset($_POST["matkhau"])) {
		$username=$_POST["taikhoan"];
		$password=$_POST["matkhau"];
		if($username=="")
		{
			$Loi1="Chưa nhập thông tin tài khoản!";
		}
		if ($password=="") {
			$Loi2="Chưa nhập thông tin mật khẩu!";
		}
		else{

			$sql="SELECT * FROM tb_taikhoan WHERE Ten_tai_khoan='$username' and Mat_khau='$password' LIMIT 1";
			$result=mysql_query($sql);
			$row=mysql_num_rows($result);
			$kq=mysql_fetch_array($result);
			if ($row==1) {
				if ($kq["Ma_chuc_nang"]==1) {

					session_start();
					$_SESSION["nameadmin"]=$username;
					if(isset($_POST["nho"]))
					{
						setcookie('useradmin',$username,time()+86400,'/');
						setcookie('pwadmin',$password,time() +86400,'/');
					}
					header("Location: home.php");
					
				}
				if($kq["Ma_chuc_nang"]==2)
				{
					$Loi3="Thông tin đăng nhập không chính xác!";
				}
			}
			else
			{
				$Loi3="Thông tin đăng nhập không chính xác!";
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
 					<h3 class="panel-title">Đăng nhập trang Admin</h3>
 				</div>
 				<div class="panel-body">
 					<form role="form" action="" method="POST" accept-charset="utf-8">
 						<fieldset>
 							<div class="form-group">
 								<input class="form-control" placeholder="Tài khoản" name="taikhoan" type="text" value="<?php  if (isset($_COOKIE["useradmin"])) echo $_COOKIE["useradmin"] ;?>" autofocus>
 								<span style="color: #FF0000"><?php echo (isset($Loi1)) ? $Loi1 : "" ?></span>
 							</div>
 							<div class="form-group">
 								<input class="form-control" placeholder="Mật khẩu" name="matkhau" type="password" value="<?php  if (isset($_COOKIE["pwadmin"])) echo $_COOKIE["pwadmin"] ;?>">
 								<span style="color: #FF0000"><?php echo (isset($Loi2)) ? $Loi2 : "" ?></span>
 							</div>
 							<div class="checkbox">
 								<label>
 									<input name="nho" type="checkbox" value="Nhớ tài khoản" checked="<?php  if (isset($_COOKIE["user"])) echo "checked" ;?>">Nhớ tài khoản
 								</label>
 							</div>
 							<!-- Change this to a button or input when using this as a form -->
 							<input type="submit" name="submit"  value="Đăng nhập" class="btn btn-lg btn-success btn-block">
 							<span style="color: #FF0000"><?php echo (isset($Loi3)) ? $Loi3 : "" ?><br></span>
 						</fieldset>
 					</form>
 					<a href="Home.php"><i class=" fa fa-home fa-fw"></i> Trang chủ admin</span></a>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>