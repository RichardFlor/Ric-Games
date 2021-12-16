<?php

require_once("vendor/autoload.php");
require_once("../controles/exibirDadosCategorias.php");

$app = new \Slim\App([
    'settings' => [
        // Slim Settings
        'determineRouteBeforeAppMiddleware' => true,
        'displayErrorDetails' => true,
        'addContentLengthHeader' => false]
]);


$app->get('/categorias', function($request, $response, $args){

    if($listar = exibirCategoria()){
        if( $listarDadosArray = criarArrayCategorias($listar)){  
            $listarDadosJSON = criarJSONCategorias($listarDadosArray);
             }
    }
       if($listarDadosArray){
        return $response   ->withStatus(200) 
        ->withHeader('Content-Type', 'application/json') 
        ->write($listarDadosJSON);
    }else{
        return $response   ->withStatus(204);
    }
  

});

$app -> run();

?>