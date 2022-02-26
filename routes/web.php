<?php

use App\Http\Controllers\FuncionariosController;
use App\Http\Controllers\IndexController;
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

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', [IndexController::class, 'index'])->name('site.index');

Route::get('/funcionarios', [FuncionariosController::class, 'index'])->name('site.pages.funcionarios');
Route::post('/funcionarios/post', [FuncionariosController::class, 'store'])->name('site.pages.funcionarios.post');

