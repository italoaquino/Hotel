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
        'numero',
        'tipo',
        'estado',
        'cidade',
        'bairro',
        'endereco',
        'complemento',
        'cep',
        'user_id',
    ];

 
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function Reserva_hospede(){
        return $this->hasMany("App\Models\Reserva_hospede");
    }
  
}
