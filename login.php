<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php require_once("comp/head.php"); ?>
	<link rel="stylesheet" href="css/home.css">
</head>

<body>




	<?php 

	session_start();
	
	if(isset($_POST['email']) && empty($_POST['email']) == false){

		$email = addslashes($_POST['email']);
		$senha = addslashes($_POST['senha']);

		try {

			$db = new PDO($bancoDados,$dbUser, $dbPass);
			$sql = $db->query("SELECT * FROM login WHERE email = '$email' AND senha = '$senha' ");
		
			if($sql -> rowCount() >0){
				$dado = $sql->fetch();
				$_SESSION['id'] = $dado['id'];
				
				header("Location: index.php");
				die();
			}


		}catch (PDOException $erro) {
		 	echo "Falhou".$erro->getMessage();
		}
	}

?>



	<header> 
	
		
		<div class="container vh header"> 
			<svg viewBox="0 0 960 300">
				<symbol id="s-text">
					<text text-anchor="middle" x="50%" y="40%"> Ctf - Rs   </text>
				</symbol>

				<g class = "g-ants">
					<use xlink:href="#s-text" class="text-copy"></use>
					<use xlink:href="#s-text" class="text-copy"></use>
					<use xlink:href="#s-text" class="text-copy"></use>
					<use xlink:href="#s-text" class="text-copy"></use>
					<use xlink:href="#s-text" class="text-copy"></use>
				</g>
			</svg>
		</div>

	</header>





	<div class="login-inicial" id="login-modal" style="display: block;">
		<div class="modal-dialog">
			<div class="loginmodal-container">
				<h1 style="color:#000">Faça seu login</h1><br>
					<form method="POST">
						<input  name="email" type="email" placeholder="E-mail" required>
						<input  name="senha" type="password" placeholder="Senha" required>
						<input type="submit" name="login" class="login loginmodal-submit" value="Login">
					</form>
				<div class="login-help">
					<a href="cadastro.php"  ><b style="    font-size: 16px;color: #000 !important;">Registrar-se</b></a> 
				</div>
			</div>
		</div>
	</div>




</body>
</html>

		

		
		
		
		
		