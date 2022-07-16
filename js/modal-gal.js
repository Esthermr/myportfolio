const gal = document.querySelector('.fotos')
const imagen = galeria.querySelectorAll('img')
const mod = document.querySelector('.modal')
const content = mod.querySelector('.modal-contenido')
const contentInt = content.querySelector('.pre-post')
const closed = content.querySelector('.close')
const imagenmod = contentInt.querySelector('.replace')
const prev = contentInt.querySelector('.previcon')
const post = contentInt.querySelector('.posticon')

const arrayimg = Array.from(imagen);
console.log(arrayimg) 


/*Código para abrir la imagen seleccionada*/
imagen.forEach((img, index) =>{
    img.addEventListener("click", function(e){
        console.log(this)
        var jpg = this.src 
        console.log(jpg)
        console.log(index)
        mod.style.display = 'block'
        imgSrc = e.target.src;
        imagenmod.src = imgSrc
        

        /*Código para poder hacer que desaparezca el icono si está en
        la primera imagen o en la última */
        if (index == 0 ){
            prev.style.opacity = 0
            prev.style.cursor = 'default'
        }else{
            prev.style.opacity = 1
            prev.style.cursor = 'pointer'
        };

        if (index == arrayimg.length-1){
            post.style.opacity = 0
            post.style.cursor = 'default'
        }else{
            post.style.opacity = 1
            post.style.cursor = 'pointer'
        };
        
        if (index == arrayimg.length-1 && index == 0 ){
            post.style.opacity = 0
            post.style.cursor = 'default'
            prev.style.opacity = 0
            prev.style.cursor = 'default'
        }else{
            post.style.opacity = 1
            post.style.cursor = 'pointer'
            prev.style.opacity = 1
            prev.style.cursor = 'pointer'
        };

        /*Código para el botón previo
        prev.addEventListener("click", function(a){
            indiceprev = Math.abs(index-1)
            console.log(indiceprev) 
            indiceprev.src = imagenmod.src
            imgSrc = a.target.src;
        });
*/

        
















        
    })
});
/*Código para cerrar el modal*/
closed.addEventListener("click", function(b){
    mod.style.display = 'none'
})

