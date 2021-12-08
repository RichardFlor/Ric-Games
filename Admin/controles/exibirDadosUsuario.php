<?php

require_once(SRC . 'bd/listarUsuario.php');
    function exibir(){
        
        $dadosListar =  listar();
  
        return $dadosListar;
    }

?>