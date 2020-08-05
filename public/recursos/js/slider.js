var cont;
function mySwiper(){
    new Swiper('#swiper-container2', {
            watchSlidesProgress: true,
            watchSlidesVisibility: true,
            slidesPerView: cont,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });            
}
function calcularDimension(x) {
    if (x.matches) {
        cont = 3;
        mySwiper();
    } else {
        cont = 3;
        mySwiper();
    }
}

var x = window.matchMedia("(max-width: 768px)");
calcularDimension(x);
x.addListener(calcularDimension);