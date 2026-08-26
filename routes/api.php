<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\AdminProdutoController;
use App\Http\Controllers\CheckAdmin;

// Rotas Públicas (Não exigem login)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/produtos/{id}', [ProdutoController::class, 'show']);

// Rotas Protegidas (Exigem envio de Token de Acesso / Usuário Logado)
Route::middleware('auth:sanctum')->group(function () {
    
    Route::post('/pedidos', [PedidoController::class, 'store']);

    // Grupo exclusivo para Administradores
    Route::middleware([CheckAdmin::class])->prefix('admin')->group(function () {
        Route::post('/produtos', [AdminProdutoController::class, 'store']);
    });
    
});
