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
	        min-height: 100vh; /* Garante que a altura da página seja pelo menos a altura da janela visível */
	        margin: 0;
	        padding: 0;
	        margin-top: -3%;
	    }
	    .container {
	        max-width: 900px; /* Define a largura máxima do conteúdo */
	        width: 100%;
	        padding: 20px;
	        box-sizing: border-box; /* Inclui padding e border na largura total */
	        max-height: 100vh; /* Limita a altura máxima do contêiner a 80% da altura da janela visível */
	        overflow-y: auto; /* Adiciona uma barra de rolagem vertical caso o conteúdo exceda a altura máxima */
	    }
</style>

</head>



<body>
	<div class="container">
		<a href="http://localhost/Projeto_Chamado_engSoft/Interfaces">Página Inicial</a>

		<form action="../Processos/processar_reclamacao.php" method="post">
			<label for="tema"><h1>Tema da reclamação:</h1></label>
			<textarea name="tema" cols="80" rows="7"></textarea>

			<label for="reclamacao"><h1>Digite sua reclamação:</h1></label>
			<textarea name="reclamacao" cols="80" rows="14"></textarea>

			<label for="areas"><h2>Selecione a área:</h2></label>
			<select id="areas" name="areas" style="padding: 10px; ">
				<option value="diretoria">Diretoria</option>
				<option value="secretaria">Secretaria</option>
				<option value="professores">Professores</option>
				
			</select>
			<input type="submit" name="enviar" value="Enviar" style="margin-left: 50%; padding: 10px;">
		</form>

	
        </form>
	</div>
</form>

</body>
</html>