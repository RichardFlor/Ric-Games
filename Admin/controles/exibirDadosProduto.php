<?php
 
require_once(SRC . 'bd/listarProduto.php');
    function exibir(){
        
        $dadosListar =  listar();
  
        return $dadosListar;
    }

?>