<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensajeControl;

//Route::view('/formulario','projects.create') -> name('Home');

Route::view('/','index') -> name('Home');

Route::view('/formulario', 'projects.create') -> name('create');



Route::get('/registro', 'PortafolioController@index')->name('portafolio.index');
//ejemplo del prmer controlador Route::get('/portafolio',[\App\Http\Controllers\PortafolioController::class, '__invoke'])-> name('portafolio');

Route::get('/portafolio/crear', 'PortafolioController@create')-> name('portafolio.create');

Route::post('/registro', 'PortafolioController@store')->name('portafolio.store');

Route::get('/portafolio/{id}', 'PortafolioController@show')-> name('portafolio.show');





Route::apiResource('projectos', 'PortafolioController');

Route::post('Home', [MensajeControl::class, 'store'])->name('mensaje.store');



