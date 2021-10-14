"use scrit" 

const container = document.querySelector(".carrossel")
container.classList.add("carrossel")
let  status  =  "img1"

const imagem1 = () => {
	container.style.backgroundImage= "url(./img/katarina.jpg)"
	status = "img1"
}

const imagem2 = () => {
	container.style.backgroundImage= "url(./img/yasuoslide.jpg)"
	status = "img2"
}

const imagem3 = () => {
	container.style.backgroundImage= "url(./img/kaynashe.jpg)"
	status = "img3"
}

const imagem4 = () => {
	container.style.backgroundImage= "url(./img/wukong.jpg)"
	status = "img4"
}
const imagem5 = () => {
	container.style.backgroundImage= "url(./img/kennen.jpg)"
	status = "img5"
}
const imagem6 = () => {
	container.style.backgroundImage= "url(./img/annie.jpg)"
	status = "img6"
}
const imagem7 = () => {
	container.style.backgroundImage= "url(./img/irelia.jpg)"
	status = "img7"
}
const imagem8 = () => {
	container.style.backgroundImage= "url(./img/pyke.jpg)"
	status = "img8"
}
const imagem9 = () => {
	container.style.backgroundImage= "url(./img/kassadin.jpg)"
	status = "img9"
}
const imagem10 = () => {
	container.style.backgroundImage= "url(./img/kassadin.jpg)"
	status = "img10"
}
const imagem11 = () => {
	container.style.backgroundImage= "url(./img/yone.jpg)"
	status = "img11"
}
const imagem12 = () => {
	container.style.backgroundImage= "url(./img/aatrox.jpg)"
	status = "img12"
}
const imagem13 = () => {
	container.style.backgroundImage= "url(./img/jax.jpg)"
	status = "img13"
}
const imagem14 = () => {
	container.style.backgroundImage= "url(./img/rengar.jpg)"
	status = "img14"
}
const imagem15 = () => {
	container.style.backgroundImage= "url(./img/draven.jpg)"
	status = "img15"
}
const imagem16 = () => {
	container.style.backgroundImage= "url(./img/morgana.jpg)"
	status = "img16"
}
const imagem17 = () => {
	container.style.backgroundImage= "url(./img/pantheon.jpg)"
	status = "img17"
}
const imagem18 = () => {
	container.style.backgroundImage= "url(./img/shaco.jpg)"
	status = "img18"
}
	
function  galeriaFotos ( )  {
	if ( status  !=  "" ) {
		if  ( status  ==  "img2" ) {
			imagem1()
		}  else  if ( status  ==  "img3" ) {
			imagem2()
		}  else if ( status  ==  "img4" ){
			imagem3()
		} 
        else if ( status  ==  "img5" ){
			imagem4()
		}
        else if ( status  ==  "img6" ){
			imagem5()
		}
        else if ( status  ==  "img7" ){
			imagem6()
		}
        else if ( status  ==  "img8" ){
			imagem7()
		}
        else if ( status  ==  "img9" ){
			imagem8()
		}
		else if ( status  ==  "img10" ){
			imagem9()
		}
        else if ( status  ==  "img11" ){
			imagem10()
		}
		else if ( status  ==  "img12" ){
			imagem11()
		}
		else if ( status  ==  "img13" ){
		imagem12()
		}
		else if ( status  ==  "img14" ){
		imagem13()
		}
		else if ( status  ==  "img15" ){
		imagem14()
		}
		else if ( status  ==  "img16" ){
		imagem15()
		}
		else if ( status  ==  "img17" ){
		imagem16()
		}
		else if ( status  ==  "img18" ){
		imagem17()
		}else {
		imagem18()
		}
	}	
}

function slideFotos( ){
	status  =  "img18"
	setInterval(galeriaFotos, 3000)
}

galeriaFotos(slideFotos())