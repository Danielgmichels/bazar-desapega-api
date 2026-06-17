<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusDisponibilidade extends Model
{
    use HasFactory;

    protected $table = 'status_disponibilidades';
    protected $primaryKey = 'id_status_disp';
    
    protected $fillable = ['nome'];

    // Relacionamento: Um status de disponibilidade pode estar em vários produtos
    public function produtos()
    {
        return $this->hasMany(Produto::class, 'id_status_disp', 'id_status_disp');
    }
}