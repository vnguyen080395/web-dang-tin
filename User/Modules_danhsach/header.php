<?php 
$sql_khuvuc="SELECT * FROM tb_khuvuc";
$result=mysql_query($sql_khuvuc);
$sql_danhmuc="SELECT * FROM tb_danhmuc";
$result1=mysql_query($sql_danhmuc);
$sql_hinhthuc="SELECT * FROM tb_hinhthuc";
$result2=mysql_query($sql_hinhthuc);
?>
<?php
if(isset($_GET["idkhuvuc"]) && isset($_GET["iddanhmuc"]) && isset($_GET["idhinhthuc"]))
{
	$a=$_GET["idkhuvuc"];
	$b=$_GET["iddanhmuc"];
	$c=$_GET["idhinhthuc"];
}	
else{
	if (isset($_GET["idkhuvuc"])) {
		$a=$_GET["idkhuvuc"];
		$b="";
		$c="";
	}
	if (isset($_GET["iddanhmuc"])) {
		$a="";
		$b=$_GET["iddanhmuc"];
		$c="";
	}
	if (isset($_GET["idhinhthuc"])) {
		$a="";
		$b="";
		$c=$_GET["idhinhthuc"];
	}
}
if(!isset($_GET["idkhuvuc"]) && !isset($_GET["iddanhmuc"]) && !isset($_GET["idhinhthuc"]))
{
	$a="";
	$b="";
	$c="";
}	
?>
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
<?php 
$AloAlo123="SELECT * FROM tb_AloAlo123 LIMIT 1";
$result8=mysql_query($AloAlo123);
$row8=mysql_fetch_array($result8);
?>
<div class="header-middle" ><!--header-middle-->
	<div class="container" >
		<div class="row">
			<div class="col-sm-4">
				<div class="logo pull-left" >
					<a href="index.php"><img style="width: 90% " src="<?php echo $row8["Logo"] ?>" alt=""></a>
				</div>
				<div class="btn-group pull-right">
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
							KHU VỰC
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="danhsach.php?idkhuvuc=&iddanhmuc=<?php echo $b ?>&idhinhthuc=<?php echo $c ?>">Tất cả</a></li>
							<?php 
							while ($row=mysql_fetch_array($result)) {
								?>
								<li><a href="danhsach.php?idkhuvuc=<?php echo $row["Ma_khu_vuc"] ?>&iddanhmuc=<?php echo $b ?>&idhinhthuc=<?php echo $c ?>"><?php echo $row["Ten_khu_vuc"] ?></a></li>
								<?php } ?>
							</ul>
						</div>

						<div class="btn-group">
							<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
								DANH MỤC
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li><a href="danhsach.php?idkhuvuc=<?php echo $a ?>&iddanhmuc=&idhinhthuc=<?php echo $c ?>">Tất cả</a></li>
								<?php 
								while ($row1=mysql_fetch_array($result1)) {
									?>
									<li><a href="danhsach.php?idkhuvuc=<?php echo $a ?>&iddanhmuc=<?php echo $row1["Ma_danh_muc"] ?>&idhinhthuc=<?php echo $c ?>"><?php echo $row1["Ten_danh_muc"] ?></a></li>
									<?php } ?>
								</ul>
							</div>

							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									HÌNH THỨC
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="danhsach.php?idkhuvuc=<?php echo $a ?>&iddanhmuc=<?php echo $b ?>&idhinhthuc=">Tất cả</a></li>
									<?php 
									while ($row2=mysql_fetch_array($result2)) {
										?>
										<li><a href="danhsach.php?idkhuvuc=<?php echo $a ?>&iddanhmuc=<?php echo $b ?>&idhinhthuc=<?php echo $row2["Ma_hinh_thuc"] ?>"><?php echo $row2["Ten_hinh_thuc"] ?></a></li>
										<?php } ?>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-8">
							<div class=" pull-right">
								<div class="mainmenu ">
									<ul class="nav navbar-nav collapse navbar-collapse">
										<li><a href="index.php" >Trang chủ</a></li>
										<li ><a href="dangtin.php">Đăng tin</a></li>							
										<li class="dropdown"><a>Hello account: <i><?php echo $name; ?></i></a>
											<ul role="menu" class="sub-menu">
												<li><a href="">Quản lý tin tức</a></li>
												<li><a href="">Trang cá nhân</a></li>
												<li><a href="taikhoan.php">Đăng nhập</a></li>
												<li><a href="dangtin.php">Đăng xuất!</a></li>
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

