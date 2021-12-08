<?php



require_once('../configuracoes/config.php');
require_once(SRC .'bd/excluirContato.php');

$idcontatos = $_GET['id'];


if(excluir($idcontatos)){
   echo(BD_MSG_EXCLUIR_CONTATO);
}else{
    echo ("
    ERRO: Não foi possivel;
        ");
}

?>