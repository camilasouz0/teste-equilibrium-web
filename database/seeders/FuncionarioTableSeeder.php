<?php

namespace Database\Seeders;

use App\Models\Funcionario;
use Illuminate\Database\Seeder;

class FuncionarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $funcionarios_seeder = [
            [
                'nome' => 'Funcionario 1',
                'setor_id' => 1,
                'carteira_trabalho' => '123456789',
                'cpf' => '767.676.767-77',
            ],
            [
                'nome' => 'Funcionario 2',
                'setor_id' => 2,
                'carteira_trabalho' => '7454556789',
                'cpf' => '166.006.767-97',
            ],
            [
                'nome' => 'Funcionario 3',
                'setor_id' => 3,
                'carteira_trabalho' => '3354556009',
                'cpf' => '006.006.727-44',
            ],
        ];

        foreach ($funcionarios_seeder as $funcionario) {
            Funcionario::create($funcionario);
        }
    }
}
