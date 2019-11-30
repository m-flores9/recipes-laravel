<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'ControladorReceta@recetario')->name('home');
Route::get('/recetario', 'ControladorReceta@recetario')->name('recetario');
Route::get('/recetario_publico', 'ControladorReceta@recetario_publico');
Route::get('/nueva-receta', function () {
    return view('insertar_receta');
});
Route::get('/recetario_cat', function () {
    return view('receta_cat');
});
Route::post('/insertarreceta', 'ControladorReceta@insertar');
Route::post('/update_receta', 'ControladorReceta@update_receta');
Route::get('/mostrar/{id}', 'ControladorReceta@mostrar');
Route::get('/mostrar_update/{id}', 'ControladorReceta@mostrar_update');
Route::get('/recetario_cate/{id}', 'ControladorReceta@recetario_cat');
