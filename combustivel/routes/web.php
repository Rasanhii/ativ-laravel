<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CombustivelController;

use app\Http\Controllers\Controller;


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

Route::controller(CombustivelController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/gasto', 'gasto');
});

/*
Route::get('/', [CombustivelController::class, 'index']);

Route::get('/gasto', [CombustivelController::class, 'gasto']);


Route::controller(CombustivelController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/gasto', 'gasto');
});

    
Route::get('/', [CombustivelController::class, 'index']);


Route::get('/gasto', [CombustivelController::class, 'gasto']);
*/
