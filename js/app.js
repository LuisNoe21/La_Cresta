const carrusel = document.querySelector(".carrusel-items");
let step = 1;
let interval = null;
let MaxscrollLeft = carrusel.scrollWidth - carrusel.clientWidth;

const start = ()=>{
    // Fragmento de código de forma repetitiva cada 
    // vez que termina el periodo de tiempo determinado.
    interval = setInterval( () => {
        // Obtiene o establece el número de píxeles 
        // que desplaza el contenido de un elemento hacia la izquierda.
        carrusel.scrollLeft = carrusel.scrollLeft + step;
        // Validamos el scroll al final para cuando llegue se devuelva al inicio
        if (carrusel.scrollLeft === MaxscrollLeft) {
            step = -1;
        }else if(carrusel.scrollLeft === 0){
            step = 1;
        }
    }, 10);
};

const stop = () =>{
    // Cancela una acción reiterativa que se inició mediante una llamada a setInterval
    clearInterval(interval);
}
//Cuando podemos el cursor sobre la imagen se detenga
carrusel.addEventListener('mouseover', () =>{
    stop();
});
//Cuando quitamos el curso de la imagen hacemos que el carrusel continue
carrusel.addEventListener('mouseout', () =>{
    start();
});
start();