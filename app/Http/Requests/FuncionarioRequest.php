<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuncionarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cpf' => 'required|unique:funcionarios',
            'nome' => 'required',
            'carteira_trabalho' => 'required',
            'setor_id' => 'required',
            'telefone' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'cpf.required' => 'O campo CPF é obrigatório!',
            'nome.required' => 'O campo Nome é obrigatório!',
            'carteira_trabalho.required' => 'O campo Carteira de Trabalho é obrigatório!',
            'setor_id.required' => 'O campo Setor é obrigatório!',
            'telefone.required' => 'O campo Telefone é obrigatório!',
            'cpf.unique' => 'O CPF informado já está cadastrado!',
        ];
    }
}
