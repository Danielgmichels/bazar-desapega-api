<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pedido;
use App\Models\Produto;

class ItemPedido extends Model
{
    use HasFactory;

    protected $table = 'item_pedidos';
    protected $primaryKey = 'id_item_pedido';
    
    protected $fillable = ['id_pedido', 'id_produto'];

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'id_pedido', 'id_pedido');
    }
    public function produto()
    {
        return $this->belongsTo(Produto::class, 'id_produto', 'id_produto');
    }
}