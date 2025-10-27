<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'nome', 'telefone', 'email', 'cidade', 'assunto', 'mensagem', 'is_read'
    ];

    protected $casts = [
        'is_read' => 'boolean',
    ];
}
