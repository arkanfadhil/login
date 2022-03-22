<?php
session_start();
        require_once('db.php');
        $qcari=mysqli_query($DB,'SELECT * FROM user WHERE nip="'.$_POST['nip'].'" AND 
            password="'.md5($_POST['pass']).'"');
        if (mysqli_num_rows($qcari)>0)
        {
            $dtadmin=mysqli_fetch_assoc($qcari);
            $_SESSION['nip']=$dtadmin['nip'];
            $_SESSION['nama']=$dtadmin['nama'];	
            $_SESSION['iduser']=$dtadmin['iduser'];    
            die(header('Location: index.php'));
             
        }
        else
        {
            $error='<div class="alert alert-danger">Data tidak ada ....</div>';
            include('login.php');
        }
?>