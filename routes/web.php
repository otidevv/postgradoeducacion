<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/catalogo/educacion', function () {
    return view('catalogo.educacion');
});

Route::get('/diplomados/gestion-educativa', function () {
    return view('diplomados.gestion-educativa');
});

Route::get('/diplomados/herramientas-digitales', function () {
    return view('diplomados.herramientas-digitales');
});

Route::get('/diplomados/evaluacion-formativa', function () {
    return view('diplomados.evaluacion-formativa');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});
