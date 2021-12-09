<?php
//  require_once('configuracoes/config.php');
//     require_once('bd/conexao.php');
//     // require_once(SRC.'bd/listarCategorias.php');
//     conexaoMysql();

//     require_once('controles/exibirDadosCategorias.php');

    session_start();

    $categoria = (string) null;
    $id = (int) 0;
    $modo = (string) "Salvar";


    require_once('configuracoes/config.php');

    require_once('bd/conexao.php');
    conexaoMysql();

    require_once(SRC. 'controles/exibirDadosCategorias.php');

    if(isset( $_SESSION['categoria'])){
        $id = $_SESSION['categoria']['idcategoria'];
        $categoria = $_SESSION['categoria']['categoria'];
        $modo = "Atualizar";

        unset($_SESSION['categoria']);
    }
    // var_dump($_SESSION['categoria']);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
    <link rel="stylesheet" href="CSS/categorias.css" type="text/css">
    <title>Ric Games</title>
</head>
<body>
    <?php
    require_once("header.php");
    ?>
    <main>
    <div id="cadastro"> 
            <div id="cadastroTitulo"> 
                <h1> Cadastro de Categorias </h1>
            </div>
            <div id="cadastroInformacoes">
        
                <form action="controles/recebeCategorias.php?modo=<?=$modo?>&id=<?=$id?>" name="frmCadastro" method="post" >
                   
                    <div class="campo">
                        <div class="informacoesPessoais">
                            <label> Categoria: </label>
                        </div>
                        <div class="entradaDeDados">
                            <input type="text" name="categoria" value="<?=$categoria?>" placeholder="Digite o nome da categoria" maxlength="50">
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
                        <h1> Consulta de Categorias</h1>
                    </td>
                </tr>
                <tr id="linhas">
                    <td class="colunas"> Nome </td>
                    <td class="colunas"> Opções </td>
                </tr>
                <?php

                $dadosCategorias = exibirCategoria();
                
                while ($exibirCategorias = mysqli_fetch_assoc($dadosCategorias))
                {

                ?>
                <tr id="tblLinhas">
                    <td class="tblColunas registros"><?=$exibirCategorias['categoria']?></td>
                    <td class="tblColunas registros">
                        <a href="controles/editaCategorias.php?id=<?=$exibirCategorias['idcategoria']?>">
                            <img src="img/edit.png" alt="Editar" title="Editar" class="editar">
                        <a onclick="return confirm('Tem certeza que deseja excluir?');" href="controles/deletaCategorias.php?id=<?=$exibirCategorias['idcategoria']?>"> 
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