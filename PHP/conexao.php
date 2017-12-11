<?php

    require "config.php";
    
    function conectar(){
        $conexao = @mysqli_connect(hostname,user,password,database) or die(mysqli_error());
        mysqli_set_charset($conexao,charset) or die(mysqli_error());
        return $conexao;
    }

    function fecharConexao($conexao){
        mysqli_close($conexao) or die(mysqli_error());
    }
?>