
var btn_todo = document.getElementById('noticias__tipo__todos');
var btn_eventos = document.getElementById('noticias__tipo__eventos');
var btn_publicaciones = document.getElementById('noticias__tipo__pubicaciones');

var section_noticias = document.getElementById('noticias');
var section_noticias_info = document.getElementById('noticia_info');

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function peticion(url) {

    fetch(url, {
        method: 'get'
    }).then(function(response) {
        return response.text();
    })
    .then(function(htmlContent) {
        if(url=='/noticias_tipo'){
            btn_todo.classList.add('select_menu');
            btn_eventos.classList.remove('select_menu');
            btn_publicaciones.classList.remove('select_menu');
        }else if(url=='/eventos_tipo'){
            btn_eventos.classList.add('select_menu');
            btn_todo.classList.remove('select_menu');
            btn_publicaciones.classList.remove('select_menu');
        }else{
            btn_publicaciones.classList.add('select_menu');
            btn_todo.classList.remove('select_menu');
            btn_eventos.classList.remove('select_menu');
        }
        
        var contentdiv = document.getElementById("noticias__listado");
        contentdiv.innerHTML = htmlContent;
    }).catch(function(err) {
        alert('error');
    });
}

