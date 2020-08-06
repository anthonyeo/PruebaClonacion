<?php

// use Illuminate\Support\Facades\Route;

/*INICIO*/
Route::get('/', function () {
    return view('paginas/inicio');
})->name('inicio');

/*NOSOTROS*/
Route::get('/nosotros', function () {
    return view('paginas/nosotros/quienes_somos');
})->name('nosotros');
Route::get('/nuestro_equipo', function () {
    return view('paginas/nosotros/nuestro_equipo');
})->name('nuestro_equipo');
Route::get('/historia', function () {
    return view('paginas/nosotros/historia');
})->name('historia');

/*LO QUE HACEMOS*/
Route::get('lo_que_hacemos/{pagina}', function ($pagina) {
    return view('paginas/lo_que_hacemos/lo_que_hacemos',compact('pagina'));
})->name('lo_que_hacemos');

Route::get('/proyectos_tipo','Lo_que_hacemosController@proyectos_tipo');
Route::get('/voluntariado_tipo','Lo_que_hacemosController@voluntariado_tipo');
Route::get('/Proyecto_contenido','Lo_que_hacemosController@proyecto');
Route::get('/Voluntariado_contenido','Lo_que_hacemosController@voluntariado');

/*NUESTROS ALIADOS*/
Route::get('/nuestros_aliados', function () {
    return view('paginas/nuestros_aliados');
})->name('nuestros_aliados');



/*NOTICIAS*/
Route::get('noticias/{pagina}', function ($pagina) {
    return view('paginas/noticias/noticias',compact('pagina'));
})->name('noticias');

Route::get('/noticias_tipo','NoticiasController@noticias_tipo');
Route::get('/eventos_tipo','NoticiasController@eventos_tipo');
Route::get('/publicaciones_tipo','NoticiasController@publicaciones_tipo');

Route::get('noticias_info/{pagina}/{id}','NoticiasController@noticias_info')->name('noticias_info');

/*CONTÁCTENOS*/
Route::get('/contactenos', function () {
    return view('paginas/contactenos');
})->name('contactenos');
