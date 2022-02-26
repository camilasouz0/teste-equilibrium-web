<?php

namespace App\Http\Controllers;

use App\Http\Requests\FuncionarioRequest;
use App\Models\Funcionario;
use App\Models\Setor;
use App\Models\Telefone;
use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function index()
    {
        $setor = Setor::pluck('nome', 'id')->toArray();
        return view('site.pages.funcionarios', compact('setor'));
    }

    public function store(FuncionarioRequest $request)
    {
        $input = $request->all();

        try {
            $funcionario = Funcionario::create([
                'nome' => $input['nome'],
                'setor_id' => $input['setor_id'],
                'carteira_trabalho' => $input['carteira_trabalho'],
                'cpf' => $input['cpf'],
            ]);
    
            foreach($input['telefone'] as $value) {
                Telefone::create([
                    'funcionario_id' => $funcionario->id,
                    'telefone' => $value
                ]);
            }
            return redirect()->route('site.pages.funcionarios')->with('success', 'Funcionário cadastrado com sucesso!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('errors', 'Erro ao cadastrar funcionario!');
        }
    }
}
