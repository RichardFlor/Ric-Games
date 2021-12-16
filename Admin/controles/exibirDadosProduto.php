<?php
 
require_once(SRC . 'bd/listarProduto.php');
require_once(SRC. 'bd/listarCategorias.php');
    function exibir(){
        
        $dadosListar =  listar();
  
        return $dadosListar;
    }

    function buscarNomeProdutos($nome){
        $dados = buscarNome($nome);
    
        return $dados;
    }
    function buscarIdCategorias($id){
        $dados = buscaIdCategorias($id);
        return $dados;
    }
    
    function criarArray($obj){
        $cont = (int) 0;
    
    
        while($exibirDados = mysqli_fetch_assoc($obj)){
            $arrayDados[$cont] = array(
                "id" => $exibirDados['idproduto'],
                "nome" => $exibirDados['nome'],
                "valor" => $exibirDados['valor'],
                "desconto" => $exibirDados['desconto'],
                "descricao" => $exibirDados['descricao'],
                "foto" => $exibirDados['foto'],
                "destaque" => $exibirDados['destaque'],
                "idcategoria" => $exibirDados['idcategoria']
    
    
            );
            $cont +=1;
        }
        if(isset($arrayDados)){
            return $arrayDados;
        }else{
            return false;
        }
    
    
    }
    
    
    function criarJSON($arrayDados){
        header("content-type:application/json");
    
        $listaJSON = json_encode($arrayDados);
    
        if(isset($listaJSON)){
            return $listaJSON;
        }else{
            return false;
        }
    
    }
    
    

?>