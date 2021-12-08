<?php

require_once(SRC.'bd/conexao.php');

function listar(){

    $sql = "select * from  tblusuario";

    $conexao = conexaoMysql();

    $select = mysqli_query($conexao, $sql);

    return $select;
}


function busca($idusuario){
   
    $sql = "select * from tblusuario
    where idusuario = ".$idusuario;

    $conexao = conexaoMysql();

    $select = mysqli_query($conexao,$sql);

    return $select;
}

        

?>