<?php
ob_start();
session_start();
	$_SESSION['nip']='-';
	$_SESSION['nama']='-';
die(header('Location: index.php'));
?>