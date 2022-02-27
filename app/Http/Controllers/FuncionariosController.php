<?php

namespace App\Http\Controllers;

use App\Http\Requests\FuncionarioRequest;
use App\Models\Funcionario;
use App\Models\Setor;
use App\Models\Telefone;
use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function index($id = null)
    {
        $setor = Setor::pluck('nome', 'id')->toArray();
        if(!empty($id)) {
            $funcionario = Funcionario::find($id);
            return view('site.pages.funcionarios', compact('funcionario', 'setor'));
        }
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
            return redirect()->route('site.index')->with('success', 'Funcionário cadastrado com sucesso!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('errors', 'Erro ao cadastrar funcionario!')
            ->withErrors('Erro ao cadastrar funcionario!');
        }
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        
        try {
            $funcionario = Funcionario::find($id);
            $funcionario->update([
                'nome' => $input['nome'],
                'setor_id' => $input['setor_id'],
                'carteira_trabalho' => $input['carteira_trabalho'],
                'cpf' => $input['cpf'],
            ]);
    
            //Atualiza todos os telefones
            Telefone::where('funcionario_id', $id)->delete();
            foreach($input['telefone'] as $value) {
                Telefone::create([
                    'funcionario_id' => $funcionario->id,
                    'telefone' => $value
                ]);
            }
            return redirect()->route('site.index')->with('success', 'Funcionário atualizado com sucesso!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('errors', 'Erro ao atualizar funcionario!')
            ->withErrors('Erro ao atualizar funcionario!');
        }
    }

    public function destroy($id)
    {
        try {
            $funcionario = Funcionario::find($id);
            $funcionario->delete();
            return redirect()->route('site.index')->with('success', 'Funcionário excluído com sucesso!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('errors', 'Erro ao excluir funcionario!');
        }
    }
}
