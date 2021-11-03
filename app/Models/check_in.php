<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class check_in extends Model
{
    use HasFactory;

    protected $fillable = [
        'quarto_hosp',
        'confirmacao',
        'entrada',
    ];

    public function Funcionario(){
        return $this->belongsTo("App\Models\Funcionario");
    }
}
