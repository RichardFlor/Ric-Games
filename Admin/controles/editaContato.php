<?php

 require_once('../configuracoes/config.php');

require_once(SRC .'bd/listarContato.php');
    
    
    $idcontato = $_GET['id'];
  
    $dadosContatos = busca($idcontato);
    
    if($exibirContatos=mysqli_fetch_assoc($dadosContatos)){
      
        session_start();
        
      
        $_SESSION['contato'] = $exibirContatos;
        
        header('location:../contatos.php');
    }else{
        echo ("
                <script>
                  alert('ERRO');
                 window.history.back();
                 </script>
            ");
    }

?>