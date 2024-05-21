<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Usuário</title>

    <style>
        .app-header {
            background-color: #333; /* Cor de fundo cinza escuro */
            color: #fff; /* Cor do texto branco */
            padding: 35px; /* Espaçamento interno */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2; /* Cor de fundo semelhante ao painel de login */
            font-family: Arial, sans-serif; /* Fonte padrão */
        }
        .container {
            margin-top: 10%;
            max-width: 500px; /* Define a largura máxima do conteúdo */
            width: 100%;
            padding: 20px;
            justify-content: center;
            align-items: center;
            box-sizing: border-box; /* Inclui padding e border na largura total */
            margin: 0 auto; /* Centraliza horizontalmente */
            background-color: #fff; /* Cor de fundo do contêiner */
            border-radius: 8px; /* Bordas arredondadas */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra */
        }
        form {
            text-align: center; /* Centraliza o conteúdo do formulário */
        }
        input[type="text"] {
            width: calc(100% - 20px); /* Faz com que os inputs ocupem toda a largura disponível, subtraindo o espaçamento */
            box-sizing: border-box; /* Inclui padding e border na largura total */
            margin-bottom: 10px; /* Espaçamento entre os inputs */
            padding: 10px; /* Adiciona um espaçamento interno aos inputs */
            border: 1px solid #ccc; /* Adiciona uma borda cinza */
            border-radius: 20px; /* Bordas arredondadas */
        }
    input[type="submit"] {
    background-color: #eee;
    border: none;
    padding: 0.8rem; /* Redução do padding */
    font-size: 0.9rem; /* Redução do tamanho da fonte */
    width: calc(100% - 180px); /* Redução da largura */
    box-sizing: border-box;
    margin-bottom: 8px; /* Redução do espaçamento inferior */
    border-radius: 0.8rem; /* Redução do raio da borda */
    color: lightcoral;
    box-shadow: 0 0.3rem #dfd9d9; /* Redução da sombra */
    cursor: pointer;
    transition: background-color 0.3s;
}
input[type="submit"]:active {
    color: white;
    box-shadow: 0 0.1rem #dfd9d9; /* Redução da sombra ao clicar */
    transform: translateY(0.1rem); /* Redução do deslocamento ao clicar */
}

input[type="submit"]:hover:not(:disabled) {
    background: lightcoral;
    color: white;
    text-shadow: 0 0.05rem #bcb4b4; /* Redução do deslocamento da sombra do texto */
}

input[type="submit"]:disabled {
    cursor: auto;
    color: grey;
}
.erro-box {
            width: 100%;
            padding: 8px;
            text-align: center;
            background-color: #f75353; /* Cor de fundo da caixa de erro */
            color: #fff; /* Cor do texto da caixa de erro */
            border-radius: 4px; /* Bordas arredondadas */
            margin-top: 10px; /* Alterado para margin-top para afastar a mensagem do botão */
        }
        .logo {
            position: absolute;
            bottom: 10px;
            right: 10px;
            width: 200px; /* Ajuste o tamanho conforme necessário */
        }
       
    </style>

</head>

<body>
    <?php
        include '../Conexao/MySql.php';
        if (isset($_POST['enviar'])) {
            try {
                $nome = $_POST['nome'];
                $ra = $_POST['ra'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $sql = MySsql::conectar()->prepare("INSERT INTO tb_usuarios (nome, ra, email, password) VALUES (?, ?, ?, ?)");
                $sql->execute(array($nome,$ra,$email,$password));

                header('location: '.'http://localhost/Projeto_Chamado_engSoft/Processos/registro_bem_sucedido.html'); //Envia para uma url
                die();
            } catch (Exception $e) {
                echo '<div class="erro-box">Conexão Falhou!</div>';
            }
        }       
        
    ?>
    <div class="a">
        <a href="http://localhost/Projeto_Chamado_engSoft/Interfaces/" style="margin-left: 20%; position: absolute;"><p><h3>Voltar</h3></p></a>
    </div>
    <div class="container">

        <form method="post">
            Nome: <input type="text" name="nome"><br>
            RA: <input type="text" name="ra"><br>
            Email: <input type="text" name="email"><br>
            Senha: <input type="text" name="password"><br>
            <input type="submit" name="enviar" value="Enviar">
        </form>    
    </div>
    <img src="data:image/png;base64,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" alt="Logo Fatec" class="logo">

</body>
</html>
