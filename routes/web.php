<?php

use Illuminate\Support\Facades\Route;

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
    // return view('welcome');
    return view('homePage.index');
});

// Route::get('homePrincipal', function () {
//     return view('homePage.index');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');

Route::resource('configEmpresas', App\Http\Controllers\configEmpresaController::class);

Route::resource('clientes', App\Http\Controllers\clientesController::class);

Route::resource('entrenadores', App\Http\Controllers\entrenadoresController::class);

Route::resource('maquinas', App\Http\Controllers\maquinasController::class);

Route::resource('actividades', App\Http\Controllers\actividadesController::class);

Route::resource('registros', App\Http\Controllers\registrosController::class);

Route::resource('inscribirs', App\Http\Controllers\inscribirController::class);

Route::resource('realizars', App\Http\Controllers\realizarController::class);

Route::resource('pagos', App\Http\Controllers\pagosController::class);