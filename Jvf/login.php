<!DOCTYPE html>

<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portal</title>

	<!-- ARQUIVO DE ESTILOS DO PORTAL -->
	<link rel="stylesheet" type="text/css" href="css/login.css">
	
</head>


<body>

		<form id="form_login" name="form_login" class="form_login" method="post" action="admin/portal.php">

			<div><h1>JVF VEÍCULOS</h1></div>

				<div class="agrupamento_login">

					<div>

						<div><label>Entre com seu login</label></div>	

						<div><input type="text" id="nome_login" name="nome_login" required autofocus></div>

						<div><label>Ente com sua senha</label></div>

						<div><input type="password" id="senha_login" name="senha_login" required></div>

						<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Entrar"></div>

					</div>

					<div>

						<img src="img/PGTF.png" class="logo_login">

					</div>


				</div>

		</form>


</body>

</html>