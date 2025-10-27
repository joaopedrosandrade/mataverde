<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $fillable = [
        'nome', 'empresa', 'telefone', 'email', 'tipo_produto', 'quantidade', 'mensagem', 'is_read'
    ];

    protected $casts = [
        'is_read' => 'boolean',
    ];
}
