<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class check_out extends Model
{
    use HasFactory;

    protected $fillable = [
        'saida',
    ];

    public function Pagamento(){
        return $this->belongsTo("Appp\Models\Pagamento");
    }
}
