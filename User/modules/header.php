<?php 
session_start();
if(isset($_SESSION["name"]))
{
	$name=$_SESSION["name"];
}
else
{
	$name="...";
}
?>
<!--Nut chat fb-->
<!--end nut chat fb-->
<?php 
$AloAlo123="SELECT * FROM tb_AloAlo123 LIMIT 1";
$result=mysql_query($AloAlo123);
$row=mysql_fetch_array($result);
 ?>
<div class="header-middle" >
	<div class="container" >
		<div class="row">
			<div class="col-sm-4">
				<div class="logo pull-left" >					
					<a href="index.php"><img style="width: 90%" src="<?php echo $row["Logo"] ?>" alt=""></a>
				</div>
			</div>
			<div class="col-sm-8">
				<div class=" pull-right">
					<div class="mainmenu ">
						<ul class="nav navbar-nav collapse navbar-collapse">
							<li><a href="index.php">Trang chủ</a></li>
							<li ><a href="dangtin.php">Đăng tin</a></li>
							<li class="dropdown"><a>Hello account: <i><?php echo $name; ?></i></a>
								<ul role="menu" class="sub-menu">
									<li><a href="">Quản lý tin tức</a></li>
									<li><a href="">Trang cá nhân</a></li>
									<li><a href="taikhoan.php">Đăng nhập</a></li>
									<li><a href="modules/xuly.php">Đăng xuất!</a></li>
								</ul>
							</li> 
							<li><a href="lienhe.php">Liên hệ</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
