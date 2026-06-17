<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEntrega extends Model
{
    use HasFactory;

    protected $table = 'tipos_entrega';
    protected $primaryKey = 'id_tipo_entrega';
    
    protected $fillable = ['nome'];

    // Relacionamento: Um tipo de entrega pode estar em vários pedidos
    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'id_tipo_entrega', 'id_tipo_entrega');
    }
}