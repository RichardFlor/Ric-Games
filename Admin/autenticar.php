<?php 
    //Import do arquivo config
    require_once('configuracoes/config.php');
    //Import do arquivo de conexão
    require_once('bd/conexao.php');

//Declaração de variaveis 
    $login = (string) null;
    $senha = (string) null;


    //Recebe os dados via POST do form de login 
    $login = $_POST['txtLogin'];
    $senha = md5($_POST['txtSenha']);

    if($login == "" || $senha == ""){
        echo(LOGIN_VAZIO);
    }

   else  if($login != "" && $senha != "")
    {
        $sql = "select * from tblusuario
                    where login = '".$login."' and
                            senha = '".$senha."'";

        // echo($sql);
        // die;


        $conexao = conexaoMysql();

        $select = mysqli_query($conexao, $sql);

            if($rsUsuario = mysqli_fetch_assoc($select))
            {
                //Ativa o uso de variavel de sessão
                session_start();
                
                $_SESSION['nomeUsuario'] = $rsUsuario['nome'];
                $_SESSION['statusLogin'] = true;

                //Permite redirecionar para uma página
                header('location: dashBoard.php');
            }else
            echo(LOGIN_MSG_INVALIDO);
    
}

?>