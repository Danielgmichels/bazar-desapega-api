<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // 1. Aponta para a tabela correta no banco
    protected $table = 'usuarios';
    
    // 2. Define a chave primária customizada
    protected $primaryKey = 'id_usuario';

    // 3. Define quais campos podem ser preenchidos em massa
    protected $fillable = [
        'id_cidade', 'nome', 'data_nascimento', 'telefone', 'email', 'endereco', 'is_admin'
    ];

    protected function casts(): array
    {
        return [
            'is_admin' => 'boolean',
        ];
    }

    // --- RELACIONAMENTOS ---

    public function cidade()
    {
        // Um usuário "pertence a" uma cidade
        return $this->belongsTo(Cidade::class, 'id_cidade', 'id_cidade');
    }

    public function cliente()
    {
        // Um usuário "tem um" perfil de cliente (Herança 1:1)
        return $this->hasOne(Cliente::class, 'id_usuario', 'id_usuario');
    }

    public function fornecedor()
    {
        // Um usuário "tem um" perfil de fornecedor (Herança 1:1)
        return $this->hasOne(Fornecedor::class, 'id_usuario', 'id_usuario');
    }
}
