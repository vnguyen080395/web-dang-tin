<?php 
$AloAlo123="SELECT * FROM tb_AloAlo123 LIMIT 1";
$result=mysql_query($AloAlo123);
$row=mysql_fetch_array($result);
 ?>
<address>
	<?php echo $row["Lien_he"]; ?>
</address>
<div class="social-networks">
	<h2 class="title text-center">Mạng xã hội</h2>
	<ul>
		<li>
			<a href="#"><i class="fa fa-facebook"></i></a>
		</li>
		<li>
			<a href="#"><i class="fa fa-twitter"></i></a>
		</li>
		<li>
			<a href="#"><i class="fa fa-google-plus"></i></a>
		</li>
		<li>
			<a href="#"><i class="fa fa-youtube"></i></a>
		</li>
	</ul>
</div>