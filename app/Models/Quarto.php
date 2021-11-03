<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quarto extends Model
{
    use HasFactory;
    'valor',
    'tipo',
    'descricao',
    'reserva_hospede_id',
];

public function reserva_hospede_id(){
    return $this->belongsTo('reserva_hospede_id'); 
}
}
