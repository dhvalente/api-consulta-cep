<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'enderecos';
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'cep',
        'rua',
        'bairro',
        'cidade',
        'estado',
    ];
}
