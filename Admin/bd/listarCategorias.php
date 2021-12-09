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

        

?>