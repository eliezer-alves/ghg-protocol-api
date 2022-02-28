<?php

namespace Modules\FatoresEmissao\Tests\Unit;

use Tests\TestCase;
use Modules\FatoresEmissao\Models\CombustivelFonteMovel;

class CombustivelFonteMovelTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_valida_existe_dados_tabela_combustivel_fonte_movel()
    {
        $dados = CombustivelFonteMovel::all()->toArray();
        $this->assertNotEquals(0, empty($dados));
    }
}
