<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contato extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'email',
        'tipo',
        'hospede_id',
    ];

    public function Hospede(){
        return $this->belongsTo('App\Models\Hospde');
    }

}
