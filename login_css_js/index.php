<?php
ob_start();
session_start();
if (!isset($_SESSION['nip']))
{
	$_SESSION['iduser']=0;
	$_SESSION['nip']='-';
	$_SESSION['nama']='-';
}
require_once('db.php');
if ($_SESSION['nip']=='-')
{
	include('login.php');
}
else
{
	include('template.php');
}
ob_end_flush();
?>