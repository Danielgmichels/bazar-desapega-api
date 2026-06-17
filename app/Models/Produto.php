<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    protected $primaryKey = 'id_produto';

    protected $fillable = [
        'id_fornecedor', 'id_tipo', 'id_genero', 'id_status_disp', 'foto_principal',
        'data_entrada', 'marca', 'tamanho', 'cor', 'preco_custo', 'preco_venda'
    ];

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class, 'id_fornecedor', 'id_usuario');
    }

    public function tipo()
    {
        return $this->belongsTo(TipoProduto::class, 'id_tipo', 'id_tipo');
    }

    public function genero()
    {
        return $this->belongsTo(Genero::class, 'id_genero', 'id_genero');
    }

    public function statusDisponibilidade()
    {
        return $this->belongsTo(StatusDisponibilidade::class, 'id_status_disp', 'id_status_disp');
    }

    public function fotos()
    {
        return $this->hasMany(FotoProduto::class, 'id_produto', 'id_produto');
    }

    // Escopo Local: Facilita filtrar produtos disponíveis, ex: Produto::disponivel()->get();
    public function scopeDisponivel($query)
    {
        return $query->where('id_status_disp', 1); // 1 = Disponível, conforme o seu SDD
    }
}