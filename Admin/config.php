<?php
	$tenmaychu='localhost';
	$tentaikhoan='root';
	$matkhau='';
	$csdl='db_doancoso';
	$conn=mysql_connect($tenmaychu,$tentaikhoan,$matkhau,$csdl)  or die('Không thể kết nối cơ sở dữ liệu');
	 mysql_set_charset('utf8',$conn); //chỉ cần thêm dòng này để chữ không bị đổi phông
	mysql_select_db($csdl,$conn);
 ?>
