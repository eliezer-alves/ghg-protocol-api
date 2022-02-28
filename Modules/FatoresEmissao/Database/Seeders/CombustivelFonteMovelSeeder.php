<?php

namespace Modules\FatoresEmissao\Database\Seeders;

use Modules\FatoresEmissao\Models\CombustivelFonteMovel;
use Illuminate\Database\Seeder;
use Illuminate\Filesystem\Filesystem;
use Modules\FatoresEmissao\Models\TipoCombustivel;

class CombustivelFonteMovelSeeder extends Seeder
{
    private Filesystem $file;
    public function __construct(Filesystem $file)
    {
        $this->file = $file;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $combustivelFossilId = TipoCombustivel::where('descricao', 'COMBUSTIVEL FOSSIL FONTES MOVEIS')->first()->id ?? null;
        $bioCombustivelId = TipoCombustivel::where('descricao', 'BIOCOMBUSTIVEL FONTES MOVEIS')->first()->id ?? null;
        
        foreach($this->getDataFromFile('combustiveis-fosseis-fontes-moveis') as $line) {
            $data = $this->formatAttributes($line);
            $data['tipo_combustivel_id'] = $combustivelFossilId;
            CombustivelFonteMovel::create($data);
        }

        foreach($this->getDataFromFile('biocombustivel-fontes-moveis') as $line) {
            $data = $this->formatAttributes($line);
            $data['tipo_combustivel_id'] = $bioCombustivelId;
            CombustivelFonteMovel::create($data);
        }
    }

    private function getDataFromFile(string $file): array
    {
        return explode("\r\n", $this->file->get(__DIR__.'/data-files/'.$file)) ?? [];
    }

    private function formatAttributes(string $line): array
    {
        $data = explode(',', $line);
        return [
            'combustivel' => $data[0] ?? '',
            'unidade' => $data[1] ?? '',
            'poder_calorifico_inferior' => $data[2] ?? '',
            'densidade' => $data[3] ?? '',
            'referencia' => $data[4] ?? '',
        ];
    }
}
