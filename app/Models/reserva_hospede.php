<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reserva_hospede extends Model
{
    use HasFactory;

    protected $fillable = [
        'hospede_id',
        'funcionario',
        'valor',
        'tempo_reserva',
    ];

    public function Funcionario(){
        return $this->belongsTo("App\Models\Funcionario");
    }


    public function Quarto(){
        return $this->hasMany("App\Models\Quarto");
    }

    public function Hospede(){
        return $this->belongsTo("App\Models\Hospede");
    }

}
