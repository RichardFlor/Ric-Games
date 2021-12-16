<?php
     header('Access-Control-Allow-Origin: *');
     header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS'); 
     header('Access-Control-Allow-Header: Content-Type');
     header('Content-Type: application/json');
 
 
      require_once("../configuracoes/config.php");
 
     $url = (string) null;
 
     $url = explode('/',$_GET['url']);
 
      
     switch($url[0]){
         case 'produtos':
                 
                  require_once('produtosApi/index.php');
                  break;
          case 'categorias':
              
                 require_once('categoriasApi/index.php');
                 break;        
     }


?>