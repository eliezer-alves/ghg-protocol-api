<?php

namespace Modules\FatoresEmissao\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CombustivelFonteMovel extends Model
{
    use HasFactory;

    protected $table = 'combustivel_fonte_movel';

    protected $fillable = [
        'combustivel',
        'unidade',
        'poder_calorifico_inferior',
        'densidade',
        'referencia',
        'tipo_combustivel_id',
    ];

    public function tipoCombustivel()
    {
        return $this->belongsTo(TipoCombustivel::class, 'tipo_combustivel_id');
    }
}
