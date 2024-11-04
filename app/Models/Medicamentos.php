<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute; // Asegúrate de importar esta clase

class Medicamentos extends Model
{
    use HasFactory;

    // Definir el nombre de la tabla
    protected $table = 'medicamentos';

    // 
    protected function nombre(): Attribute // 
    {
        return Attribute::make(
            set: function (string $value) {
                return strtolower($value);
            },
            get: function (string $value) {
                return strtoupper($value);
            }
        );
    }
}
