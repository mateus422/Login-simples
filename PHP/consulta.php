<?php
    require 'conexao.php';
    require 'database.php';
    
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
            <section class="secao">
                <h1 class="titulo">Consultas</h1>
                <hr>
                <br>
                <form>
                    <input name="Filtro"  type="text" method="get" action="">
                    <input class="botao" type="submit">    
                    </form>
               
                <?php 
                $filtro = $_GET['Filtro'];
                
                if(empty($filtro)){
                    $filtro = null;
                }
                
                $table = "usuarios";
                echo "<br><br>".contarRegistros($table)." registros encontrados.<br><br><br>";
                
                if(!($filtro === null)){
                   echo "<br><br>A palavra-chave é: "."<strong>".$filtro."</strong><br><br><br>";
                }
                
                if(empty($filtro)){
                    $registros = lerRegistros($table);
                   
                    foreach($registros as $key){
                    echo "Nome ".$key['nome'].'<br>';
                    echo "Email ".$key['email'].'<br>';
                    echo "Profissão ".$key['profissao'].'<br><hr>';
                }
                        
                }else{
                    $registros = lerRegistros($table," WHERE profissao = '$filtro'");
                    foreach($registros as $key){
                    echo "Nome ".$key['nome'].'<br>';
                    echo "Email ".$key['email'].'<br>';
                    echo "Profissão ".$key['profissao'].'<br><hr>';
                    }
                }
                    ?>
                </section>
            </div>
        </body>
    </html>