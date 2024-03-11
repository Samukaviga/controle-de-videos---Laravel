<?php

use App\Http\Controllers\VideosController;
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
    return redirect('videos.index');
});

Route::get('/videos', [VideosController::class, 'index']);

Route::get('/videos/adicionar', [VideosController::class, 'create']);

Route::get('/videos/{id}/editar', [VideosController::class, 'edit']);

Route::post('/videos', [VideosController::class, 'store']);

Route::delete('/videos/{id}', [VideosController::class, 'destroy']);

Route::put('/videos/{id}', [VideosController::class, 'update']);

