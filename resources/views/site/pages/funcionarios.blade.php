@extends('layouts.app')
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            @if (!empty($funcionario->id))
            {!! Form::model($funcionario, ['route' => ['site.pages.funcionarios.update', $funcionario->id], 'method' => 'POST']) !!}
            @else
            {!! Form::model(null, ['route' => 'site.pages.funcionarios.post', 'method' => 'POST']) !!}
            @endif
                @csrf
              
                <div class="row g-3 align-items-center">
                    <div class="input-group">
                        <label class="text-lg leading-7 font-semibold text-gray-900 dark:text-white" for="nome">Nome</label>
                        {!! Form::text('nome', null, ['class' => 'form-control mt-1 form-control-lg w-100 mt-1'. ($errors->has('nome') ? 'is-invalid' : ''), 'placeholder' => 'Nome']) !!}
                        <div class="invalid-feedback fs-4">
                            @error('nome')
                            {{$errors->first('nome')}}
                            @enderror
                        </div>
                    </div>
                    <div class="input-group">
                        <label class="text-lg leading-7 font-semibold text-gray-900 dark:text-white" for="cpf">CPF</label>
                        {!! Form::text('cpf', null, ['class' => 'form-control mt-1 form-control-lg w-100 mt-1'. ($errors->has('cpf') ? 'is-invalid' : ''), 'placeholder' => 'CPF']) !!}
                        <div class="invalid-feedback fs-4">
                            @error('cpf')
                            {{$errors->first('cpf')}}
                            @enderror
                        </div>
                    </div>
              
                    <div class="input-group">
                        <label class="text-lg leading-7 font-semibold text-gray-900 dark:text-white" for="carteira">Carteira de trabalho</label>
                        {!! Form::text('carteira_trabalho', null, ['class' => 'form-control mt-1 form-control-lg w-100 mt-1'. ($errors->has('carteira_trabalho') ? 'is-invalid' : ''), 'placeholder' => 'Carteira de trabalho']) !!}
                        <div class="invalid-feedback fs-4">
                            @error('carteira_trabalho')
                            {{$errors->first('carteira_trabalho')}}
                            @enderror
                        </div>
                    </div>
              
                    <div class="input-group">
                        <label class="text-lg leading-7 font-semibold text-gray-900 dark:text-white" for="setor">Setor</label>
                        {!! Form::select('setor_id', ['' => 'Selecione o setor'] + $setor, null,['class' => 'form-select form-select-lg w-100 mt-1']) !!}
            
                        <div class="invalid-feedback fs-4">
                            @error('setor_id')
                            {{$errors->first('setor_id')}}
                            @enderror
                        </div>
                    </div>
                @if(isset($funcionario->telefones))
                    @foreach ($funcionario->telefones as $telefone)
                    <div class="input-group divclone">
                        <label class="text-lg leading-7 font-semibold text-gray-900 dark:text-white" for="telefone">Telefone</label>

                            
                        {!! Form::text('telefone[]', $telefone, ['class' => 'form-control mt-1 form-control-lg w-100 mt-1 telefone'. ($errors->has('telefone') ? 'is-invalid' : ''), 'placeholder' => 'Telefone']) !!}
                        <div class="invalid-feedback fs-4">
                            @error('telefone')
                            {{$errors->first('telefone')}}
                            @enderror
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="input-group divclone">
                        <label class="text-lg leading-7 font-semibold text-gray-900 dark:text-white" for="telefone">Telefone</label>   
                        {!! Form::text('telefone[]', null, ['class' => 'form-control mt-1 form-control-lg w-100 mt-1 telefone'. ($errors->has('telefone') ? 'is-invalid' : ''), 'placeholder' => 'Telefone']) !!}
                        <div class="invalid-feedback fs-4">
                            @error('telefone')
                            {{$errors->first('telefone')}}
                            @enderror
                        </div>
                    </div>
                @endif
                    <button type="button" class="btn btn-primary btn-md add">+</button>
                    <button type="button" class="btn btn-danger btn-md remove">-</button>
                  <button type="submit" href="#" class="btn-theme w-50">
                    Salvar
                  </button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection