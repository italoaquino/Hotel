<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hospede extends Model
{
    use HasFactory;

    protected $fillable = [
        'cpf',
        'rg',
        'cidade',
        'estado',
        'endereco',
        'complemento',
        'tipo_num',
        'numero_tef',
        'user_id',
    ];
    
    public function User(){
        return $this->belongsTo('App\Models\User');
    }

  
}
