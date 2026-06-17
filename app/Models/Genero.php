<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    protected $table = 'generos';
    protected $primaryKey = 'id_genero';

    protected $fillable = ['nome'];

    // Relacionamento: Um gênero possui muitos produtos
    public function produtos()
    {
        return $this->hasMany(Produto::class, 'id_genero', 'id_genero');
    }
}
