<?php



require_once('../configuracoes/config.php');
require_once(SRC .'bd/excluirProduto.php');




$idprodutos = $_GET['id'];

  //O nome da foto foi enviado pela index, no link do excluir 
  $nomeFoto = $_GET['foto'];


if(excluir($idprodutos)){
      //Apaga a foto que esta na pasta dos arquivos do upload 
    unlink(SRC . NOME_DIRETORIO_FILE.$nomeFoto);
   
   echo(BD_MSG_EXCLUIR_PRODUTO);
}else{
    echo ("
    ERRO: Não foi possivel ;
        ");
}

?>