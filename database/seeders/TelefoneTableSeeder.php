<?php

namespace Database\Seeders;

use App\Models\Telefone;
use Illuminate\Database\Seeder;

class TelefoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $telefones_seeder = [
            [
                'telefone' => '(24) 33555-5545',
                'funcionario_id' => 1,
            ],
            [
                'telefone' => '(64) 1555-5545',
                'funcionario_id' => 1,
            ],
            [
                'telefone' => '(94) 77755-5545',
                'funcionario_id' => 2,
            ],
            [
                'telefone' => '(64) 775555-5545',
                'funcionario_id' => 3,
            ],
        ];

        foreach ($telefones_seeder as $telefone) {
            Telefone::create($telefone);
        }
    }
}
