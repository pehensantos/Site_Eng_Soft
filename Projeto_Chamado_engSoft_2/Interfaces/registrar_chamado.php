<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de Usuário</title>

	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 500px;
			margin: 0;
			padding: 0;
		}
		.container {
			max-width: 600px; /* Define a largura máxima do conteúdo */
			width: 100%;
			padding: 20px;
			box-sizing: border-box; /* Inclui padding e border na largura total */
		}
	</style>

</head>



<body>
	<div class="container">
		<a href="http://localhost/Projeto_Chamado_engSoft/Interfaces">Página Inicial</a>
		<h1>Digite sua reclamação:</h1>
		<form action="../Processos/processar_reclamacao.php" method="post">
			<textarea name="reclamacao" cols="80" rows="14"></textarea>
			<label for="cars"><h2>Selecione a área:</h2></label>
			<select id="cars" name="cars" style="padding: 10px;">
				<option value="Diretoria">Diretoria</option>
				<option value="saab">bbbb</option>
				<option value="fiat">cccc</option>
				<option value="audi">dddd</option>
			</select>
			<input type="submit" name="enviar" value="Enviar" style="margin-left: 98%; padding: 10px;">
		</form>

	
        </form>
	</div>
</form>

</body>
</html>