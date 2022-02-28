<?php

namespace Modules\FatoresEmissao\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCombustivel extends Model
{
    use HasFactory;

    protected $table = 'tipo_combustivel';

    protected $fillable = [
        'descricao',
    ];
}
