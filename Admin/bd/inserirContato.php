<?php
    

 
    require_once('../bd/conexao.php');


        function inserir($arrayContato)
        {
            
            $sql = "insert into tblcontato
                (
                nome,
                celular,
                email
                ) 
                values
                (
                    '".$arrayContato['nome']."',
                    '".$arrayContato['celular']."',
                    '".$arrayContato['email']."'
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