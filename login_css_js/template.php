<?php
require_once('db.php');
$hal='beranda';
if (isset($_GET['pr']))
{
	$hal=$_GET['pr'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Beranda</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="fancybox/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="css/website.css">
	<link rel="stylesheet" href="css/button.css">
</head>
<body>

	<div class="container">
		<?php
			include('slideshow.php');
		?>
		<div class="row">
			<div class="col-sm-3">
				<div class="sidebox">
				<p><img src="img/logo.png" width="100%"/></p>
				<?php
				include('sboxsosial.php');
				include('sboxgaleri.php');				
				?>
				</div>	
			</div>
			<div class="col-sm-9" style="background:#F0F8FF;">
			<?php				
				$hal=$hal.'.php';
				if (file_exists($hal))
				{
					include($hal);
				}
				else
				{
					echo '<div class="alert alert-danger">File : <b>'.$hal.'</b> tidak ditemukan</div>';
				}
			?>
			</div>
		</div>		
		<div class="row">
			<div class="col-sm-12 text-center" style="background: #f8f8f8;">
				FOOTER
			</div>
			
		</div>		
		<!-- //HALAMAN WEB -->
	</div>
<!-- SCRIPT-->
<script src="js/jquery-3.3.1.min.js"></script>	
<script src="js/bootstrap.js"></script>
<script src="js/id.verify.notify.js"></script>
<script src="fancybox/jquery.fancybox.min.js"></script>
<script>
</script>
</body>
</html>
<?php
ob_end_flush();
?>	
  

