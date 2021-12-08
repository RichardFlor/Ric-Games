<?php

 require_once('../configuracoes/config.php');

require_once(SRC .'bd/listarProduto.php');
    
    
    $idproduto = $_GET['id'];
  
    $dadosProdutos = busca($idproduto);
    
    if($exibirProdutos=mysqli_fetch_assoc($dadosProdutos)){
      
        session_start();
        
      
        $_SESSION['produto'] = $exibirProdutos;
        
        
        header('location:../produtos.php');
    }else{
        echo ("
                <script>
                  alert('ERRO');
                 window.history.back();
                 </script>
            ");
    }

?>