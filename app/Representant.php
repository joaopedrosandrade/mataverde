<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representant extends Model
{
    protected $fillable = [
        'nome', 'cpf', 'telefone', 'email', 'cidade', 'estado', 'experiencia', 'disponibilidade', 'motivacao', 'is_read'
    ];

    protected $casts = [
        'is_read' => 'boolean',
    ];
}
