var http_request = false;

function peticion(url) {

    http_request = false;

    if (window.XMLHttpRequest) {
        http_request = new XMLHttpRequest();
        if (http_request.overrideMimeType) {
            http_request.overrideMimeType('text/xml');
        }
    } else if (window.ActiveXObject) { // IE
        try {
            http_request = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                http_request = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {}
        }
    }

    if (!http_request) {
        alert('fallo no fue posible crear una instancia de xmlhttp');
        return false;
    }
    http_request.onreadystatechange = contenido;
    http_request.open('GET', url, true);
    http_request.send();



}

function contenido() {
    if (http_request.readyState == 4) {
        if (http_request.status == 200) {
            contenido_proyectos.style.display='none';
            contenido_voluntariado.style.display='none';
            contenido_informacion.style.display='grid';

            var contentdiv = document.getElementById("informacion");
            contentdiv.innerHTML=http_request.responseText;
        } else {
            alert('Hubo problemas con la petición.');
        }
    }
}