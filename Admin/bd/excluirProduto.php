<?php

    require_once('../bd/conexao.php');
    function excluir($idprodutos){
        $sql = "delete from tblproduto where idproduto=".$idprodutos;

  
    
        $conexao = conexaoMysql();

        if($ex = mysqli_query($conexao, $sql)){
            return true;
        }else{
            return false;
        }
    }



?>