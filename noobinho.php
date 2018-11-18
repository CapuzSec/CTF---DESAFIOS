<!--<!DOCTYPE html   login -> noobinho   -->
<html lang="pt">
<head>
	<?php require_once("comp/permicao.php"); ?>
	<meta charset="UTF-8">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/custom.css">
	<title>CTF Básico - GN0M1T0</title>


</head>

<style>
	
	.classe{
		color:#000;
	}
	.classe:hover{
		color:#000;
	}

	#fase-1{
		background: #c6f0ff;
		color:#000;
	}

</style>

<body>

	
	<a class="classe" href="C0NS3GUE_0LH4R">Senha</a>
	<div class="container vh">	
		<div class=" col-md-12">
	  		<div class="modal-dialog">
				<div class="loginmodal-container">
						<h1 class="tit">Descubra usuário e senha</h1><br>
				    <form method="POST">
						<input type="text" name="login" placeholder="Username" required="true">
						<input type="password" name="senha" placeholder="Password" required="true">

						<input type="submit" name="Logar" class="login loginmodal-submit" value="Logar">
					</form>
				</div>
			</div>
		</div>
	</div>


	
	<?php 
		$login = "noobinho";
		$senha = "C0NS3GUE_0LH4R";
		$login1 = isset($_POST['login']);
		$senha1 = isset($_POST['senha']);

		
	    if(isset($_POST['login']) == "" || isset($_POST['senha']) == null){
	    	echo '<h4 class="col-md-12 home">Nem tudo é o que parece. <br><br></h4>';
	  	}
	  	else if($_POST['login'] == "noobinho" and $_POST['senha'] == "C0NS3GUE_0LH4R"){
	    	echo '<script>window.location="noob.php";</script>';
	    }
	    else{
	    	//header("Location: noobinho.php");
	    }
		    
	?>			
	
	
	<?php require_once("comp/footer-fases.php") ?>    
</body>
</html>


			