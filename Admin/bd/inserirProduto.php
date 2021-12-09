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
		        
		        desconto,
                idcategoria
               
                
                ) 
                values
                (
                	'".$arrayProduto['nome']."',
			        '".$arrayProduto['valor']."',
		        	'".$arrayProduto['descricao']."',
		        	'".$arrayProduto['foto']."',
		        	
		        	'".$arrayProduto['desconto']."',
                    '".$arrayProduto['idcategoria']."'
                   
                    
                );
                ";
   
                

        $conexao = conexaoMysql();

        // echo($sql);
        // die;

        if($inserido = mysqli_query($conexao,$sql)){
          return true;
        
        }else{
        return false;
        }

    }



?>