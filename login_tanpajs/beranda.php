
<?php
session_start();
?>
<title>Beranda</title>
<div style="width: 100%;height: 10%;background: #008B8B;" >
	<h4 style="text-align: center;padding-top: 2%;color:#ffffff ;font-size: 20px;">Selamat Datang</h4>
</div>
<div style="width: 100%;height: 50%;color:#ffffff;background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(9,15,121,1) 43%, rgba(0,127,153,1) 100%);" >
	<h4 style="text-align: center;padding-top: 2%;color:#ffffff ;font-size: 20px;">Anda Berhasil Login...</h4>
	<p style="text-align: center;color:#ffffff ;font-size: 20px;"> Berikut Informasi Login Anda: </p>
	<table width="13%" align="center" bgcolor="transparent" style="color:#ffffff;">
		<tr><td><b>Nama</b></td><td>: <b><?= $_SESSION['nama'] ?></b></td></tr>
		<tr><td><b>NIP</b></td><td>: <b><?= $_SESSION['nip'] ?></b></td></tr>
	</table>

<center>
	<p class="text-center"  style="padding-top:5%">
		<a type="submit" href="logout.php" style="color: #ffffff; width: 20%; height: 25%; font-size: 24px;"> Logout</a><br>
	</p>
</center>
</div>
