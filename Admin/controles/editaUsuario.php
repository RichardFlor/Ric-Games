<?php

 require_once('../configuracoes/config.php');

require_once(SRC .'bd/listarUsuario.php');
    
    
    $idusuario = $_GET['id'];
  
    $dadosUsuarios = busca($idusuario);
    
    if($exibirUsuarios=mysqli_fetch_assoc($dadosUsuarios)){
      
        session_start();
        
      
        $_SESSION['usuario'] = $exibirUsuarios;
        
       
        header('location:../usuarios.php');
    }else{
        echo ("
                <script>
                  alert('ERRO');
                 window.history.back();
                 </script>
            ");
    }

?>