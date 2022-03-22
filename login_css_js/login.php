<!-- LOGIN -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Halaman Login</title>
    <link href="css/simplex.bootstrap.css" rel="stylesheet">
    <style>
	body {
		background:url('bglogin.jpg');
		background-position:center;
		background-size:cover;
		background-repeat:no-repeat;
	}
	.loginbox{
		width:300px;
		margin:auto;
		margin-top:10%;
		background:#fff;
		padding:20px;
	}
	h1 {
		font-size:20px;
		font-weight:bold;
	}
	</style>
</head>
<body>
  <div class="loginbox">
	
    <h1>LOGIN</h1> 
	<?php
		 if (isset($error)) 
		 {  
			echo '<div class="alert alert-danger">'.$error.'</div>'; 
		 }
	  ?>	
    <form name="formlogin" action="loginpr.php" method="post">
            <fieldset><label>NIP :</label>
                <input class="form-control" type="text" name="nip" required="required"  data-validate="required,max(19)"/>
            </fieldset>
            <fieldset><label>Password :</label>
                <input class="form-control" type="password" name="pass" required="required"  data-validate="required,min(8)"/>
            </fieldset>  
            <p></p> 
            <p class="text-center"><button class="btn btn-md btn-success">Login</button></p>                
        </form>
      
  
</body>
</html>
<script src="js/jquery-3.3.1.min.js"></script>	
<script src="js/bootstrap.js"></script>
<script src="js/id.verify.notify.js"></script>
<script src="fancybox/jquery.fancybox.min.js"></script>