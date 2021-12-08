<?php
    require_once('../bd/conexao.php');

function edita($arrayProduto)
{
    $sql = "update tblproduto set 
	nome = '".$arrayProduto['nome']."',
	 valor = '".$arrayProduto['valor']."',
 	descricao = '".$arrayProduto['descricao']."',
 	foto = '".$arrayProduto['foto']."',
 	destaque = '".$arrayProduto['destaque']."',	
    desconto = '".$arrayProduto['desconto']."'   
           
     where idproduto = ".$arrayProduto['id'];

        $conexao = conexaoMysql();

        if(mysqli_query($conexao,$sql)){
            return true;
        }else{
            return false;
        }
    

}


?>