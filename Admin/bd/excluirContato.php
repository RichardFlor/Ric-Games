<?php

    require_once('../bd/conexao.php');
    function excluir($idcontatos){
        $sql = "delete from tblcontato where idcontato = ".$idcontatos;

  
    
        $conexao = conexaoMysql();

        if($ex = mysqli_query($conexao, $sql)){
            return true;
        }else{
            return false;
        }
    }



?>