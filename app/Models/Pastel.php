<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pastel extends Model
{
    use HasFactory;

    protected $table = 'pasteles';  // La tabla sigue en plural
    protected $fillable = ['nombre', 'descripcion', 'sabor', 'decoracion', 'ingredientes', 'precio', 'calorias', 'ingredientes'];

    public $timestamps = false;  // Si no usas timestamps en tu tabla
}
