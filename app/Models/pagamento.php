<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pagamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'pagamento',
        'nf',
        'check_out_id',
    ];
    
    public function Check_out(){
        return $this->belongsTo('App\Models\Check_out');
    }

}
