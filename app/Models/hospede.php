<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hospede extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'sobrenome',
        'sexo',
        'cpf',
        'data_nasc',
        'endereco_id',
    ];

    public function Endereco(){
        return $this->belongsTo('App\Models\Endereco');
    }

    public function Contato(){
        return $this->hasMany('App\Models\Contato');
    }
    public function Reserva_hospede(){
        return $this->hasMany('App\Models\Reserva_hospede');
    }

}
