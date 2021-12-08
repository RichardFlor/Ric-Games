<?php
    

    require_once(SRC.'configuracoes/config.php');
    function conexaoMysql()
    {
        $servidor ='localhost';
        $usuario ='root' ;
        $senha = 'bcd127';
        $database ='dbricgames';

       if( $conexao = mysqli_connect($servidor, $usuario, $senha, $database)){
          return $conexao;
       
       }else{
            echo('Não foi a conxexao com o banco');
        }
        
    }


?>