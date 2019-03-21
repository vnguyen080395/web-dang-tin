 <?php 
 $sql="SELECT * FROM tb_danhmuc";
 $result=mysql_query($sql);
 $sql1="SELECT * FROM tb_khuvuc";
 $result1=mysql_query($sql1);
 ?>
 <?php 
 if(isset($_POST["submit"]) && isset($_POST["danhmuc"]))
 {
 	$danhmuc=$_POST['danhmuc'];
 	if($danhmuc!="")
 	{
 		$sql="INSERT INTO tb_danhmuc (Ma_danh_muc,Ten_danh_muc) VALUES (NULL,'$danhmuc')";
 		if(mysql_query($sql))
 		{
 			$tb="Thêm danh mục thành công.";
 		}
 		else
 		{
 			$tb1="Thêm thất bại.";
 		}
 	}
 	else
 	{
 		$tb1="Không được để trống danh mục.";
 	}
 }
 
 if(isset($_POST["submit1"]) && isset($_POST["khuvuc"]))
 {
 	$khuvuc=$_POST['khuvuc'];
 	if($khuvuc!="")
 	{
 		$sql="INSERT INTO tb_khuvuc (Ma_khu_vuc,Ten_khu_vuc) VALUES (NULL,'$khuvuc')";
 		if(mysql_query($sql))
 		{
 			$tb4="Thêm khu vực thành công.";
 		}
 		else
 		{
 			$tb5="Thêm thất bại.";
 		}
 	}
 	else
 	{
 		$tb5="Không được để trống khu vực.";
 	}
 }


 if(isset($_POST["submitdanhmuc"]) && isset($_POST["danhmuc"]) && isset($_POST["id"]))
 {
 	$danhmuc=$_POST['danhmuc'];
 	$ma=$_POST["id"];
 	if($danhmuc!="")
 	{
 		$sql="UPDATE `db_doancoso`.`tb_danhmuc` SET Ten_danh_muc='$danhmuc' WHERE `tb_danhmuc`.`Ma_danh_muc`='$ma'";
 		if(mysql_query($sql))
 		{
 			$tb2="Sửa danh mục thành công.";
 		}
 		else
 		{
 			$tb3="Sửa thất bại.";
 		}
 	}
 	else
 	{
 		$tb3="Không được để trống ô sửa danh mục.";
 	}
 }

if(isset($_POST["submitkhuvuc"]) && isset($_POST["khuvuc"]) && isset($_POST["id"]))
 {
 	$khuvuc=$_POST['khuvuc'];
 	$ma=$_POST["id"];
 	if($khuvuc!="")
 	{
 		$sql="UPDATE `db_doancoso`.`tb_khuvuc` SET Ten_khu_vuc='$khuvuc' WHERE `tb_khuvuc`.`Ma_khu_vuc`='$ma'";
 		if(mysql_query($sql))
 		{
 			$tb6="Sửa khu vực thành công.";
 		}
 		else
 		{
 			$tb7="Sửa thất bại.";
 		}
 	}
 	else
 	{
 		$tb7="Không được để trống ô sửa khu vực.";
 	}
 }


 ?>
 <script type="text/javascript">
 	function xoa_comfirm()
 	{
 		var comfirmBox;
 		comfirmBox = confirm("Bạn muốn thực sự muốn xóa danh mục này?");
 		if(comfirmBox == true){
 			return true;
 		}
 		else
 		{
 			return false;
 		}
 	}
 </script>
 <script type="text/javascript">
 	function xoa_comfirm1()
 	{
 		var comfirmBox;
 		comfirmBox = confirm("Bạn muốn thực sự muốn xóa khu vực này?");
 		if(comfirmBox == true){
 			return true;
 		}
 		else
 		{
 			return false;
 		}
 	}
 </script>
 <div id="page-wrapper">
 	<div class="row">
 		<div class="col-lg-12">
 			<h1 class="page-header">Quản lý ứng dụng</h1>
 		</div>
 		<!-- /.col-lg-12 -->
 	</div>
 	<!-- /.row -->
 	<div class="row">
 		<div class="col-lg-12">
 			<div class="panel panel-default">
 				<div class="panel-heading">
 					Danh mục & Khu vực
 				</div>
 				<!-- /.panel-heading -->
 				<div class="panel-body">
 					<!-- Nav tabs -->
 					<ul class="nav nav-tabs">
 						<li class="active"><a href="#danhmuc" data-toggle="tab">Danhmuc</a>
 						</li>
 						<li><a href="#khuvuc" data-toggle="tab">Khu vực</a>
 						</li>
 					</ul>

 					<!-- Tab panes -->
 					<div class="tab-content">
 						<div class="tab-pane fade in active" id="danhmuc">
 							<table class="table table-striped table-bordered table-hover" id="dataTables-example">
 								<thead>
 									<tr>
 										<th style="text-align: center;">Mã danh mục</th>
 										<th style="text-align: center;">Tên danh mục</th>
 										<th style="text-align: center;">Xóa</th>
 										<th style="text-align: center;">Sửa</th>
 									</tr>
 								</thead>
 								<tbody>
 									<?php while ($row=mysql_fetch_array($result)) {
 										?>
 										<tr >
 											<td style="text-align: center;"><?php echo $row["Ma_danh_muc"] ?></td>
 											<td style="text-align: center;"><?php echo $row["Ten_danh_muc"] ?></td>
 											<td class="center" style="text-align: center;"><a onclick="return xoa_comfirm()" href="modules_qlungdung/xoa.php?iddanhmuc=<?php echo $row["Ma_danh_muc"] ?>"> <i class="fa fa-trash"></i> Xóa</a></td>
 											<form action="qlungdung2.php" method="POST" accept-charset="utf-8">
 												<td class="center" style="text-align: center;"><input type="text" name="danhmuc">
 													<input type="text" name="id"  value="<?php echo $row["Ma_danh_muc"] ?>" style="width: 0px" readonly>
 													<input type="submit" name="submitdanhmuc" value="Sửa" class="btn btn-success " ><br>
 												</td>
 											</form>
 										</tr>
 										<?php } ?>
 									</tbody>
 								</table>
 								<span style="color: #00CC00"><?php echo (isset($tb2)) ? $tb2 : "" ?></span>
 								<span style="color: #FF0000"><?php echo (isset($tb3)) ? $tb3 : "" ?></span>
 								<div class="row">
 									<div class="col-sm-12" >
 										<div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
 											<ul class="pagination">
 												<li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li>
 												<li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li>
 												<li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">2</a></li>
 												<li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">3</a></li>
 												<li class="paginate_button next disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li>
 											</ul>
 											<form action="" method="POST" accept-charset="utf-8">
 												<div class="col-sm-2">
 													<input  type="text" name="danhmuc" style="height: 50px; width: 240px;"><br>
 													<span style="color: #FF0000"><?php echo (isset($tb1)) ? $tb1 : "" ?><br></span>
 													<span style="color: #00CC00"><?php echo (isset($tb)) ? $tb : "" ?><br></span>
 												</div>
 												<div class="col-sm-4">
 													<div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
 														<ul class="pagination" >
 															<li class="paginate_button previous"><input type="submit" name="submit" value="Thêm danh mục mới" class="btn btn-lg btn-success btn-block" ><br></li>
 														</ul>
 													</div>
 												</div>
 											</form>
 										</div>
 									</div>
 								</div>
 							</div>
 							<div class="tab-pane fade in" id="khuvuc">
 								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
 									<thead>
 										<tr>
 											<th style="text-align: center;">Mã khu vực</th>
 											<th style="text-align: center;">Tên khu vực</th>
 											<th style="text-align: center;">Xóa</th>
 											<th style="text-align: center;">Sửa</th>
 										</tr>
 									</thead>
 									<tbody>
 										<?php while ($row1=mysql_fetch_array($result1)) {
 											
 											?>
 											<tr >
 												<td style="text-align: center;"><?php echo $row1["Ma_khu_vuc"] ?></td>
 												<td style="text-align: center;"><?php echo $row1["Ten_khu_vuc"]; ?></td>
 												<td class="center" style="text-align: center;"><a onclick="return xoa_comfirm1()" href="modules_qlungdung/xoa.php?idkhuvuc=<?php echo $row1["Ma_khu_vuc"] ?>"> <i class="fa fa-trash"></i> Xóa</a></td>
 												<form action="qlungdung2.php" method="POST" accept-charset="utf-8">
 													<td class="center" style="text-align: center;"><input type="text" name="khuvuc">
 														<input type="text" name="id"  value="<?php echo $row1["Ma_khu_vuc"] ?>" style="width: 0px" readonly>
 														<input type="submit" name="submitkhuvuc" value="Sửa" class="btn btn-success " ><br>
 													</td>
 												</form>
 											</tr>
 											<?php } ?>
 										</tbody>
 									</table>
 									<span style="color: #00CC00"><?php echo (isset($tb6)) ? $tb6 : "" ?></span>
 								<span style="color: #FF0000"><?php echo (isset($tb7)) ? $tb7 : "" ?></span>
 									<div class="row">
 										<div class="col-sm-12" >
 											<div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
 												<ul class="pagination">
 													<li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li>
 													<li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li>
 													<li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">2</a></li>
 													<li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">3</a></li>
 													<li class="paginate_button next disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li>
 												</ul>
 												<form action="" method="POST" accept-charset="utf-8">
 													<div class="col-sm-2">
 														<input  type="text" name="khuvuc" style="height: 50px; width: 240px;"><br>
 														<span style="color: #FF0000"><?php echo (isset($tb5)) ? $tb5 : "" ?><br></span>
 														<span style="color: #00CC00"><?php echo (isset($tb4)) ? $tb4 : "" ?><br></span>
 													</div>
 													<div class="col-sm-4">
 														<div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
 															<ul class="pagination" >
 																<li class="paginate_button previous"><input type="submit" name="submit1" value="Thêm khu vực mới" class="btn btn-lg btn-success btn-block" ><br></li>
 															</ul>
 														</div>
 													</div>
 												</form>
 											</div>
 										</div>
 									</div>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>