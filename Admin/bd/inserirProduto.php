<?php
    

 
    require_once('../bd/conexao.php');


        function inserir($arrayProduto)
        {
            
            $sql = "insert into tblproduto
                (
                nome,
		         valor,
		         descricao,
		         foto,
		        destaque,
		        desconto
                
                ) 
                values
                (
                	'".$arrayProduto['nome']."',
			        '".$arrayProduto['valor']."',
		        	'".$arrayProduto['descricao']."',
		        	'".$arrayProduto['foto']."',
		        	1,
		        	1
                   
                    
                );
                ";
   

        $conexao = conexaoMysql();

        if($inserido = mysqli_query($conexao,$sql)){
          return true;
        
        }else{
        return false;
        }

    }



?>