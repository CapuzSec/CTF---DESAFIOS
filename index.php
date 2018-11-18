<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php require_once("comp/head.php"); ?>
	<?php require_once("comp/permicao.php"); ?>
</head>

<script>

function myFunction() {
	var img; 
	img  = document.getElementById('img');
	console.log(img);
	img.classList.add("img-hover");
};

function myFunction2() {
	var img; 
	img  = document.getElementById('img');
	img.classList.remove("img-hover");
};

</script> 


<body>
	<!-- <a href="comp/destroi_sessao.php">SAIR</a> -->

	<div class="container vh">	
		<div class="home col-md-12">
			<div class="img"   id="img"></div>
			<h3>Desafio para treinar sua capacidade e seus conhecimentos</h3>
			<h4>As Flags estão nos seguintes formatos</h4><br>
			<h4>flag{Chave}</h4>
			<h4>Usuário e senha</h4>
			<a href="noobinho.php" >
				<h4 onmouseover="myFunction();"  onmouseout="myFunction2();">Acessar o Primeiro Nível</h4>
			</a>
		</div>
	</div>



	<?php require_once("comp/footer.php") ?>
</body>
</html>







