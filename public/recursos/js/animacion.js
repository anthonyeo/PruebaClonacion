
let animado = document.querySelectorAll(".animado");
let animadoIzquierda = document.querySelectorAll(".animadoIzquierda");
let animadoDerecha = document.querySelectorAll(".animadoDerecha");


function mostrarScroll(){
    let scrollTop = document.documentElement.scrollTop;

    for (var k = 0; k < animadoDerecha.length; k++) {
        let alturaAnimadok = animadoDerecha[k].offsetTop;
        
        if (alturaAnimadok -700 < scrollTop) {
            animadoDerecha[k].style.opacity = 1;
            animadoDerecha[k].classList.add('mostrarDerecha');
        }
    }
    for (var j = 0; j < animadoIzquierda.length; j++) {
        let alturaAnimadoi = animadoIzquierda[j].offsetTop;
        
        if (alturaAnimadoi -700 < scrollTop) {
            animadoIzquierda[j].style.opacity = 1;
            animadoIzquierda[j].classList.add('mostrarIzquierda');
        }
    }
    for (var i = 0; i < animado.length; i++) {
        let alturaAnimado = animado[i].offsetTop;
        
        if (alturaAnimado -700 < scrollTop) {
            animado[i].style.opacity = 1;
            animado[i].classList.add('mostrarArriba');
        }
    }
}
window.addEventListener('scroll', mostrarScroll);
