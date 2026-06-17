<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    // 1. Define o nome da tabela. O Laravel até deduziria "estados" a partir de "Estado", mas é uma boa prática declarar.
    protected $table = 'estados';

    // 2. Chave Primária Customizada: Como não usamos o padrão 'id', precisamos indicar o nome correto.
    protected $primaryKey = 'id_estado';

    // 3. Fillable: Diz ao Laravel quais colunas podem ser preenchidas diretamente via código (ex: na criação de um registro).
    // Ignoramos o 'id_estado' e os 'timestamps' porque o próprio banco/Laravel gerenciam eles.
    protected $fillable = ['uf', 'nome'];
}