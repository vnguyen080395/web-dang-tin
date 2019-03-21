<?php 
include("../config.php");

if(isset($_GET["iddanhmuc"]))
{
	$id=$_GET["iddanhmuc"];
	$sql="DELETE  FROM tb_danhmuc WHERE Ma_danh_muc=$id";
	mysql_query($sql);
	header("Location: ../qlungdung2.php");
}
if(isset($_GET["idkhuvuc"]))
{
	$id=$_GET["idkhuvuc"];
	$sql="DELETE  FROM tb_khuvuc WHERE Ma_khu_vuc=$id";
	mysql_query($sql);
	header("Location: ../qlungdung2.php");
}
?>