<?php



require_once('../configuracoes/config.php');
require_once(SRC .'bd/excluirCategorias.php');

$idcategorias = $_GET['id'];


if(excluir($idcategorias)){
   echo(BD_MSG_EXCLUIR);
}else{
    echo ("
    ERRO: Não foi possivel;
        ");
}

?>