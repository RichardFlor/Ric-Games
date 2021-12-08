<?php

    require_once('../bd/conexao.php');
    function excluir($idusuarios){
        $sql = "delete from tblusuario where idusuario= ".$idusuarios;

  
    
        $conexao = conexaoMysql();

        if($ex = mysqli_query($conexao, $sql)){
            return true;
        }else{
            return false;
        }
    }



?>