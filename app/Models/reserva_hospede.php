<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reserva_hospede extends Model
{
    use HasFactory;

    protected $fillable = [
        'hospede_id',
        'entrada',
        'saida',
        'valor',
        'pessoas'
    ];

    public function Funcionario(){
        return $this->belongsTo("App\Models\Funcionario");
    }


    public function Hospede(){
        return $this->belongsTo("App\Models\Hospede");
    }

}
