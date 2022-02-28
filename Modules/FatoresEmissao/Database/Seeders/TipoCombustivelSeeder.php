<?php

namespace Modules\FatoresEmissao\Database\Seeders;

use Modules\FatoresEmissao\Models\TipoCombustivel;
use Illuminate\Database\Seeder;

class TipoCombustivelSeeder extends Seeder
{
    private $tiposCombustivel = [
        'COMBUSTIVEL FOSSIL FONTES MOVEIS',
        'BIOCOMBUSTIVEL FONTES MOVEIS',
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->tiposCombustivel as $tipoCombustivel) {
            $data = [
                'descricao' => $tipoCombustivel,
            ];
            TipoCombustivel::create($data);
        }
    }
}
