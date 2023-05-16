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

	
	<form id="cadastro_veiculo" name="cadastro_categoria" class="cadastro" method="post" action="CategoriaCtrl.Class.php">

		<div>
			<legend>Selecione a Categoria</legend>	
			<select class="cadastro_veiculos" name="selecione_categoria" id="selecione_categoria">
				<option value="Carro">carro</option>
				<option value="Caminhão">caminhao</option>
				<option value="Moto">moto</option>
			</select>
		</div>
			

		<div>
			<legend>Cadastre o codigo</legend>	
			<input class="cadastro_veiculos" type="text" placeholder="0000" id="cadastro_veiculos" name="cadastros_veiculos" required autofocus>
		</div>
		
		<div>
			<legend>Cadastre a Marca</legend>	
			<input class="cadastro_veiculos" type="text" placeholder="Ford, volkswagen, Fiat" id="cadastro_veiculos" name="cadastros_veiculos" required autofocus>
		</div>

		<div>
			<legend>Cadastre o Modelo do veículo</legend>	
			<input class="cadastro_veiculos" type="text" placeholder="Gol, Palio, Touro" id="cadastro_veiculos" name="cadastros_veiculos" required autofocus>
		</div>

		<div>
			<legend>Ano do veículo</legend>	
			<input class="cadastro_veiculos" type="text" placeholder="00000000" id="cadastro_veiculos" name="cadastros_veiculos" required autofocus>
		</div>

		<div>
			<legend>Descrição do Veículo</legend>	
			<input class="cadastro_veiculos" type="text" placeholder="Vermelho, Azul" id="cadastro_veiculos" name="cadastros_veiculos" required autofocus>
		</div>
		
		<div>
			<legend>Placa do Veículo</legend>	
			<input class="cadastro_veiculos" type="text" placeholder="000-0000" id="cadastro_veiculos" name="cadastros_veiculos" required autofocus>
		</div>


		<div>
			<input class="botao" type="submit" id="btn_entrar" name="action" value="Consultar"></div>
		</div>
		<div>

			<img src="../img/PGTF.png" class="logo_login">

		</div>

	</form>





	<main class="conteudo">
		<div>
			<center>
				<p> JVF VEÍCULOS</p>
			</center>
			
			<img src="../../img/frota.png" class="carro_home">

		</div>


		<span>Usuário: João<br>data: <br>hora: </span>
	</main>
	
		
</body>
</html>