<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedidos';
    protected $primaryKey = 'id_pedido';
    
    protected $fillable = [
        'id_cliente', 'id_status_pedido', 'id_tipo_entrega', 'data_pedido', 'valor_total'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id_usuario');
    }
    public function statusPedido()
    {
        return $this->belongsTo(StatusPedido::class, 'id_status_pedido', 'id_status_pedido');
    }
    public function tipoEntrega()
    {
        return $this->belongsTo(TipoEntrega::class, 'id_tipo_entrega', 'id_tipo_entrega');
    }
    public function itens()
    {
        return $this->hasMany(ItemPedido::class, 'id_pedido', 'id_pedido');
    }
}