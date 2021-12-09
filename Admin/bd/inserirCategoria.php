<?php
   
    require_once('../bd/conexao.php');


        function inserirCategoria($arrayCategoria)
        {
            
            $sql = "insert into tblcategoria
                (
                categoria
                ) 
                values
                (
                    '".$arrayCategoria['categoria']."'
                )
                ";
   

        $conexao = conexaoMysql();


        if($inserido = mysqli_query($conexao,$sql)){
          return true;
        
        }else{
        return false;
        }

    }



?>