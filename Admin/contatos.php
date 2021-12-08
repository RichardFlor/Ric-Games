<?php
//  require_once('configuracoes/config.php');
//     require_once('bd/conexao.php');
//     // require_once(SRC.'bd/listarCategorias.php');
//     conexaoMysql();

//     require_once('controles/exibirDadosCategorias.php');

    session_start();

    $nome = (string) null;
    $id = (int) 0;
    $modo = (string) "Salvar";
    $celular = (string) null;
    $email = (string) null;

    require_once('configuracoes/config.php');

    require_once('bd/conexao.php');
    conexaoMysql();

    require_once(SRC. 'controles/exibirDadosContato.php');

    if(isset( $_SESSION['contato'])){
        $id = $_SESSION['contato']['idcontato'];
        $nome = $_SESSION['contato']['nome'];
        $celular = $_SESSION['contato']['celular'];
        $email = $_SESSION['contato']['email'];
        $modo = "Atualizar";

        unset($_SESSION['contato']);
    }

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
    <link rel="stylesheet" href="CSS/contatos.css" type="text/css">
    <title>Ric Games</title>
</head>
<body>
    <?php
    require_once("header.php");
    ?>
   <main>
    <!-- <div id="cadastro"> 
        <div id="cadastroTitulo"> 
                <h1> Cadastro de Contatos </h1>
            </div>
            <div id="cadastroInformacoes">
        
                <form action="controles/recebeContato.php?modo=<?=$modo?>&id=<?=$id?>" name="frmCadastro" method="post" >
                   
                    <div class="campo">
                        <div class="informacoesPessoais">
                            <label> Nome: </label>
                        </div>
                        <div class="entradaDeDados">
                            <input type="text" name="nome" value="<?=$nome?>" placeholder="Dono do contato" maxlength="50">
                        </div>
                    </div>
                   
                    <div class="campo">
                        <div class="informacoesPessoais">
                            <label> Celular: </label>
                        </div>
                        <div class="entradaDeDados">
                            <input type="text" name="celular" value="<?=$celular?>" placeholder="Numero celular" maxlength="50">
                        </div>
                    </div>
                      
                    <div class="campo">
                        <div class="informacoesPessoais">
                            <label> Email: </label>
                        </div>
                        <div class="entradaDeDados">
                            <input type="text" name="email" value="<?=$email?>" placeholder="email@gmail.com" maxlength="50">
                        </div>
                    </div>
                
                    
                    <div class="enviar">
                        <div class="enviar">
                            <input type="submit" name="btnEnviar" value="<?=$modo?>">
                        </div>
                    </div>
                    
                </form>
            </div> 
    </div> -->
        <div id="consulta">
            <table id="tableConsulta" >
                <tr>
                    <td id="tableTitulo" colspan="5">
                        <h1> Consulta de Contatos</h1>
                    </td>
                </tr>
                <tr id="linhas">
                    <td class="colunas"> Email </td>
                    <td class="colunas"> Opções </td>
                </tr>
                <?php

                $dadosContatos = exibir();
                
                while ($exibirContatos = mysqli_fetch_assoc($dadosContatos))
                {

                ?>
                <tr id="tblLinhas">
                    <td class="tblColunas registros"><?=$exibirContatos['email']?></td>
                    
                    <td class="tblColunas registros">
                        <!-- Codigo abaixo para editar os contatos na areae de administração
                                NÃO NECESSESSARIO  -->
                        <!-- <a href="controles/editaContato.php?id=<?=$exibirContatos['idcontato']?>">
                            <img src="img/edit.png" alt="Editar" title="Editar" class="editar"> -->
                        <a onclick="return confirm('Tem certeza que deseja excluir?');" href="controles/deletaContato.php?id=<?=$exibirContatos['idcontato']?>"> 
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