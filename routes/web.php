<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PerfilEmprededorController;
use App\Http\Controllers\HabilidadesBlandasController;
use App\Http\Controllers\HistoricoEmprededorController;

use App\Http\Controllers\IntentosController;

use App\Http\Controllers\HistoricoHabilidadesController;
use App\Http\Controllers\HighchartController;
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
    return view('home');
})->middleware('auth');

Auth::routes();

Route::get('/perfilEmprendedor', 'PerfilEmprededorController@index')->name('testEmprendedor')->middleware('auth');
Route::post('/saveEmprendedor', 'PerfilEmprededorController@store')->name('saveEmprendedor')->middleware('auth');

Route::get('/habilidadesBlandas', 'HabilidadesBlandasController@index')->name('testHabilidades')->middleware('auth');

Route::post('/saveHabilidades', 'HabilidadesBlandasController@store')->name('saveHabilidades')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

//Route::get('/reporteGeneral/{id}', 'HistoricoEmprededorController@reporteGlobal')->name('reporteGeneral')->middleware('auth');
//Route::get('/reporteGeneral2', 'HistoricoHabilidadesController@reporteGlobal')->name('reporteGeneral2')->middleware('auth');

Route::get('/reporteGeneral/get/{id}', 'HistoricoEmprededorController@reporteGlobalId')->name('reporteGeneral.id')->middleware('auth');
Route::get('/reporteGeneral/{id?}', 'HistoricoEmprededorController@getEstudiantesTable')->name('reporte.estudiantesTable')->middleware('auth');
Route::get('/reporteTodos/todos/{id?}', 'HistoricoEmprededorController@getTodosUser')->name('reporte.Todos')->middleware('auth');

//
Route::get('/reporteEstudiante/{id}', 'HistoricoEmprededorController@reporteGlobalUser')->name('reporteGeneral.user.id')->middleware('auth');
Route::get('/reporteEstudiante2/{id}', 'HistoricoHabilidadesController@reporteGlobalUser2')->name('reporteGeneral.user.id')->middleware('auth');
//


Route::get('/reporteGeneral2/get/{id}', 'HistoricoHabilidadesController@reporteGlobalId')->name('reporteGeneral2.id')->middleware('auth');
Route::get('/reporteGeneral2/{id?}', 'HistoricoHabilidadesController@getEstudiantesTable')->name('reporte2.estudiantesTable')->middleware('auth');
Route::get('/reporteTodos2/todos/{id?}', 'HistoricoHabilidadesController@getTodosUser')->name('reporte2.Todos')->middleware('auth');
//

Route::get('/resultadosHabilidadesUser/{id}', 'HistoricoHabilidadesController@resultados')->name('resultados.estudiante')->middleware('auth');



Route::get('/chart', 'HighchartController@handleChart')->name('test')->middleware('auth');

Route::get('/Reporte/admin/users', 'IntentosController@indexReporte')->name('vista.reportes')->middleware('auth');
Route::get('/Reporte2/admin/users', 'IntentosController@indexReporte2')->name('vista.reportes2')->middleware('auth');



Route::get('/Intentos/admin/users', 'IntentosController@index')->name('vista.intentos')->middleware('auth');
Route::get('/Intentos/get/{id}', 'IntentosController@userIntentos')->name('data.intentos')->middleware('auth');

Route::get('/cursos/{id?}', 'IntentosController@getCourses')->name('data.cursos')->middleware('auth');

Route::get('/estudiantes/{id?}', 'IntentosController@getEstudiantes')->name('data.estudiantes')->middleware('auth');
Route::get('/estudiantesTodos/{id?}', 'IntentosController@userIntentosTodos')->name('data.Intentos.Todos')->middleware('auth');

Route::get('/estudiantesTable/{id?}', 'IntentosController@getEstudiantesTable')->name('data.estudiantesTable')->middleware('auth');
