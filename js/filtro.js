/*const galeriaTotal = document.querySelector('.galeria')
const menuItem = document.querySelector('.prueba')
console.log(menuItem)*/
const list = document.querySelector('.filtro')
const listElem = list.querySelectorAll('li')
const galeria = document.querySelector('.fotos')
const itemGal = galeria.querySelectorAll('img')

listElem.forEach((item,index) =>{


	item.addEventListener("click", function(e) {


		console.log(this)

		const valorFiltro = this.getAttribute("data-filter")

		console.log(valorFiltro)


		itemGal.forEach(imagen => {
			if (valorFiltro == "todo"){
				imagen.style.display = "block"
			}
			else{

				const filtroImagen = imagen.getAttribute("data-filter")
				console.log(filtroImagen)



				if (valorFiltro != filtroImagen){
					imagen.style.display = "none"
				}
				else{
					imagen.style.display  = "block"
				}
			}
			
		});
	});


})

/*menuItem.addEventListener("click", function(e){

	
	window.scroll(0,600);

	console.log(list)
	console.log(list.pageX)


})*/
