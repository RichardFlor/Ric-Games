<?php

 require_once('../configuracoes/config.php');

require_once(SRC .'bd/listarCategorias.php');
    
    
    $idcategoria = $_GET['id'];
  
    $dadosCategorias = buscaCategoria($idcategoria);
    
    if($exibirCategorias=mysqli_fetch_assoc($dadosCategorias)){
      
        session_start();
        
      
        $_SESSION['categoria'] = $exibirCategorias;
        
       
        header('location:../categorias.php');
    }else{
        echo ("
                <script>
                  alert('ERRO');
                 window.history.back();
                 </script>
            ");
    }

?>