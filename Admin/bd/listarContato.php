<?php

require_once(SRC.'bd/conexao.php');

function listar(){

    $sql = "select * from  tblcontato";

    $conexao = conexaoMysql();

    $select = mysqli_query($conexao, $sql);

    return $select;
}


function busca($idcontato){
   
    $sql = "select * from tblcontato
    where idcontato = ".$idcontato;

    $conexao = conexaoMysql();

    $select = mysqli_query($conexao,$sql);

    return $select;
}

        
 
?>