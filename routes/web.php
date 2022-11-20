<?php

use App\Http\Controllers\CarrinhoComprasController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutoManagerController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserManangerController;
use App\Http\Controllers\UserController;

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


Route::get('/carrinho_compras', [CarrinhoComprasController::class, 'index'])->name('site.carrinho');

Route::get('/acessar', [LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class, 'store']);

Route::resource('/categoria', CategoriaController::class);

Route::resource('/fornecedor', FornecedorController::class);

Route::get('/estoque/produto', [ProdutosController::class, 'index'])->name('site.produtos');
Route::resource('/produto', ProdutoManagerController::class);

Route::get('/users/user', [UserController::class, 'index'])->name('site.users');
Route::resource('/users', UserManangerController::class);






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
