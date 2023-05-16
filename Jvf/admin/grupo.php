<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../css/portal.css">
		<title>JVF VEÍCULOS</title>
	</head>
<body>
	<div>
        <?php include 'menu_portal.html';?>
    </div>


	
	<form id="cadastro_categoria" name="cadastro_categoria" class="cadastro" method="post" action="CategoriaCtrl.Class.php">

		<div>
			<legend>Cadastre o Grupo</legend>	
			<input class="cadastro_categoria" type="text" placeholder="grupo A, grupo B, grupo C " id="categoria" name="categoria" required autofocus>
		</div>
			
		<div>
			<input class="botao" type="submit" id="btn_entrar" name="action" value="inserir"></div>
		</div>
	</form>





	<main class="conteudo">
		<div>
			<center>
				<p> JVF VEÍCULOS</p>
			</center>
			
			<img src="../img/frota.png" class="carro_home">

		</div>


		<span>Usuário: João<br>data: <br>hora: </span>
	</main>
	
		
</body>
</html>