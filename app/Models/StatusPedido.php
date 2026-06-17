<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPedido extends Model
{
    use HasFactory;

    protected $table = 'status_pedidos';
    protected $primaryKey = 'id_status_pedido';
    
    protected $fillable = ['nome'];

    // Relacionamento: Um status de pedido pode estar associado a vários pedidos
    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'id_status_pedido', 'id_status_pedido');
    }
}