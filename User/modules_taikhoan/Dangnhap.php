<?php 
if (isset($_POST["submit"])) {
	if (isset($_POST["Account"]) && isset($_POST["Password"])) {
		$username=$_POST["Account"];
		$password=$_POST["Password"];
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
				if ($kq["Ma_chuc_nang"]==2) {

					session_start();
					$_SESSION["name"]=$username;
					if(isset($_POST["nho"]))
					{
						setcookie('user',$username,time()+86400,'/');
						setcookie('pw',$password,time() +86400,'/');
					}
					header("Location: index.php");
					
				}
				if($kq["Ma_chuc_nang"]==1)
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
<div class="col-sm-4 col-sm-offset-1">
	<div class="login-form"><!--login form-->
		<h2>Đăng nhập bằng tài khoản hiện có</h2>
		<form  action="" method="POST" >
			<input type="text" placeholder="Tài khoản" name="Account" maxlength="20" pattern="[a-z-0-9]{1,20}"  title="Không gõ tiếng việt, chữ in hoa và không chứa dấu cách!" value="<?php  if (isset($_COOKIE["user"])) echo $_COOKIE["user"] ;?>" />
			<span style="color: #FF0000"><?php echo (isset($Loi1)) ? $Loi1 : "" ?></span>
			<input type="password" placeholder="Mật khẩu" name="Password" maxlength="20" pattern="[a-z-0-9]{1,20}"  title="Không gõ tiếng việt,chữ in hoa và không chứa dấu cách!" value="<?php  if (isset($_COOKIE["pw"])) echo $_COOKIE["pw"] ;?>" />	
			<span style="color: #FF0000"><?php echo (isset($Loi2)) ? $Loi2 : "" ?><br></span>
			<span>
				<input type="checkbox" class="checkbox" name="nho" checked="<?php  if (isset($_COOKIE["user"])) echo "checked" ;?>" /> 
				Lưu đăng nhập!<br>
			</span>
			<span style="color: #FF0000"><?php echo (isset($Loi3)) ? $Loi3 : "" ?><br></span>
			<button type="submit" class="btn btn-default" name="submit">Đăng nhập</button>
		</form>
	</div><!--/login form-->
</div>
 <!--><script> Dùng để báo lỗi của mình
	var input=document.getElementById('name');
	input.oninvalid=function(event);
	{
		event.target.setCustomValidity('Không chứa kí tự tiếng việt');
	}
</script>