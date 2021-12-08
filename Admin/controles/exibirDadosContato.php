<?php
    
require_once(SRC . 'bd/listarContato.php');
    function exibir(){
        
        $dadosListar =  listar();
  
        return $dadosListar;
    }

?>