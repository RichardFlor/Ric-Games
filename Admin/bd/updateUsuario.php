<?php
    require_once('../bd/conexao.php');

function edita($arrayUsuario)
{
    $sql = "update tblusuario set 
            nome = '".$arrayUsuario['nome']."',
            login = '".$arrayUsuario['login']."',
            senha = '".$arrayUsuario['senha']."'
           
    
        where idusuario = ".$arrayUsuario['id'];
        $conexao = conexaoMysql();

        if(mysqli_query($conexao,$sql)){
            return true;
        }else{
            return false;
        }
    

}


?>