<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CheckController;

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


Route::get('/participant/certificate/{participant}/{subevent}', [CertificateController::class, 'participant']);

Route::get('/participant/certificate2/{id}', [CertificateController::class, 'participant2']);

Route::get('/monitor/certificate/{id}/{monitor}', [CertificateController::class, 'monitor']);

Route::get('/monitor/certificate2/{id}', [CertificateController::class, 'monitor2']);

Route::get('/guest/certificate/{id}/{guest}', [CertificateController::class, 'guest']);

Route::get('/guest/certificate2/{id}', [CertificateController::class, 'guest2']);

//Route::get('/event/create', [EventController::class, 'create']);

//Route::post('/event/store', [EventController::class, 'store']);


Route::get('/', [SearchController::class, 'index']);

Route::post('/pesquisa', [SearchController::class, 'pesquisa']);

Route::get('/validar', [CheckController::class, 'validar']);

Route::post('/resultado', [CheckController::class, 'resultado']);