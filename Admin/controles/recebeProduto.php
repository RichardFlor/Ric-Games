<?php

require_once('../configuracoes/config.php');

require_once(SRC .'bd/inserirProduto.php');
require_once(SRC.'bd/updateProduto.php');

//Import do arquivo que faz o upload de imagens para o servidor 
require_once(SRC.'configuracoes/upload.php');




   $nome = (string) null;
   $valor = (string) null;
   $descricao = (int) 0;
   $destaque = (string) null;
   $desconto = (string) null; 

   $foto = (string) null;
   

   

   if(isset($_GET['id'])){ 
        $id = (int) $_GET['id'];
   }
  else{
      $id = (int) 0; 
  } 

   
   if($_SERVER['REQUEST_METHOD'] == 'POST')
   {
       
       $nome = $_POST['nome'];
       $valor = $_POST['valor'];
       $descricao = $_POST['descricao'];
       $destaque = $_POST['destaque'];
       $desconto = $_POST['desconto'];
      
     //Esse nome esta chegando através do action do form da index, o motivo dessa variavel é para concluir o editar com o upload de foto 
      $nomeFoto = $_GET['nomeFoto'];

    
    if(strtoupper ($_GET['modo']) == 'ATUALIZAR')
    {
        if($_FILES['fleFoto']['name'] != "")
        {
        //Chama a funcao que faz o upload de um arquivo 
        $foto = uploadFile($_FILES['fleFoto']);

        //Apaga a imagem antiga 
        unlink(SRC.NOME_DIRETORIO_FILE.$nomeFoto);
        }else
        {
            $foto = $nomeFoto;
        }
    }else //Caso  a variavel modo seja "SALVAR", entao será obrigatório o upload da foto 

    {
    //Chama a funcao que faz o upload de um arquivo 
    $foto = uploadFile($_FILES['fleFoto']);
    }
    
    //     echo($foto);
    // die;
       
      
   if($nome == null || $valor == null || $descricao == null || $destaque == null || $desconto == null)
   {
       echo ("<script> 
           alert('".vazia."');
           window.history.back();
       </script>");  
   }
      

       else{
         
           $produtos = array(
                "id" =>$id,
                "nome" => $nome,
                "valor" => $valor,
                "descricao" => $descricao,
                "foto" => $foto,
                "destaque" => $destaque,
                "desconto" => $desconto
                      
               
           );
           
        
       
           if(strtoupper($_GET['modo']) == 'SALVAR'){
               
        
          
           //chama a função inserir do arquivo inserirCliente.php, e encaminha o array com os dados do cliente.
          //tratamento para ver se os dados chegaram no banco
           if (inserir($produtos)) 
               echo ("
                   <script>
                       alert('". INSERIR ."');
                       window.location.href = '../produtos.php';
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
           elseif(strtoupper($_GET['modo']) == 'ATUALIZAR')
           
           { 
               
               
               if(edita($produtos))
                    echo ("
                       <script>
                           alert('atualizado com sucesso');
                           window.location.href = '../produtos.php';
                           </script>
                   ");
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