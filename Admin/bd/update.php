<?php
    require_once('../bd/conexao.php');

function edita($arrayCategoria)
{
    $sql = "update tblcategoria set 
            nome = '".$arrayCategoria['nome']."'
    
        where idcategoria= ".$arrayCategoria['id'];
        $conexao = conexaoMysql();

        if(mysqli_query($conexao,$sql)){
            return true;
        }else{
            return false;
        }
    

}


?>