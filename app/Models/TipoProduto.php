<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProduto extends Model
{
    use HasFactory;

    protected $table = 'tipos_produto';
    protected $primaryKey = 'id_tipo'; // Corrigido para 'primaryKey' com 'K' maiúsculo
    protected $fillable = ['nome'];

    public function produtos()
    {
        return $this->hasMany(Produto::class, 'id_tipo', 'id_tipo');
    }
    
}
