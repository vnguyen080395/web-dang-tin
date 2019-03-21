<?php 
include("../config.php");

if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	$sql="DELETE  FROM tb_tintuc WHERE Ma_tin_tuc=$id";
	mysql_query($sql);
	header("Location: ../tintucchuapheduyet.php");
}
?>
