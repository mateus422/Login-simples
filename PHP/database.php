<?php
    function execute($query){
        $link = conectar();
        
        $resultado = @mysqli_query($link, $query) or die(mysqli_error($link));
        
        fecharConexao($link);
        return $resultado;
    }

    function gravar($table, array $dados){
        $colunas = implode(', ', array_keys($dados));
        $valores = "'".implode("', '", $dados)."'";
        
        $query = "INSERT INTO {$table} ({$colunas}) VALUES ({$valores})";
        return execute($query);
    }

    
    function contarRegistros($table, $paramentros = null, $colunas = '*'){
        $paramentros = ($paramentros) ? "{$paramentros}" : null;
        
        $query = "SELECT {$colunas} FROM {$table}{$paramentros}";
        $resultado = execute($query);
        
        if(!mysqli_num_rows($resultado)){
            return false;
        }else{
                $numero = mysqli_num_rows($resultado);
        }
        return $numero;
    }

    
    function lerRegistros($table, $paramentros = null, $colunas = '*'){
        $paramentros = ($paramentros) ? "{$paramentros}" : null;
        
        $query = "SELECT {$colunas} FROM {$table}{$paramentros}";
        $resultado = execute($query);
        
        if(!mysqli_num_rows($resultado)){
            return false;
        }else{
            while($res = mysqli_fetch_assoc($resultado)){
                $dados[] = $res;
            }
        }
        return $dados;
    }


?>