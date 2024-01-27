<?php

use App\Http\Controllers\redirectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [redirectController::class, 'index']);

Route::get('/charts', [redirectController::class, 'charts']);

Route::get('/buttons', [redirectController::class, 'buttons']);

Route::get('/tables', [redirectController::class, 'tables']);

Route::get('/cards', [redirectController::class, 'cards']);

Route::get('/404', [redirectController::class, 'NotFound']);

Route::get('/utilities-color', [redirectController::class, 'utilitiesColor']);

Route::get('/utilities-border', [redirectController::class, 'utilitiesBorder']);

Route::get('/utilities-animation', [redirectController::class, 'utilitiesAnimation']);

Route::get('/utilities-other', [redirectController::class, 'utilitiesOther']);

Route::get('/blank', [redirectController::class, 'blank']);


