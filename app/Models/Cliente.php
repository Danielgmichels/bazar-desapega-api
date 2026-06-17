<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id_usuario';
    
    // ATENÇÃO AQUI: Desliga o auto-incremento pois a chave primária também é chave estrangeira
    public $incrementing = false; 

    protected $fillable = ['id_usuario', 'senha'];
    protected $hidden = ['senha']; // Oculta a senha ao retornar os dados em JSON na API

    public function usuario()
    {
        // O perfil de cliente "pertence a" um usuário base
        return $this->belongsTo(User::class, 'id_usuario', 'id_usuario');
    }

    public function pedidos()
    {
        // Um cliente "tem muitos" pedidos
        return $this->hasMany(Pedido::class, 'id_cliente', 'id_usuario');
    }
}