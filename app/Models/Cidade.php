<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory; // Adicionado para permitir o uso de Model Factories

    protected $table = 'cidades';
    protected $primaryKey = 'id_cidade';

    protected $fillable = ['id_estado', 'nome'];

    // Relacionamento: Uma cidade pertence a um estado
    // O Laravel consegue inferir 'id_estado' e 'id_estado', mas especificá-los não faz mal.
    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado', 'id_estado');
    }
}
