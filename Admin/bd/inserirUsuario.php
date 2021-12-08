<?php
    

 
    require_once('../bd/conexao.php');


        function inserir($arrayUsuario)
        {
            
            $sql = "insert into tblusuario
                (
                login,
                nome,
                senha
                
                ) 
                values
                (
                    '".$arrayUsuario['login']."',
                    '".$arrayUsuario['nome']."',
                    '".$arrayUsuario['senha']."'
                    
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