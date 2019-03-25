<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Liên hệ 0988883993</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/price-range.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
<![endif]-->       
<link rel="shortcut icon" href="images/icon/logo.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

	<?php
	include("modules/config.php");
	include("modules/header.php");
	?>  			    	
	<div id="contact-page" class="container" style="margin-top: 20px">
		<div class="bg">
			<div class="row">    		
				<div class="col-sm-12">    			   			
					<h2 class="title text-center">Liên hệ với chúng tôi <strong>Us</strong></h2>  
					<?php
					include("modules_lienhe/bando.php");
					?>  			    		
				</div>			 		
			</div>    	
			<div class="row">  	
				<div class="col-sm-8">
					<div class="contact-form">
						<h2 class="title text-center">Liên lạc</h2>
						<?php
						include("modules_lienhe/lienlac.php");
						?>  			    		
					</div>
				</div>
				<div class="col-sm-4">
					<div class="contact-info">
						<h2 class="title text-center">Thông tin liên lạc</h2>
						<?php
						include("modules_lienhe/thongtinlienlac.php");
						?>  	
					</div>
				</div>    			
			</div>  
		</div>	
	</div>
	<?php
	include("modules/footer.php");
	include("nhung.php") ;
	?>  	
	

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/price-range.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/main.js"></script>
</body>
</html>