@extends('layouts.app')
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <form action="" method="POST">
                @csrf
              
                <div class="row g-3 align-items-center">
                  <div class="input-group">
                    <label class="text-lg leading-7 font-semibold text-gray-900 dark:text-white" for="nome">Nome</label>
                    <input class="form-control mt-1 form-control-lg w-100 mt-1" type="text" required placeholder="Nome"
                      aria-label="Nome" name="nome">
                    <div class="invalid-feedback fs-5">
                      Por favor prencha com um nome válido.
                    </div>
                  </div>
                  <div class="input-group">
                    <label class="text-lg leading-7 font-semibold text-gray-900 dark:text-white" for="cpf">CPF</label>
                    <input class="form-control mt-1 form-control-lg w-100 money" type="text" required placeholder="CPF"
                      aria-label="CPF" name="cpf">
                    <div class="invalid-feedback fs-5">
                      Por favor prencha um cpf válido.
                    </div>
                  </div>
              
                  <div class="input-group">
                    <label class="text-lg leading-7 font-semibold text-gray-900 dark:text-white" for="carteira">Carteira de trabalho</label>
                    <input class="form-control mt-1 form-control-lg w-100" type="text" required placeholder="Carteira de trabalho"
                      aria-label="Carteira de trabalho" name="carteira_trabalho">
                    <div class="invalid-feedback fs-5">
                      Por favor preencha um número válido.
                    </div>
                  </div>
              
                  <div class="input-group">
                    <label class="text-lg leading-7 font-semibold text-gray-900 dark:text-white" for="setor">Setor</label>
                    {!! Form::select('setor_id', ['' => 'Selecione o setor'] + $setor, null,['class' => 'form-select form-select-lg w-100 mt-1']) !!}
        
                    <div class="invalid-feedback fs-5">
                      Por favor escolha um setor.
                    </div>
                  </div>
              
                  <div class="input-group">
                    <label class="text-lg leading-7 font-semibold text-gray-900 dark:text-white" for="telefone">Telefone</label>
                    <input class="form-control mt-1 form-control-lg w-100 money" type="text" required placeholder="Telefone"
                      aria-label="Telefone" name="telefone[]" id="telefone">
                    <div class="invalid-feedback fs-5">
                      Por favor prencha com um telefone válido.
                    </div>
                  </div>
                  <button type="submit" href="#" class="btn-theme w-50">
                    Salvar
                  </button>
                </div>
              </form>
        </div>
    </div>
</div>
@endsection