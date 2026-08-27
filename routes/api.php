<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\AdminProdutoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
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
    Route::get('/meus-pedidos', [PedidoController::class, 'meusPedidos']); // Se ainda não tiver esse método no PedidoController, precisaremos criar depois
    
    // Logout
    Route::post('/logout', [AuthController::class, 'logout']);

    // ==========================================
    // GRUPO EXCLUSIVO PARA ADMINISTRADORES
    // ==========================================
    Route::middleware([CheckAdmin::class])->prefix('admin')->group(function () {
        
        // Substitui aquele seu post('/produtos') por um resource completo (que inclui get, post, put, delete)
        Route::apiResource('produtos', AdminProdutoController::class);
        
        // Novas rotas que acabamos de criar
        Route::apiResource('fornecedores', FornecedorController::class);
        Route::apiResource('clientes', ClienteController::class)->only(['index', 'show']);
        
        // Gerenciamento de pedidos pelo admin (ver todos, atualizar status)
        Route::apiResource('pedidos', PedidoController::class)->except(['store', 'destroy']);
    });
    
});