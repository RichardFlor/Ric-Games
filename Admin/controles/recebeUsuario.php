<?php

require_once('../configuracoes/config.php');

require_once(SRC .'bd/inserirUsuario.php');
require_once(SRC.'bd/updateUsuario.php');




   $nome = (string) null;
   $senha = (string) null;
   $login = (string) null;

   

   if(isset($_GET['id'])){ 
        $id = (int) $_GET['id'];
   }
  else{
      $id = (int) 0; 
  } 

   
   if($_SERVER['REQUEST_METHOD'] == 'POST')
   {
        $login = $_POST['login'];
       $nome = $_POST['nome'];
       $senha = md5($_POST['senha']);
       
      
       
      
   if($nome == null || $login == null ||$senha == null)
   {
       echo ("<script> 
           alert('".vazia."');
           window.history.back();
       </script>");  
   }
      
       else{
         
           $usuarios = array(
                "id" =>$id,
                "login" => $login,
                "nome" => $nome,
                "senha" => $senha
                
                
                    
               
           );
           
       
           if(strtoupper($_GET['modo']) == 'SALVAR'){
               
          
           //chama a função inserir do arquivo inserirCliente.php, e encaminha o array com os dados do cliente.
          if (inserir($usuarios)) //tratamento para ver se os dados chegaram no banco
               echo ("
                   <script>
                       alert('". INSERIR ."');
                       window.location.href = '../usuarios.php';
                   </script>
                   " );
           else
               echo ("
                   <script>
                       alert('". ERRO ."');
                        window.history.back();
                   </script>
               ");
           }elseif(strtoupper($_GET['modo']) == 'ATUALIZAR')
           { 
               
               
               if(edita($usuarios))
                    echo ("
                       <script>
                           alert('atualizado com sucesso');
                           window.location.href = '../usuarios.php';
                           </script>
                   " );
                   else
                       echo ("
                           <script>
                           alert('". ERRO ."');
                           window.history.back();
                           </script>
                       ");
               
           }
       }
   
       
   }

?>