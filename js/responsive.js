/*!
 * responsive.js v1.0
 */

var menu = document.querySelector('.burger')

var elem = document.querySelector('.secciones')

var items = document.querySelector('.secciones')
if (menu){
	menu.addEventListener('click', function(e) {

		e.stopPropagation();
		document.addEventListener("click", function(e){
			
			console.log('click')
			var clic = e.target;
		
			var show = elem.classList.contains('show');
		
			console.log(clic);
		
			if(clic != items && show != false){
				console.log(clic);
				console.log(show);
				elem.classList.toggle('show')
			}
		}, false);
		elem.classList.toggle('show')
	})
}