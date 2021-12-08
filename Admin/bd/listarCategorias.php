<?php

require_once(SRC.'bd/conexao.php');

function listar(){

    $sql = "select * from  tblcategoria";

    $conexao = conexaoMysql();

    $select = mysqli_query($conexao, $sql);

    return $select;
}


function busca($idcategoria){
   
    $sql = "select * from tblcategoria
    where idcategoria = ".$idcategoria;

    $conexao = conexaoMysql();

    $select = mysqli_query($conexao,$sql);

    return $select;
}

        

?>