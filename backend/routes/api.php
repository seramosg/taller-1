<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Ruta para obtener toda la tabla del servidor
Route::get('/categories', [CategoriesController::class, 'index']);
//Ruta para enviar una categoría al servidor
Route::post('/categories', [CategoriesController::class, 'store']);
//Ruta para obtener una categoría del servidor
Route::get('/categories/{id}', [CategoriesController::class, 'show']);
//Ruta para borrar una categoría del servidor
Route::delete('/categories/{id}', [CategoriesController::class, 'destroy']);
//Ruta para actualizar el nombre de una categoría del servidor
Route::put('/categories/{id}', [CategoriesController::class, 'update']);


Route::get('/products', [ProductsController::class, 'index']);
Route::post('/products', [ProductsController::class, 'store']);
Route::get('/products/{id}', [ProductsController::class, 'show']);
Route::delete('/products/{id}', [ProductsController::class, 'destroy']);
Route::put('/products/{id}', [ProductsController::class, 'update']);