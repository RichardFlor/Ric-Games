<?php
    require_once('../bd/conexao.php');

function editaCategoria($arrayCategoria)
{
    $sql = "update tblcategoria set 
            categoria = '".$arrayCategoria['categoria']."'
    
        where idcategoria= ".$arrayCategoria['id'];
        $conexao = conexaoMysql();

        if(mysqli_query($conexao,$sql)){
            return true;
        }else{
            return false;
        }
    

}


?>