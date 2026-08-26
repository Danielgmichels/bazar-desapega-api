<?php

namespace App\Http\Controllers;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        // Verifica se existe um usuário logado e se o campo is_admin dele é verdadeiro
        if (!$request->user() || !$request->user()->is_admin) {
            // Se não for admin, barra com Erro 403 (Forbidden / Proibido)
            return response()->json(['message' => 'Acesso negado. Área restrita para administradores.'], 403);
        }

        // Se for admin, deixa a requisição seguir em frente para o Controller
        return $next($request);
    }
}