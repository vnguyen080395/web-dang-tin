<?php 
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

$AloAlo123="SELECT * FROM tb_AloAlo123 LIMIT 1";
$result5=mysql_query($AloAlo123);
$row=mysql_fetch_array($result5);


$file="../User/luottruycap.txt";
$mofile=fopen($file,'r');
$view=fread($mofile, filesize($file));
$dongfile=fclose($mofile);
 ?>
 <div id="page-wrapper">
 	<div class="container-fluid">
 		<div class="row">
 			<div class="col-lg-12">
 				<h1 class="page-header">AloAlo123(Admin)</h1>
 			</div>
 			<!-- /.col-lg-12 -->
 		</div>
 		<!-- /.row -->
 		<!-- /.row -->
 		<div class="row">
 			<div class="col-lg-8">
 				<div class="panel panel-default">
 					<div class="panel-heading">
 						<i class="fa fa-youtube-play fa-fw"></i> Giới thiệu
 					</div>
 					<!-- /.panel-heading -->
 					<div class="panel-body">
 						<div><iframe width="600" height="480" src="https://www.youtube.com/embed/5e7e_KZINA4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
 					</div>
 					<!-- /.panel-body -->
 				</div>
 				<!-- /.panel -->
 				<div class="panel panel-default">
 					<div class="panel-heading">
 						<i class="glyphicon glyphicon-map-marker fa-fw"></i> Liên hệ
 					</div>
 					<!-- /.panel-heading -->
 					<div class="panel-body">
 						<div class="row">
 							<!-- /.col-lg-4 (nested) -->
 							<div class="col-lg-8">
 								<div ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1221348365184!2d106.71237031453751!3d10.801956692304202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528a459cb43ab%3A0x6c3d29d370b52a7e!2zxJDhuqFpIEjhu41jIEh1dGVjaA!5e0!3m2!1svi!2s!4v1527877831110" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
 							</div>
 							<!-- /.col-lg-8 (nested) -->
 						</div>
 						<!-- /.row -->
 					</div>
 					<!-- /.panel-body -->
 				</div>
 				<!-- /.panel -->

 				<!-- /.panel-body -->

 				<!-- /.panel -->
 			</div>
 			<!-- /.col-lg-8 -->
 			<div class="col-lg-4">
 				<div class="panel panel-default">
 					<div class="panel-heading">
 						<i class="glyphicon glyphicon-globe fa-fw"></i> Thông báo
 					</div>
 					<!-- /.panel-heading -->
 					<div class="panel-body">
 						<div class="list-group">
 							<a href="#" class="list-group-item">
 								<i class="fa fa-comment fa-fw"></i> Tin tức ngày hôm nay
 								<span class="pull-right text-muted small"><em><?php echo $tthomnay ?> tin</em>
 								</span>
 							</a>
 							<a href="#" class="list-group-item">
 								<i class="fa fa-twitter fa-fw"></i> Tin tức đã phê duyệt
 								<span class="pull-right text-muted small"><em><?php echo $ttdpd ?> tin</em>
 								</span>
 							</a>
 							<a href="#" class="list-group-item">
 								<i class="fa fa-envelope fa-fw"></i> Tin tức chờ phê duyệt
 								<span class="pull-right text-muted small"><em><?php echo $ttcpd ?> tin</em>
 								</span>
 							</a>
 							<a href="#" class="list-group-item">
 								<i class="fa fa-tasks fa-fw"></i> Tổng số tin tức
 								<span class="pull-right text-muted small"><em><?php echo $ttt ?> tin</em>
 								</span>
 							</a>
 							<a href="#" class="list-group-item">
 								<i class="fa fa-upload fa-fw"></i> Tổng số user
 								<span class="pull-right text-muted small"><em><?php echo $tuser ?> user</em>
 								</span>
 							</a>
 						</div>
 						<!-- /.list-group -->
 					</div>
 					<!-- /.panel-body -->
 				</div>
 				<!-- /.panel -->
 				<div class="panel panel-default">
 					<div class="panel-heading">
 						<i class="  fa fa-bookmark fa-fw"></i> Thông tin
 					</div>
 					<div class="panel-body">
 						<div> <?php echo $row["Lien_he"] ?></div>

 					</div>
 					<!-- /.panel-body -->
 				</div>
 			</div>
 			<!-- /.panel .chat-panel -->
 		</div>
 	</div>
 	<div class="row">
 		<div class="col-sm-3">
 			<div class="hero-widget well well-sm">
 				<marquee  direction="down">
 					<div class="icon">
 						<i class="glyphicon glyphicon-thumbs-up"></i>
 					</div>
 					<div class="text">
 						<span class="value" style="text-align: center;"><?php echo $view ?></span>  
 					</div>
 				</marquee>
 				<label class="text-muted">Tổng số lượt truy cập</label>
 			</div>
 		</div>
 		<div class="col-sm-3">
 			<div class="hero-widget well well-sm">
 				<marquee  direction="down">
 					<div class="icon">
 						<i class="glyphicon glyphicon-star"></i>
 					</div>
 					<div class="text">
 						<span class="value" style="text-align: center;"><?php echo $ttt ?></span>      
 					</div>
 				</marquee>
 				<label class="text-muted">Tổng số tin</label>

 			</div>
 		</div>
 		<div class="col-sm-3">
 			<div class="hero-widget well well-sm">
 				<marquee  direction="down">
 					<div class="icon">
 						<i class="glyphicon glyphicon-user"></i>
 					</div>
 					<div class="text">
 						<span class="value" style="text-align: center;"><?php echo $tuser ?></span>

 					</div>
 				</marquee>
 				<label class="text-muted">Tổng số User</label>

 			</div>
 		</div>
 		<div class="col-sm-3">

 			<div class="hero-widget well well-sm">
 				<marquee  direction="down">
 					<div class="icon">
 						<i class="glyphicon glyphicon-check"></i>
 					</div>
 					<div class="text">
 						<span class="value" style="text-align: center;"><?php echo $ttdpd ?></span> 
 					</div>
 				</marquee>
 				<label class="text-muted">Tin đã phê duyệt</label>
 			</div>
 		</div>