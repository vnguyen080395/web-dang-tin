<?php 
include("../config.php");

if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	$sql="DELETE  FROM tb_taikhoan WHERE Ma_tai_khoan=$id";
	mysql_query($sql);
	header("Location: ../qltaikhoan.php");
}
?>