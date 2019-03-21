<?php 
session_start();
if(isset($_SESSION["nameadmin"]))
{
	$name=$_SESSION["nameadmin"];
}
else
{
	$name="...";
	header("Location: login.php");
}


date_default_timezone_set("Asia/Bangkok");
$ngay=date('Y-m-d');
$sql="SELECT * FROM tb_tintuc WHERE DATE(Ngay_dang)='$ngay'";
$result=mysql_query($sql);
$tthomnay=mysql_num_rows($result);

$sql1="SELECT * FROM tb_tintuc WHERE Phe_duyet=1";
$result1=mysql_query($sql1);
$ttdpd=mysql_num_rows($result1);

$sql2="SELECT * FROM tb_tintuc WHERE Phe_duyet=0";
$result2=mysql_query($sql2);
$ttcpd=mysql_num_rows($result2);

$sql3="SELECT * FROM tb_tintuc ";
$result3=mysql_query($sql3);
$ttt=mysql_num_rows($result3);

$sql4="SELECT * FROM tb_taikhoan WHERE Ma_chuc_nang=2";
$result4=mysql_query($sql4);
$tuser=mysql_num_rows($result4);

$sql5="SELECT * FROM tb_taikhoan WHERE Ma_chuc_nang=1";
$result5=mysql_query($sql5);
$tadmin=mysql_num_rows($result5);
 ?>

 <div id="wrapper">
 	<!-- Navigation -->
 	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
 		<div class="navbar-header">
 			<a class="navbar-brand" href="Home.php">Trang Admin</a>
 		</div>

 		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
 			<span class="sr-only">Toggle navigation</span>
 			<span class="icon-bar"></span>
 			<span class="icon-bar"></span>
 			<span class="icon-bar"></span>
 		</button>

 		<ul class="nav navbar-nav navbar-left navbar-top-links">
 			<li><a href="../User/index.php"><i class="fa fa-home fa-fw"></i>AloAlo123</a></li>
 		</ul>

 		<ul class="nav navbar-right navbar-top-links">
 			<li class="dropdown navbar-inverse">
 				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
 					<i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
 				</a>
 				<ul class="dropdown-menu dropdown-alerts">
 					<li>
 						<a href="#">
 							<div>
 								<i class="fa fa-newspaper-o fa-fw"></i>Tin tức ngày hôm nay
 								<span class="pull-right text-muted small"><?php echo $tthomnay ?> tin</span>
 							</div>
 						</a>
 					</li>
 					<li>
 						<a href="#">
 							<div>
 								<i class="fa fa-check-square-o fa-fw"></i> Tin tức đã phê duyệt
 								<span class="pull-right text-muted small"><?php echo $ttdpd ?> tin</span>
 							</div>
 						</a>
 					</li>
 					<li>
 						<a href="#">
 							<div>
 								<i class="fa fa-hourglass-start fa-fw"></i> Tin tức chờ phê duyệt
 								<span class="pull-right text-muted small"><?php echo $ttcpd ?> tin</span>
 							</div>
 						</a>
 					</li>
 					<li>
 						<a href="#">
 							<div>
 								<i class="fa fa-envelope fa-fw"></i> Tổng số tin tức
 								<span class="pull-right text-muted small"><?php echo $ttt ?> tin</span>
 							</div>
 						</a>
 					</li>
 					<li>
 						<a href="#">
 							<div>
 								<i class="fa fa-sitemap fa-fw"></i> Tài khoản người dùng
 								<span class="pull-right text-muted small"><?php echo $tuser ?></span>
 							</div>
 						</a>
 					</li>
 					<li>
 						<a href="#">
 							<div>
 								<i class="glyphicon glyphicon-user fa-fw"></i> Tài khoản admin
 								<span class="pull-right text-muted small"><?php echo $tadmin ?></span>
 							</div>
 						</a>
 					</li>
 				</ul>
 			</li>
 			<li class="dropdown">
 				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
 					<i class="fa fa-user fa-fw"></i>Xin chào: <?php echo $name ?> <b class="caret"></b>
 				</a>
 				<ul class="dropdown-menu dropdown-user">
 					<li><a href="doimatkhau.php"><i class="fa fa-lock fa-fw"></i> Đổi mật khẩu</a>
 					</li>
 					<li class="divider"></li>
 					<li><a href="modules/xuli.php"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
 					</li>
 				</ul>
 			</li>
 		</ul>
 		<!-- /.navbar-top-links -->

 		<div class="navbar-default sidebar" role="navigation">
 			<div class="sidebar-nav navbar-collapse">
 				<ul class="nav" id="side-menu">
 					<li class="sidebar-search">
 						<div class="input-group custom-search-form">
 							<input type="text" class="form-control" placeholder="Search...">
 							<span class="input-group-btn">
 								<button class="btn btn-primary" type="button">
 									<i class="fa fa-search"></i>
 								</button>
 							</span>
 						</div>
 						<!-- /input-group -->
 					</li>
 					<li>
 						<a href="Home.php" class="active"><i class="fa fa-home fa-fw"></i> Trang chủ</a>
 					</li>
 					<li>
 						<a href="#"><i class="fa fa-newspaper-o fa-fw"></i> Quản lý tin tức<span class="fa arrow"></span></a>
 						<ul class="nav nav-second-level">
 							<li>
 								<a href="tintucdapheduyet.php">Tin tức đã phê duyệt</a>
 							</li>
 							<li>
 								<a href="tintucchuapheduyet.php">Tin tức chưa phê duyệt</a>
 							</li>
 						</ul>
 						<!-- /.nav-second-level -->
 					</li>
 					<li>
 						<a href="#"><i class="fa fa-user-circle-o fa-fw"></i>Tài khoản người dùng<span class="fa arrow"></span></a>
 						<ul class="nav nav-second-level">
 							<li>
 								<a href="qltaikhoan.php">Danh sách</a>
 							</li>
 						</ul>
 					</li>
 					<li>
 						<a href="#"><i class="fa fa-th-large fa-fw"></i> Quản lý ứng dụng<span class="fa arrow"></span></a>
 						<ul class="nav nav-second-level">
 							<li>
 								<a href="qlungdung1.php">Logo & Hình nền & Thông tin liên hệ & Quảng cáo</a>
 							</li>
 							<li>
 								<a href="qlungdung2.php">Quản lý Danh mục & Khu vực</a>
 							</li>
 						</ul>
 						<!-- /.nav-second-level -->
 					</li>
 					<li>
 						<a href="#"><i class=" fa fa-address-card fa-fw"></i> Cài đặt tài khoản<span class="fa arrow"></span></a>
 						<ul class="nav nav-second-level">
 							<li>
 								<a href="dangkitaikhoan.php">Thêm tài khoản admin</a>
 							</li>
 							<li>
 								<a href="doimatkhau.php">Đổi mật khẩu</a>
 							</li>
 							<li>
 								<a href="login.php">Đăng nhập</a>
 							</li>
 						</ul>
 						<!-- /.nav-second-level -->
 					</li>
 				</ul>
 			</div>
 		</div>
 	</nav>
 </div>