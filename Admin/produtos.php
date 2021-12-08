<?php
//  require_once('configuracoes/config.php');
//     require_once('bd/conexao.php');
//     // require_once(SRC.'bd/listarPoduto.php');
//     conexaoMysql();

//    require_once(SRC .'controles/exibirDadosProduto.php');

    session_start();

    $nome = (string) null;
    $id = (int) 0;
    $valor = (string) null;
    $destaque = (int)  0;
    $foto = (string) 'semfoto.png';

    $descricao = (string) null;
    $desconto = (string) null; 

    $modo = (string) "Salvar";


    require_once('configuracoes/config.php');

    require_once('bd/conexao.php');
    conexaoMysql();

    require_once(SRC. 'controles/exibirDadosProduto.php');

    if(isset( $_SESSION['produto'])){
        $id = $_SESSION['produto']['idproduto'];
        $nome = $_SESSION['produto']['nome'];
        $valor = $_SESSION['produto']['valor'];
        $descricao = $_SESSION['produto']['descricao'];
        $foto = $_SESSION['produto']['foto'];

        $destaque = $_SESSION['produto']['destaque'];
        $desconto = $_SESSION['produto']['desconto'];

        $modo = "Atualizar";

        unset($_SESSION['produto']);
    }
    // var_dump($_SESSION['produto']);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
    <link rel="stylesheet" href="CSS/produtos.css" type="text/css">
    <title>Ric Games</title>
</head>
<body>
    <?php
    require_once("header.php");
    ?>
    <main>
    <div id="cadastro"> 
            <div id="cadastroTitulo"> 
                <h1> Cadastro de Produtos </h1>
            </div>
            <div id="cadastroInformacoes">
        
                <form enctype="multipart/form-data" action="controles/recebeProduto.php?modo=<?=$modo?>&id=<?=$id?>&nomeFoto=<?=$foto?>" name="frmCadastro" method="post" >
                   
                    <div class="campo">
                        <div class="informacoesPessoais">
                            <label> Nome: </label>
                        </div>
                        <div class="entradaDeDados">
                            <input type="text" name="nome" value="<?=$nome?>" placeholder="Digite o nome do Produto" maxlength="50">
                        </div>
                    </div>
                    <div class="campo">
                        <div class="informacoesPessoais">
                            <label> Valor: </label>
                        </div>
                        <div class="entradaDeDados">
                            <input type="text" name="valor" value="<?=$valor?>" placeholder="Digite o valor do Produto" maxlength="50">
                        </div>
                    </div>
                    
                    <div class="campo">
                        <div class="informacoesPessoais">
                            <label> Desconto: </label>
                        </div>
                        <div class="entradaDeDados">
                            <input type="text" name="desconto" value="<?=$desconto?>" placeholder="Insira o valor do desconto" maxlength="50">
                        </div>
                    </div>
                    <div class="campo">
                        <div class="informacoesPessoais">
                            <label> Descriçao: </label>
                        </div>
                        <div class="entradaDeDados">
                            <input type="text" name="descricao" value="<?=$descricao?>" placeholder="Insira a descrição" maxlength="50">
                        </div>
                    </div>
                    <div class="campo">
                        <div class="informacoesPessoais">
                            <label> Destaque: </label>
                        </div>
                        <div class="entradaDeDados">
                            <input type="checkbox" name="destaque" value="<?=$destaque?>" placeholder="O produto esta em destaque?" maxlength="50">
                        </div>
                    </div>

                    <div class="campos">
                        <div class="informacoesPessoais">
                            <label> Foto: </label>
                        </div>
                        <div class="entradaDeDados">
                            <input type="file" name="fleFoto" accept="image/jpeg, image/jpg, image/png">
                        </div>
                        <div id="visualizarFoto">
                        <img src="<?=NOME_DIRETORIO_FILE.$foto?>">
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
                        <h1> Consulta de Produtos</h1>
                    </td>
                </tr>
                <tr id="linhas">
                    <td class="colunas"> Foto </td>
                    <td class="colunas"> Nome </td>

                    <td class="colunas"> Opções </td>
                </tr>
                <?php

                $dadosProdutos = exibir();
                
                while ($exibirProdutos= mysqli_fetch_assoc($dadosProdutos))
                {

                ?>
                <tr id="tblLinhas">
                <td class="tblColunas registros">
                       <img class="foto" src="<?=NOME_DIRETORIO_FILE.$exibirProdutos['foto']?>"> </td>
                    <td class="tblColunas registros"><?=$exibirProdutos['nome']?></td>
                    <td class="tblColunas registros">
                        <a href="controles/editaProduto.php?id=<?=$exibirProdutos['idproduto']?>">
                            <img src="img/edit.png" alt="Editar" title="Editar" class="editar">
                        <a onclick="return confirm('Tem certeza que deseja excluir?');" href="controles/deletaProduto.php?id=<?=$exibirProdutos['idproduto']?>&foto=<?=$exibirProdutos['foto']?>"> 
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