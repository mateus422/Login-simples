<?php
    require 'conexao.php';
    require 'database.php';
    $link = conectar();
    $table = "usuarios";
   

    $nome = $_POST['Nome'];
    $email = $_POST['Email'];
    $profissao = $_POST['Profissao'];

    $dados = array(
        'nome' => "$nome",
        'email' => "$email",
        'profissao' => "$profissao"
        );

   
        $inserir = gravar($table, $dados);
    fecharConexao($link);
?>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Mateus de Araujo">
        <meta name="description" content="Tela de confirmação de cadastro">
        <link rel="stylesheet" href="../CSS/usuarios.css">
        
        <title>Login</title>
        </head>
    
    <body>
        <div class="container">
            <nav>
                <ul class="menu">
                    <li><a href="../cadastro.html">Cadastrar aqui!</a></li>
                    <li><a href="consulta.php">Consultas</a></li>
                    </ul>
                </nav>
            <section class="confirmacao">
                <h1 class="titulo">Confirmação de cadastro</h1>
                <hr>
                <br>
                <p>Seu cadastro foi realizado com sucesso!</p>
                </section>
            </div>
        </body>
    </html>
    