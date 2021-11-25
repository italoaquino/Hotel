<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class funcionario extends Model
{
    use HasFactory;

    protected $fillable = [
        'identificacao',
        'user_id'
        
    ];

    public function Reserva_hospede(){
        return $this->hasMany("App\Models\Reserva_hospede");
    }
}
