<?php
//Ativa a utilização de variaveis de sessão
//session_status() retorna se a sessão ja foi iniciada
//PHP_SESSION_ACTIVE - Valida se já esta na memória o status de ativo
if(session_status() != PHP_SESSION_ACTIVE)
    session_start();

if(!isset($_SESSION['statusLogin']) || !$_SESSION['statusLogin'])
    header('location: index.php');


//Para fazer o logout

//session_destroy();

?>

<header>
        <div id="empresa">
            <div id="titlespace">
            <div id="nomeLoja">
                <h1>
                    CMS
                </h1>
                <h2>
                   Ric Games
                </h2>
            </div>
            <div id="descTitle">
                <h3>
                    Gerenciamento do Conteudo do Site
                </h3>
            </div>
            </div>
            <div>

            </div>
                <img id="imgspace" src="img/logoimg.png" alt="" >
        </div>
        <div id="menu">
            <div id="spaceItensmenu">
            <div class="itensmenu">
            <a href="produtos.php"> <img class="imgMenu" src="img/produtos.png" alt="" ></a>
                <h3><a href="produtos.php">Adm. de Produtos</a></h3>
            </div>
            <div class="itensmenu">
            <a href="categorias.php"> <img class="imgMenu" src="img/categorias.png" alt=""></a>
                <h3><a href="categorias.php">Adm. de Categorias</a></h3>
            </div>
            <div class="itensmenu">
            <a href="contatos.php"> <img class="imgMenu" src="img/contatos.png" alt=""></a>
                <h3><a href="contatos.php">Contatos</a></h3>
            </div>
            <div class="itensmenu">
            <a href="usuarios.php"> <img class="imgMenu" src="img/usuarios.png" alt=""></a>
                <h3><a href="usuarios.php">Usuarios</a></h3>
            </div>
            </div>
            <div class="itensmenu">
            <a href="../index.php">  <img class="imgMenu" src="img/sair.png" alt=""> </a>
                <h3>Logout</h3>
                <h2>Olá: <?=$_SESSION['nomeUsuario']?></h2>
            </div>
        </div>
</header>