<?php

require_once(SRC.'bd/conexao.php');

function listar(){

     $sql = "select * from  tblproduto";
 


    $conexao = conexaoMysql();

    $select = mysqli_query($conexao, $sql);

    return $select;
}


function busca($idproduto){
   
    $sql = "select * from tblproduto
    where idproduto = ".$idproduto;

    $conexao = conexaoMysql();

    $select = mysqli_query($conexao,$sql);

    return $select;
}

function buscarNome($nome){
    //script
    $sql =" select tblproduto.*, tblcategoria.categoria from tblproduto
	inner join tblcategoria
    on tblcategoria.idcategoria = tblProduto.idcategoria
    where tblproduto.valor like '%".$nome."%'"; 


$conexao = conexaoMysql();


$select =  mysqli_query($conexao, $sql);

return $select;
}



        

?>