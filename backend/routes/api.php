<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/products', [CatalogController::class, 'index']); // Получение всех продуктов
Route::post('/products', [CatalogController::class, 'store']); // Создание нового продукта
Route::put('/products/{id}', [CatalogController::class, 'update']); // Обновление продукта
Route::delete('/products/{id}', [CatalogController::class, 'destroy']); // Удаление продукта

Route::get('/cart', [CartController::class, 'index']); // Получение всех товаров в корзине
Route::post('/cart', [CartController::class, 'store']); // Добавление товара в корзину
Route::put('/cart/{id}', [CartController::class, 'update']); // Обновление товара в корзине
Route::delete('/cart/{id}', [CartController::class, 'destroy']); // Удаление товара из корзины




