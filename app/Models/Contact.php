<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory; // Habilita o uso de fábricas para o modelo Contact

    // Atributo $fillable é um array que define quais campos podem ser preenchidos em massa
    protected $fillable = [
        'name',    // O campo 'name' pode ser preenchido
        'email',   // O campo 'email' pode ser preenchido
        'message', // O campo 'message' pode ser preenchido
    ];
}
