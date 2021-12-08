<?php



require_once('../configuracoes/config.php');
require_once(SRC .'bd/excluirUsuario.php');

$idusuarios = $_GET['id'];


if(excluir($idusuarios)){
   echo(BD_MSG_EXCLUIR_USUARIO);
}else{
    echo ("
    ERRO: Não foi possivel;
        ");
}

?>