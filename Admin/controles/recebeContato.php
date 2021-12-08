<?php

require_once('../configuracoes/config.php');

require_once(SRC .'bd/inserirContato.php');
require_once(SRC.'bd/updateContato.php');




   $nome = (string) null;
   $celular = (string) null;
   $email = (string) null;

   

   if(isset($_GET['id'])){ 
        $id = (int) $_GET['id'];
   }
  else{
      $id = (int) 0; 
  } 

   
   if($_SERVER['REQUEST_METHOD'] == 'POST')
   {
       
       $nome = $_POST['nome'];
       $celular = $_POST['celular'];
       $email = $_POST['email'];
       
      
   if($nome == null ||$email == null || $celular == null)
   {
       echo ("<script> 
           alert('".vazia."');
           window.history.back();
       </script>");  
   }
      
//    elseif(strlen($nome, $celular, $email)>100)
//        {
//              echo ("<script> 
//            alert('maximo de caracteres');
//            window.history.back(); 
//        </script>"); 
//        }
       else{
         
           $contatos = array(
                "id" =>$id,
                "nome" => $nome,
                "celular" => $celular,
                "email" => $email
                
                    
               
           );
           
       
           if(strtoupper($_GET['modo']) == 'ENVIAR'){
               
          
           //chama a função inserir do arquivo inserirCliente.php, e encaminha o array com os dados do cliente.
          if (inserir($contatos)) //tratamento para ver se os dados chegaram no banco
               echo ("
                   <script>
                      
                       window.location.href = '../../index.php';
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
               
               
               if(edita($contatos))
                    echo ("
                       <script>
                           alert('atualizado com sucesso');
                           window.location.href = '../contatos.php';
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
           elseif(strtoupper($_GET['modo']) == 'SALVAR')
           { 
               
               
               if(inserir($contatos))
                    echo ("
                       <script>
                           alert('atualizado com sucesso');
                           window.location.href = '../contatos.php';
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