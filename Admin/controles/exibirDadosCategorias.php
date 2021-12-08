<?php

    
require_once(SRC . 'bd/listarCategorias.php');
    function exibir(){
        
        $dadosListar =  listar();
  
        return $dadosListar;
    }

?>