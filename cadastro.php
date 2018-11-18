<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php require_once("comp/head.php"); ?>
	<link rel="stylesheet" href="css/home.css">
</head>
<body>
<?php 

	if(isset($_POST["nomeLogin"]) && empty($_POST["nomeLogin"])  || isset($_POST["senhaLogin"]) && empty($_POST["senhaLogin"]) || isset($_POST["emailLogin"]) && empty($_POST["emailLogin"]) == false){


		$email = addslashes($_POST['emailLogin']);
		$senhaLogin = addslashes($_POST['senhaLogin']);

		$sql = "INSERT INTO login SET  email = '$email', senha = '$senhaLogin' ";
		
		$pdo->query($sql);

		header("Location: comp/destroi_sessao.php");					
		header("Location: login.php");					
	}
?>





	<header> 
	
		
		<div class="container header"> 
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


	<p  class="col-md-6 col-md-offset-3" style="margin-top: 8%;text-align: center">
		Bem-vindo ao Ctf - RS, o site sempre estará crescendo, muito obrigado por sua ajuda, se puder ajudar a divulgar compartilhando esse link seria muito incrível de sua parte, obrigado.
	</p>


	<div class="login-inicial" id="login-modal" style="display: block;">
		
		<div class="modal-dialog">
			<div class="loginmodal-container">
				<h1 style="color:#000">Cadastre-se</h1><br>
					<form method="POST">
						<input  name="emailLogin" type="email" placeholder="E-mail" required>
						<input  name="senhaLogin" type="password" placeholder="Senha" required>
						<input type="submit" name="login" class="login loginmodal-submit" value="Cadastrar">
					</form>
				<div class="col-md-12 center">
					<a href="login.php" style="color: #000;"><b>Voltar</b></a> <!-- - <a href="#">Recuperar Senha</a> -->
				</div>
			</div>
		</div>
	</div>





	<?php require_once("comp/footer.php") ?>
</body>
</html>
