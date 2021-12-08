<?php
//  require_once('configuracoes/config.php');
//     require_once('bd/conexao.php');
//     // require_once(SRC.'bd/listarCategorias.php');
//     conexaoMysql();

//     require_once('controles/exibirDadosCategorias.php');

    session_start();

    $login = (string) null;
    $nome = (string) null;
    $id = (int) 0;
    $modo = (string) "Salvar";
    $senha = (string) null;
    $senhaCript = (string) null;
    

    require_once('configuracoes/config.php');

    require_once('bd/conexao.php');
    conexaoMysql();

    require_once(SRC. 'controles/exibirDadosUsuario.php');

    if(isset( $_SESSION['usuario'])){
        $id = $_SESSION['usuario']['idusuario'];
        $nome = $_SESSION['usuario']['nome'];
        $login = $_SESSION['usuario']['login'];
        $senha = $_SESSION['usuario']['senha'];
        
        $modo = "Atualizar";

        unset($_SESSION['usuario']);

   
        
    }
   
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
    <link rel="stylesheet" href="CSS/usuarios.css" type="text/css">
    <title>Ric Games</title>
</head>
<body>
    <?php
    require_once("header.php");
    ?>
   <main>
    <div id="cadastro"> 
            <div id="cadastroTitulo"> 
                <h1> Cadastro de Usuarios </h1>
            </div>
            <div id="cadastroInformacoes">
        
                <form action="controles/recebeUsuario.php?modo=<?=$modo?>&id=<?=$id?>" name="frmCadastro" method="post" >
                   
                    <div class="campo">
                        <div class="informacoesPessoais">
                            <label> Login: </label>
                        </div>
                        <div class="entradaDeDados">
                            <input type="text" name="login" value="<?=$login?>" placeholder="Digite seu Login" maxlength="50">
                        </div>
                    </div>
                    <div class="campo">
                        <div class="informacoesPessoais">
                            <label> Nome: </label>
                        </div>
                        <div class="entradaDeDados">
                            <input type="text" name="nome" value="<?=$nome?>" placeholder="Digite seu Login" maxlength="50">
                        </div>
                    </div>
                    <!--Senha -->
                    <div class="campo">
                        <div class="informacoesPessoais">
                            <label> Senha: </label>
                        </div>
                        <div class="entradaDeDados">
                            <input type="password" name="senha" value="" placeholder="Digite sua Senha" maxlength="50">
                        </div>
                    </div>
                    
                
                    
                    <div class="enviar">
                        <div class="enviar">
                            <input type="submit" name="btnEnviar" value="<?=$modo?>">
                        </div>
                    </div>
                    
                </form>
            </div>
    </div>
        <div id="consulta">
            <table id="tableConsulta" >
                <tr>
                    <td id="tableTitulo" colspan="5">
                        <h1> Consulta de Usuarios</h1>
                    </td>
                </tr>
                <tr id="linhas">
                    <td class="colunas"> Login </td>
                    <td class="colunas"> Opções </td>
                </tr>
                <?php

                $dadosUsuarios = exibir();
                
                while ($exibirUsuarios = mysqli_fetch_assoc($dadosUsuarios))
                {

                ?>
                <tr id="tblLinhas">
                    <td class="tblColunas registros"><?=$exibirUsuarios['login']?></td>
                    <td class="tblColunas registros">
                        <a href="controles/editaUsuario.php?id=<?=$exibirUsuarios['idusuario']?>">
                            <img src="img/edit.png" alt="Editar" title="Editar" class="editar">
                        <a onclick="return confirm('Tem certeza que deseja excluir?');" href="controles/deletaUsuario.php?id=<?=$exibirUsuarios['idusuario']?>"> 
                            <img src="img/trash.png" alt="Excluir" title="Excluir" class="excluir">
                        </a>
                    </td>
                </tr>
                <?php  
                }
                ?>
                
            </table>
            
    </main>
    <?php require_once("footer.php");?>
</body>
</html>