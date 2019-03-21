 <?php 
 $sql="SELECT * FROM tb_taikhoan WHERE Ma_chuc_nang=2";
 $result=mysql_query($sql);
 $dem=0;

 $sql1="SELECT * FROM tb_taikhoan WHERE Ma_chuc_nang=1";
 $result1=mysql_query($sql1);
 $dem1=mysql_num_rows($result1);
 if($result)
 {
 	$dem=mysql_num_rows($result);
 }

 $total_records = $dem;
    // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
 $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
 $limit = 10;
    // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
    // tổng số trang
 $total_page = ceil($total_records / $limit);

    // Giới hạn current_page trong khoảng 1 đến total_page
 if ($current_page > $total_page){
 	$current_page = $total_page;
 }
 else if ($current_page < 1){
 	$current_page = 1;
 }

    // Tìm Start
 $start = ($current_page - 1) * $limit;

 $sqlall=$sql." "."LIMIT"." ".$start.",".$limit;
 $resultall=mysql_query($sqlall);
 ?>
 ?>
 <script type="text/javascript">
 	function xoa_comfirm()
 	{
 		var comfirmBox;
 		comfirmBox = confirm("Bạn muốn thực sự muốn xóa tài khoản này?");
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
 			<h1 class="page-header">Quản lý tài khoản</h1>
 		</div>
 		<!-- /.col-lg-12 -->
 	</div>
 	<!-- /.row -->
 	<div class="row">
 		<div class="col-lg-12">
 			<div class="panel panel-default">
 				<div class="panel-heading">
 					Danh sách tài khoản
 				</div>
 				<!-- /.panel-heading -->
 				<div class="panel-body">
 					<!-- Nav tabs -->
 					<ul class="nav nav-tabs">
 						<li class="active"><a href="#user" data-toggle="tab">User</a>
 						</li>
 						<li><a href="#admin" data-toggle="tab">Admin</a>
 						</li>

 					</ul>

 					<!-- Tab panes -->
 					<div class="tab-content">
 						<div class="tab-pane fade in active" id="user">
 							<h4>Tổng số: <?php echo $dem ?> tài khoản</h4>
 							<table class="table table-striped table-bordered table-hover" id="dataTables-example">
 								<thead>
 									<tr>
 										<th style="text-align: center;">Mã tài khoản</th>
 										<th style="text-align: center;">Tên tài khoản</th>
 										<th style="text-align: center;">Mật khẩu</th>
 										<th style="text-align: center;">Họ tên</th>
 										<th style="text-align: center;">Số điện thoại</th>
 										<th style="text-align: center;">Địa chỉ</th>
 										<th style="text-align: center;">Xóa</th>
 									</tr>
 								</thead>
 								<tbody>
 									<?php 
 									if($dem!=0)
 									{
 										$a=$resultall;
 									}
 									else
 									{
 										$a=$result;
 									}
 									?>

 									<?php 
 									while ($row=mysql_fetch_array($a)) {	
 										?>
 										<tr >
 											<td style="text-align: center;"><?php echo $row["Ma_tai_khoan"] ?></td>
 											<td style="text-align: center;"><?php echo $row["Ten_tai_khoan"] ?></td>
 											<td style="text-align: center;" type="password">******</td>
 											<td class="center" style="text-align: center;"><?php echo $row["Ho_ten"] ?></td>
 											<td class="center" style="text-align: center;"><?php echo $row["So_dien_thoai"] ?></td>
 											<td class="center" style="text-align: center;"><?php echo $row["Dia_chi"] ?></td>
 											<td class="center" style="text-align: center;">  <a onclick="return xoa_comfirm()" href="modules_qltaikhoan/xoataikhoan.php?id=<?php echo $row["Ma_tai_khoan"] ?>"><i class="fa fa-trash"></i> Xóa</a></td>
 										</tr>
 										<?php } ?>
 									</tbody>
 								</table>
 								<div class="row">
 									<div class="col-sm-12" >
 										<div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
 											<ul class="pagination">
 												<?php 

 												if ($current_page > 1 && $total_page > 1)
 												{
 													echo '<li class="paginate_button previous " aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="qltaikhoan.php?page='.($current_page-1).'">&laquo;</a></li> ';
 												}

                    if($total_page >= 2) // trang lớn hơn hai mới hiện
                    {

                    	for ($i = 1; $i <= $total_page; $i++)
                    	{
                            // Nếu là trang hiện tại thì hiển thị thẻ span
                            // ngược lại hiển thị thẻ a
                    		if ($i == $current_page)
                    		{
                    			echo '<li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="">'.$i.'</a></li>';
                    		}
                    		else
                    		{
                    			echo '<li  class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="qltaikhoan.php?page='.$i.'">'.$i.'</a></li>';
                    		}
                    	}
                    }
                    // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                    if ($current_page < $total_page && $total_page > 1)
                    {
                    	echo '<li class="paginate_button next " aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="qltaikhoan.php?page='.($current_page+1).'">&raquo;</a></li> ';
                    }
                    ?>
                </ul>
            </div>
        </div>      
    </div>
</div>
<div class="tab-pane fade" id="admin">
	<h4>Tổng số: <?php echo $dem1 ?> tài khoản</h4>
	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
			<tr>
				<th style="text-align: center;">Mã tài khoản</th>
				<th style="text-align: center;">Tên tài khoản</th>
				<th style="text-align: center;">Mật khẩu</th>
				<th style="text-align: center;">Họ tên</th>
				<th style="text-align: center;">Số điện thoại</th>
				<th style="text-align: center;">Địa chỉ</th>
				<th style="text-align: center;">Xóa</th>
			</tr>
		</thead>
		<tbody>
			<?php while ( $row1=mysql_fetch_array($result1)) {
				# code...
				?>
				<tr >
					<td style="text-align: center;"><?php echo $row1["Ma_tai_khoan"] ?></td>
					<td style="text-align: center;"><?php echo $row1["Ten_tai_khoan"] ?></td>
					<td style="text-align: center;" type="password">******</td>
					<td class="center" style="text-align: center;"><?php echo $row1["Ho_ten"] ?></td>
					<td class="center" style="text-align: center;"><?php echo $row1["So_dien_thoai"] ?></td>
					<td class="center" style="text-align: center;"><?php echo $row1["Dia_chi"] ?></td>
					<td class="center" style="text-align: center;">  <a onclick="return xoa_comfirm()" href="modules_qltaikhoan/xoataikhoan.php?id=<?php echo $row1["Ma_tai_khoan"] ?>"><i class="fa fa-trash"></i> Xóa</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

</div>
</div>
</div>
</div>

</div>