<?php
session_start();
require_once('db.php');
if (isset($_POST['nip']))
{
		$nip=$_POST['nip'];
		$password=md5($_POST['passwd']);
		$hs=mysqli_query($DB,"SELECT * FROM user WHERE nip='".$nip."' AND password='".$password."'
			LIMIT 0,1");
		if (mysqli_num_rows($hs)>0)
		{
			$dt=mysqli_fetch_assoc($hs);
			$_SESSION['nip']=$dt['nip'];
			$_SESSION['iduser']=$dt['iduser'];
			$_SESSION['nama']=$dt['nama'];
			die(header('Location: beranda.php'));
		}
		else
		{
			
			echo '<div class="alert alert-danger">Gagal login, NIP atau Password salah...</div>
				  <p class="text-center"><a href="index.php" class="btn btn-primary"><i class="fa fa-user"></i>
				  Ulangi</a></p>';	
		}

	
}
?>
