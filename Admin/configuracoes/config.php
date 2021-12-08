<?php

const servidor = ('localhost');
const usuario = ('root');
const senha = ('bcd127');
const database =('dbricgames');

define ('SRC', $_SERVER['DOCUMENT_ROOT'].'/ds2t20212/Richard/RicGames/Admin/'); 

const BD_MSG_EXCLUIR = "
<script> 
    alert('Registro excluido com sucesso do Banco de Dados'); 
    window.location.href='../categorias.php';
</script>";
const BD_MSG_EXCLUIR_CONTATO = "
<script> 
    alert('Registro excluido com sucesso do Banco de Dados'); 
    window.location.href='../contatos.php';
</script>";
const BD_MSG_EXCLUIR_USUARIO = "
<script> 
    alert('Registro excluido com sucesso do Banco de Dados'); 
    window.location.href='../usuarios.php';
</script>";
const BD_MSG_EXCLUIR_PRODUTO = "
<script> 
    alert('Registro excluido com sucesso do Banco de Dados'); 
    window.location.href='../produtos.php';
</script>";
const vazia = ('Preencha todos os dados, pois tem campos obrigatórios');
const ERRO = "ERRO: Não foi possivel manipular os dados no Banco de dados!!!"; 

const INSERIR = "Registro salvo com sucesso do banco de dados!";
const MAX_CARACTERES = "Não foi possivel fazer o cadastro, coloque um nome abaixo de 100 caracteres";

const LOGIN_MSG_INVALIDO = "
<script> 
    alert('Usuário ou Senha inválidos!'); 
    window.history.back();
</script>";

const LOGIN_VAZIO = "
<script> 
    alert('Preencha todos os dados para efetuar o login!'); 
    window.history.back();
</script>";

//Constantes para Upload de Arquivos 
define ('NOME_DIRETORIO_FILE', 'arquivos/');

$extensoesPermitidasFile = array ("image/png", "image/jpg", "image/jpeg");
define('EXTENSOES_PERMITIDAS', $extensoesPermitidasFile);

const TAMANHO_FILE = "5120";

?>
 