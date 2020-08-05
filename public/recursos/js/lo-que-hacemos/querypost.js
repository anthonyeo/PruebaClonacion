// $("#proyecto_info").click(function(){
//     $.post("/prueba", function(htmlexterno){
// $("#cargaexterna").html(htmlexterno);
//     });
// });




    fetch('/prueba', {
        method: 'get'
    }).then(function(response) {
    return response.text();
    })
    .then(function(htmlexterno) {
        var contentdiv = document.getElementById("informacion");
        contentdiv.innerHTML += htmlexterno;
    });