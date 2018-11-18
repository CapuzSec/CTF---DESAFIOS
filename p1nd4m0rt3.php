<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once("comp/permicao.php"); ?>
	<?php require_once("comp/head.php") ?>
</head>

<style>

	#fase-5{
		background: #c6f0ff;
		color:#000;
	}

</style>

<body>

	


	<div class="container vh">	
		<div class="home col-md-12">
				<div class="modal-dialog">
				<div class="loginmodal-container">

					<h1 class="tit">Acerte o Pin</h1><br>

				    <form method="GET">
						<input type="text" name="pin" placeholder="pin" >
						<input type="submit"  class="login loginmodal-submit" value="Logar">
					</form>

				</div>
			</div>
			<!-- <div class="">pin de 3 digitos(numéricos)</div> -->
		</div>
	</div>
	
	<?php 
		$flag = "754";
		$flag1 = isset($_GET['pin']);

		
	    if(isset($_GET['pin']) == null  ){
	    	echo '<h4 class="col-md-12 home">Descubra o pin!<br><br></h4>';
	  	}
	  	else if($_GET['pin'] == "754"){
	    	echo '<script>window.location="venceu.php";</script>';
	    }
	    else{
			echo '<script>window.location="pin-incorreto.php";</script>';
	    }
		    
	?>		

	<?php require_once("comp/footer-fases.php") ?>
</body>
</html>