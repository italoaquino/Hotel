<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class funcionario extends Model
{
    use HasFactory;

    protected $fillable = [
        'identificacao',
        'check_in_id'
        'pagamento_id',
        
    ];

    public function Check_in(){
        return $this->belongsTo("App\Models\Check_in");
    }


    public function Pagamento(){
        return $this->belongsTo("App\Models\Pagamento");
    }

    public function Reserva_hospede(){
        return $this->hasMany("App\Models\Reserva_hospede");
    }
}
