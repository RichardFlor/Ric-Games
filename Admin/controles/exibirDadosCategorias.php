<?php

    
require_once(SRC . 'bd/listarCategorias.php');
    function exibirCategoria(){
        
        $dadosListar =  listarCategoria();
  
        return $dadosListar;
    }

?>