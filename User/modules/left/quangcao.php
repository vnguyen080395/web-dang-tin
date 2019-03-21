<?php 
$sql="SELECT * FROM tb_quangcao";
$result=mysql_query($sql);

 ?>

<style>
.shipping {
	margin-top: 40px;
	overflow: hidden;
	padding-top: 0px;
	position: relative;

	-webkit-animation-name: shipping;
	-webkit-animation-duration: 3s;
	animation-name: shipping;
	animation-duration: 3s;
}
@-webkit-keyframes shipping {
	from {opacity: .4} 
	to {opacity: 1}
}

@keyframes shipping {
	from {opacity: .4} 
	to {opacity: 1}
}
.dot {
	cursor:pointer;
	height: 13px;
	width: 13px;
	margin: 0 2px;
	background-color: #bbb;
	border-radius: 50%;
	display: inline-block;
	transition: background-color 0.6s ease;
}
.active, .dot:hover {
	background-color: #717171;
}

</style>
<?php 
while ($row=mysql_fetch_array($result)) {
 ?>
<div class="shipping text-center  "><!--shipping-->
	<a href="<?php echo $row["Link"] ?>" target="_blank"><img style="width: 270px;height: 329px" src="<?php echo $row["Hinh_quang_cao"] ?>" alt="" /></a>
</div>
<?php } ?>
<br>

<div style="text-align:center">
	<span class="dot" onclick="currentSlide(0)"></span> 
	<span class="dot" onclick="currentSlide(1)"></span> 
	<span class="dot" onclick="currentSlide(2)"></span> 
</div>	