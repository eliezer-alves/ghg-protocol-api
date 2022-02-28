<?php

namespace Modules\FatoresEmissao\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class FatoresEmissaoDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(TipoCombustivelSeeder::class);
        // $this->call(CombustivelFonteMovelSeeder::class);
    }
}
