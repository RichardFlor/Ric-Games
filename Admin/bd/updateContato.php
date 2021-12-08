<?php
    require_once('../bd/conexao.php');

function edita($arrayContato)
{
    $sql = "update tblcontato set 
            nome = '".$arrayContato['nome']."',
            celular = '".$arrayContato['celular']."',
            email = '".$arrayContato['email']."'
    
        where idcontato= ".$arrayContato['id'];
        $conexao = conexaoMysql();

        if(mysqli_query($conexao,$sql)){
            return true;
        }else{
            return false;
        }
    

}


?>