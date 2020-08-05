var imgItems = $('.slider li').length;
var imgPos = 1;

for(i = 1; i<=imgItems; i++){
    $('.pagination').append('<li><i class="fas fa-circle"></i></li>');
}

$('.slider li').hide();
$('.slider li:first').show();
$('.pagination li:first').css({'color':'#CD6E2E'});

$('.pagination li').click(pagination);
$('.right i').click(nextSlider);
$('.left i').click(prevSlider);

setInterval(function() {
    nextSlider();
}, 4000);

function pagination() {
    var paginationPos = $(this).index() + 1;
    $('.slider li').hide();
    $('.slider li:nth-child('+ paginationPos +')').fadeIn();
    $('.pagination li').css({'color':'#858585'});
    $(this).css({'color':'#CD6E2E'});

    imgPos = paginationPos;
}

function nextSlider() {
    imgPos++;
    if(imgPos == imgItems + 1){imgPos=1;}
    $('.slider li').hide();
    $('.slider li:nth-child('+ imgPos +')').fadeIn();

    $('.pagination li').css({'color':'#858585'});
    $('.pagination li:nth-child('+ imgPos +')').css({'color':'#CD6E2E'});
}

function prevSlider() {
    imgPos--;
    if(imgPos == 0){imgPos = imgItems;}
    $('.slider li').hide();
    $('.slider li:nth-child('+ imgPos +')').fadeIn();

    $('.pagination li').css({'color':'#858585'});
    $('.pagination li:nth-child('+ imgPos +')').css({'color':'#CD6E2E'});
}