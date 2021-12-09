<?php

    require_once('../bd/conexao.php');
    function excluirCategoria($idcategorias){
        $sql = "delete from tblcategoria where idcategoria = ".$idcategorias;

  
    
        $conexao = conexaoMysql();

        if($ex = mysqli_query($conexao, $sql)){
            return true;
        }else{
            return false;
        }
    }



?>