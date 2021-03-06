
<?php
//  require_once('configuracoes/config.php');
//     require_once('bd/conexao.php');
//     // require_once(SRC.'bd/listarCategorias.php');
//     conexaoMysql();

//     require_once('controles/exibirDadosCategorias.php');




    session_start();

    $nome = (string) null;
    $id = (int) 0;
    $modo = (string) "Enviar";
    $celular = (string) null;
    $email = (string) null;

    require_once('Admin/configuracoes/config.php');

    require_once('Admin/bd/conexao.php');
    conexaoMysql();

    require_once(SRC. 'controles/exibirDadosContato.php');

    if(isset( $_SESSION['contato'])){
        $id = $_SESSION['contato']['idcontato'];
        $nome = $_SESSION['contato']['nome'];
        $celular = $_SESSION['contato']['celular'];
        $email = $_SESSION['contato']['email'];
        $modo = "enviar";

        unset($_SESSION['contato']);
    }
    // var_dump($_SESSION['contato']);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Ric Games</title>
    <link type="text/css" rel="stylesheet" href="style.css">
	<script src="script.js" defer> </script>
</head>

<body>
    <header>
			<div id="console"><img id="console" src="img/console.png"></div>
			<div id="logu"><img id="logoMenu" src="img/logo.png"></div>
			<div id="sociais">
			<img class="imgSociais" src="img/facebook.png" alt="">
			<img class="imgSociais" src="img/instagram.png" alt="">
			<img class="imgSociais" src="img/whatsapp.png" alt="">
			</div>
	</header>
			<div id="secaolistaMenu"> 
				<ul id="listaMenu">
					<li>
						<a href="#secaoEmpresa">
							A EMPRESA 
						</a>
					</li>
					<li> 
						<a href="#secaoPromocao">
							PROMOÇÕES 
						</a>
					</li>
					<li> 
						<a href="#secaoDestaques">
							DESTAQUES 
						</a>
					</li>
					<li> 
						<a href="#secaoInformacoes">
							CONTATOS 
						</a>
					</li>
				</ul>
			</div>
	
    
	
	<div class='carrossel'>
	</div>
	<div id="secaoSkins">
		<div id="pesquisaMenu">
			<div id="iconeMenu">
				<img class="iconeMenu" src="img/iconeMenu.png">

				<div id="secaoIconeMenu">
					<ul>
						<li> Top</li>
						<li> Jungle</li>
						<li> Mid </li>
						<li> Bot </li>
					</ul>
				</div>
			</div>
			
			<div id="barraPesquisa">
				<input type="text" placeholder="Pesquisar" id="pesquisa">
				<input type="image" id="iconePesquisa" src="img/pesquisa.png">
			</div>
		</div>
		<div id="skins">
            
			<div class="itemSkin">
				<div class="imgSkin">
					<img src="img/zed.png" alt="">
				</div>
				<p class="nomeSkin"> ZED LAMINA DO TROVÃO </p>
				<p class="descricaoSkin"> Skin acima muda apenas o visual, nao interfere na gameplay</p>
				<div class="saibaSkin"> SAIBA MAIS </div>
				<div class="precoSkin"> R$ 15,00</div>
			</div>
			
			<div class="itemSkin2">
				<div class="imgSkin">
					<img src="img/vi.png" alt="">
				</div>
				<p class="nomeSkin"> NEON STRIKE VI </p>
				<p class="descricaoSkin"> Skin acima muda apenas o visual, nao interfere na gameplay</p>
				<div class="saibaSkin"> SAIBA MAIS </div>
				<div class="precoSkin"> R$ 15,00</div>
			</div>
			
			<div class="itemSkin3">
				<div class="imgSkin">
					<img src="img/mytai.png" alt="">
				</div>
				<p class="nomeSkin"> MUAY THAI LEE SIN </p>
				<p class="descricaoSkin"> Skin acima muda apenas o visual, nao interfere na gameplay</p>
				<div class="saibaSkin"> SAIBA MAIS </div>
				<div class="precoSkin"> R$ 15,00</div>
			</div>
            <div class="itemSkin7">
				<div class="imgSkin">
					<img src="img/veigarnoel.png" alt="">
				</div>
				<p class="nomeSkin"> ZED LAMINA DO TROVÃo </p>
				<p class="descricaoSkin"> Skin acima muda apenas o visual, nao interfere na gameplay</p>
				<div class="saibaSkin"> SAIBA MAIS </div>
				<div class="precoSkin"> R$ 15,00</div>
			</div>
            <div class="itemSkin8">
				<div class="imgSkin">
					<img src="img/poppystarguardian.png" alt="">
				</div>
				<p class="nomeSkin"> ZED LAMINA DO TROVÃo </p>
				<p class="descricaoSkin"> Skin acima muda apenas o visual, nao interfere na gameplay</p>
				<div class="saibaSkin"> SAIBA MAIS </div>
				<div class="precoSkin"> R$ 15,00</div>
			</div>
            <div class="itemSkin9">
				<div class="imgSkin">
					<img src="img/rivencoelinha.png" alt="">
				</div>
				<p class="nomeSkin"> ZED LAMINA DO TROVÃo </p>
				<p class="descricaoSkin"> Skin acima muda apenas o visual, nao interfere na gameplay</p>
				<div class="saibaSkin"> SAIBA MAIS </div>
				<div class="precoSkin"> R$ 15,00</div>
			</div>
		</div>
	</div>
	<div id="secaoEmpresa">
		<div id="organizarSecao">
			<div id="descricaoEmpresa">
				<h2 id="tituloEmpresa">Ric Games</h2>
				<p class="textoEmpresa">
					A loja Ric Games surgiu em 2010, quando o fundador Richard Flor decidiu que para viver nesse mundo de caos precisaria estar cercado por jogos 
				</p>
				<p class="textoEmpresa"> 
					Depois de falar com seus pais sobre a ideia de criar uma loja para estar completamente no meio do seu hobby preferido,
				</p>
				<p class="textoEmpresa">
                    E receber o apoio deles, Richard resolveu bolar um plano para conseguir tirar o sonho do papel.
				</p>
			</div>
		</div>
	</div>
	<div id="secaoPromocao"> 
		<h2> PROMOÇÕES DE SKINS </h2>
		<div class="itemSkin4">
			<div class="imgSkin">
				<img src="img/projetokatarina.png" alt="">
			</div>
			<p class="nomeSkin">PROJETO KATARINA</p>
			<p class="descricaoSkin">Skin acima muda apenas o visual, nao interfere na gameplay</p>
			<div class="saibaSkin"> SAIBA MAIS </div>
			<div class="precoPromocao"> 
				<p class="precoAntigo"> R$ 40,00 </p>
				<p class="precoAtual"> R$ 30,00 </p>
			</div>
		</div>
		
		<div class="itemSkin5">
			<div class="imgSkin">
				<img src="img/projetoleona.png" alt="">
			</div>
			<p class="nomeSkin">PROJETO LEONA</p>
			<p class="descricaoSkin">Skin acima muda apenas o visual, nao interfere na gameplay</p>
			<div class="saibaSkin"> SAIBA MAIS </div>
			<div class="precoPromocao"> 
				<p class="precoAntigo"> R$ 40,00 </p>
				<p class="precoAtual"> R$ 30,00 </p>
			</div>
		</div>
		
		<div class="itemSkin6">
			<div class="imgSkin">
				<img src="img/projetolucian.png" alt="">
			</div>
			<p class="nomeSkin">PROJETO LUCIAN</p>
			<p class="descricaoSkin"> Skin acima muda apenas o visual, nao interfere na gameplay</p>
			<div class="saibaSkin"> SAIBA MAIS </div>
			<div class="precoPromocao"> 
				<p class="precoAntigo"> R$ 40,00 </p>
				<p class="precoAtual"> R$ 30,00 </p>
			</div>
		</div>
	</div>
	<div id="banner2"></div>
	<div id="secaoDestaques"> 
		<h2> SKINS EM DESTAQUE</h2>
		<div id="organizarDestaques">
			<div class="imgDestaque"> <img src="img/rivencoelinha.png" alt=""> </div>
			<div class="imgDestaque2"> <img src="img/shacogoseong.png" alt=""> </div>
			<div class="imgDestaque3"> <img src="img/vaynecupido.png" alt=""> </div>
			<div class="imgDestaque4"> <img src="img/teemopanda.png" alt=""> </div>
		</div>
	</div>
    <div id="secaoInformacoes">
        <div id="organizarInfo">
	    <div id="lojasInfo">  
        <h3 class="tituloInfo"> NOSSA LOJA </h3>
            <h4> Jandira</h4>
            <div class="lojas"> 
                <img id="imgLoja" src="img/logoLoja.png">
                <div id="iconeLoja">
                    <img src="img/iconeLocalizacao.png">
                     <img src="img/iconeTelefone.png">
                </div>
                
                <div id="textoLoja">
                    <p>Rua Elton Silva, 905</p>
                    <p> (11) 4772-4700</p>
                </div>
            </div>
        </div>
        
        <div id="contatosInfo">
        <H3> ENTRE EM CONTATO </H3>
            <div id="contatosLabel"> 
                <div class="label">
                     <label> Nome: </label>
                </div>
               
                <div class="label">
                    <label> Email: </label>
                </div>
                
                <div class="label">
                    <label> Celular: </label>
                </div>
            </div>
			<form action="Admin/controles/recebeContato.php?modo=<?=$modo?>&id=<?=$id?>" name="frmCadastro" method="post" >
            <div id="contatosInput"> 
                <input type="text" name="nome" value="<?=$nome?>" maxlength="100"> 
                <input type="text" name="email" value="<?=$email?>" maxlength="100"> 
                <input type="text" name="celular" value="<?=$celular?>"maxlength="20"> 
            </div>
           <input id="btnSalvar" type="submit" name="btnSalvar" value="<?=$modo?>"> 
			</form>
        </div>
	</div>
    
    </div>
	
	<footer> <span> Copyright &copy; Richard Flor | 2021 </span></footer>
</body>
</html>