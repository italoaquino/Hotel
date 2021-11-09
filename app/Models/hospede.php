<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hospede extends Model
{
    use HasFactory;

    protected $fillable = [
        'cpf',
        'dataNasc',
        'user_id',
    ];

    public function User(){
        return $this->belongsTo("App\Models\User");
    }
  
}
