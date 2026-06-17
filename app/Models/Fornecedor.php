<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedores';
    protected $primaryKey = 'id_usuario';
    public $incrementing = false;

    protected $fillable = ['id_usuario'];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario', 'id_usuario');
    }

    public function produtos()
    {
        // Um fornecedor "tem muitos" produtos fornecidos ao bazar
        return $this->hasMany(Produto::class, 'id_fornecedor', 'id_usuario');
    }
}