<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quarto extends Model
{
    use HasFactory;

    protected $fillable = [
    'tipo',
    'descricao',
    'reserva_hospede_id',
    ];

public function reserva_hospede(){
    return $this->belongsTo('App\Models\Reserva_hospede'); 
}

}
