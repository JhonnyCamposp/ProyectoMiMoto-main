<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = "cliente";
    protected $primaryKey = 'IdCliente';
    protected $fillable = [
        "Nombres",
        "Apellidos",
        "DNI",
        "correo",
        "telefono"
    ];
}
