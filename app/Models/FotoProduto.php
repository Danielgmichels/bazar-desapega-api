<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoProduto extends Model
{
    use HasFactory;

    protected $table = 'foto_produtos';
    protected $primaryKey = 'id_foto';
    
    protected $fillable = ['id_produto', 'caminho_arquivo'];

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'id_produto', 'id_produto');
    }
}