<?php
ob_start();
session_start();
if (!isset($_SESSION['nip']))
{
	$_SESSION['nip']='-';
	$_SESSION['nama']='-';
}
require_once('db.php');
?>
<head>
	<title>Form Login</title>
</head>
<body>
<center>
<div style="background: #6495ED;width: 50%;height: 5%;">
<h4 style="color: #ffffff; margin-top: 10%; padding-top:1% ;">FORM LOGIN</h4>
</div>
<div  style="background: #008B8B;width: 50%;">
<form name="login" method="post" action="login.php" >
	<fieldset style="border-width: 0px;padding-top: 10%;"><label style="color:#ffffff;">NIP </label><br>
		<input type="text" name="nip" placeholder="NIP" id="nip" class="nip" required maxlength="19"/>
	</fieldset>
	<fieldset style="border-width: 0px;"><label  style="color:#ffffff;">Sandi </label><br>
		<input type="password" name="passwd" placeholder="Sandi" id="passwd" class="passwd" minlength="8" required="" />
	</fieldset>
	<p>&nbsp;</p>
	<p class="text-center"  style="padding-bottom:5%">
		<button type="submit" style="width: 20%; height: 10%; font-size: 24px;"> Login</button><br>
	</p>
</form>
</div>
</center>
</body>
<script type="text/javascript">
</script>
<?php
ob_end_flush();
?>	
