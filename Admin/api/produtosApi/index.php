<?php

require_once("vendor/autoload.php");
  require_once("../controles/exibirDadosProduto.php");
  require_once("../controles/exibirDadosCategorias.php");

    $app = new \Slim\App([
        'settings' => [
            // Slim Settings
            'determineRouteBeforeAppMiddleware' => true,
            'displayErrorDetails' => true,
            'addContentLengthHeader' => false]
    ]);



    $app->get('/produtos', function($request, $response, $args){


        if(isset( $request ->getQueryParams()['nome'])) 
        {

            $nome = (string) null;
            $nome = $request ->getQueryParams()['nome']; 

            if($listDados = buscarNomeProdutos($nome)){

                    if( $listDadosArray = criarArray($listDados)){  
                             $listDadosJSON = criarJSON($listDadosArray);
                    }
            }
           
        }else{
       
        
            if($listDados = exibir()){
            
                if( $listDadosArray = criarArray($listDados)){  
                         $listDadosJSON = criarJSON($listDadosArray); 
                }
            } 
        }

        
        if( $listDadosArray){ 
            return $response   ->withStatus(200) 
                               ->withHeader('Content-Type', 'application/json') 
                               ->write($listDadosJSON); 

        }else{
                         return $response   ->withStatus(204); 
                                            
        }
    
          
       
        
        
    });


    $app->get('/produtos/{id}', function($request, $response, $args){ 
        
        $id = $args['id']; 
       
        if($listDados = buscarIdCategorias($id)){ 
            //var_dump($listDados); teste para ver se foi 
            //die;
                if( $listDadosArray = criarArray($listDados)){ 
                         $listDadosJSON = criarJSON($listDadosArray);
                }
        } 
       
       
        if( $listDadosArray){
            return $response   ->withStatus(200) 
                               ->withHeader('Content-Type', 'application/json') 
                               ->write($listDadosJSON);

        }else{
                         return $response   ->withStatus(204);
                                           
        }
     

    });
    $app->run();

?>