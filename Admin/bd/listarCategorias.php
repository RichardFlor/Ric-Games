<?php

require_once(SRC.'bd/conexao.php');

function listarCategoria(){

    $sql = "select * from  tblcategoria";

    $conexao = conexaoMysql();

    $select = mysqli_query($conexao, $sql);

    return $select;
}


function buscaCategoria($idcategoria){
   
    $sql = "select * from tblcategoria
    where idcategoria = ".$idcategoria;

    $conexao = conexaoMysql();

    $select = mysqli_query($conexao,$sql);

    return $select;
}

function buscaIdCategorias($id){

    $sql = "select tblproduto.*, tblcategoria.categoria from tblproduto
	inner join tblcategoria
    on tblcategoria.idcategoria = tblproduto.idcategoria
    where tblcategoria.idcategoria like '%".$id."%'";

    $conexao = conexaoMysql();

    $select = mysqli_query($conexao,$sql);

    return $select;
}

        

?>