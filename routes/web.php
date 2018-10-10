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

// Route::get('/', function () {
//   return view('index');
// });

use App\Medico;
use App\Http\Resources\Medico as MedicoResource;

Route::get('/', 'HomeController@index');
Route::get('medico/{id}', 'MedicoController@show');
Route::get('/appontment_success', function () {
    return view('appontment_success');
});

Route::get('/api/medicos', function () {
    return MedicoResource::collection(Medico::all());
});

Route::resource('formulario', 'FormularioController', ['only' => [
    'store', 'index'
]]);