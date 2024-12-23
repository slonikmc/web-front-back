<?php

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

// routes/web.php

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);  // Главная страница
Route::get('/about', [PageController::class, 'about']);  // Страница "О нас"

