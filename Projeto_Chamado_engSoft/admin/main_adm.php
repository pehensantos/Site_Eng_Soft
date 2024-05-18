<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Usuário</title>

    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px; /* Define a largura máxima do conteúdo */
            width: 100%;
            padding: 20px;
            box-sizing: border-box; /* Inclui padding e border na largura total */
        }
        .center {
            text-align: center;
        }
        .loggout {
            position: fixed;
            top: 10px;
            right: 25%;
        }
    </style>

</head>
<body>
    <h1>PAINEL DE ADMINISTRADOR</h1><br>

    <div class="container">
        <?php
            session_start();
            $string = '';
            $str = 'ggggg';

            // Verificar se o usuário está logado
            if (!isset($_SESSION['loginAdm']) || $_SESSION['loginAdm'] !== true) {
                // Redirecionar para a página de login se não estiver logado
                header('Location: index.php');
                exit();
            }

            if(isset($_GET['loggout'])){
                Painel::loggoutAdm();
            }

            
        ?>

        <div class="center">
            <div class="loggout">
                <a href="<?php echo 'http://localhost/Projeto_Chamado_engSoft/admin/'?>?loggout">Sair<i class="fa-solid fa-house"></i></a>
            </div><!--loggout-->
            <div class="clear"></div>
            <form action="" method="post">
            	<input type="submit" name="arquivar_chamado" value="Arquivar chamado" style="width: 200px; height: 200px;">
                <input type="submit" name="retornar" value="Usuários logados no sistema" style="width: 200px; height: 200px;">
                <input type="submit" name="relatorio" value="Gerar relatório" style="width: 200px; height: 200px;">
                <input type="submit" name="direcionar" value="Direcionar chamado" style="width: 200px; height: 200px;">
            </form>
        </div>
    </div>

    <?php
        if(isset($_POST['retornar'])) {
            include '../Classes/classes.php';
            $u = $Sistema->listaUsuarios();
            $string = implode(', ', $u);
            echo '<label for="logados"><h3>Usuários logados no sistema:</h3></label>
            <input type="text" id="logados" value="' . $string . '" style="height: 100px;">';
        }

        if(isset($_POST['relatorio'])) {
	    echo '<label for="logado"><h3>Usuários:</h3></label>
	          <input type="text" id="logado" value="' . $str . '" style="height: 100px;">';
}

    ?>

    

</body>
</html>
