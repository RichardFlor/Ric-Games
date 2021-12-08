<?php
   
    require_once('../bd/conexao.php');


        function inserir($arrayCategoria)
        {
            
            $sql = "insert into tblcategoria
                (
                nome
                ) 
                values
                (
                    '".$arrayCategoria['nome']."'
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