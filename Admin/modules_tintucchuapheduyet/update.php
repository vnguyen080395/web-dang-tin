<?php 
include("../config.php");

if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	$sql="UPDATE tb_tintuc SET Phe_duyet=1 WHERE Ma_tin_tuc=$id ";
	mysql_query($sql);
	header("Location: ../tintucchuapheduyet.php");
}
else
{
	$sql="UPDATE tb_tintuc SET Phe_duyet=1";
	mysql_query($sql);
	header("Location: ../tintucchuapheduyet.php");
}