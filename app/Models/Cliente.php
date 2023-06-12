<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_completo',
        'data_nascimento',
        'tipo_pessoa',
        'cpf_ou_cnpj',
        'e-mail',
        'endereco',
        'localizacao'
    ];
}
