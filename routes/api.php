<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\AdminProdutoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ConfiguracaoController;
use App\Http\Middleware\CheckAdmin;

// ==========================================
// ROTAS PÚBLICAS (Não exigem login)
// ==========================================
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/produtos/{id}', [ProdutoController::class, 'show']);

// ==========================================
// ROTAS PROTEGIDAS (Cliente Logado)
// ==========================================
Route::middleware('auth:sanctum')->group(function () {

    // Rotas do Cliente
    Route::post('/pedidos', [PedidoController::class, 'store']);
    Route::get('/meus-pedidos', [PedidoController::class, 'meusPedidos']);

    // Logout
    Route::post('/logout', [AuthController::class, 'logout']);

    // ==========================================
    // GRUPO EXCLUSIVO PARA ADMINISTRADORES
    // ==========================================
    Route::middleware([CheckAdmin::class])->prefix('admin')->group(function () {

        Route::apiResource('produtos', AdminProdutoController::class);
        Route::apiResource('fornecedores', FornecedorController::class);
        Route::apiResource('clientes', ClienteController::class)->only(['index', 'show', 'store']);
        Route::apiResource('pedidos', PedidoController::class);

        // Configurações auxiliares (Entregas, Categorias/Tipos, Gêneros, Status)
        Route::get('configuracoes', [ConfiguracaoController::class, 'index']);
        Route::post('configuracoes/{grupo}', [ConfiguracaoController::class, 'store']);
        Route::put('configuracoes/{grupo}/{id}', [ConfiguracaoController::class, 'update']);
        Route::delete('configuracoes/{grupo}/{id}', [ConfiguracaoController::class, 'destroy']);
    });

});