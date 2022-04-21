<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nefropediatria extends Model
{
    use HasFactory;

    protected $fillable =[
        'beneficiario_id', 
        'fecha', 
        'peso',
        'talla',
        'tension',
        'temperatura',
        'fCardiaca',
        'fRespiratoria',
        'analisis',
        'diagnostico',
        'tratamiento',
        'medico',
    ];

    public function beneficiario()
    {
        return $this->belongsTo(Beneficiario::class);
    }
}