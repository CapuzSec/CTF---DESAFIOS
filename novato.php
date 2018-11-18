<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once("comp/permicao.php"); ?>
	<?php require_once("comp/head.php") ?>
</head>

<style>

	#fase-3{
		background: #c6f0ff;
		color:#000;
	}

</style>

<body>

	

	
<div class="container vh">	
		<div class="home col-md-12">
	  		<div class="modal-dialog">
				<div class="loginmodal-container">
						<h1 class="tit">Descubra a flag</h1><br>
				    <form method="POST">
						<input type="password" name="flag" placeholder="Flag" required="true">

						<input type="submit" name="Logar" class="login loginmodal-submit" value="Enviar">
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<?php 
		$flag = "Flag{Observ4d0r}";
		$flag1 = isset($_POST['flag']);

		
	    if(isset($_POST['flag']) == null){
	    	echo '<h4 class="col-md-12 home">Descubra a flag<br><br></h4>';
	  	}
	  	else if($_POST['flag'] == "Flag{Observ4d0r}"){
	    	echo '<script>window.location="W3bH4cking.php";</script>';
	    }
	    else{
	    	//	header("Location: novato.php");
	    }
		    
	?>			
<a href="novato_quase.php" style="color: #000">...</a>

	<?php require_once("comp/footer-fases.php") ?>
</body>
</html>