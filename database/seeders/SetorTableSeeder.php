<?php

namespace Database\Seeders;

use App\Models\Setor;
use Illuminate\Database\Seeder;

class SetorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setores_seeder = [
            [
                'nome' => 'Setor 1',
            ],
            [
                'nome' => 'Setor 2',
            ],
            [
                'nome' => 'Setor 3',
            ],
        ];

        foreach ($setores_seeder as $setor) {
            Setor::create($setor);
        }
    }
}
