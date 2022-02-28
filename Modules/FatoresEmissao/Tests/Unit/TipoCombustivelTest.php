<?php

namespace Modules\FatoresEmissao\Tests\Unit;

use Tests\TestCase;
use Modules\FatoresEmissao\Models\TipoCombustivel;

class TipoCombustivelTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_valida_existe_dados_tabela_tipo_combustivel()
    {
        $dados = TipoCombustivel::all()->toArray();
        $this->assertNotEquals(0, empty($dados));
    }
}
