<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\CarrinhoComprasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutosController;
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

Route::get('/', [HomeController::class, 'index'])->name('site.home');

Route::get('/produtos', [ProdutosController::class, 'index'])->name('site.produtos');

Route::get('/carrinho_compras', [CarrinhoComprasController::class, 'index'])->name('site.carrinho');

Route::get('/login', [LoginController::class, 'index'])->name('site.login');
Route::get('/cadastro', [CadastroController::class, 'index'])->name('site.cadastroUser');
